<!-- Modal Preview Full Blur Responsive -->
<template x-if="open">
    <div 
        x-show="open"
        x-transition.opacity.duration.300ms
        x-cloak
        class="fixed inset-0 bg-black/50 backdrop-blur-xl flex items-center justify-center z-50"
        @click.self="open = false"
    >
        <!-- Modal Box -->
        <div 
            class="relative w-full max-w-3xl mx-4 sm:mx-6 md:mx-auto transform transition-all duration-300"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
        >
            <!-- Close Button -->
            <button 
                @click="open = false"
                class="absolute -top-4 -right-4 bg-white rounded-full p-3 shadow-lg hover:bg-gray-200 transition"
            >
                ✕
            </button>

            <!-- Image -->
            <img 
                :src="selectedImage" 
                alt="Preview" 
                class="w-auto max-w-full max-h-[80vh] mx-auto rounded-xl shadow-xl object-contain"
            >
        </div>
    </div>
</template>

<!-- Trigger Example -->
<div class="grid grid-cols-3 gap-4">
    <template x-for="img in images" :key="img">
        <img 
            :src="img" 
            alt="" 
            class="cursor-pointer rounded-lg shadow hover:scale-105 transition-transform duration-200"
            @click="selectedImage = img; open = true"
        >
    </template>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('modalPreview', () => ({
            open: false,
            selectedImage: '',
            images: [
                'https://picsum.photos/400/600?random=1', // portrait
                'https://picsum.photos/600/400?random=2', // landscape
                'https://picsum.photos/500/500?random=3', // square
            ],
        }))
    })
</script>
