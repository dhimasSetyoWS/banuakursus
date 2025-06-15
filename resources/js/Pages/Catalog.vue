<script setup>
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
    <main class="max-w-[1200px] mx-auto px-6 py-20">
        <section class="mb-24 max-w-3xl mx-auto text-left sm:text-center">
            <h2 class="font-poppins font-extrabold text-5xl text-[#1e293b] mb-4 leading-tight">Katalog Kursus <span
                    class="text-[#2563eb]">Banua</span> <span class="text-[#1e40af]">Kursus</span></h2>
            <p class="text-[#475569] text-lg leading-relaxed max-w-2xl mx-auto">
                Banua Kursus menyediakan kelas UI/UX design & Web Development untuk pemula ke mahir dengan materi
                terupdate dan instruktur berpengalaman. Temukan kelas yang tepat untuk mengembangkan skill kamu!
            </p>
        </section>

        <!-- Popular Category -->
        <section id="courses" class="mt-8 mb-20">
            <h3 class="font-poppins font-semibold text-2xl text-black mb-8 border-b-4 border-black inline-block pb-2">
                Popular Category
            </h3>

            <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 sm:gap-8">
                <!-- UI/UX & Web Design-->
                <a href="#" aria-label="UI/UX & Web Design category">
                    <div class="interactive-card category-card">
                        <img alt="UI/UX & Web Design icon with blue background and white UI text" class="w-14 h-14"
                            width="56" height="56" src="https://buildwithangga.com/themes/front/images/ic_roadmap.svg"
                            loading="lazy" />
                        <div class="category-text select-none font-bold">
                            UI/UX & Web<br />
                            Design
                        </div>
                    </div>
                </a>

                <!-- Website Development -->
                <a href="#" aria-label="Website Development category">
                    <div class="interactive-card category-card">
                        <img alt="Website Development icon with green background and white W letter" class="w-14 h-14"
                            height="56" src="https://buildwithangga.com/themes/front/images/bwa-icon/ic_fedev.svg"
                            width="56" loading="lazy" />
                        <div class="category-text select-none font-bold">
                            Website<br />
                            Development
                        </div>
                    </div>
                </a>

                <!-- Mobile Development -->
                <a href="#" aria-label="Mobile Development category">
                    <div class="interactive-card category-card">
                        <img alt="Mobile Development icon with blue background and white M letter" class="w-14 h-14"
                            height="56" src="https://buildwithangga.com/themes/front/images/ic_flutter.svg" width="56"
                            loading="lazy" />
                        <div class="category-text select-none font-bold">
                            Mobile<br />
                            Development
                        </div>
                    </div>
                </a>

                <!-- Data Analysis -->
                <a href="#" aria-label="Data Analysis category">
                    <div class="interactive-card category-card">
                        <img alt="Data Analysis icon with purple background and white D letter" class="w-14 h-14"
                            height="56"
                            src="https://buildwithangga.com/themes/front/images/bwa-icon/ic_data_scientist.svg"
                            width="56" loading="lazy" />
                        <div class="category-text select-none font-bold">
                            Data<br />
                            Analysis
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <!-- Popular Tools -->
        <section class="mb-20">
            <h3 class="font-poppins font-semibold text-2xl text-black mb-8 border-b-4 border-black inline-block pb-2">
                Popular Tools
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 sm:gap-8">

                <!-- Figma -->
                <a href="#" aria-label="Figma tool">
                    <div class="interactive-card tool-card">
                        <img alt="Figma" class="w-14 h-14" height="56" src="figma.png" width="56" loading="lazy" />
                        <div>
                            <p class="tool-text select-none font-bold">Figma</p>
                            <p class="tool-subtext select-none font-bold">UI/UX Design</p>
                        </div>
                    </div>
                </a>

                <!-- Vue JS -->
                <a href="#" aria-label="Vue JS tool">
                    <div class="interactive-card tool-card">
                        <img alt="Vue JS" class="w-14 h-14" height="56" src="vuejs.png" width="56" loading="lazy" />
                        <div>
                            <p class="tool-text select-none font-bold">Vue JS</p>
                            <p class="tool-subtext select-none font-bold">Front-End Development</p>
                        </div>
                    </div>
                </a>

                <!-- Flutter -->
                <a href="#" aria-label="Flutter tool">
                    <div class="interactive-card tool-card">
                        <img alt="Flutter" class="w-14 h-14" height="56" src="flutter.png" width="56" loading="lazy" />
                        <div>
                            <p class="tool-text select-none font-bold">Flutter</p>
                            <p class="tool-subtext select-none font-bold">Mobile Development</p>
                        </div>
                    </div>
                </a>

                <!-- React JS -->
                <a href="#" aria-label="React JS tool">
                    <div class="interactive-card tool-card">
                        <img alt="React JS" class="w-14 h-14" height="56" src="Reactjs.png" width="56" loading="lazy" />
                        <div>
                            <p class="tool-text select-none font-bold">React JS</p>
                            <p class="tool-subtext select-none font-bold">Development</p>
                        </div>
                    </div>
                </a>

                <!-- Laravel -->
                <a href="#" aria-label="Laravel tool">
                    <div class="interactive-card tool-card">
                        <img alt="Laravel" class="w-14 h-14" height="56" src="laravel.png" width="56" loading="lazy" />
                        <div>
                            <p class="tool-text select-none font-bold">Laravel</p>
                            <p class="tool-subtext select-none font-bold">Back-End Development</p>
                        </div>
                    </div>
                </a>

                <!-- Eelementor -->
                <a href="#" aria-label="Elementor tool">
                    <div class="interactive-card tool-card">
                        <img alt="Elementor" class="w-14 h-14" height="56" src="elementor.png" width="56"
                            loading="lazy" />
                        <div>
                            <p class="tool-text select-none font-bold">Elementor</p>
                            <p class="tool-subtext select-none font-bold">Website Development</p>
                        </div>
                    </div>
                </a>

                <!-- WebFlow -->
                <a href="#" aria-label="Webflow tool">
                    <div class="interactive-card tool-card">
                        <img alt="Webflow" class="w-14 h-14" height="56" src="webflow.png" width="56" loading="lazy" />
                        <div>
                            <p class="tool-text select-none font-bold">Webflow</p>
                            <p class="tool-subtext select-none font-bold">Website Development</p>
                        </div>
                    </div>
                </a>

                <!-- Tailwind CSS -->
                <a href="#" aria-label="Tailwindcss tool">
                    <div class="interactive-card tool-card">
                        <img alt="Tailwindcss" class="w-10 h-10" height="56" src="tailwindcss.png" width="56"
                            loading="lazy" />
                        <div>
                            <p class="tool-text select-none font-bold">Tailwindcss</p>
                            <p class="tool-subtext select-none font-bold">Front-End Development</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <!-- Terbaru Dirilis -->
        <h3 class="font-poppins font-semibold text-2xl text-black mb-8 border-b-4 border-black inline-block pb-2">
            Terbaru Dirilis
        </h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

            <!-- 1 -->
            <a href="#"
                class="block bg-white rounded-xl shadow overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <img src="#" class="w-full h-[200px] object-cover" alt="Belajar Vue.js Dasar" />
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Belajar Vue.js Dasar</h3>
                    <div class="mt-2 text-sm text-gray-500 line-through">Rp 200.000</div>
                    <div class="text-base font-bold text-blue-600">Rp 120.000</div>
                </div>
            </a>

            <!-- 2 -->
            <a href="#"
                class="block bg-white rounded-xl shadow overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <img src="#" class="w-full h-[200px] object-cover" alt="Membangun REST API dengan Laravel" />
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Membangun REST API dengan Laravel</h3>
                    <div class="mt-2 text-sm text-gray-500 line-through">Rp 250.000</div>
                    <div class="text-base font-bold text-blue-600">Rp 150.000</div>
                </div>
            </a>

            <!-- 3 -->
            <a href="#"
                class="block bg-white rounded-xl shadow overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <img src="#" class="w-full h-[200px] object-cover" alt="React Native untuk Pemula" />
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">React Native untuk Pemula</h3>
                    <div class="mt-2 text-sm text-gray-500 line-through">Rp 300.000</div>
                    <div class="text-base font-bold text-blue-600">Rp 180.000</div>
                </div>
            </a>

            <!-- 4 -->
            <a href="#"
                class="block bg-white rounded-xl shadow overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <img src="#" class="w-full h-[200px] object-cover" alt="Desain Web Modern dengan Tailwind" />
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Desain Web Modern dengan Tailwind</h3>
                    <div class="mt-2 text-sm text-gray-500 line-through">Rp 180.000</div>
                    <div class="text-base font-bold text-blue-600">Rp 90.000</div>
                </div>
            </a>

            <!-- 5 -->
            <a href="#"
                class="block bg-white rounded-xl shadow overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <img src="#" class="w-full h-[200px] object-cover" alt="Fundamental Node.js & Express" />
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Fundamental Node.js & Express</h3>
                    <div class="mt-2 text-sm text-gray-500 line-through">Rp 220.000</div>
                    <div class="text-base font-bold text-blue-600">Rp 110.000</div>
                </div>
            </a>

            <!-- 6 -->
            <a href="#"
                class="block bg-white rounded-xl shadow overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <img src="#" class="w-full h-[200px] object-cover" alt="Dasar UI/UX untuk Developer" />
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Dasar UI/UX untuk Developer</h3>
                    <div class="mt-2 text-sm text-gray-500 line-through">Rp 180.000</div>
                    <div class="text-base font-bold text-blue-600">Rp 85.000</div>
                </div>
            </a>

            <!-- 7 -->
            <a href="#"
                class="block bg-white rounded-xl shadow overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <img src="#" class="w-full h-[200px] object-cover" alt="Next.js untuk Web App Profesional" />
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Next.js untuk Web App Profesional</h3>
                    <div class="mt-2 text-sm text-gray-500 line-through">Rp 280.000</div>
                    <div class="text-base font-bold text-blue-600">Rp 160.000</div>
                </div>
            </a>

            <!-- 8 -->
            <a href="#"
                class="block bg-white rounded-xl shadow overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <img src="#" class="w-full h-[200px] object-cover" alt="Otomatisasi dengan Python" />
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Otomatisasi dengan Python</h3>
                    <div class="mt-2 text-sm text-gray-500 line-through">Rp 190.000</div>
                    <div class="text-base font-bold text-blue-600">Rp 95.000</div>
                </div>
            </a>
        </div>
    </main>
</template>

<style scoped>
body {
    font-family: "Inter", sans-serif;
    background-color: white;
    min-height: 100vh;
    color: #1e293b;
}

h1,
h2 {
    font-family: "Poppins", sans-serif;
}

/* Popular Category & Tools base style */
.interactive-card {
    background-color: #f6fafa;
    /* very light blue-white */
    border-radius: 1rem;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
    border: 2px solid transparent;
    cursor: pointer;
}

.interactive-card:hover,
.interactive-card:focus-visible {
    border-color: #2563eb;
    box-shadow: 0 8px 20px rgba(37, 99, 235, 0.15);
    outline: none;
}

/* Popular Category and Tools inner spacing */
.category-card,
.tool-card {
    padding: 1.5rem 1.75rem;
    display: flex;
    align-items: center;
    gap: 1.25rem;
}

/* Text styling */
.category-text,
.tool-text {
    font-weight: 600;
    font-size: 1.125rem;
    /* text-lg */
    line-height: 1.3;
    color: #1e293b;
    user-select: none;
}

.tool-subtext {
    font-size: 0.75rem;
    /* text-xs */
    color: #94a3b8;
    user-select: none;
    margin-top: 0.125rem;
}

/* Footer */
footer {
    color: #64748b;
    font-size: 0.875rem;
    user-select: none;
}
</style>
