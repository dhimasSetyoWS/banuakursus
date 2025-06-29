<script setup>
import Layout from "@/Pages/Dashboard/Layouts/Admin.vue"

import { useForm } from "@inertiajs/vue3";


const content = useForm({
    body : ''
});

const submit = () => {
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
                    <Link :href="route('dashboard.artikel')" class="text-indigo-600 hover:text-indigo-800">Artikel
                    </Link>
                </li>
                <li class="flex items-center">
                    <span class="mx-2">/</span>
                    <span class="text-slate-800 font-medium">Tambah</span>
                </li>
            </ol>
        </nav>

        <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
            <h2 class="text-lg font-semibold text-slate-800 mb-4">Tambah Artikel</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-end mb-6">
                <div>
                    <label for="article-code" class="block text-sm font-medium text-slate-700 mb-1">Judul
                        Artikel</label>
                    <input type="text" id="article-code" name="article-code" placeholder="Masukkan judul artikel"
                        class="mt-1 block w-full px-3 py-2 border border-slate-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                </div>
                <div>
                    <label for="article-content" class="block text-sm font-medium text-slate-700 mb-1">Subject
                        Artikel</label>
                    <select name="mata_pelajaran w-full" id="mata-pelajaran-select"
                        class="mt-1 block w-full px-3 py-2 border border-slate-300 rounded-md shadow-sm">
                        <option value="" disabled selected>-- Pilih Mata Pelajaran --</option>
                        <option value="matematika">Matematika</option>
                        <option value="bahasa_indonesia">Bahasa Indonesia</option>
                        <option value="bahasa_inggris">Bahasa Inggris</option>
                        <option value="fisika">Fisika</option>
                        <option value="kimia">Kimia</option>
                        <option value="biologi">Biologi</option>
                        <option value="sejarah">Sejarah</option>
                        <option value="geografi">Geografi</option>
                        <option value="ekonomi">Ekonomi</option>
                        <option value="seni_budaya">Seni Budaya</option>
                    </select>
                </div>
            </div>
            <QuillEditor v-model:content="content.body" toolbar="full" style="height: 200px;" contentType="html"></QuillEditor>
            <div class="flex justify-end mt-4">
                <button @click="submit" class="px-5 py-2 bg-blue-600 text-white rounded-md text-sm font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Submit</button>
            </div>
        </div>
    </Layout>
</template>
