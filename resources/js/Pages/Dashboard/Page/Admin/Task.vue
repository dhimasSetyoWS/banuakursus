<script setup>
import Layout from "@/Pages/Dashboard/Layouts/Admin.vue"
</script>
<template>
    <Layout>
        <div id="assessment-content">
            <nav class="text-sm text-slate-500 mb-4">
                <ol class="list-none p-0 inline-flex">
                    <li class="flex items-center">
                        <Link :href="route('dashboard', $page.props.auth.user.id)"
                            class="text-indigo-600 hover:text-indigo-800"> <i class="fas fa-home mr-1"></i>Beranda
                        </Link>
                    </li>
                    <li class="flex items-center">
                        <span class="mx-2">/</span>
                        <span class="text-slate-800 font-medium">Tugas</span>
                    </li>
                </ol>
            </nav>

            <h1 class="text-2xl font-bold text-slate-800 mb-6">Daftar Penilaian</h1>

            <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
                <h2 class="text-lg font-semibold text-slate-800 mb-4">Filter Penilaian</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-end">
                    <div>
                        <label for="assessment-code" class="block text-sm font-medium text-slate-700 mb-1">Kode
                            Penilaian</label>
                        <input type="text" id="assessment-code" name="assessment-code"
                            placeholder="Masukkan kode penilaian"
                            class="mt-1 block w-full px-3 py-2 border border-slate-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                    </div>
                    <div>
                        <label for="assessment-content" class="block text-sm font-medium text-slate-700 mb-1">Konten
                            Penilaian</label>
                        <input type="text" id="assessment-content" name="assessment-content"
                            placeholder="Masukkan kata kunci konten penilaian"
                            class="mt-1 block w-full px-3 py-2 border border-slate-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                    </div>
                    <div class="md:col-span-2 flex justify-end space-x-3 mt-4 md:mt-0">
                        <button
                            class="px-5 py-2 bg-blue-600 text-white rounded-md text-sm font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            <i class="fas fa-search mr-2"></i>Cari
                        </button>
                        <Link :href="route('task.create')"
                            class="px-5 py-2 bg-green-600 text-white rounded-md text-sm font-medium hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                        <i class="fas fa-plus mr-2"></i>Tambah Baru
                        </Link>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-slate-200">
                        <thead class="bg-slate-800">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    NO</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    JUDUL PENILAIAN</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    TIPE PENILAIAN</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    KODE PENILAIAN</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    KONTEN PENILAIAN</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    DESKRIPSI PENILAIAN</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    AKSI</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-slate-200">
                            <tr>
                                <td colspan="7"
                                    class="px-6 py-4 whitespace-nowrap text-sm text-slate-500 text-center italic">
                                    Belum ada penilaian
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </Layout>
</template>
