<template>
    <header class="bg-white/70 backdrop-blur-lg shadow sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a :href="route('welcome')" class="ms-6">
                <img src="/img/banuacourse-icon.png" alt="Banua Kursus" width="100" />
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-12 text-lg font-medium">
                <ul class="flex items-center space-x-10">
                    <li>
                        <Link :href="route('welcome')" class="nav-link">Beranda</Link>
                    </li>
                    <li>
                        <Link :href="route('catalog')" class="nav-link">Katalog Kursus</Link>
                    </li>
                    <li>
                        <Link :href="route('aboutus')" class="nav-link">Tentang Kami</Link>
                    </li>
                    <li>
                        <Link :href="route('contact')" class="nav-link">Kontak</Link>
                    </li>
                </ul>

                <!-- Auth Buttons -->
                <div v-if="canLogin" class="flex items-center space-x-4 ml-10">
                    <template v-if="$page.props.auth.user">
                        <!-- Profile Dropdown -->
                        <div class="relative">
                            <button @click="dropdownToggle" class="flex items-center space-x-2 focus:outline-none">
                                <img src="https://i.pravatar.cc/150?img=5" alt="Admin"
                                    class="w-10 h-10 rounded-full border-2 border-gray-300">
                            </button>
                            <transition name="fade">
                                <div v-if="dropdown"
                                    class="absolute right-0 mt-3 w-56 bg-white rounded-xl shadow-xl ring-1 ring-gray-200 overflow-hidden">
                                    <!-- Dashboard -->
                                    <Link v-if="$page.props.auth.user.role_id != 4"
                                        :href="route('dashboard', $page.props.auth.user.id)"
                                        class="block px-4 py-3 text-gray-700 hover:bg-gray-100">
                                    Dashboard
                                    </Link>
                                    <!-- Account Settings -->
                                    <Link :href="route('profile.edit')"
                                        class="block px-4 py-3 text-gray-700 hover:bg-gray-100">
                                    Account Settings
                                    </Link>
                                    <!-- Support -->
                                    <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-gray-100">
                                        Support
                                    </a>
                                    <!-- Sign Out -->
                                    <Link :href="route('logout')" method="post"
                                        class="block px-4 py-3 text-red-600 hover:bg-gray-100">
                                    Sign out
                                    </Link>
                                </div>
                            </transition>
                        </div>
                    </template>

                    <template v-else>
                        <Link :href="route('login')"
                            class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition">
                        Masuk
                        </Link>
                        <Link v-if="canRegister" :href="route('register')"
                            class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">Daftar
                        </Link>
                    </template>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button @click="toggleMobile"
                    class="relative w-8 h-8 flex flex-col justify-center items-center space-y-1 focus:outline-none">
                    <!-- Bar 1 -->
                    <span :class="[
                        'block h-1 w-8 bg-gray-700 rounded-full transform transition-all duration-300 ease-in-out',
                        isMobile ? 'rotate-45 translate-y-2' : ''
                    ]"></span>

                    <!-- Bar 2 -->
                    <span :class="[
                        'block h-1 w-8 bg-gray-700 rounded-full transform transition-all duration-300 ease-in-out',
                        isMobile ? 'opacity-0' : ''
                    ]"></span>

                    <!-- Bar 3 -->
                    <span :class="[
                        'block h-1 w-8 bg-gray-700 rounded-full transform transition-all duration-300 ease-in-out',
                        isMobile ? '-rotate-45 -translate-y-2' : ''
                    ]"></span>
                </button>
            </div>

        </nav>

        <!-- Mobile Menu -->
        <transition name="slide">
            <div v-if="isMobile"
                class="md:hidden bg-gradient-to-br from-white to-gray-100 px-8 pt-6 pb-10 space-y-6 shadow-2xl rounded-b-2xl">
                <!-- Navigation Links -->
                <div class="flex flex-col space-y-6 text-lg font-semibold">
                    <Link :href="route('welcome')" class="flex items-center text-gray-700 hover:text-indigo-600"
                        @click="toggleMobile">
                    Beranda
                    </Link>
                    <Link :href="route('catalog')" class="flex items-center text-gray-700 hover:text-indigo-600"
                        @click="toggleMobile">
                    Katalog Kursus
                    </Link>
                    <Link :href="route('aboutus')" class="flex items-center text-gray-700 hover:text-indigo-600"
                        @click="toggleMobile">
                    Tentang Kami
                    </Link>
                    <Link :href="route('contact')" class="flex items-center text-gray-700 hover:text-indigo-600"
                        @click="toggleMobile">
                    Kontak
                    </Link>
                </div>

                <!-- Auth Buttons -->
                <div v-if="canLogin" class="mt-8 pt-6 border-t border-gray-300 space-y-4">
                    <template v-if="$page.props.auth.user">
                        <Link v-if="$page.props.auth.user.role_id != 4"
                            :href="route('dashboard', $page.props.auth.user.id)"
                            class="block text-gray-700 hover:text-indigo-600 text-lg font-medium" @click="toggleMobile">
                        Dashboard</Link>
                        <Link :href="route('logout')" method="post"
                            class="block text-red-600 hover:text-red-800 text-lg font-medium" @click="toggleMobile">
                        Keluar</Link>
                    </template>

                    <template v-else>
                        <Link :href="route('login')"
                            class="block text-gray-700 hover:text-indigo-600 text-lg font-medium" @click="toggleMobile">
                        Masuk</Link>
                        <Link v-if="canRegister" :href="route('register')"
                            class="block bg-indigo-600 text-white text-center py-3 rounded-lg hover:bg-indigo-700 transition"
                            @click="toggleMobile">
                        Daftar
                        </Link>
                    </template>
                </div>
            </div>
        </transition>

    </header>
</template>


<script setup>
import { ref } from "vue";

const dropdown = ref(false)
const isMobile = ref(false)

function toggleMobile() {
    isMobile.value = !isMobile.value
}

function dropdownToggle() {
    dropdown.value = !dropdown.value
}

const props = defineProps({
    canLogin: Boolean,
    canRegister: Boolean
})
</script>

<style scoped>
/* Hover underline sliding effect */
.nav-link {
    position: relative;
    padding-bottom: 4px;
    color: #374151;
    cursor: pointer;
    transition: color 0.3s;
}

.nav-link::after {
    content: '';
    position: absolute;
    width: 0%;
    height: 2px;
    left: 0;
    bottom: 0;
    background-color: #4f46e5;
    transition: width 0.3s;
}

.nav-link:hover {
    color: #4f46e5;
}

.nav-link:hover::after {
    width: 100%;
}

/* Fade Dropdown Animation */
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.2s ease;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}

/* Mobile Menu Slide from Top */
.slide-enter-active,
.slide-leave-active {
    transition: max-height 0.3s ease, opacity 0.3s ease;
}

.slide-enter-from,
.slide-leave-to {
    max-height: 0;
    opacity: 0;
}
</style>
