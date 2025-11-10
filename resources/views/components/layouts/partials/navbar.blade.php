<header class="fixed top-0 left-0 right-0 z-50 bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 shadow-xl backdrop-blur-sm bg-opacity-95">
    <nav class="px-6 lg:px-12">
        <div class="flex flex-wrap justify-between items-center h-20">
            
            {{-- Logo --}}
            <div class="flex items-center space-x-4">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-400 to-blue-600 rounded-xl flex items-center justify-center shadow-lg transform hover:scale-105 transition-transform">
                    <svg class="w-9 h-9 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                              d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <div class="text-white">
                    <h1 class="text-2xl font-bold tracking-tight">Yearbook 2025</h1>
                    <p class="text-xs text-blue-200">Kenangan Tak Terlupakan</p>
                </div>
            </div>

            {{-- Buttons --}}
            <div class="flex space-x-4 mt-2 md:mt-0">
                <a href="/mahasiswa/create" class="px-6 py-2.5 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all duration-300 font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    Create
                </a>
                <a href="/admin/login" class="px-6 py-2.5 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all duration-300 font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    Login Admin
                </a>
            </div>

        </div>
    </nav>
</header>
