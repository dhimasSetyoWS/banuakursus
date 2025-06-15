<script setup>
import { Head } from "@inertiajs/vue3";

import { ref } from "vue";
const navHidden = ref(true)
const dropdown = ref(false)
function showHidden() {
    navHidden.value = !navHidden.value
}

function dropdownToggle() {
    dropdown.value = !dropdown.value
    console.log('toggle')
}
</script>
<template>

    <Head title="Dashboard" />
    <div class="text-slate-800">
        <div class="flex h-screen bg-slate-50">
            <aside :class="{ 'hidden': navHidden }"
                class="absolute md:relative h-screen md:h-auto md:block w-64 flex-shrink-0 bg-white border-r border-slate-200 z-[999] md:z-0">
                <div class="flex flex-col h-full">
                    <button @click="showHidden"
                        class="block md:hidden absolute right-1 mt-2 border border-slate-200 rounded">
                        <img src="https://www.svgrepo.com/show/521564/close.svg" alt="" width="25px"
                            style="rotate : 180deg">
                    </button>
                    <div class="h-16 flex items-center justify-center border-b border-slate-200">
                        <Link :href="route('welcome')" class="text-xl font-bold text-indigo-600">BanuaKursus</Link>
                    </div>
                    <!-- Sidebar -->
                    <nav class="flex-1 px-4 py-4 space-y-2">
                        <div v-if="$page.props.auth.user.role_id != 4">
                            <Link :href="route('dashboard')"
                                class="flex items-center px-4 py-2 text-sm font-medium rounded-md hover:bg-slate-100" :class="$page.url == '/dashboard' ? 'bg-indigo-50  text-indigo-600' : 'text-slate-600'">
                                <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 4h16v4H4z" />
                                    <path d="M4 12h16v8H4z" />
                                </svg>
                                Dashboard
                            </Link>
                            <Link :href="route('dashboard.manage' , $page.props.auth.user.id)"
                                class="flex items-center px-4 py-2 text-sm font-medium hover:bg-slate-100 rounded-md" :class="$page.url == '/dashboard/manage-course' ? 'bg-indigo-50 text-indigo-600' : 'text-slate-600'">
                                <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                    <path
                                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-9.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                </svg>
                                Manajemen Kursus
                            </Link>
                            <a href="#"
                                class="flex items-center px-4 py-2 text-sm font-medium text-slate-600 hover:bg-slate-100 rounded-md">
                                <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                                Siswa
                            </a>
                            <a href="#"
                                class="flex items-center px-4 py-2 text-sm font-medium text-slate-600 hover:bg-slate-100 rounded-md">
                                <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                                </svg>
                                Analitik
                            </a>
                        </div>
                        <div v-else>
                            <Link :href="route('welcome')"
                                class="flex items-center px-4 py-2 text-sm font-medium hover:bg-slate-100 rounded-md" :class="$page.url == '/dashboard/my-course' ? 'bg-indigo-50 text-indigo-600' : 'text-slate-600'">
                                <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 0 2l-.15.08a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.38a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1 0-2l.15-.08a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                                Kursus Saya
                            </Link>
                        </div>
                        <Link :href="route('profile.edit')"
                            class="flex items-center px-4 py-2 text-sm font-medium hover:bg-slate-100 rounded-md" :class="$page.url == '/profile' ? 'bg-indigo-50 text-indigo-600' : 'text-slate-600'">
                            <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 0 2l-.15.08a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.38a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1 0-2l.15-.08a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                            Pengaturan Akun
                        </Link>
                    </nav>
                </div>
            </aside>

            <div class="flex-1 flex flex-col overflow-hidden">
                <header class="h-16 flex items-center justify-between px-6 bg-white border-b border-slate-200">
                    <div class="flex items-center">
                        <!-- Mobile Button -->
                        <div class="md:hidden me-6">
                            <button @click="showHidden" id="mobile-menu-button">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" style="rotate: 180deg;">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M4 6h16M4 12h16m-7 6h7"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="relative">
                            <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8" />
                                <path d="m21 21-4.3-4.3" />
                            </svg>
                            <input type="text" placeholder="Cari kursus, siswa..."
                                class="w-64 pl-10 pr-4 py-2 text-sm border border-slate-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="p-2 rounded-full hover:bg-slate-100">
                            <svg class="w-6 h-6 text-slate-500" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                                <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                            </svg>
                        </button>
                        <!-- Profile -->
                        <div class="relative inline-block">
                            <a href="#" @click="dropdownToggle"
                                class="flex items-center space-x-2 rounded p-2 hover:bg-slate-100">
                                <img src="https://i.pravatar.cc/150?img=5" alt="Admin" class="w-9 h-9 rounded-full">
                                <div class="hidden md:block text-sm">
                                    <p class="font-semibold">{{ $page.props.auth.user.name }}</p>
                                    <p class="text-slate-500">{{ $page.props.auth.user.email }}</p>
                                </div>
                                <svg :class="{ 'dropdown-open': dropdown }"
                                    class="dropdown-icon -mr-1 size-5 text-gray-400" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" />
                                </svg>
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
                                        class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-slate-100"
                                        role="menuitem" tabindex="-1" id="menu-item-3">Sign out</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Slot -->
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-100 p-6">
                    <slot></slot>
                </main>
                <!-- Slot -->
            </div>
        </div>
    </div>
</template>

<style scoped>
.dropdown-open {
    rotate: -90deg;
}

.dropdown-icon {
    transition: all 0.3s ease-in-out;
}

.dropdown {
    animation: fadeIn 0.3s;
}
</style>
