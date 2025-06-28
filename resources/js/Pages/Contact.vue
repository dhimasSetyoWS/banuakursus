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
    <section class="bg-white py-24 text-center shadow-sm fade-up">
        <div class="max-w-5xl mx-auto px-6">
            <h1 class="text-5xl font-extrabold mb-4 text-gray-900">Hubungi <span class="text-blue-600">Banua
                    Kursus</span></h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Kami siap membantu Anda seputar program, kemitraan, dan konsultasi. Hubungi kami dan mari bertumbuh
                bersama!
            </p>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-6xl mx-auto px-8 grid md:grid-cols-2 gap-16 items-start fade-up">
            <!-- Info Card -->
            <div class="space-y-6">
                <h2 class="text-2xl font-bold mb-4">Informasi Kontak</h2>
                <div class="space-y-4">
                    <div class="flex items-start space-x-4 bg-white p-5 rounded-2xl shadow hover:shadow-lg transition">
                        <i class="fas fa-phone text-blue-600 text-2xl mt-1"></i>
                        <div>
                            <h4 class="font-semibold text-gray-900">Telepon</h4>
                            <p class="text-gray-600">+62 822-4533-6040</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4 bg-white p-5 rounded-2xl shadow hover:shadow-lg transition">
                        <i class="fas fa-envelope text-blue-600 text-2xl mt-1"></i>
                        <div>
                            <h4 class="font-semibold text-gray-900">Email</h4>
                            <p class="text-gray-600">admin@banuakursus.id</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4 bg-white p-5 rounded-2xl shadow hover:shadow-lg transition">
                        <i class="fas fa-map-marker-alt text-blue-600 text-2xl mt-1"></i>
                        <div>
                            <h4 class="font-semibold text-gray-900">Alamat</h4>
                            <p class="text-gray-600">
                                Jl. Tadulako kelurahan No.35, Besusu Tengah, Kec. Palu Tim., Kota Palu, Sulawesi Tengah
                                94112
                            </p>
                        </div>
                    </div>
                </div>

                <!-- MAP KECIL -->
                <div class="mt-10 rounded-xl overflow-hidden shadow">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.333780842144!2d119.87407057501282!3d-0.8929559990983936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8bedc0398bbf61%3A0x6b38cb63e4e092c!2sTechno%20Celebes!5e0!3m2!1sid!2sid!4v1751111721491!5m2!1sid!2sid"
                        width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <!-- Sosial Media -->
                <div class="mt-10">
                    <h3 class="font-bold mb-4 text-gray-800">Ikuti Kami</h3>
                    <div class="flex flex-wrap gap-4">
                        <a href="#"
                            class="flex items-center space-x-2 bg-blue-50 hover:bg-blue-100 text-blue-600 px-4 py-2 rounded-xl shadow-sm transition">
                            <i class="fab fa-facebook-square text-xl"></i>
                            <span class="hidden sm:inline font-medium">Facebook</span>
                        </a>
                        <a href="#"
                            class="flex items-center space-x-2 bg-pink-50 hover:bg-pink-100 text-pink-500 px-4 py-2 rounded-xl shadow-sm transition">
                            <i class="fab fa-instagram text-xl"></i>
                            <span class="hidden sm:inline font-medium">Instagram</span>
                        </a>
                        <a href="#"
                            class="flex items-center space-x-2 bg-red-50 hover:bg-red-100 text-red-600 px-4 py-2 rounded-xl shadow-sm transition">
                            <i class="fab fa-youtube text-xl"></i>
                            <span class="hidden sm:inline font-medium">YouTube</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Formulir Kontak -->
            <div class="bg-white p-8 rounded-2xl shadow-lg fade-up">
                <h2 class="text-2xl font-bold mb-6">Kirim Pesan</h2>
                <form class="space-y-5">
                    <div>
                        <label class="block font-medium mb-1">Nama Lengkap</label>
                        <input type="text" placeholder="Nama Kamu"
                            class="w-full px-4 py-2 border rounded-xl focus:ring-2 focus:ring-blue-500 outline-none" />
                    </div>
                    <div>
                        <label class="block font-medium mb-1">Email</label>
                        <input type="email" placeholder="Email Aktif"
                            class="w-full px-4 py-2 border rounded-xl focus:ring-2 focus:ring-blue-500 outline-none" />
                    </div>
                    <div>
                        <label class="block font-medium mb-1">Subjek</label>
                        <input type="text" placeholder="Contoh: Pendaftaran Kelas"
                            class="w-full px-4 py-2 border rounded-xl focus:ring-2 focus:ring-blue-500 outline-none" />
                    </div>
                    <div>
                        <label class="block font-medium mb-1">Pesan</label>
                        <textarea rows="5" placeholder="Tulis pesan Anda..."
                            class="w-full px-4 py-2 border rounded-xl focus:ring-2 focus:ring-blue-500 outline-none"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl transition shadow">
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </section>

    <footer class="bg-white border-t py-6 text-center text-sm text-gray-500">
        © 2025 Banua Kursus. All rights reserved.
    </footer>
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
