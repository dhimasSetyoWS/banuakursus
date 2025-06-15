<template>
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4 grid grid-cols-2 md:grid-cols-3 items-center">
            <a href="#" class="text-2xl font-bold text-indigo-600">BanuaKursus</a>

            <ul class="hidden md:flex items-center space-x-6">
                <li><Link :href="route('welcome')" class="text-gray-600 hover:text-indigo-600 transition-colors">Beranda</Link></li>
                <li><Link :href="route('catalog')" class="text-gray-600 hover:text-indigo-600 transition-colors">Katalog Kursus</Link></li>
                <li><a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors">Tentang Kami</a></li>
                <li><a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors">Kontak</a></li>
            </ul>

            <div v-if="canLogin" class="hidden md:flex items-center justify-end space-x-4">
                <div v-if="$page.props.auth.user" class="flex gap-3">
                    <Link v-if="$page.props.auth.user.role_id != 4" :href="route('dashboard')"
                        class="text-indigo-600 px-4 py-2 rounded-md transition-colors">
                    Dashboard</Link>
                    <div class="relative inline-block">
                        <a href="#" @click="dropdownToggle"
                            class="flex items-center space-x-2 rounded p-2 hover:bg-slate-100">
                            <img src="https://i.pravatar.cc/150?img=5" alt="Admin" class="w-9 h-9 rounded-full">
                        </a>
                        <!-- Dropdown -->
                        <div :class="{ 'hidden': !dropdown }"
                            class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-hidden dropdown"
                            role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                                <Link :href="route('profile.edit')"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-slate-100" role="menuitem"
                                    tabindex="-1" id="menu-item-0">Account settings</Link>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-slate-100"
                                    role="menuitem" tabindex="-1" id="menu-item-1">Support</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-slate-100"
                                    role="menuitem" tabindex="-1" id="menu-item-2">License</a>
                                <Link :href="route('logout')" method="post"
                                    class="block w-full px-4 py-2 text-left text-sm text-red-700 hover:bg-slate-100"
                                    role="menuitem" tabindex="-1" id="menu-item-3">Sign out</Link>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-else>
                    <div v-if="$page.props.auth.user">
                        <Link v-if="canRegister" :href="route('profile.edit')"
                            class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors">
                        Profile</Link>
                    </div>
                    <div v-else>
                        <Link :href="route('login')" class="text-gray-600 px-4 py-2 rounded-md">Masuk</Link>
                        <Link v-if="canRegister" :href="route('register')"
                            class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors">Daftar</Link>
                    </div>
                </div>
            </div>
            <!-- Mobile Nav Button -->
            <div class="md:hidden flex justify-end">
                <button @click="toggleMobile" id="mobile-menu-button">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </nav>
        <div id="mobile-menu" class="md:hidden px-6 pt-2 pb-4" :class="{ 'hidden': !isMobile }">
            <Link :href="route('welcome')" class="block py-2 text-gray-600 hover:text-indigo-600">Beranda</Link>
            <Link :href="route('catalog')" class="block py-2 text-gray-600 hover:text-indigo-600">Katalog Kursus</Link>
            <a href="#" class="block py-2 text-gray-600 hover:text-indigo-600">Tentang Kami</a>
            <a href="#" class="block py-2 text-gray-600 hover:text-indigo-600">Kontak</a>
            <div v-if="canLogin" class="mt-4 pt-4 border-t border-gray-200">
                <div v-if="$page.props.auth.user">
                    <Link v-if="$page.props.auth.user.role_id != 4" :href="route('dashboard')"
                        class="block w-full text-center py-2 text-gray-600 hover:text-indigo-600">Dashboard</Link>
                    <Link v-else :href="route('profile.edit')"
                        class="block w-full text-center py-2 text-gray-600 hover:text-indigo-600">Profile</Link>
                    <Link :href="route('logout')" method="post"
                        class="block w-full text-center py-2 text-red-600 hover:text-red-800">Keluar</Link>
                </div>

                <div v-else>
                    <Link v-if="canRegister" :href="route('register')"
                        class="block w-full text-center mt-2 bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors">
                    Daftar</Link>
                    <Link :href="route('login')"
                        class="block w-full text-center mt-2 text-gray-600 px-4 py-2 rounded-md">Masuk</Link>
                </div>
            </div>
        </div>
    </header>

</template>

<script setup>
import { ref } from "vue";

const dropdown = ref(false)
const isMobile = ref(false);

function toggleMobile() {
    isMobile.value = !isMobile.value
}

const props = defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    }
});

function dropdownToggle() {
    dropdown.value = !dropdown.value
    console.log('toggle')
}
</script>

<style></style>
