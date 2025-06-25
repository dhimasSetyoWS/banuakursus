<script setup>
import Layout from "@/Pages/Dashboard/Layouts/Admin.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputError from '@/Components/InputError.vue';
import TextInput from '@/Components/TextInput.vue';
import {ref} from "vue";
import {useForm} from "@inertiajs/vue3";

defineProps({
    teachers : Object
})

const form = useForm({
    name: '',
    email: '',
    username: '',
    password: '',
    password_confirmation: '',
});

// Toggle Modal
function toggleModal() {
    isModal.value = !isModal.value
}
const isModal = ref(false);

</script>
<template>
    <Layout>
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-slate-800">Daftar Siswa</h2>
                    <p class="mt-1 text-sm text-slate-500">Berikut adalah semua siswa yang ada di banua kursus.</p>
                </div>
                <div class="mt-4 sm:mt-0">
                    <a @click="toggleModal" href="#"
                        class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        Tambah Siswa
                    </a>
                </div>
            </div>

            <div class="overflow-x-auto bg-white rounded-2xl shadow-lg">
                <table class="min-w-full text-sm text-left text-gray-700">
                    <thead class="bg-blue-500 text-xs text-white uppercase tracking-wider">
                        <tr>
                            <th class="px-6 py-4">No</th>
                            <th class="px-6 py-4">Nama siswa</th>
                            <th class="px-6 py-4">Email</th>
                            <th class="px-6 py-4">Status</th>
                            <th class="px-6 py-4">Tanggal Daftar</th>
                            <th class="px-6 py-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">1.</td>
                            <td class="px-6 py-4">Febrian Fahrezi</td>
                            <td class="px-6 py-4">Desain Grafis</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-block px-2 py-1 text-xs bg-green-100 text-green-700 rounded-full">Selesai</span>
                            </td>
                            <td class="px-6 py-4">20 Juni 2025</td>
                            <td class="px-6 py-4 text-center">
                                <button class="text-gray-500 hover:text-gray-800">
                                    <svg class="w-5 h-5 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M6 10a2 2 0 114 0 2 2 0 01-4 0zm4 0a2 2 0 114 0 2 2 0 01-4 0zM14 10a2 2 0 114 0 2 2 0 01-4 0z" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">2.</td>
                            <td class="px-6 py-4">Dhimas Setyo</td>
                            <td class="px-6 py-4">Web Development</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-block px-2 py-1 text-xs bg-yellow-100 text-yellow-700 rounded-full">Proses</span>
                            </td>
                            <td class="px-6 py-4">18 Juni 2025</td>
                            <td class="px-6 py-4 text-center">
                                <button class="text-gray-500 hover:text-gray-800">
                                    <svg class="w-5 h-5 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M6 10a2 2 0 114 0 2 2 0 01-4 0zm4 0a2 2 0 114 0 2 2 0 01-4 0zM14 10a2 2 0 114 0 2 2 0 01-4 0z" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">3.</td>
                            <td class="px-6 py-4">Moh Fulan</td>
                            <td class="px-6 py-4">UI/UX Design</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-block px-2 py-1 text-xs bg-red-100 text-red-700 rounded-full">Dibatalkan</span>
                            </td>
                            <td class="px-6 py-4">15 Juni 2025</td>
                            <td class="px-6 py-4 text-center">
                                <button class="text-gray-500 hover:text-gray-800">
                                    <svg class="w-5 h-5 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M6 10a2 2 0 114 0 2 2 0 01-4 0zm4 0a2 2 0 114 0 2 2 0 01-4 0zM14 10a2 2 0 114 0 2 2 0 01-4 0z" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal -->
        <div v-if="isModal" class="fixed inset-0 bg-gray-500/75 transition-opacity" aria-hidden="true"></div>
    <div v-if="isModal" id="modal" class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
            <div
                class="relative transform overflow-hidden rounded-lg bg-white text-center shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4">
                        <div class="headModal w-full border-b mb-3 pb-3">
                            <h3 class="font-semibold text-gray-900" id="dialog-title">Tambah Siswa</h3>
                        </div>
                        <div class="bodyModal text-start">
                            <form @submit.prevent="submit">
                                <div>
                                    <InputLabel for="namasiswa" value="Nama siswa" />
                                    <TextInput id="namecourse" type="text" class="mt-1 block w-full" required autofocus
                                        autocomplete="name" v-model="form.nama" />
                                </div>
                                <div class="mt-4">
                                    <InputLabel for="description" value="Username" />
                                    <TextInput id="description" type="text" class="mt-1 block w-full" required
                                        v-model="form.username" />
                                </div>
                                <div class="mt-4">
                                    <InputLabel for="description" value="Email" />
                                    <TextInput id="description" type="text" class="mt-1 block w-full" required
                                        v-model="form.email" />
                                </div>
                                <div class="mt-4">
                                    <InputLabel for="password" value="Password" />
                                    <TextInput id="password" type="password" class="mt-1 block w-full" required
                                        v-model="form.password" />
                                </div>
                                <div class="mt-4">
                                    <InputLabel for="confirm_password" value="Confirm Password" />
                                    <TextInput id="password" type="password" class="mt-1 block w-full" required
                                        v-model="form.password_confirmation" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button @click="submit" type="button"
                        class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 sm:ml-3 sm:w-auto disabled:bg-gray-500">Tambah</button>
                    <button @click="toggleModal" type="button"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs ring-1 ring-gray-300 ring-inset hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    </Layout>
</template>
