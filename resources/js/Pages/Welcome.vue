<script setup>
import Footer from "@/Components/Footer.vue";
import Navbar from "@/Components/Navbar.vue";
const props = defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
})
const a = props.canLogin
const b = props.canRegister
</script>

<template>

    <Head title="Welcome" />
    <Navbar :canLogin="a" :canRegister="b" />
    <main class="fade-up">
        <section class="bg-gray-50">
            <div class="container mx-auto px-6 py-20 text-center">
                <h1 class="text-4xl md:text-6xl font-bold leading-tight">
                    Kembangkan Potensimu, <br class="hidden md:block"> Bangun Masa Depan di <span
                        class="text-indigo-600">Banua Kursus</span>
                </h1>
                <p class="mt-6 text-lg text-gray-600 max-w-3xl mx-auto">
                    Platform kursus online untuk memberdayakan talenta lokal dengan keahlian paling relevan di era
                    digital. Belajar dari praktisi terbaik, kapan saja dan di mana saja.
                </p>
                <div class="mt-8 flex justify-center items-center space-x-4">
                    <Link :href="route('catalog')"
                        class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-indigo-700 transition-transform transform hover:scale-105">
                    Lihat Semua Kursus &rarr;
                    </Link>
                    <a href="#" class="text-gray-600 font-semibold hover:text-indigo-600">
                        Pelajari lebih lanjut
                    </a>
                </div>
            </div>
        </section>

        <section class="container mx-auto px-6 py-16">
            <h2 class="text-3xl font-bold text-center mb-12">Mengapa Memilih Banua Kursus?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <div class="p-6 bg-white rounded-lg">
                    <div class="flex justify-center items-center mb-4">
                        <svg class="w-12 h-12 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-9.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-9.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Kurikulum Relevan</h3>
                    <p class="text-gray-600">Materi disusun oleh ahli industri untuk menjawab kebutuhan pasar kerja saat
                        ini.</p>
                </div>
                <div class="p-6 bg-white rounded-lg">
                    <div class="flex justify-center items-center mb-4">
                        <svg class="w-12 h-12 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Instruktur Ahli</h3>
                    <p class="text-gray-600">Belajar langsung dari praktisi terbaik di bidangnya yang siap membimbing
                        Anda.</p>
                </div>
                <div class="p-6 bg-white rounded-lg">
                    <div class="flex justify-center items-center mb-4">
                        <svg class="w-12 h-12 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Belajar Fleksibel</h3>
                    <p class="text-gray-600">Akses materi kapan pun dan di mana pun. Atur ritme belajarmu sendiri.</p>
                </div>
                <div class="p-6 bg-white rounded-lg">
                    <div class="flex justify-center items-center mb-4">
                        <svg class="w-12 h-12 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Komunitas Solid</h3>
                    <p class="text-gray-600">Bergabung dengan jaringan sesama pembelajar untuk berdiskusi dan
                        berkolaborasi.</p>
                </div>
            </div>
        </section>

        <section class="bg-gray-50">
            <div class="container mx-auto px-6 py-16">
                <h2 class="text-3xl font-bold text-center mb-12">Jelajahi Kursus Terpopuler Kami</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow">
                        <img src="https://placehold.co/600x400/6366f1/ffffff?text=Digital+Marketing"
                            alt="Digital Marketing Course" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Digital Marketing untuk Pemula</h3>
                            <p class="text-gray-600 mb-4">Pelajari cara membangun strategi pemasaran digital dari nol,
                                mulai dari SEO, SEM, hingga media sosial.</p>
                            <div class="flex items-center justify-between text-sm text-gray-500">
                                <span>Instruktur: Budi Santoso</span>
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    4.8
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow">
                        <img src="https://placehold.co/600x400/8b5cf6/ffffff?text=UI/UX+Design"
                            alt="UI/UX Design Course" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">UI/UX Design: Dari Riset hingga Prototipe</h3>
                            <p class="text-gray-600 mb-4">Kuasai proses desain aplikasi yang ramah pengguna dengan
                                Figma. Cocok untuk kamu yang ingin jadi desainer produk.</p>
                            <div class="flex items-center justify-between text-sm text-gray-500">
                                <span>Instruktur: Citra Lestari</span>
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    4.9
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow">
                        <img src="https://placehold.co/600x400/10b981/ffffff?text=Public+Speaking"
                            alt="Public Speaking Course" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Mahir Public Speaking & Komunikasi</h3>
                            <p class="text-gray-600 mb-4">Tingkatkan kepercayaan diri dan kemampuan berbicaramu di depan
                                umum untuk menunjang karir dan bisnismu.</p>
                            <div class="flex items-center justify-between text-sm text-gray-500">
                                <span>Instruktur: Rahmat Hidayat</span>
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    4.7
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-12">
                    <Link :href="route('catalog')"
                        class="bg-white text-indigo-600 px-6 py-3 rounded-lg font-semibold border border-indigo-600 hover:bg-indigo-50 transition-colors">
                    Lihat Semua Katalog Kursus
                    </Link>
                </div>
            </div>
        </section>

        <section class="container mx-auto px-6 py-16">
            <h2 class="text-3xl font-bold text-center mb-12">Mulai Belajar dalam 3 Langkah Mudah</h2>
            <div class="relative">
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-0.5 bg-gray-200"
                    style="transform: translateY(-50%);"></div>

                <div class="relative flex flex-col md:flex-row justify-between items-center space-y-8 md:space-y-0">
                    <div class="text-center w-full md:w-1/3 z-10">
                        <div
                            class="mx-auto w-16 h-16 flex items-center justify-center bg-indigo-100 text-indigo-600 text-2xl font-bold rounded-full border-4 border-white">
                            1</div>
                        <h3 class="mt-4 text-xl font-semibold">Pilih Kursus</h3>
                        <p class="text-gray-600 mt-2">Jelajahi katalog dan temukan kursus sesuai minat dan tujuan karir
                            Anda.</p>
                    </div>
                    <div class="text-center w-full md:w-1/3 z-10">
                        <div
                            class="mx-auto w-16 h-16 flex items-center justify-center bg-indigo-100 text-indigo-600 text-2xl font-bold rounded-full border-4 border-white">
                            2</div>
                        <h3 class="mt-4 text-xl font-semibold">Proses Belajar</h3>
                        <p class="text-gray-600 mt-2">Akses materi video, modul, dan kuis melalui platform kami yang
                            mudah digunakan.</p>
                    </div>
                    <div class="text-center w-full md:w-1/3 z-10">
                        <div
                            class="mx-auto w-16 h-16 flex items-center justify-center bg-indigo-100 text-indigo-600 text-2xl font-bold rounded-full border-4 border-white">
                            3</div>
                        <h3 class="mt-4 text-xl font-semibold">Dapatkan Sertifikat</h3>
                        <p class="text-gray-600 mt-2">Selesaikan kursus dan dapatkan sertifikat untuk meningkatkan nilai
                            profesional Anda.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-gray-50">
            <div class="container mx-auto px-6 py-16">
                <h2 class="text-3xl font-bold text-center mb-12">Apa Kata Mereka yang Telah Bergabung?</h2>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="bg-white p-8 rounded-lg shadow-sm relative">
                        <svg class="absolute top-4 left-4 w-12 h-12 text-indigo-100" fill="currentColor"
                            viewBox="0 0 32 32">
                            <path
                                d="M9.333 22.667h5.333v-8H9.333v8zm12 0h5.333v-8h-5.333v8zM4 22.667h2.667v-8H4v8zm19.333 0H26v-8h-2.667v8zM4 12h8v-2.667H4V12zm14.667 0h8v-2.667h-8V12z" />
                        </svg>
                        <blockquote class="text-gray-600 italic text-lg relative z-10">
                            "Materinya sangat relevan dengan dunia kerja. Setelah menyelesaikan kursus Digital Marketing
                            di Banua Kursus, saya berhasil mendapatkan pekerjaan pertama saya sebagai social media
                            specialist. Terima kasih!"
                        </blockquote>
                        <div class="flex items-center mt-6">
                            <img src="https://i.pravatar.cc/150?img=1" alt="Anisa Putri"
                                class="w-12 h-12 rounded-full object-cover">
                            <div class="ml-4">
                                <p class="font-semibold">Anisa Putri</p>
                                <p class="text-sm text-gray-500">Alumni Kursus Digital Marketing</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-8 rounded-lg shadow-sm relative">
                        <svg class="absolute top-4 left-4 w-12 h-12 text-indigo-100" fill="currentColor"
                            viewBox="0 0 32 32">
                            <path
                                d="M9.333 22.667h5.333v-8H9.333v8zm12 0h5.333v-8h-5.333v8zM4 22.667h2.667v-8H4v8zm19.333 0H26v-8h-2.667v8zM4 12h8v-2.667H4V12zm14.667 0h8v-2.667h-8V12z" />
                        </svg>
                        <blockquote class="text-gray-600 italic text-lg relative z-10">
                            "Instrukturnya sangat sabar dan suportif. Komunitasnya juga aktif, jadi saya bisa bertanya
                            dan berdiskusi dengan teman-teman lain. Pengalaman belajar yang luar biasa."
                        </blockquote>
                        <div class="flex items-center mt-6">
                            <img src="https://i.pravatar.cc/150?img=3" alt="Eko Prasetyo"
                                class="w-12 h-12 rounded-full object-cover">
                            <div class="ml-4">
                                <p class="font-semibold">Eko Prasetyo</p>
                                <p class="text-sm text-gray-500">Peserta Kursus Web Development</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-indigo-600">
            <div class="container mx-auto px-6 py-16 text-center text-white">
                <h2 class="text-4xl font-bold">Siap Mengubah Masa Depan Anda?</h2>
                <p class="mt-4 text-indigo-100 max-w-2xl mx-auto">
                    Jangan tunda lagi. Bergabunglah dengan ribuan talenta lokal lainnya dan mulailah perjalanan
                    belajarmu di Banua Kursus hari ini!
                </p>
                <div class="mt-8">
                    <Link :href="route('register')"
                        class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-bold hover:bg-indigo-100 transition-transform transform hover:scale-105">
                        Daftar Sekarang, Gratis!
                </Link>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <Footer />
    </main>
</template>


<style scoped>
.fade-up {
    animation: fadeUp 0.8s ease-in-out both;
}

@keyframes fadeUp {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }

    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
