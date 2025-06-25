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

    <Head title="Catalog" />
    <Navbar :canLogin="a" :canRegister="b" />
    <main>
        <section class="py-24 px-6 md:px-10 bg-white">
            <div class="max-w-6xl mx-auto grid md:grid-cols-2 items-center gap-12">
                <div class="fade-up">
                    <h1 class="text-5xl md:text-5xl font-extrabold mb-6 text-gray-900 leading-tight">Tentang <span
                            class="text-blue-600">Banua Kursus</span></h1>
                    <p class="text-lg text-justify text-gray-600">
                        Banua Kursus adalah platform pembelajaran digital yang berkomitmen membentuk generasi unggul di
                        Indonesia Timur. Dengan pendekatan interaktif, fleksibel, dan berorientasi karir, kami
                        menyediakan
                        pengalaman belajar
                        yang relevan dan siap pakai di dunia nyata. Mulai dari web development, UI/UX, hingga data
                        science
                        semua tersedia untuk mendukung perkembangan skill digitalmu.
                    </p>
                </div>
                <div class="fade-up flex justify-center">
                    <img src="img/banuacourse-icon.png" alt="Team Banua"
                        class="p-6 w-full max-w-md ml-6 rounded-3xl shadow-xl object-cover" </div>
                </div>
        </section>

        <section class="bg-gradient-to-b from-blue-50 via-white to-blue-50 py-20 px-6 md:px-10">
            <div class="max-w-6xl mx-auto text-center">
                <h2
                    class="text-4xl font-bold text-gray-900 mb-16 relative inline-block after:block after:h-1 after:w-24 after:bg-blue-600 after:mt-4 after:mx-auto">
                    Kenapa Harus Banua Kursus?
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                    <div
                        class="p-6 bg-white rounded-xl shadow-lg hover:shadow-2xl transition border-t-4 border-blue-600">
                        <div class="text-blue-600 text-3xl mb-4"><i class="fas fa-user-tie"></i></div>
                        <h4 class="font-bold text-lg mb-2 text-gray-800">Mentor Profesional</h4>
                        <p class="text-gray-600">Dipandu oleh praktisi industri yang berpengalaman di bidangnya.</p>
                    </div>
                    <div
                        class="p-6 bg-white rounded-xl shadow-lg hover:shadow-2xl transition border-t-4 border-blue-600">
                        <div class="text-blue-600 text-3xl mb-4"><i class="fas fa-layer-group"></i></div>
                        <h4 class="font-bold text-lg mb-2 text-gray-800">Kurikulum Terstruktur</h4>
                        <p class="text-gray-600">Materi dari dasar sampai mahir, lengkap dan sistematis.</p>
                    </div>
                    <div
                        class="p-6 bg-white rounded-xl shadow-lg hover:shadow-2xl transition border-t-4 border-blue-600">
                        <div class="text-blue-600 text-3xl mb-4"><i class="fas fa-globe-asia"></i></div>
                        <h4 class="font-bold text-lg mb-2 text-gray-800">Fleksibel & Online</h4>
                        <p class="text-gray-600">Belajar kapan saja, di mana saja tanpa batasan.</p>
                    </div>
                    <div
                        class="p-6 bg-white rounded-xl shadow-lg hover:shadow-2xl transition border-t-4 border-blue-600">
                        <div class="text-blue-600 text-3xl mb-4"><i class="fas fa-certificate"></i></div>
                        <h4 class="font-bold text-lg mb-2 text-gray-800">Sertifikat Resmi</h4>
                        <p class="text-gray-600">Bukti nyata keahlianmu yang bisa ditunjukkan di CV dan LinkedIn.</p>
                    </div>
                    <div
                        class="p-6 bg-white rounded-xl shadow-lg hover:shadow-2xl transition border-t-4 border-blue-600">
                        <div class="text-blue-600 text-3xl mb-4"><i class="fas fa-briefcase"></i></div>
                        <h4 class="font-bold text-lg mb-2 text-gray-800">Fokus Karir</h4>
                        <p class="text-gray-600">Belajar sambil membangun portofolio untuk dunia kerja nyata.</p>
                    </div>
                    <div
                        class="p-6 bg-white rounded-xl shadow-lg hover:shadow-2xl transition border-t-4 border-blue-600">
                        <div class="text-blue-600 text-3xl mb-4"><i class="fas fa-infinity"></i></div>
                        <h4 class="font-bold text-lg mb-2 text-gray-800">Akses Selamanya</h4>
                        <p class="text-gray-600">Materi bisa dipelajari berulang tanpa batas waktu.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-white">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold mb-12 text-gray-900">Program Unggulan Kami</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Web Development -->
                    <div class="bg-gray-50 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all group text-left">
                        <div
                            class="bg-blue-100 w-14 h-14 flex items-center justify-center rounded-full text-blue-600 text-2xl mb-4 transition group-hover:bg-blue-200">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="font-semibold text-lg mb-2 text-gray-800">Web Development</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Bangun website dari nol hingga mahir dengan HTML, CSS, JS & framework modern.
                        </p>
                        <a href="#" class="text-blue-600 text-sm font-medium hover:underline">Lihat Detail</a>
                    </div>

                    <!-- UI/UX Design -->
                    <div class="bg-gray-50 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all group text-left">
                        <div
                            class="bg-blue-100 w-14 h-14 flex items-center justify-center rounded-full text-blue-600 text-2xl mb-4 transition group-hover:bg-blue-200">
                            <i class="fas fa-pencil-ruler"></i>
                        </div>
                        <h3 class="font-semibold text-lg mb-2 text-gray-800">UI/UX Design</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Desain tampilan & pengalaman pengguna menarik dengan Figma dan prinsip UX.
                        </p>
                        <a href="#" class="text-blue-600 text-sm font-medium hover:underline">Lihat Detail</a>
                    </div>

                    <!-- Data Science -->
                    <div class="bg-gray-50 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all group text-left">
                        <div
                            class="bg-blue-100 w-14 h-14 flex items-center justify-center rounded-full text-blue-600 text-2xl mb-4 transition group-hover:bg-blue-200">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="font-semibold text-lg mb-2 text-gray-800">Data Science</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Kuasai analisis data, Python, dan visualisasi untuk kebutuhan industri modern.
                        </p>
                        <a href="#" class="text-blue-600 text-sm font-medium hover:underline">Lihat Detail</a>
                    </div>

                    <!-- Mobile Development -->
                    <div class="bg-gray-50 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all group text-left">
                        <div
                            class="bg-blue-100 w-14 h-14 flex items-center justify-center rounded-full text-blue-600 text-2xl mb-4 transition group-hover:bg-blue-200">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="font-semibold text-lg mb-2 text-gray-800">Mobile Development</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Pelajari Flutter & React Native untuk membangun aplikasi mobile multiplatform.
                        </p>
                        <a href="#" class="text-blue-600 text-sm font-medium hover:underline">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-white">
            <div class="max-w-4xl mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-10">Pertanyaan Umum</h2>
                <div class="space-y-6">
                    <!-- FAQ Item -->
                    <details class="bg-blue-50 p-5 rounded-xl shadow-md group transition duration-500">
                        <summary class="cursor-pointer font-semibold text-blue-800 flex items-center justify-between">
                            <span><i class="fas fa-question-circle mr-2 text-blue-600"></i>Apakah program ini cocok
                                untuk
                                pemula?</span>
                            <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                        </summary>
                        <p class="mt-3 text-gray-700 text-sm">Ya, semua program kami dirancang untuk bisa diikuti oleh
                            pemula sekalipun tanpa latar belakang IT.</p>
                    </details>

                    <details class="bg-blue-50 p-5 rounded-xl shadow-md group transition duration-300">
                        <summary class="cursor-pointer font-semibold text-blue-800 flex items-center justify-between">
                            <span><i class="fas fa-certificate mr-2 text-blue-600"></i>Apakah saya akan mendapat
                                sertifikat?</span>
                            <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                        </summary>
                        <p class="mt-3 text-gray-700 text-sm">Tentu! Setelah menyelesaikan kelas, kamu akan mendapatkan
                            sertifikat resmi dari Banua Kursus.</p>
                    </details>

                    <details class="bg-blue-50 p-5 rounded-xl shadow-md group transition duration-300">
                        <summary class="cursor-pointer font-semibold text-blue-800 flex items-center justify-between">
                            <span><i class="fas fa-laptop mr-2 text-blue-600"></i>Bagaimana cara mengakses
                                materi?</span>
                            <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                        </summary>
                        <p class="mt-3 text-gray-700 text-sm">Setelah mendaftar, kamu bisa login dan mengakses seluruh
                            materi melalui dashboard online kami.</p>
                    </details>
                </div>
            </div>
        </section>

        <section class="py-20 bg-white">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold mb-6">Bonus & Promo Spesial</h2>
                <p class="text-lg mb-8">Nikmati berbagai keuntungan tambahan untuk setiap pendaftaran sekarang juga!</p>
                <div class="grid md:grid-cols-3 gap-6 text-left">
                    <!-- Bonus 1 -->
                    <div
                        class="bg-white text-blue-800 p-6 rounded-xl border border-5 border-blue-600 shadow hover:shadow-lg transition">
                        <div class="text-2xl mb-3"><i class="fas fa-gift"></i></div>
                        <h4 class="font-semibold mb-1">Free Konsultasi Karir</h4>
                        <p class="text-sm">Diskusi langsung dengan mentor untuk arah karirmu.</p>
                    </div>

                    <!-- Bonus 2 -->
                    <div
                        class="bg-white text-blue-800 p-6 rounded-xl border border-5 border-blue-600 shadow hover:shadow-lg transition">
                        <div class="text-2xl mb-3"><i class="fas fa-code"></i></div>
                        <h4 class="font-semibold mb-1">Bonus Mini Project</h4>
                        <p class="text-sm">Tambahan project untuk memperkuat portofolio.</p>
                    </div>

                    <!-- Bonus 3 -->
                    <div
                        class="bg-white text-blue-800 p-6 rounded-xl border border-5 border-blue-600 shadow hover:shadow-lg transition">
                        <div class="text-2xl mb-3"><i class="fas fa-percent"></i></div>
                        <h4 class="font-semibold mb-1">Diskon Hingga 30%</h4>
                        <p class="text-sm">Gunakan kode promo khusus selama periode tertentu.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white py-20">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold mb-8">Apa Pendapat Mereka Tentang Banua Kursus?</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <!-- Testimoni Card 1 -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-md transition text-left">
                        <div class="flex items-center gap-2 mb-2 text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="italic">“Materinya lengkap dan langsung bisa dipakai untuk kerja freelance!”</p>
                        <h4 class="mt-4 font-semibold">Febrian Fahrezi</h4>
                        <p class="text-sm text-gray-500">UI/UX Designer</p>
                    </div>

                    <!-- Testimoni Card 2 -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-md transition text-left">
                        <div class="flex items-center gap-2 mb-2 text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star-half-alt"></i>
                        </div>
                        <p class="italic">“Belajarnya fleksibel banget. Bisa sambil kerja dan tetap dapet sertifikat
                            resmi.”
                        </p>
                        <h4 class="mt-4 font-semibold">Dhimas Setyo</h4>
                        <p class="text-sm text-gray-500">Frontend Developer</p>
                    </div>

                    <!-- Testimoni Card 3 -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-md transition text-left">
                        <div class="flex items-center gap-2 mb-2 text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="italic">“Kurikulumnya rapi dan mudah dipahami. Nggak bikin bingung meskipun pemula.”
                        </p>
                        <h4 class="mt-4 font-semibold">Moh Fulan</h4>
                        <p class="text-sm text-gray-500">Data Analyst</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-blue-800 text-white py-20 text-center px-6 md:px-10">
            <h2 class="text-4xl font-bold mb-4">Mulai Perjalanan Belajarmu Hari Ini</h2>
            <p class="text-lg mb-6 max-w-2xl mx-auto">Gabung sekarang dan nikmati pengalaman belajar yang seru,
                profesional,
                dan siap pakai di dunia kerja.</p>
            <a :href="route('catalog')"
                class="inline-block px-8 py-3 bg-white text-blue-800 font-bold rounded-full hover:bg-blue-100 transition">Lihat
                Katalog Kursus</a>
        </section>
    </main>
    <Footer/>
</template>

<style scoped>
    .fade-up {
        transform: translateY(30px);
        opacity: 0;
        animation: fadeUp 1s ease-out forwards;
    }

    @keyframes fadeUp {
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
</style>
