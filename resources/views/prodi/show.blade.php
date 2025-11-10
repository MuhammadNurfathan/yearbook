<x-layouts.app>
    <section class="pt-32 pb-20 min-h-screen bg-gradient-to-br from-blue-50 via-white to-blue-50 relative overflow-hidden">
        {{-- Background blob --}}
        <div class="absolute top-32 left-0 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
        <div class="absolute top-32 right-0 w-96 h-96 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>

        <div class="relative container mx-auto px-6 lg:px-20">
            {{-- Header --}}
            <div class="flex flex-col md:flex-row justify-between items-center mb-10 gap-4">
                <h1 id="prodi-info" class="text-4xl lg:text-5xl font-extrabold text-center md:text-left">
                    <span class="bg-gradient-to-r from-blue-600 to-blue-800 bg-clip-text text-transparent">
                        Loading...
                    </span>
                </h1>
                <div class="flex items-center gap-3">
                    <input 
                        type="text" 
                        id="search-input" 
                        placeholder="Cari nama atau NIM..." 
                        class="px-4 py-2 text-sm rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all w-48 sm:w-60"
                        onkeyup="filterMahasiswa()">
                    <button 
                        onclick="resetSearch()" 
                        class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-xl text-sm font-semibold transition-all">
                        Reset
                    </button>
                    <div id="total-mahasiswa" 
                        class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full font-semibold text-sm whitespace-nowrap">
                    </div>
                </div>
            </div>
<br>
<br>
            {{-- Mahasiswa List --}}
            <div id="mahasiswa-list"
                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-8 max-w-7xl mx-auto">
                {{-- Loading State --}}
                <div class="col-span-full flex justify-center items-center py-20">
                    <div class="animate-spin rounded-full h-16 w-16 border-4 border-blue-500 border-t-transparent"></div>
                </div>
            </div>
        </div>
    </section>

    <script>
        let allMahasiswa = [];

        document.addEventListener('DOMContentLoaded', () => {
            const id = window.location.pathname.split('/').pop();
            const prodiInfo = document.getElementById('prodi-info');
            const totalMhs = document.getElementById('total-mahasiswa');
            const list = document.getElementById('mahasiswa-list');

            fetch(`/api/prodi/${id}`)
                .then(res => res.json())
                .then(data => {
                    prodiInfo.innerHTML =
                        `<span class="bg-gradient-to-r from-blue-600 to-blue-800 bg-clip-text text-transparent">${data.nama ?? 'Prodi Tidak Ditemukan'}</span>`;
                    if (data.mahasiswa && data.mahasiswa.length > 0) {
                        allMahasiswa = data.mahasiswa;
                        totalMhs.textContent = `${data.mahasiswa.length} Mahasiswa`;
                        renderMahasiswa(data.mahasiswa);
                    } else {
                        list.innerHTML = `<div class="col-span-full text-center text-gray-500 py-20">Belum ada data mahasiswa.</div>`;
                        totalMhs.textContent = '0 Mahasiswa';
                    }
                })
                .catch(() => {
                    prodiInfo.innerHTML = '<span class="text-red-600">Gagal memuat data prodi</span>';
                });
        });

        function renderMahasiswa(mahasiswaArray) {
            const list = document.getElementById('mahasiswa-list');
            list.innerHTML = '';

            mahasiswaArray.forEach(m => {
                const photoUrl = m.foto_profil
                    ? `/storage/${m.foto_profil}`
                    : `https://ui-avatars.com/api/?name=${encodeURIComponent(m.nama_lengkap)}&size=400&background=3b82f6&color=fff&bold=true`;

                const card = document.createElement('div');
                card.className =
                    'bg-white rounded-2xl shadow-md overflow-hidden transition-transform hover:-translate-y-2 hover:shadow-xl duration-300 flex flex-col';

                card.innerHTML = `
                    <div class="h-[420px] overflow-hidden">
                        <img src="${photoUrl}" alt="${m.nama_lengkap}"
                            class="w-full h-full object-cover object-center transition-transform duration-700 hover:scale-110"
                            onerror="this.src='https://ui-avatars.com/api/?name=${encodeURIComponent(m.nama_lengkap)}&size=400&background=3b82f6&color=fff'">
                    </div>
                    <div class="p-5 flex flex-col justify-between flex-grow">
                        <div>
                            <h3 class="text-lg font-bold text-gray-800 mb-1">${m.nama_lengkap}</h3>
                            <p class="text-gray-600 text-sm font-mono">${m.nim}</p>
                        </div>
                        <button onclick="showDetail('${m.id}')"
                            class="mt-4 w-full px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-xl transition-all font-semibold">
                            Lihat Profil
                        </button>
                    </div>
                `;

                list.appendChild(card);
            });
        }

        function filterMahasiswa() {
            const searchValue = document.getElementById('search-input').value.toLowerCase();
            const filtered = allMahasiswa.filter(m =>
                m.nama_lengkap.toLowerCase().includes(searchValue) || m.nim.toLowerCase().includes(searchValue)
            );
            renderMahasiswa(filtered);
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
            0%, 100% { transform: translate(0, 0) scale(1); }
            25% { transform: translate(20px, -50px) scale(1.1); }
            50% { transform: translate(-20px, 20px) scale(0.9); }
            75% { transform: translate(50px, 50px) scale(1.05); }
        }
        .animate-blob { animation: blob 7s infinite; }
        .animation-delay-2000 { animation-delay: 2s; }
    </style>
</x-layouts.app>
