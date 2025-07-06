<script setup>
import Layout from "@/Pages/Dashboard/Layouts/Admin.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputError from '@/Components/InputError.vue';
import TextInput from '@/Components/TextInput.vue';
import { ref } from "vue";
import { router, useForm } from "@inertiajs/vue3";

defineProps({
    students: Object
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

const submit = () => {
    form.post(route('student.store'), {
        onSuccess: () => {
            form.reset()
            toggleModal()
        }
    });
}

function deleteUser(id) {
    router.delete(route('user.destroy' , id))
}

// Format tanggal
function formatDate(date) {
    const dateObj = new Date(date)
    return dateObj.toLocaleDateString("id-ID", { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' })
}

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
            <div v-if="$page.props.flash.message" class="flex">
                <div class="px-2 bg-gray-300 py-4 text-green-600 rounded mb-4 inline-block font-bold">
                    {{ $page.props.flash.message }} !
                </div>
            </div>
            <div class="overflow-x-auto bg-white rounded-2xl shadow-lg">
                <table class="min-w-full text-sm text-left text-gray-700">
                    <thead class="bg-blue-500 text-xs text-white uppercase tracking-wider">
                        <tr>
                            <th class="px-6 py-4">No</th>
                            <th class="px-6 py-4">Nama siswa</th>
                            <th class="px-6 py-4">Email</th>
                            <!-- <th class="px-6 py-4">Status</th> -->
                            <th class="px-6 py-4">Tanggal Daftar</th>
                            <th class="px-6 py-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                            <tr v-if="students.length > 0" v-for="(student, index) in students" :key="index" class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 font-bold">{{ index + 1 }}</td>
                                <td class="px-6 py-4">{{ student.name }}</td>
                                <td class="px-6 py-4">{{ student.email }}</td>
                                <!-- <td class="px-6 py-4">
                                    <span
                                        class="inline-block px-2 py-1 text-xs bg-green-100 text-green-700 rounded-full">Selesai</span>
                                </td> -->
                                <td class="px-6 py-4">{{ formatDate(student.created_at) }}</td>
                                <td class="px-6 py-4 text-center">
                                    <button class="text-gray-500 hover:text-gray-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-auto">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>
                                    </button>
                                    <button @click="deleteUser(student.id)" class="text-red-500 hover:text-red-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-auto">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <p v-else class="p-6 font-bold">Tidak ada murid</p>
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
                                        <TextInput id="namecourse" type="text" class="mt-1 block w-full" required
                                            autofocus autocomplete="name" v-model="form.name" />
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
