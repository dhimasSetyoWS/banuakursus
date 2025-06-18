<script setup>

</script>

<template>
    <footer class="bg-gray-800 text-gray-300">
        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold text-white mb-4">BanuaKursus</h3>
                    <p class="text-sm text-gray-400">Platform untuk meningkatkan kualitas SDM lokal melalui
                        pendidikan
                        yang terjangkau dan berkualitas.</p>
                </div>
                <div>
                    <h4 class="font-semibold text-white mb-4">Navigasi</h4>
                    <ul class="space-y-2">
                        <li><Link :href="route('aboutus')" class="hover:text-white transition-colors">Tentang Kami</Link></li>
                        <li><Link :href="route('catalog')" class="hover:text-white transition-colors">Katalog Kursus</Link></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-white mb-4">Hubungi Kami</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="mailto:halo@banuakursus.com" class="hover:text-white transition-colors">📧
                                halo@banuakursus.com</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">📞 +62 812-3456-7890</a></li>
                        <li class="flex items-start">
                            <span>📍</span>
                            <span class="ml-2">Palu, Sulawesi Tengah, Indonesia</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-white mb-4">Ikuti Kami</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.012 3.584-.07 4.85c-.148 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.584-.012-4.85-.07c-3.252-.148-4.771-1.691-4.919-4.919-.058-1.265-.069-1.645-.069-4.85s.012-3.584.07-4.85c.148-3.225 1.664-4.771 4.919-4.919C8.416 2.175 8.796 2.163 12 2.163m0-2.163C8.74 0 8.333.012 7.053.072 2.695.272.273 2.69.073 7.052.012 8.333 0 8.74 0 12s.012 3.667.072 4.947c.2 4.358 2.618 6.78 6.98 6.98C8.333 23.988 8.74 24 12 24s3.667-.012 4.947-.072c4.358-.2 6.78-2.618 6.98-6.98C23.988 15.667 24 15.26 24 12s-.012-3.667-.072-4.947c-.2-4.358-2.618-6.78-6.98-6.98C15.667.012 15.26 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.88 1.44 1.44 0 000-2.88z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22.23 0H1.77C.79 0 0 .79 0 1.77v20.46C0 23.21.79 24 1.77 24h11.23v-9.3H9.69V11.1h3.31V8.56c0-3.28 1.95-5.09 4.95-5.09 1.42 0 2.94.26 2.94.26v3.08h-1.58c-1.63 0-2.1.97-2.1 2.02v2.44h3.48l-.56 3.6H17v9.3h5.23c.98 0 1.77-.79 1.77-1.77V1.77C24 .79 23.21 0 22.23 0z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-6 border-t border-gray-700 text-center text-sm text-gray-400">
                <p>&copy; 2025 Banua Kursus. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>
</template>
