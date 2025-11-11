<!-- Modal Preview (Full Flexible, No Separate Alpine Instance) -->
<template x-if="open">
    <div 
        x-show="open"
        x-transition.opacity.duration.300ms
        x-cloak
        class="fixed inset-0 flex items-center justify-center bg-black/60 backdrop-blur-xl p-4 sm:p-6 overflow-y-auto z-[9999]"
        @click.self="open = false"
    >
        <!-- Modal Box -->
        <div 
            class="relative w-full max-w-5xl transform transition-all duration-300"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
        >
            <!-- Tombol Tutup -->
            <button 
                @click="open = false"
                class="absolute -top-6 -right-6 bg-white text-gray-700 rounded-full p-3 shadow-lg hover:bg-gray-200 transition"
                aria-label="Tutup"
            >
                ✕
            </button>

            <!-- Gambar -->
            <img 
                :src="selectedImage" 
                alt="Preview" 
                class="w-auto max-w-full max-h-[90vh] mx-auto rounded-xl shadow-2xl object-contain bg-white"
            >
        </div>
    </div>
</template>
