<section 
    id="galeri" 
    class="py-20 bg-white"
    x-data="{ open: false, selectedImage: '' }"
    x-cloak
>
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-blue-700">Foto Galeri</h2>
        <p class="text-gray-600 mt-2">Kumpulan momen berharga yang tak akan terlupakan.</p>
    </div>

    <!-- Grid Foto -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 max-w-6xl mx-auto px-6">
        @for ($i = 1; $i <= 8; $i++)
            <div 
                class="overflow-hidden rounded-2xl shadow-md group relative cursor-pointer bg-gray-50 hover:bg-gray-100 transition-colors"
                @click="selectedImage = '{{ asset("storage/images/galeri/foto{$i}.jpg") }}'; open = true"
            >
                <img 
                    src="{{ asset("storage/images/galeri/foto{$i}.jpg") }}" 
                    alt="Galeri {{ $i }}"
                    loading="lazy"
                    onerror="this.src='storage/images/galeri/default.jpg'"
                    class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105"
                >
                <div class="absolute inset-0 bg-black bg-opacity-25 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <p class="text-white text-sm tracking-wide">Momen {{ $i }}</p>
                </div>
            </div>
        @endfor
    </div>

    {{-- Modal masih tetap di dalam scope Alpine --}}
    @include('dashboard.partials.foto_modal')
</section>
