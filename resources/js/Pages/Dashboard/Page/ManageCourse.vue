<script setup>
import Layout from "@/Pages/Dashboard/Layouts/Admin.vue";
import { Link, useForm } from "@inertiajs/vue3"
import { ref, defineProps } from "vue";
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';

const props = defineProps({
    courses : {
        type : Object
    }
});

const isModal = ref(false);
const form = useForm({
    title_course: '',
    description: '',
    price: '',
});

const formatter = new Intl.NumberFormat('id-ID', {
    style: "currency",
    currency: "IDR"
});

const formatted = ref("");

function formatPrice() {
    formatted.value = formatter.format(form.price)
}

const submit = () => {
    form.post(route('course.store'));
};


function toggleModal() {
    isModal.value = !isModal.value
}
</script>
<template>
    <Layout>
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6">
            <div>
                <h2 class="text-2xl font-bold text-slate-800">Daftar Kursus</h2>
                <p class="mt-1 text-sm text-slate-500">Kelola semua kursus yang ada di platform Banua Kursus.</p>
            </div>
            <div class="mt-4 sm:mt-0">
                <a @click="toggleModal" href="#"
                    class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Tambah Kursus Baru
                </a>
            </div>
        </div>

        <div class="mb-4 flex flex-col sm:flex-row items-center gap-4">
            <div class="relative w-full sm:w-auto sm:flex-1">
                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8" />
                    <path d="m21 21-4.3-4.3" />
                </svg>
                <input type="text" placeholder="Cari berdasarkan nama kursus..."
                    class="w-full pl-10 pr-4 py-2 text-sm border border-slate-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
        </div>

        <div class="bg-white rounded-lg border border-slate-200 shadow-sm">
            <div class="overflow-x-auto">
                <!-- Table List Kursus -->
                <table class="w-full min-w-[800px] text-sm text-left">
                    <thead class="bg-slate-50 text-slate-600">
                        <tr>
                            <th class="p-3 font-medium">Nama Kursus</th>
                            <th class="p-3 font-medium">Kategori</th>
                            <th class="p-3 font-medium">Harga</th>
                            <th class="p-3 font-medium">Jumlah Siswa</th>
                            <th class="p-3 font-medium">Status</th>
                            <th class="p-3 font-medium text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-slate-200 hover:bg-slate-50">
                            <td class="p-3">
                                <div class="flex items-center gap-3">
                                    <img src="https://placehold.co/100x60/6366f1/ffffff?text=DM" alt="Kursus"
                                        class="w-20 h-12 object-cover rounded-md">
                                    <span class="font-semibold">Digital Marketing untuk Pemula</span>
                                </div>
                            </td>
                            <td class="p-3">Marketing</td>
                            <td class="p-3">Rp 199.000</td>
                            <td class="p-3">152</td>
                            <td class="p-3">
                                <span
                                    class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">Published</span>
                            </td>
                            <td class="p-3">
                                <div class="flex items-center justify-center gap-2">
                                    <button
                                        class="p-2 text-slate-500 hover:text-indigo-600 hover:bg-slate-100 rounded-md"><svg
                                            class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg></button>
                                    <button
                                        class="p-2 text-slate-500 hover:text-red-600 hover:bg-slate-100 rounded-md"><svg
                                            class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg></button>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-slate-200 hover:bg-slate-50">
                            <td class="p-3">
                                <div class="flex items-center gap-3">
                                    <img src="https://placehold.co/100x60/8b5cf6/ffffff?text=WEB" alt="Kursus"
                                        class="w-20 h-12 object-cover rounded-md">
                                    <span class="font-semibold">Dasar-Dasar Web Development</span>
                                </div>
                            </td>
                            <td class="p-3">Teknologi</td>
                            <td class="p-3">Gratis</td>
                            <td class="p-3">2.340</td>
                            <td class="p-3">
                                <span
                                    class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">Published</span>
                            </td>
                            <td class="p-3">
                                <div class="flex items-center justify-center gap-2">
                                    <button
                                        class="p-2 text-slate-500 hover:text-indigo-600 hover:bg-slate-100 rounded-md"><svg
                                            class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg></button>
                                    <button
                                        class="p-2 text-slate-500 hover:text-red-600 hover:bg-slate-100 rounded-md"><svg
                                            class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg></button>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-slate-200 hover:bg-slate-50">
                            <td class="p-3">
                                <div class="flex items-center gap-3">
                                    <img src="https://placehold.co/100x60/10b981/ffffff?text=UI/UX" alt="Kursus"
                                        class="w-20 h-12 object-cover rounded-md">
                                    <span class="font-semibold">Pengantar UI/UX Design dengan Figma</span>
                                </div>
                            </td>
                            <td class="p-3">Desain</td>
                            <td class="p-3">Rp 249.000</td>
                            <td class="p-3">89</td>
                            <td class="p-3">
                                <span
                                    class="px-2 py-1 text-xs font-semibold text-yellow-800 bg-yellow-100 rounded-full">Draft</span>
                            </td>
                            <td class="p-3">
                                <div class="flex items-center justify-center gap-2">
                                    <button
                                        class="p-2 text-slate-500 hover:text-indigo-600 hover:bg-slate-100 rounded-md"><svg
                                            class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg></button>
                                    <button
                                        class="p-2 text-slate-500 hover:text-red-600 hover:bg-slate-100 rounded-md"><svg
                                            class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </Layout>
    <!-- Modal -->
    <div v-if="isModal" class="fixed inset-0 bg-gray-500/75 transition-opacity" aria-hidden="true"></div>

    <div v-if="isModal" id="modal" class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
            <div
                class="relative transform overflow-hidden rounded-lg bg-white text-center shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4">
                        <div class="headModal w-full border-b mb-3 pb-3">
                            <h3 class="font-semibold text-gray-900" id="dialog-title">Tambah Kursus</h3>
                        </div>
                        <div class="bodyModal text-start">
                            <form @submit.prevent="submit">
                                <div>
                                    <InputLabel for="" value="Nama Course" />
                                    <TextInput id="namecourse" type="text" class="mt-1 block w-full" required autofocus
                                        autocomplete="name" v-model="form.title_course" />
                                </div>
                                <div class="mt-4">
                                    <InputLabel for="" value="Deskripsi" />
                                    <TextInput id="description" type="text" class="mt-1 block w-full" required
                                        v-model="form.description" />
                                </div>
                                <div class="mt-4">
                                    <InputLabel for="" value="Harga" />
                                    <input @input="formatPrice" type="number" id="hargacourse"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                        required v-model="form.price">
                                    {{ formatted }}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button @click="submit" type="button"
                        class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 sm:ml-3 sm:w-auto">Tambah</button>
                    <button @click="toggleModal" type="button"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs ring-1 ring-gray-300 ring-inset hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</template>
