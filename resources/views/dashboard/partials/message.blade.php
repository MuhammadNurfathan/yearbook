<section id="message" class="py-20 bg-white bg-opacity-70 rounded-3xl shadow-lg backdrop-blur-sm">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-indigo-700">Pesan dan Kesan</h2>
        <p class="text-gray-600 mt-2">Tinggalkan pesan terbaikmu untuk teman, dosen, atau kampus tercinta.</p>
    </div>

    <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-xl p-8">
        <form action="#" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="mahasiswa_id" class="block text-sm font-medium text-gray-700 mb-1">Nama Mahasiswa</label>
                <select name="mahasiswa_id" id="mahasiswa_id" class="w-full rounded-lg border-gray-300 focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="">-- Pilih Mahasiswa --</option>
                    @foreach ($mahasiswa as $mhs)
                        <option value="{{ $mhs->id }}">{{ $mhs->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" class="w-full rounded-lg border-gray-300 focus:ring-indigo-500 focus:border-indigo-500"></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 shadow-md">
                    Kirim Pesan
                </button>
            </div>
        </form>
    </div>
</section>
