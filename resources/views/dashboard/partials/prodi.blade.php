<section id="program" class="py-24 bg-white">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold mb-4">Program Studi</span>
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Program Studi Kami</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Kenali lebih dekat setiap program studi yang membentuk masa depan kami.
            </p>
        </div>

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
.card {
    transition: all 0.4s ease;
    opacity: 0;
    transform: translateY(10px);
}
.card.loaded {
    opacity: 1;
    transform: translateY(0);
}
.card:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.12);
}
.fade-in {
    animation: fadeIn 0.6s ease forwards;
}
@keyframes fadeIn {
    from { opacity: 0; transform: scale(1.02); }
    to { opacity: 1; transform: scale(1); }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', async () => {
    const container = document.getElementById('prodi-container');

    try {
        const res = await fetch('/api/prodi');
        const data = await res.json();

        if (!data.length) {
            container.innerHTML = `<div class="col-span-3 text-center text-gray-500">Belum ada data prodi.</div>`;
            return;
        }

        container.innerHTML = data.map(prodi => {
            const image = prodi.images ?? 'storage/images/prodi/prodi1.jpg';
            const deskripsi = prodi.deskripsi ?? 'Belum ada deskripsi.';
            const url = prodi.id ? `/prodi/${prodi.id}` : '#';

            return `
                <a href="${url}" class="card relative overflow-hidden rounded-3xl bg-white shadow-md hover:shadow-xl transition-transform duration-500">
                    <div class="h-64 overflow-hidden relative">
                        <img 
                            src="${image}" 
                            alt="${prodi.nama}" 
                            loading="lazy"
                            onerror="this.src='storage/images/prodi/default.jpg'"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-105 fade-in"
                        >
                        
                    </div>

                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 hover:text-blue-600 transition-colors">
                            ${prodi.nama}
                        </h3>
                        <p class="text-gray-600 text-sm line-clamp-3 mb-4">
                            ${deskripsi}
                        </p>
                        <div class="flex items-center text-blue-600 font-semibold text-sm hover:translate-x-1 transition-transform">
                            <span>Lihat Detail</span>
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </div>
                    </div>
                </a>
            `;
        }).join('');

        // efek muncul halus satu per satu
        const cards = container.querySelectorAll('.card');
        cards.forEach((card, i) => {
            setTimeout(() => card.classList.add('loaded'), i * 100);
        });

    } catch (err) {
        console.error(err);
        container.innerHTML = `<div class="col-span-3 text-center text-red-500">Gagal memuat data program studi ❌</div>`;
    }
});
</script>
