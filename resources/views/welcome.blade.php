<x-layouts.app>
    {{-- Hero Section dengan Background Image --}}
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        {{-- Background Image dengan Overlay --}}
        <div class="absolute inset-0 z-0">
            <img src="https://images.pexels.com/photos/1454360/pexels-photo-1454360.jpeg?auto=compress&cs=tinysrgb&w=1920" 
                 class="w-full h-full object-cover" 
                 alt="Campus Background">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-900/90 via-blue-800/85 to-blue-600/80"></div>
        </div>

        {{-- Animated Background Elements --}}
        <div class="absolute inset-0 z-0">
            <div class="absolute top-20 left-10 w-72 h-72 bg-blue-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob"></div>
            <div class="absolute top-40 right-10 w-72 h-72 bg-purple-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-2000"></div>
            <div class="absolute bottom-20 left-1/2 w-72 h-72 bg-pink-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000"></div>
        </div>

        {{-- Content --}}
        <div class="relative z-10 text-center text-white px-4 max-w-5xl mx-auto">
            {{-- Logo/Badge --}}
            <div class="mb-6 flex justify-center">
                <div class="w-24 h-24 bg-white/10 backdrop-blur-md rounded-full flex items-center justify-center border-4 border-white/30 shadow-2xl">
                    <span class="text-5xl">🎓</span>
                </div>
            </div>

            {{-- Main Title --}}
            <h1 class="text-5xl md:text-7xl font-bold mb-4 animate-fade-in-down">
                Yearbook 2025/2026
            </h1>
            
            <div class="h-1 w-32 bg-gradient-to-r from-transparent via-white to-transparent mx-auto mb-6"></div>
            
            {{-- Subtitle --}}
            <h2 class="text-2xl md:text-4xl font-semibold mb-4 text-blue-100 animate-fade-in-up">
                Politeknik LP3I Jakarta
            </h2>
            
            <p class="text-xl md:text-2xl text-blue-100 mb-8 animate-fade-in-up animation-delay-500">
                Kampus Cimone
            </p>

            {{-- Description --}}
            <p class="text-lg md:text-xl text-gray-200 max-w-3xl mx-auto mb-12 leading-relaxed animate-fade-in-up animation-delay-1000">
                Kenangan indah bersama teman-teman seperjuangan. Setiap momen berharga yang telah kita lalui bersama 
                adalah bagian dari perjalanan kita menuju masa depan yang gemilang.
            </p>

            {{-- CTA Button --}}
            <button class="bg-white text-blue-900 px-8 py-4 rounded-full font-semibold text-lg shadow-2xl hover:shadow-3xl hover:scale-105 transition-all duration-300 animate-fade-in-up animation-delay-1500">
                Jelajahi Yearbook 📖
            </button>

            {{-- Scroll Indicator --}}
            <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
                <svg class="w-8 h-8 text-white opacity-75" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>
    </section>

    {{-- Stats Section --}}
    <section class="py-16 bg-gradient-to-br from-blue-600 to-blue-700 text-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="transform hover:scale-110 transition-all duration-300">
                    <div class="text-5xl md:text-6xl font-bold mb-2" id="totalSiswa">0</div>
                    <div class="text-blue-100 text-sm md:text-base">Total Mahasiswa</div>
                </div>
                <div class="transform hover:scale-110 transition-all duration-300">
                    <div class="text-5xl md:text-6xl font-bold mb-2" id="totalKelas">0</div>
                    <div class="text-blue-100 text-sm md:text-base">Program Studi</div>
                </div>
                <div class="transform hover:scale-110 transition-all duration-300">
                    <div class="text-5xl md:text-6xl font-bold mb-2">1</div>
                    <div class="text-blue-100 text-sm md:text-base">Kampus</div>
                </div>
                <div class="transform hover:scale-110 transition-all duration-300">
                    <div class="text-5xl md:text-6xl font-bold mb-2">∞</div>
                    <div class="text-blue-100 text-sm md:text-base">Kenangan</div>
                </div>
            </div>
        </div>
    </section>

    {{-- Quote Section --}}
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <div class="text-6xl mb-6 opacity-20">"</div>
            <p class="text-2xl md:text-3xl text-gray-700 italic leading-relaxed mb-6">
                Pendidikan adalah senjata paling ampuh yang bisa kamu gunakan untuk mengubah dunia
            </p>
            <p class="text-gray-500 font-semibold">- Nelson Mandela</p>
        </div>
    </section>

    {{-- Program Studi Section --}}
    <section class="py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-6">
            {{-- Section Header --}}
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                    Program Studi Kami
                </h2>
                <div class="h-1 w-24 bg-gradient-to-r from-blue-600 to-blue-400 mx-auto mb-6"></div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Klik pada banner program studi untuk melihat profil mahasiswa dan kenangan bersama
                </p>
            </div>

            {{-- Program Cards Grid --}}
            <div id="kelasWrapper" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8"></div>
        </div>
    </section>

    {{-- Gallery Preview Section --}}
    <section class="py-20 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">Galeri Momen</h2>
                <p class="text-gray-400 text-lg">Cuplikan kebersamaan yang tak terlupakan</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="group relative overflow-hidden rounded-lg aspect-square cursor-pointer">
                    <img src="https://images.pexels.com/photos/1454360/pexels-photo-1454360.jpeg?auto=compress&cs=tinysrgb&w=600" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" 
                         alt="Gallery">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="group relative overflow-hidden rounded-lg aspect-square cursor-pointer">
                    <img src="https://images.pexels.com/photos/3184306/pexels-photo-3184306.jpeg?auto=compress&cs=tinysrgb&w=600" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" 
                         alt="Gallery">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="group relative overflow-hidden rounded-lg aspect-square cursor-pointer">
                    <img src="https://images.pexels.com/photos/3184431/pexels-photo-3184431.jpeg?auto=compress&cs=tinysrgb&w=600" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" 
                         alt="Gallery">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="group relative overflow-hidden rounded-lg aspect-square cursor-pointer">
                    <img src="https://images.pexels.com/photos/267885/pexels-photo-267885.jpeg?auto=compress&cs=tinysrgb&w=600" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" 
                         alt="Gallery">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
            </div>

            <div class="text-center mt-12">
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full font-semibold transition-all duration-300 hover:scale-105">
                    Lihat Semua Foto 📸
                </button>
            </div>
        </div>
    </section>

    {{-- Message Section --}}
    <section class="py-20 bg-gradient-to-br from-blue-50 to-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <div class="bg-white rounded-2xl shadow-2xl p-8 md:p-12">
                <div class="text-5xl mb-6">💙</div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                    Pesan untuk Teman-Teman
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    Terima kasih atas semua tawa, dukungan, dan kenangan yang telah kita ciptakan bersama. 
                    Meskipun perjalanan kita di kampus ini akan segera berakhir, persahabatan dan kenangan 
                    yang kita bangun akan tetap abadi. Semoga kita semua sukses di masa depan dan tetap 
                    menjalin silaturahmi. <strong>Once LP3I, Always LP3I!</strong>
                </p>
                <div class="flex justify-center gap-4">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full font-semibold transition-all duration-300">
                        Tulis Pesan 💬
                    </button>
                    <button class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-3 rounded-full font-semibold transition-all duration-300">
                        Baca Pesan Lainnya
                    </button>
                </div>
            </div>
        </div>
    </section>

    <style>
        @keyframes fade-in-down {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fade-in-up {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes blob {
            0%, 100% {
                transform: translate(0, 0) scale(1);
            }
            33% {
                transform: translate(30px, -50px) scale(1.1);
            }
            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }
        }

        .animate-fade-in-down {
            animation: fade-in-down 1s ease-out;
        }

        .animate-fade-in-up {
            animation: fade-in-up 1s ease-out;
        }

        .animate-blob {
            animation: blob 7s infinite;
        }

        .animation-delay-500 {
            animation-delay: 0.5s;
        }

        .animation-delay-1000 {
            animation-delay: 1s;
        }

        .animation-delay-1500 {
            animation-delay: 1.5s;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>

    <script>
        // Data Program Studi (Dummy Data)
        const data = {
            total_siswa: 280,
            kelas: [
                { 
                    nama: "Manajemen Informatika", 
                    singkatan: "MI",
                    total_siswa: 75, 
                    foto: "https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg?auto=compress&cs=tinysrgb&w=800",
                    icon: "💻",
                    color: "from-blue-600 to-blue-800"
                },
                { 
                    nama: "Komputerisasi Akuntansi", 
                    singkatan: "KA",
                    total_siswa: 68, 
                    foto: "https://images.pexels.com/photos/6693655/pexels-photo-6693655.jpeg?auto=compress&cs=tinysrgb&w=800",
                    icon: "📊",
                    color: "from-green-600 to-green-800"
                },
                { 
                    nama: "Administrasi Bisnis", 
                    singkatan: "AB",
                    total_siswa: 72, 
                    foto: "https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=800",
                    icon: "💼",
                    color: "from-purple-600 to-purple-800"
                },
                { 
                    nama: "Administrasi Bisnis Internasional", 
                    singkatan: "ABI",
                    total_siswa: 65, 
                    foto: "https://images.pexels.com/photos/3184360/pexels-photo-3184360.jpeg?auto=compress&cs=tinysrgb&w=800",
                    icon: "🌍",
                    color: "from-orange-600 to-orange-800"
                }
            ]
        };

        // Animate counter
        function animateCounter(id, target, duration = 2000) {
            const element = document.getElementById(id);
            const start = 0;
            const increment = target / (duration / 16);
            let current = start;

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    element.textContent = target;
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current);
                }
            }, 16);
        }

        // Update stats dengan animasi
        window.addEventListener('load', () => {
            setTimeout(() => {
                animateCounter("totalSiswa", data.total_siswa);
                animateCounter("totalKelas", data.kelas.length);
            }, 500);
        });

        // Render program studi cards
        const wrapper = document.getElementById("kelasWrapper");
        data.kelas.forEach((k, index) => {
            const card = document.createElement('div');
            card.className = 'group relative rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 cursor-pointer';
            card.style.animationDelay = `${index * 0.1}s`;
            
            card.innerHTML = `
                <div class="relative h-80">
                    <img src="${k.foto}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" 
                         alt="${k.nama}">
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t ${k.color} opacity-75 group-hover:opacity-85 transition-opacity duration-500"></div>
                    
                    <!-- Content -->
                    <div class="absolute inset-0 p-6 flex flex-col justify-between text-white">
                        <!-- Icon Badge -->
                        <div class="flex justify-end">
                            <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-2xl border-2 border-white/30">
                                ${k.icon}
                            </div>
                        </div>
                        
                        <!-- Info -->
                        <div>
                            <div class="text-sm font-semibold text-white/80 mb-2 tracking-wider">${k.singkatan}</div>
                            <h3 class="text-2xl font-bold mb-3 leading-tight">${k.nama}</h3>
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center space-x-2">
                                    <div class="w-10 h-10 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                                        <span class="text-sm">👥</span>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold">${k.total_siswa}</div>
                                        <div class="text-xs text-white/80">Mahasiswa</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- View Button (appears on hover) -->
                            <div class="mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button class="bg-white text-gray-900 px-4 py-2 rounded-full text-sm font-semibold hover:bg-gray-100 transition-colors">
                                    Lihat Profil →
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            
            wrapper.appendChild(card);
        });
    </script>
</x-layouts.app>