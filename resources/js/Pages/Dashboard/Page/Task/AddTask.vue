<script setup>
import Layout from "@/Pages/Dashboard/Layouts/Admin.vue"

import { useForm } from "@inertiajs/vue3";


const assesment = useForm({
    title: '',
    content: '',
    subject: ""
});

const submit = () => {
    assesment.post(route('task.store'))
}

</script>
<template>
    <Layout>
        <nav class="text-sm text-slate-500 mb-4">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <Link :href="route('dashboard', $page.props.auth.user.id)"
                        class="text-indigo-600 hover:text-indigo-800"> <i class="fas fa-home mr-1"></i>Beranda </Link>
                </li>
                <li class="flex items-center">
                    <span class="mx-2">/</span>
                    <Link :href="route('dashboard.task')" class="text-indigo-600 hover:text-indigo-800">Assesment
                    </Link>
                </li>
                <li class="flex items-center">
                    <span class="mx-2">/</span>
                    <span class="text-slate-800 font-medium">Tambah</span>
                </li>
            </ol>
        </nav>

        <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
            <h2 class="text-lg font-semibold text-slate-800 mb-4">Tambah assesment</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-end mb-6">
                <div>
                    <label for="article-code" class="block text-sm font-medium text-slate-700 mb-1">Assesment Title</label>
                    <input type="text" id="article-code" v-model="assesment.title" placeholder="Masukkan judul assesment"
                        class="mt-1 block w-full px-3 py-2 border border-slate-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                </div>
                <div>
                    <label for="article-content" class="block text-sm font-medium text-slate-700 mb-1">Assesment
                        Type</label>
                    <select v-model="assesment.subject" name="mata_pelajaran w-full" id="mata-pelajaran-select"
                        class="mt-1 block w-full px-3 py-2 border border-slate-300 rounded-md shadow-sm">
                        <option value="" disabled selected>-- Pilih Tipe Tugas --</option>
                        <option value="exam">Exam</option>
                        <option value="assignment">Assignment</option>
                        <option value="participation">Participation</option>
                        <option value="project">Project</option>
                        <option value="presentation">Presentation</option>
                        <option value="writing">Writing</option>
                        <option value="performance_assesment">Performance Assesment and Simulation</option>
                        <option value="additional_activites">Additional Activities</option>
                        <option value="creativity">Creativity and Media</option>
                        <option value="internship">Internship and Practice</option>
                    </select>
                </div>
            </div>
            <QuillEditor v-model:content="assesment.content" toolbar="full" style="height: 200px;" contentType="html">
            </QuillEditor>
            <div class="flex justify-end mt-4">
                <button @click="submit"
                    class="px-5 py-2 bg-blue-600 text-white rounded-md text-sm font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Submit</button>
            </div>
        </div>
    </Layout>
</template>
