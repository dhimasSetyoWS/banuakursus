<script setup>
    import Navbar from "@/Components/Navbar.vue";

    defineProps({
        course: Object,
        canLogin: Boolean,
        canRegister: Boolean,
        module: Array,
    })

    function formatPrice(price) {
        const formatter = new Intl.NumberFormat('id-ID', {
            style: "currency",
            currency: "IDR",
            minimumFractionDigits: 0,
        });
        return formatter.format(price);
    }

</script>
<template>

    <Head title="Detail Course" />
    <Navbar :canLogin="canLogin" :canRegister="canRegister" />
    <main class="container mx-auto px-6 py-8 md:py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-x-12">

            <div class="lg:col-span-2 mb-8 lg:mb-0">

                <div class="mb-6">
                    <!-- <span
                        class="inline-block px-3 py-1 text-xs font-semibold text-indigo-700 bg-indigo-100 rounded-full mb-2">Marketing</span> -->
                    <h1 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">
                        {{course.data.title_course}}</h1>
                    <p class="mt-3 text-lg text-slate-600">{{course.data.description}}.</p>
                    <div class="mt-4 flex items-center gap-4 text-sm">
                        <div class="flex items-center gap-2">
                            <img src="https://i.pravatar.cc/150?img=12" class="w-8 h-8 rounded-full" alt="Budi Santoso">
                            <span class="font-medium">{{course.created_by}}</span>
                        </div>
                        <div class="flex items-center gap-1 text-yellow-500">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <span class="font-bold text-slate-700">4.9</span>
                            <span class="text-slate-500">(1,250 ulasan)</span>
                        </div>
                    </div>
                </div>

                <div class="lg:hidden mb-8">
                    <div class="bg-white rounded-lg border border-slate-200 shadow-lg overflow-hidden">
                        <img src="https://placehold.co/600x340/6366f1/ffffff?text=Video+Kursus" alt="Course thumbnail"
                            class="w-full object-cover">
                        <div class="p-6">
                            <h2 class="text-3xl font-bold text-slate-900 mb-4">{{formatPrice(course.data.price)}}</h2>
                            <button
                                class="w-full py-3 px-5 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors">
                                Daftar Kursus Sekarang
                            </button>
                            <ul class="mt-4 space-y-2 text-sm text-slate-600">
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-indigo-500 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg> 20 Jam Video On-demand</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-indigo-500 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                    </svg> 32 Artikel & Materi</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-indigo-500 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                    </svg> Materi Dapat Diunduh</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-indigo-500 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                                    </svg> Akses Selamanya</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-indigo-500 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.5 18.75h-9a9 9 0 1 0 9 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 12.75a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 15.75a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                                    </svg> Sertifikat Kelulusan</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-slate-200 rounded-lg p-6 mb-8">
                    <h2 class="text-xl font-bold text-slate-900 mb-4">Deskripsi Kursus</h2>
                    <div class="space-y-4 text-slate-600 prose">
                        <p>Selamat datang di kursus "Digital Marketing untuk Pemula"! Dalam kursus komprehensif ini,
                            Anda akan dibimbing langkah demi langkah untuk memahami dunia pemasaran digital yang
                            dinamis. Kami akan membahas semua yang perlu Anda ketahui, mulai dari Search Engine
                            Optimization (SEO), Social Media Marketing (SMM), hingga Google Ads dan Email Marketing.</p>
                        <p>Kursus ini dirancang khusus untuk pemula tanpa pengalaman sebelumnya. Di akhir kursus, Anda
                            tidak hanya akan menguasai teori, tetapi juga mampu membuat dan menjalankan kampanye
                            marketing Anda sendiri secara efektif. Bergabunglah sekarang dan ambil langkah pertama
                            menuju karir digital yang cemerlang!</p>
                    </div>
                </div>
                <div>
                    <h2 class="text-xl font-bold text-slate-900 mb-4">Materi Kursus</h2>
                    <div class="space-y-3">
                        <div v-if="course.module.length != 0" v-for="value, index in course.module" class="border border-slate-200 rounded-lg">
                            <div
                                class="w-full flex justify-between items-center p-4 text-left font-semibold bg-slate-100 hover:bg-slate-200">
                                <span>Modul {{index + 1}} : {{value.module_name}}</span>
                            </div>
                        </div>
                        <p v-else class="text-slate-500">Maaf kursus ini belum mempunyai materi</p>
                    </div>
                </div>

            </div>

            <div class="hidden lg:block">
                <div class="lg:sticky top-24">
                    <div class="bg-white rounded-lg border border-slate-200 shadow-lg overflow-hidden">
                        <img src="https://placehold.co/600x340/6366f1/ffffff?text=Video+Kursus" alt="Course thumbnail"
                            class="w-full object-cover">
                        <div class="p-6">
                            <h2 class="text-3xl font-bold text-slate-900 mb-4">{{formatPrice(course.data.price)}}</h2>
                            <button
                                class="w-full py-3 px-5 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors">
                                Daftar Kursus Sekarang
                            </button>
                            <h3 class="text-md font-semibold mt-6 mb-2">Kursus ini termasuk:</h3>
                            <ul class="space-y-2 text-sm text-slate-600">
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-indigo-500 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg> 20 Jam Video On-demand</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-indigo-500 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                    </svg> 32 Artikel & Materi</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-indigo-500 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                    </svg> Materi Dapat Diunduh</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-indigo-500 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                                    </svg> Akses Selamanya</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-indigo-500 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.5 18.75h-9a9 9 0 1 0 9 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 12.75a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 15.75a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                                    </svg> Sertifikat Kelulusan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
</template>
