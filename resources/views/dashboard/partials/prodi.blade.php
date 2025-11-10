<section id="program" class="py-24 bg-white">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold mb-4">Program Studi</span>
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Program Studi Kami</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">Kenali lebih dekat setiap program studi yang membentuk masa depan kami.</p>
        </div>

        {{-- Tempat data dinamis --}}
        <div id="prodi-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="col-span-3 text-center text-gray-500">Memuat data program studi...</div>
        </div>
    </div>
</section>

<style>
.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('prodi-container');

    fetch('/api/prodi')
        .then(res => res.json())
        .then(data => {
            container.innerHTML = ''; // Hapus teks "Memuat..."
            
            if (data.length === 0) {
                container.innerHTML = `<div class="col-span-3 text-center text-gray-500">Belum ada data prodi.</div>`;
                return;
            }

            data.forEach(prodi => {
                // Misal field di database: nama_prodi, deskripsi, gambar, ikon, slug/url
                const image = prodi.images ?? 'storage/images/prodi/prodi1.jpg';
                const deskripsi = prodi.deskripsi ?? 'Belum ada deskripsi.';
                const icon = prodi.icon ?? '🎓';
                const url = prodi.id ? `/prodi/${prodi.id}` : '#';

                container.innerHTML += `
                    <a href="${url}" class="group relative overflow-hidden rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <div class="relative h-96 overflow-hidden">
                            <img src="${image}" alt="${prodi.nama}" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                            <div class="absolute top-6 right-6 w-16 h-16 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center border border-white/30 group-hover:scale-110 transition-transform">
                                <span class="text-4xl">${icon}</span>
                            </div>
                        </div>

                        <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                            <h3 class="text-2xl lg:text-3xl font-bold mb-3 group-hover:text-blue-300 transition-colors">
                                ${prodi.nama}
                            </h3>
                            <p class="text-gray-200 text-sm lg:text-base leading-relaxed mb-4 line-clamp-3">
                                ${deskripsi}
                            </p>
                            <div class="flex items-center text-blue-300 font-semibold group-hover:translate-x-2 transition-transform">
                                <span>Lihat Detail</span>
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </div>
                        </div>

                        <div class="absolute inset-0 border-4 border-blue-500 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"></div>
                    </a>
                `;
            });
        })
        .catch(err => {
            console.error(err);
            container.innerHTML = `<div class="col-span-3 text-center text-red-500">Gagal memuat data program studi ❌</div>`;
        });
});
</script>
