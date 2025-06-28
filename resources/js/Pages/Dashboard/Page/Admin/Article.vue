<script setup>
import Layout from "@/Pages/Dashboard/Layouts/Admin.vue"
</script>
<template>
    <Layout>
        <div id="artikel-content">
            <nav class="text-sm text-slate-500 mb-4">
                <ol class="list-none p-0 inline-flex">
                    <li class="flex items-center">
                        <Link :href="route('dashboard', $page.props.auth.user.id)" class="text-indigo-600 hover:text-indigo-800"> <i
                                class="fas fa-home mr-1"></i>Beranda </Link>
                    </li>
                    <li class="flex items-center">
                        <span class="mx-2">/</span>
                        <span class="text-slate-800 font-medium">Artikel</span>
                    </li>
                </ol>
            </nav>

            <h1 class="text-2xl font-bold text-slate-800 mb-6">Daftar Artikel</h1>

            <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
                <h2 class="text-lg font-semibold text-slate-800 mb-4">Filter Artikel</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-end">
                    <div>
                        <label for="article-code" class="block text-sm font-medium text-slate-700 mb-1">Kode
                            Artikel</label>
                        <input type="text" id="article-code" name="article-code" placeholder="Masukkan kode artikel"
                            class="mt-1 block w-full px-3 py-2 border border-slate-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                    </div>
                    <div>
                        <label for="article-content" class="block text-sm font-medium text-slate-700 mb-1">Konten
                            Artikel</label>
                        <input type="text" id="article-content" name="article-content"
                            placeholder="Masukkan kata kunci konten artikel"
                            class="mt-1 block w-full px-3 py-2 border border-slate-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                    </div>
                    <div class="md:col-span-2 flex justify-end space-x-3 mt-4 md:mt-0">
                        <button
                            class="px-5 py-2 bg-blue-600 text-white rounded-md text-sm font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            <i class="fas fa-search mr-2"></i>Cari
                        </button>
                        <button
                            class="px-5 py-2 bg-green-600 text-white rounded-md text-sm font-medium hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                            <i class="fas fa-plus mr-2"></i>Tambah Baru
                        </button>
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
                                    JUDUL ARTIKEL</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    KODE ARTIKEL</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    KONTEN ARTIKEL</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    AKSI</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-slate-200">
                            <tr>
                                <td colspan="5"
                                    class="px-6 py-4 whitespace-nowrap text-sm text-slate-500 text-center italic">
                                    Belum ada artikel
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </Layout>
</template>
