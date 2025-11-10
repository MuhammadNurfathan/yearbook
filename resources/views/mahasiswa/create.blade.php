<x-layouts.app>
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }

        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }
            100% {
                background-position: 1000px 0;
            }
        }

        .form-container {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px 0;
            animation: fadeInUp 0.6s ease-out;
        }

        .form-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 40px;
            animation: fadeInUp 0.8s ease-out;
            position: relative;
            overflow: hidden;
        }

        .form-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(102, 126, 234, 0.1), transparent);
            animation: shimmer 3s infinite;
        }

        .form-header {
            text-align: center;
            margin-bottom: 40px;
            animation: slideInLeft 0.8s ease-out;
        }

        .form-header h2 {
            color: #667eea;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .form-header p {
            color: #6b7280;
            font-size: 1.1rem;
        }

        .form-group {
            margin-bottom: 25px;
            animation: fadeInUp 0.6s ease-out backwards;
        }

        .form-group:nth-child(1) { animation-delay: 0.1s; }
        .form-group:nth-child(2) { animation-delay: 0.15s; }
        .form-group:nth-child(3) { animation-delay: 0.2s; }
        .form-group:nth-child(4) { animation-delay: 0.25s; }

        .form-label {
            display: block;
            color: #4b5563;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 0.95rem;
            transition: color 0.3s ease;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: white;
        }

        .form-control:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
            transform: translateY(-2px);
        }

        .form-control:hover {
            border-color: #a5b4fc;
        }

        select.form-control {
            cursor: pointer;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%23667eea'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 20px;
            padding-right: 40px;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }

        .btn-submit {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 14px 40px;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
            display: inline-block;
        }

        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 25px rgba(102, 126, 234, 0.6);
            animation: pulse 1s infinite;
        }

        .btn-submit:active {
            transform: translateY(-1px);
        }

        .alert {
            padding: 16px 20px;
            border-radius: 12px;
            margin-top: 20px;
            animation: fadeInUp 0.5s ease-out;
            font-weight: 500;
        }

        .alert-success {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            border: none;
        }

        .alert-danger {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
            border: none;
        }

        .section-title {
            color: #667eea;
            font-size: 1.3rem;
            font-weight: 600;
            margin: 30px 0 20px 0;
            padding-bottom: 10px;
            border-bottom: 3px solid #667eea;
            display: inline-block;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 50%;
            height: 3px;
            background: #764ba2;
            animation: shimmer 2s infinite;
        }

        .file-input-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
            width: 100%;
        }

        .file-input-wrapper input[type=file] {
            position: absolute;
            left: -9999px;
        }

        .file-input-label {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px 16px;
            border: 2px dashed #667eea;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: rgba(102, 126, 234, 0.05);
            color: #667eea;
            font-weight: 600;
        }

        .file-input-label:hover {
            background: rgba(102, 126, 234, 0.1);
            border-color: #764ba2;
            transform: scale(1.02);
        }

        .icon-wrapper {
            display: inline-block;
            margin-right: 8px;
            animation: pulse 2s infinite;
        }

        @media (max-width: 768px) {
            .form-card {
                padding: 25px;
            }
            
            .form-header h2 {
                font-size: 2rem;
            }
        }
    </style>

    <div class="form-container">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="form-card">
                <div class="form-header">
                    <h2>✨ Tambah Data Mahasiswa</h2>
                    <p>Lengkapi formulir di bawah ini dengan data yang akurat</p>
                </div>

                <form id="mahasiswaForm" enctype="multipart/form-data">
                    @csrf

                    <div class="section-title">📚 Data Akademik</div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="form-label">Program Studi</label>
                            <select class="form-control" id="program_studi_id" name="program_studi_id" required>
                                <option value="">-- Pilih Program Studi --</option>
                                <option value="1">Manajemen Informatika</option>
                                <option value="2">Administrasi Bisnis</option>
                                <option value="3">Akuntansi</option>
                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="form-label">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM" required>
                        </div>
                    </div>

                    <div class="section-title">👤 Data Pribadi</div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="form-label">Nama Panggilan</label>
                            <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan" placeholder="Masukkan nama panggilan">
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="form-label">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan tempat lahir">
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat lengkap"></textarea>
                        </div>
                    </div>

                    <div class="section-title">📞 Kontak</div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="form-label">No Telepon</label>
                            <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="08xxxxxxxxxx">
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
                        </div>
                    </div>

                    <div class="section-title">🎯 Minat & Bakat</div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="form-label">Hobi (pisahkan dengan koma)</label>
                            <input type="text" class="form-control" id="hobi" name="hobi" placeholder="Membaca, Olahraga, Traveling">
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="form-label">Prestasi (pisahkan dengan koma)</label>
                            <input type="text" class="form-control" id="prestasi" name="prestasi" placeholder="Juara 1, Lomba A, dll">
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="form-label">Organisasi (pisahkan dengan koma)</label>
                            <input type="text" class="form-control" id="organisasi" name="organisasi" placeholder="HMPS, BEM, dll">
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="form-label">Cita-cita</label>
                            <input type="text" class="form-control" id="cita_cita" name="cita_cita" placeholder="Masukkan cita-cita Anda">
                        </div>
                    </div>

                    <div class="section-title">💭 Aspirasi & Sosial Media</div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="form-label">Motto</label>
                            <input type="text" class="form-control" id="motto" name="motto" placeholder="Motto hidup Anda">
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="form-label">Quote Favorit</label>
                            <input type="text" class="form-control" id="quote_favorit" name="quote_favorit" placeholder="Quote favorit Anda">
                        </div>

                        <div class="col-md-12 form-group">
                            <label class="form-label">Kesan & Pesan</label>
                            <textarea class="form-control" id="kesan_pesan" name="kesan_pesan" placeholder="Tuliskan kesan dan pesan Anda"></textarea>
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="form-label">Instagram</label>
                            <input type="text" class="form-control" id="instagram" name="instagram" placeholder="@username">
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="form-label">Twitter</label>
                            <input type="text" class="form-control" id="twitter" name="twitter" placeholder="@username">
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="form-label">LinkedIn</label>
                            <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="linkedin.com/in/username">
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="form-label">Foto Profil</label>
                            <div class="file-input-wrapper">
                                <input type="file" class="form-control" id="foto_profil" name="foto_profil" accept="image/*" onchange="updateFileName(this)">
                                <label for="foto_profil" class="file-input-label">
                                    <span class="icon-wrapper">📸</span>
                                    <span id="file-name">Pilih foto profil</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn-submit">
                            <span class="icon-wrapper">💾</span> Simpan Data
                        </button>
                    </div>
                </form>

                <div id="responseMessage"></div>
            </div>
        </div>
    </div>

    <script>
        function updateFileName(input) {
            const fileName = input.files[0]?.name || 'Pilih foto profil';
            document.getElementById('file-name').textContent = fileName;
        }

        document.getElementById('mahasiswaForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const submitBtn = this.querySelector('.btn-submit');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<span class="icon-wrapper">⏳</span> Menyimpan...';
            submitBtn.disabled = true;

            const formData = new FormData(this);
            const arrayFields = ['hobi', 'prestasi', 'organisasi'];
            arrayFields.forEach(f => {
                const value = document.getElementById(f).value;
                if (value) {
                    formData.set(f, JSON.stringify(value.split(',').map(v => v.trim())));
                }
            });

            try {
                const response = await fetch('http://127.0.0.1:8000/api/mahasiswa', {
                    method: 'POST',
                    body: formData
                });

                const result = await response.json();
                const msgDiv = document.getElementById('responseMessage');
                
                if (response.ok) {
                    msgDiv.innerHTML = `<div class="alert alert-success">✅ ${result.message}</div>`;
                    this.reset();
                    document.getElementById('file-name').textContent = 'Pilih foto profil';

                    setTimeout(() => {
                        window.history.back();
                    }, 2000);
                } else {
                    msgDiv.innerHTML = `<div class="alert alert-danger">❌ ${result.message || 'Gagal menyimpan data.'}</div>`;
                }

            } catch (error) {
                document.getElementById('responseMessage').innerHTML =
                    `<div class="alert alert-danger">❌ Terjadi kesalahan: ${error}</div>`;
            } finally {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }
        });

        // Animasi smooth scroll
        document.querySelectorAll('input, select, textarea').forEach(element => {
            element.addEventListener('focus', function() {
                this.parentElement.style.transform = 'scale(1.01)';
                this.parentElement.style.transition = 'transform 0.3s ease';
            });
            
            element.addEventListener('blur', function() {
                this.parentElement.style.transform = 'scale(1)';
            });
        });
    </script>
</x-layouts.app>