<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\MahasiswaModels;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function show($id)
    {
        $prodi = MahasiswaModels::with('Prodi')->findOrFail($id);
        return response()->json($prodi);
    }

  public function store(Request $request)
    {
        // Handle preflight OPTIONS request
        if ($request->isMethod('OPTIONS')) {
            return response()->json([], 200)
                ->header('Access-Control-Allow-Origin', '*')
                ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE')
                ->header('Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization, X-Requested-With');
        }

        try {
            // Parse array fields dari JSON string
            $hobi = $request->has('hobi') && $request->hobi 
                ? json_decode($request->hobi, true) 
                : null;
            $prestasi = $request->has('prestasi') && $request->prestasi 
                ? json_decode($request->prestasi, true) 
                : null;
            $organisasi = $request->has('organisasi') && $request->organisasi 
                ? json_decode($request->organisasi, true) 
                : null;

            // Validasi data
            $validated = $request->validate([
                'program_studi_id' => 'required|in:1,2,3',
                'nim' => 'required|string|max:20',
                'nama_lengkap' => 'required|string|max:255',
                'nama_panggilan' => 'nullable|string|max:100',
                'jenis_kelamin' => 'nullable|in:L,P',
                'tanggal_lahir' => 'nullable|date',
                'tempat_lahir' => 'nullable|string|max:100',
                'alamat' => 'nullable|string',
                'no_telepon' => 'nullable|string|max:20',
                'email' => 'nullable|email|max:255',
                'motto' => 'nullable|string|max:255',
                'cita_cita' => 'nullable|string|max:255',
                'kesan_pesan' => 'nullable|string',
                'quote_favorit' => 'nullable|string|max:255',
                'instagram' => 'nullable|string|max:100',
                'twitter' => 'nullable|string|max:100',
                'linkedin' => 'nullable|string|max:100',
                'foto_profil' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Mapping Program Studi ID ke folder
            $prodiMap = [
                '1' => 'MI',  // Manajemen Informatika
                '2' => 'AB',  // Administrasi Bisnis
                '3' => 'KA',  // Akuntansi
            ];

            // Get folder name berdasarkan prodi
            $prodiFolder = $prodiMap[$validated['program_studi_id']];
            
            // Handle file upload dengan struktur folder custom
            $fotoPath = null;
            if ($request->hasFile('foto_profil')) {
                $file = $request->file('foto_profil');
                $extension = $file->getClientOriginalExtension();
                $nim = $validated['nim'];
                
                // Path: storage/images/mahasiswa/MI/123456.jpg
                $customPath = "storage/images/mahasiswa/{$prodiFolder}";
                $fileName = "{$nim}.{$extension}";
                
                // Simpan file dengan nama custom
                $file->storeAs($customPath, $fileName, 'public');
                
                // Path untuk disimpan di database
                $fotoPath = "{$customPath}/{$fileName}";
            }

            // Prepare data untuk disimpan ke database
            $mahasiswaData = [
                'program_studi_id' => $validated['program_studi_id'],
                'nim' => $validated['nim'],
                'nama_lengkap' => $validated['nama_lengkap'],
                'nama_panggilan' => $validated['nama_panggilan'] ?? null,
                'jenis_kelamin' => $validated['jenis_kelamin'] ?? null,
                'tanggal_lahir' => $validated['tanggal_lahir'] ?? null,
                'tempat_lahir' => $validated['tempat_lahir'] ?? null,
                'alamat' => $validated['alamat'] ?? null,
                'no_telepon' => $validated['no_telepon'] ?? null,
                'email' => $validated['email'] ?? null,
                'hobi' => $hobi ? json_encode($hobi) : null,
                'prestasi' => $prestasi ? json_encode($prestasi) : null,
                'organisasi' => $organisasi ? json_encode($organisasi) : null,
                'motto' => $validated['motto'] ?? null,
                'cita_cita' => $validated['cita_cita'] ?? null,
                'kesan_pesan' => $validated['kesan_pesan'] ?? null,
                'quote_favorit' => $validated['quote_favorit'] ?? null,
                'instagram' => $validated['instagram'] ?? null,
                'twitter' => $validated['twitter'] ?? null,
                'linkedin' => $validated['linkedin'] ?? null,
                'foto_profil' => $fotoPath,
            ];

            // Simpan ke database
            $mahasiswa = MahasiswaModels::create($mahasiswaData);

            return response()->json([
                'success' => true,
                'message' => 'Data mahasiswa berhasil disimpan!',
                'data' => $mahasiswa
            ], 201)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization, X-Requested-With');

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $e->errors()
            ], 422)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization, X-Requested-With');

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization, X-Requested-With');
        }
    }
}