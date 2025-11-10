<x-layouts.app>
    {{-- Main Content --}}
    <section class="pt-32 pb-20 min-h-screen bg-gradient-to-br from-blue-50 via-white to-blue-50">
        {{-- Decorative Elements --}}
        <div
            class="absolute top-32 left-0 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob">
        </div>
        <div
            class="absolute top-32 right-0 w-96 h-96 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000">
        </div>

        <div class="relative container mx-auto px-6 lg:px-20">
            {{-- Program Studi Header --}}
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl shadow-xl mb-6">
                    <span id="prodi-icon" class="text-4xl">📚</span>
                </div>
                <h1 id="prodi-info" class="text-5xl lg:text-6xl font-extrabold mb-4">
                    <span class="bg-gradient-to-r from-blue-600 to-blue-800 bg-clip-text text-transparent">
                        Loading...
                    </span>
                </h1>
                <p class="text-gray-600 text-lg">Daftar Mahasiswa Angkatan 2025</p>
                <div id="total-mahasiswa"
                    class="mt-4 inline-block px-6 py-2 bg-blue-100 text-blue-800 rounded-full font-semibold"></div>
            </div>

            {{-- Search & Filter --}}
            <div class="max-w-6xl mx-auto mb-12">
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex-1">
                            <input type="text" id="search-input" placeholder="🔍 Cari nama atau NIM mahasiswa..."
                                class="w-full px-6 py-3 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all"
                                onkeyup="filterMahasiswa()">
                        </div>
                        <button onclick="resetSearch()"
                            class="px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold rounded-xl transition-all">
                            Reset
                        </button>
                    </div>
                </div>
            </div>

            {{-- Mahasiswa Cards Grid --}}
            <div id="mahasiswa-list"
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 max-w-7xl mx-auto">
                {{-- Loading State --}}
                <div class="col-span-full flex justify-center items-center py-20">
                    <div class="animate-spin rounded-full h-16 w-16 border-4 border-blue-500 border-t-transparent">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        let allMahasiswa = [];

        document.addEventListener('DOMContentLoaded', () => {
            const id = window.location.pathname.split('/').pop();
            const prodiInfo = document.getElementById('prodi-info');
            const prodiIcon = document.getElementById('prodi-icon');
            const totalMhs = document.getElementById('total-mahasiswa');
            const list = document.getElementById('mahasiswa-list');

            // Icon mapping per prodi
            const prodiIcons = {
                '1': '💻', // Manajemen Informatika
                '2': '📊', // Administrasi Bisnis
                '3': '💰', // Komputerisasi Akuntansi
            };

            fetch(`/api/prodi/${id}`)
                .then(res => res.json())
                .then(data => {
                    prodiInfo.innerHTML =
                        `<span class="bg-gradient-to-r from-blue-600 to-blue-800 bg-clip-text text-transparent">${data.nama ?? 'Prodi Tidak Ditemukan'}</span>`;
                    prodiIcon.textContent = prodiIcons[id] || '📚';

                    if (data.mahasiswa && data.mahasiswa.length > 0) {
                        allMahasiswa = data.mahasiswa;
                        totalMhs.textContent = `${data.mahasiswa.length} Mahasiswa`;
                        renderMahasiswa(data.mahasiswa);
                    } else {
                        list.innerHTML = `
                            <div class="col-span-full text-center py-20">
                                <div class="inline-flex items-center justify-center w-24 h-24 bg-gray-100 rounded-full mb-6">
                                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-700 mb-2">Belum Ada Mahasiswa</h3>
                                <p class="text-gray-500">Data mahasiswa untuk program studi ini belum tersedia.</p>
                            </div>
                        `;
                        totalMhs.textContent = '0 Mahasiswa';
                    }

                })
                .catch(err => {
                    console.error(err);
                    prodiInfo.innerHTML = '<span class="text-red-600">Gagal memuat data prodi</span>';
                    list.innerHTML = `
                        <div class="col-span-full text-center py-20">
                            <div class="inline-flex items-center justify-center w-24 h-24 bg-red-100 rounded-full mb-6">
                                <svg class="w-12 h-12 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-700 mb-2">Terjadi Kesalahan</h3>
                            <p class="text-gray-500">Tidak dapat memuat data. Silakan coba lagi nanti.</p>
                        </div>
                    `;
                });
        });

        function renderMahasiswa(mahasiswaArray) {
            const list = document.getElementById('mahasiswa-list');

            if (mahasiswaArray.length === 0) {
                list.innerHTML = `
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-500 text-lg">Tidak ada mahasiswa yang sesuai dengan pencarian.</p>
                    </div>
                `;
                return;
            }

            list.innerHTML = '';

            mahasiswaArray.forEach(m => {
                const card = document.createElement('div');
                card.className =
                    'group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden';

                // Default image jika foto_profile kosong
                const photoUrl = `/storage/${m.foto_profil}`  || 'https://ui-avatars.com/api/?name=' + encodeURIComponent(m
                    .nama_lengkap) + '&size=400&background=3b82f6&color=fff&bold=true';

                card.innerHTML = `
                    <div class="relative">
                        {{-- Photo --}}
                        <div class="relative h-64 overflow-hidden bg-gradient-to-br from-blue-400 to-blue-600">
                            <img src="${photoUrl}" 
                                 alt="${m.nama_lengkap}" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                 onerror="this.src='https://ui-avatars.com/api/?name=${encodeURIComponent(m.nama_lengkap)}&size=400&background=3b82f6&color=fff&bold=true'">
                            
                            {{-- Gradient Overlay --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                            
                            {{-- NIM Badge --}}
                            <div class="absolute top-4 right-4 px-4 py-2 bg-white/90 backdrop-blur-sm rounded-full shadow-lg">
                                <span class="text-xs font-bold text-blue-700">${m.nim}</span>
                            </div>
                        </div>

                        {{-- Info Card --}}
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors line-clamp-2">
                                ${m.nama_lengkap}
                            </h3>
                            
                            <div class="flex items-center text-gray-600 text-sm mb-4">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <span class="font-mono">${m.nim}</span>
                            </div>

                            {{-- Action Button --}}
                           <button onclick="showDetail('${m.id}')" 
        class="w-full px-4 py-2.5 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl hover:from-blue-700 hover:to-blue-800 transition-all duration-300 font-semibold shadow-md hover:shadow-lg transform group-hover:translate-y-0 translate-y-2 opacity-0 group-hover:opacity-100">
    Lihat Profile
</button>
                        </div>
                    </div>

                    {{-- Hover Border Effect --}}
                    <div class="absolute inset-0 border-2 border-blue-500 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"></div>
                `;

                list.appendChild(card);
            });
        }

        function filterMahasiswa() {
            const searchValue = document.getElementById('search-input').value.toLowerCase();

            const filtered = allMahasiswa.filter(m => {
                return m.nama_lengkap.toLowerCase().includes(searchValue) ||
                    m.nim.toLowerCase().includes(searchValue);
            });

            renderMahasiswa(filtered);

            // Update total
            document.getElementById('total-mahasiswa').textContent = `${filtered.length} Mahasiswa`;
        }

        function resetSearch() {
            document.getElementById('search-input').value = '';
            renderMahasiswa(allMahasiswa);
            document.getElementById('total-mahasiswa').textContent = `${allMahasiswa.length} Mahasiswa`;
        }

        function showDetail(id) {
            window.location.href = `/mahasiswa/${id}`;
        }
    </script>

    <style>
        @keyframes blob {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            25% {
                transform: translate(20px, -50px) scale(1.1);
            }

            50% {
                transform: translate(-20px, 20px) scale(0.9);
            }

            75% {
                transform: translate(50px, 50px) scale(1.05);
            }
        }

        .animate-blob {
            animation: blob 7s infinite;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</x-layouts.app>
