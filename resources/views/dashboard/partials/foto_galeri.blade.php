<section 
    id="galeri" 
    class="py-20"
    x-data="{ open: false, selectedImage: '' }"
    x-cloak
>
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-indigo-700">Foto Galeri</h2>
        <p class="text-gray-600 mt-2">Kumpulan momen berharga yang tak akan terlupakan.</p>
    </div>

    <!-- Grid Foto -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 max-w-6xl mx-auto px-6">
        @for ($i = 1; $i <= 8; $i++)
            <div 
                class="overflow-hidden rounded-2xl shadow-lg group relative cursor-pointer"
                @click="selectedImage = '{{ asset("images/galeri/foto{$i}.jpg") }}'; open = true"
            >
                <img 
                    src="{{ asset("storage/images/galeri/foto{$i}.jpg") }}" 
                    alt="Galeri {{ $i }}"
                    class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110"
                >
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                    <p class="text-white text-sm">Momen {{ $i }}</p>
                </div>
            </div>
        @endfor
    </div>

    {{-- Include modal tapi masih dalam scope x-data --}}
    @include('dashboard.partials.foto_modal')
</section>
