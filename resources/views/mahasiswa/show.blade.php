<x-layouts.app>
    <section class="pt-24 pb-20 min-h-screen bg-gradient-to-br from-blue-50 via-sky-50 to-blue-100 relative overflow-hidden">
        <!-- Background decorative elements -->
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-20 left-10 w-72 h-72 bg-blue-400 rounded-full filter blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-cyan-400 rounded-full filter blur-3xl"></div>
            <div class="absolute top-1/2 left-1/2 w-80 h-80 bg-sky-300 rounded-full filter blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 lg:px-20 relative z-10">
            <div id="detail-container" class="max-w-5xl mx-auto">
                
                {{-- Loading --}}
                <div id="loading" class="flex flex-col items-center py-32">
                    <div class="relative">
                        <div class="animate-spin rounded-full h-20 w-20 border-4 border-blue-500 border-t-transparent"></div>
                        <div class="absolute inset-0 animate-ping rounded-full h-20 w-20 border-4 border-blue-300 opacity-20"></div>
                    </div>
                    <p class="text-blue-900 mt-6 text-lg font-light tracking-wide">Memuat data mahasiswa...</p>
                </div>

                {{-- Konten Mahasiswa --}}
                <div id="mahasiswa-detail" class="hidden animate-fadeIn">
                    {{-- Card Container --}}
                    <div class="backdrop-blur-xl bg-white/80 rounded-3xl shadow-2xl overflow-hidden border border-blue-200">
                        
                        {{-- Hero Section with Photo --}}
                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-blue-900/60"></div>
                            <div class="w-full h-[500px] relative overflow-hidden">
                                <img id="foto-profil" src="" alt="Foto Mahasiswa" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700">
                            </div>
                            
                            {{-- Floating Name Card --}}
                            <div class="absolute bottom-8 left-8 right-8">
                                <div class="backdrop-blur-2xl bg-white/90 rounded-2xl p-8 border border-blue-200 shadow-2xl">
                                    <h1 id="nama-lengkap" class="text-5xl font-bold text-blue-900 mb-3 tracking-tight"></h1>
                                    <div class="flex flex-wrap gap-3 items-center">
                                        <span id="nama-panggilan" class="px-4 py-2 bg-blue-500 text-white rounded-full text-sm font-medium shadow-lg"></span>
                                        <span id="nim" class="px-4 py-2 bg-cyan-500 text-white rounded-full text-sm font-medium shadow-lg"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Main Content --}}
                        <div class="p-10 space-y-10">
                            
                            {{-- Info Grid --}}
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="space-y-4">
                                    <div class="flex items-start space-x-4 group">
                                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-blue-600 text-sm font-medium">Program Studi</p>
                                            <p id="prodi" class="text-blue-900 text-lg font-semibold"></p>
                                        </div>
                                    </div>

                                    <div class="flex items-start space-x-4 group">
                                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-cyan-500 to-cyan-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-blue-600 text-sm font-medium">Jenis Kelamin</p>
                                            <p id="jenis-kelamin" class="text-blue-900 text-lg font-semibold"></p>
                                        </div>
                                    </div>

                                    <div class="flex items-start space-x-4 group">
                                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-sky-500 to-sky-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-blue-600 text-sm font-medium">Tanggal Lahir</p>
                                            <p id="ttl" class="text-blue-900 text-lg font-semibold"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div class="flex items-start space-x-4 group">
                                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-600 to-blue-700 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-blue-600 text-sm font-medium">Alamat</p>
                                            <p id="alamat" class="text-blue-900 text-lg font-semibold"></p>
                                        </div>
                                    </div>

                                    <div class="flex items-start space-x-4 group">
                                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-cyan-600 to-cyan-700 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-blue-600 text-sm font-medium">Telepon</p>
                                            <p id="telepon" class="text-blue-900 text-lg font-semibold"></p>
                                        </div>
                                    </div>

                                    <div class="flex items-start space-x-4 group">
                                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-sky-600 to-sky-700 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-blue-600 text-sm font-medium">Email</p>
                                            <p id="email" class="text-blue-900 text-lg font-semibold break-all"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Divider --}}
                            <div class="h-px bg-gradient-to-r from-transparent via-blue-300 to-transparent"></div>

                            {{-- Yearbook Section --}}
                            <div class="space-y-6">
                                <h2 class="text-3xl font-bold text-blue-900 mb-6 flex items-center">
                                    <span class="w-2 h-8 bg-gradient-to-b from-blue-500 to-cyan-500 rounded-full mr-4"></span>
                                    Yearbook
                                </h2>
                                
                                <div class="grid gap-6">
                                    <div id="motto-container" class="backdrop-blur-sm bg-blue-50/80 rounded-2xl p-6 border border-blue-200 hover:bg-blue-100/80 hover:shadow-lg transition-all hidden">
                                        <p class="text-blue-600 text-sm font-semibold mb-2">Motto Hidup</p>
                                        <p id="motto" class="text-blue-900 text-lg italic"></p>
                                    </div>

                                    <div id="cita-cita-container" class="backdrop-blur-sm bg-cyan-50/80 rounded-2xl p-6 border border-cyan-200 hover:bg-cyan-100/80 hover:shadow-lg transition-all hidden">
                                        <p class="text-cyan-600 text-sm font-semibold mb-2">Cita-cita</p>
                                        <p id="cita-cita" class="text-blue-900 text-lg"></p>
                                    </div>

                                    <div id="kesan-pesan-container" class="backdrop-blur-sm bg-sky-50/80 rounded-2xl p-6 border border-sky-200 hover:bg-sky-100/80 hover:shadow-lg transition-all hidden">
                                        <p class="text-sky-600 text-sm font-semibold mb-2">Kesan & Pesan</p>
                                        <p id="kesan-pesan" class="text-blue-900 text-lg leading-relaxed"></p>
                                    </div>

                                    <div id="quote-container" class="backdrop-blur-sm bg-blue-50/80 rounded-2xl p-6 border border-blue-200 hover:bg-blue-100/80 hover:shadow-lg transition-all hidden">
                                        <p class="text-blue-600 text-sm font-semibold mb-2">Quote Favorit</p>
                                        <p id="quote-favorit" class="text-blue-900 text-lg italic"></p>
                                    </div>
                                </div>
                            </div>

                            {{-- Social Media --}}
                            <div id="social-container" class="hidden">
                                <div class="h-px bg-gradient-to-r from-transparent via-blue-300 to-transparent mb-8"></div>
                                <h2 class="text-2xl font-bold text-blue-900 mb-6 flex items-center">
                                    <span class="w-2 h-6 bg-gradient-to-b from-blue-500 to-cyan-500 rounded-full mr-4"></span>
                                    Sosial Media
                                </h2>
                                <div class="flex flex-wrap gap-4">
                                    <a id="instagram" target="_blank" class="group relative px-8 py-4 bg-gradient-to-r from-pink-500 to-rose-500 text-white rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden hidden">
                                        <div class="absolute inset-0 bg-white/20 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                                        <span class="relative font-semibold flex items-center">
                                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                                            Instagram
                                        </span>
                                    </a>
                                    <a id="twitter" target="_blank" class="group relative px-8 py-4 bg-gradient-to-r from-blue-400 to-blue-600 text-white rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden hidden">
                                        <div class="absolute inset-0 bg-white/20 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                                        <span class="relative font-semibold flex items-center">
                                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                                            Twitter
                                        </span>
                                    </a>
                                    <a id="linkedin" target="_blank" class="group relative px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-800 text-white rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden hidden">
                                        <div class="absolute inset-0 bg-white/20 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                                        <span class="relative font-semibold flex items-center">
                                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                            LinkedIn
                                        </span>
                                    </a>
                                </div>
                            </div>

                            {{-- Hobi, Prestasi, Organisasi --}}
                            <div class="space-y-8">
                                <div id="hobi-section" class="hidden">
                                    <div class="h-px bg-gradient-to-r from-transparent via-blue-300 to-transparent mb-8"></div>
                                    <h3 class="text-2xl font-bold text-blue-900 mb-6 flex items-center">
                                        <span class="w-2 h-6 bg-gradient-to-b from-blue-400 to-cyan-500 rounded-full mr-4"></span>
                                        Hobi
                                    </h3>
                                    <div id="hobi-list" class="grid md:grid-cols-2 gap-4"></div>
                                </div>

                                <div id="prestasi-section" class="hidden">
                                    <div class="h-px bg-gradient-to-r from-transparent via-blue-300 to-transparent mb-8"></div>
                                    <h3 class="text-2xl font-bold text-blue-900 mb-6 flex items-center">
                                        <span class="w-2 h-6 bg-gradient-to-b from-cyan-400 to-blue-600 rounded-full mr-4"></span>
                                        Prestasi
                                    </h3>
                                    <div id="prestasi-list" class="space-y-3"></div>
                                </div>

                                <div id="organisasi-section" class="hidden">
                                    <div class="h-px bg-gradient-to-r from-transparent via-blue-300 to-transparent mb-8"></div>
                                    <h3 class="text-2xl font-bold text-blue-900 mb-6 flex items-center">
                                        <span class="w-2 h-6 bg-gradient-to-b from-sky-400 to-cyan-600 rounded-full mr-4"></span>
                                        Organisasi
                                    </h3>
                                    <div id="organisasi-list" class="space-y-3"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fadeIn {
            animation: fadeIn 0.6s ease-out;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const id = window.location.pathname.split('/').pop();

            const loading = document.getElementById('loading');
            const detail = document.getElementById('mahasiswa-detail');

            fetch(`/api/mahasiswa/${id}`)
                .then(res => res.json())
                .then(data => {
                    loading.classList.add('hidden');
                    detail.classList.remove('hidden');

                    // Fix Foto Path - Tambah /storage/ di depan
                    const fotoUrl = data.foto_profil 
                        ? `/storage/${data.foto_profil}` 
                        : `https://ui-avatars.com/api/?name=${encodeURIComponent(data.nama_lengkap)}&size=800&background=3b82f6&color=fff&bold=true`;
                    
                    document.getElementById('foto-profil').src = fotoUrl;
                    
                    // Error handling untuk foto
                    document.getElementById('foto-profil').onerror = function() {
                        this.src = `https://ui-avatars.com/api/?name=${encodeURIComponent(data.nama_lengkap)}&size=800&background=3b82f6&color=fff&bold=true`;
                    };

                    // Info dasar
                    document.getElementById('nama-lengkap').textContent = data.nama_lengkap;
                    
                    const namaPanggilan = document.getElementById('nama-panggilan');
                    if(data.nama_panggilan) {
                        namaPanggilan.textContent = data.nama_panggilan;
                    } else {
                        namaPanggilan.style.display = 'none';
                    }

                    document.getElementById('nim').textContent = data.nim;
                    document.getElementById('prodi').textContent = data.program_studi?.nama ?? 'Prodi Tidak Ditemukan';
                    document.getElementById('jenis-kelamin').textContent = data.jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan';
                    
                    if(data.tanggal_lahir && data.tempat_lahir) {
                        document.getElementById('ttl').textContent = `${data.tempat_lahir}, ${new Date(data.tanggal_lahir).toLocaleDateString('id-ID', {day:'2-digit', month:'long', year:'numeric'})}`;
                    } else {
                        document.getElementById('ttl').textContent = '-';
                    }
                    
                    document.getElementById('alamat').textContent = data.alamat || '-';
                    document.getElementById('telepon').textContent = data.no_telepon || '-';
                    document.getElementById('email').textContent = data.email || '-';

                    // Yearbook
                    if(data.motto) {
                        document.getElementById('motto-container').classList.remove('hidden');
                        document.getElementById('motto').textContent = data.motto;
                    }
                    if(data.cita_cita) {
                        document.getElementById('cita-cita-container').classList.remove('hidden');
                        document.getElementById('cita-cita').textContent = data.cita_cita;
                    }
                    if(data.kesan_pesan) {
                        document.getElementById('kesan-pesan-container').classList.remove('hidden');
                        document.getElementById('kesan-pesan').textContent = data.kesan_pesan;
                    }
                    if(data.quote_favorit) {
                        document.getElementById('quote-container').classList.remove('hidden');
                        document.getElementById('quote-favorit').textContent = data.quote_favorit;
                    }

                    // Sosial Media
                    let hasSocial = false;
                    if(data.instagram) {
                        const insta = document.getElementById('instagram');
                        insta.href = data.instagram.startsWith('http') ? data.instagram : `https://instagram.com/${data.instagram.replace('@', '')}`;
                        insta.classList.remove('hidden');
                        hasSocial = true;
                    }
                    if(data.twitter) {
                        const tw = document.getElementById('twitter');
                        tw.href = data.twitter.startsWith('http') ? data.twitter : `https://twitter.com/${data.twitter.replace('@', '')}`;
                        tw.classList.remove('hidden');
                        hasSocial = true;
                    }
                    if(data.linkedin) {
                        const li = document.getElementById('linkedin');
                        li.href = data.linkedin.startsWith('http') ? data.linkedin : `https://linkedin.com/in/${data.linkedin}`;
                        li.classList.remove('hidden');
                        hasSocial = true;
                    }
                    if(hasSocial) {
                        document.getElementById('social-container').classList.remove('hidden');
                    }

                    // Hobi
                    if(data.hobi) {
                        try {
                            const hobiArray = typeof data.hobi === 'string' ? JSON.parse(data.hobi) : data.hobi;
                            if(hobiArray && hobiArray.length) {
                                document.getElementById('hobi-section').classList.remove('hidden');
                                const hobiList = document.getElementById('hobi-list');
                                hobiArray.forEach(h => {
                                    const div = document.createElement('div');
                                    div.className = 'backdrop-blur-sm bg-gradient-to-r from-blue-50 to-cyan-50 rounded-xl p-4 border border-blue-200 hover:border-blue-400 hover:shadow-lg transition-all';
                                    div.innerHTML = `<p class="text-blue-900 font-medium">${h}</p>`;
                                    hobiList.appendChild(div);
                                });
                            }
                        } catch(e) {
                            console.error('Error parsing hobi:', e);
                        }
                    }

                    // Prestasi
                    if(data.prestasi) {
                        try {
                            const prestasiArray = typeof data.prestasi === 'string' ? JSON.parse(data.prestasi) : data.prestasi;
                            if(prestasiArray && prestasiArray.length) {
                                document.getElementById('prestasi-section').classList.remove('hidden');
                                const list = document.getElementById('prestasi-list');
                                prestasiArray.forEach((p, idx) => {
                                    const div = document.createElement('div');
                                    div.className = 'backdrop-blur-sm bg-gradient-to-r from-cyan-50 to-blue-50 rounded-xl p-5 border border-cyan-200 hover:border-cyan-400 hover:shadow-lg transition-all flex items-start space-x-4';
                                    div.innerHTML = `
                                        <div class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center text-white font-bold shadow-lg">
                                            ${idx + 1}
                                        </div>
                                        <p class="text-blue-900 font-medium flex-1">${p}</p>
                                    `;
                                    list.appendChild(div);
                                });
                            }
                        } catch(e) {
                            console.error('Error parsing prestasi:', e);
                        }
                    }

                    // Organisasi
                    if(data.organisasi) {
                        try {
                            const organisasiArray = typeof data.organisasi === 'string' ? JSON.parse(data.organisasi) : data.organisasi;
                            if(organisasiArray && organisasiArray.length) {
                                document.getElementById('organisasi-section').classList.remove('hidden');
                                const list = document.getElementById('organisasi-list');
                                organisasiArray.forEach((o, idx) => {
                                    const div = document.createElement('div');
                                    div.className = 'backdrop-blur-sm bg-gradient-to-r from-sky-50 to-cyan-50 rounded-xl p-5 border border-sky-200 hover:border-sky-400 hover:shadow-lg transition-all flex items-start space-x-4';
                                    div.innerHTML = `
                                        <div class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-sky-500 to-cyan-600 flex items-center justify-center shadow-lg">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                            </svg>
                                        </div>
                                        <p class="text-blue-900 font-medium flex-1">${o}</p>
                                    `;
                                    list.appendChild(div);
                                });
                            }
                        } catch(e) {
                            console.error('Error parsing organisasi:', e);
                        }
                    }
                })
                .catch(err => {
                    console.error(err);
                    loading.innerHTML = `
                        <div class="text-center">
                            <svg class="w-16 h-16 text-red-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-red-500 text-lg font-semibold">Gagal memuat data mahasiswa</p>
                            <p class="text-blue-600 mt-2">Silakan coba lagi nanti</p>
                        </div>
                    `;
                });
        });
    </script>
</x-layouts.app>