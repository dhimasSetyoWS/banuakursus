<script setup>
import Layout from "../Layouts/Admin.vue";
</script>
<template>
    <Layout>
        <h2 class="text-2xl font-bold mb-6">Selamat Datang, {{$page.props.auth.user.name}}! 👋</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
            <div class="bg-white p-6 rounded-lg border border-slate-200">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm font-medium text-slate-500">Total Pendapatan</p>
                        <p class="text-2xl font-bold mt-1">Rp 12.550.000</p>
                        <p class="text-xs text-slate-500 mt-1">+20.1% dari bulan lalu</p>
                    </div>
                    <div class="p-2 bg-indigo-100 rounded-md">
                        <svg class="w-6 h-6 text-indigo-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg border border-slate-200">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm font-medium text-slate-500">Total Siswa Aktif</p>
                        <p class="text-2xl font-bold mt-1">1.250</p>
                        <p class="text-xs text-slate-500 mt-1">+120 dari bulan lalu</p>
                    </div>
                    <div class="p-2 bg-green-100 rounded-md">
                        <svg class="w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg border border-slate-200">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm font-medium text-slate-500">Kursus Terjual</p>
                        <p class="text-2xl font-bold mt-1">320</p>
                        <p class="text-xs text-slate-500 mt-1">+50 bulan ini</p>
                    </div>
                    <div class="p-2 bg-blue-100 rounded-md">
                        <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <rect width="18" height="18" x="3" y="3" rx="2" />
                            <path d="M7 3v18" />
                            <path d="M12 3v18" />
                            <path d="M17 3v18" />
                            <path d="M3 7h18" />
                            <path d="M3 12h18" />
                            <path d="M3 17h18" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg border border-slate-200">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm font-medium text-slate-500">Jumlah Kursus</p>
                        <p class="text-2xl font-bold mt-1">25</p>
                        <p class="text-xs text-slate-500 mt-1">2 kursus baru ditambahkan</p>
                    </div>
                    <div class="p-2 bg-orange-100 rounded-md">
                        <svg class="w-6 h-6 text-orange-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg border border-slate-200">
            <div class="p-4 border-b border-slate-200">
                <h3 class="text-lg font-semibold">Pendaftaran Terbaru</h3>
                <p class="text-sm text-slate-500">Daftar siswa yang baru mendaftar kursus.</p>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-slate-50 text-slate-600">
                        <tr>
                            <th class="text-left font-medium p-3">Nama Siswa</th>
                            <th class="text-left font-medium p-3">Kursus</th>
                            <th class="text-left font-medium p-3">Status</th>
                            <th class="text-left font-medium p-3">Tanggal Daftar</th>
                            <th class="text-right font-medium p-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-slate-200 hover:bg-slate-50">
                            <td class="p-3">Anisa Putri</td>
                            <td class="p-3">Digital Marketing untuk Pemula</td>
                            <td class="p-3">
                                <span
                                    class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">Selesai</span>
                            </td>
                            <td class="p-3">01 Juni 2025</td>
                            <td class="p-3 text-right">
                                <button class="text-slate-500 hover:text-slate-800">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="1" />
                                        <circle cx="19" cy="12" r="1" />
                                        <circle cx="5" cy="12" r="1" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr class="border-b border-slate-200 hover:bg-slate-50">
                            <td class="p-3">Budi Santoso</td>
                            <td class="p-3">UI/UX Design: Dari Riset hingga Prototipe</td>
                            <td class="p-3">
                                <span
                                    class="px-2 py-1 text-xs font-semibold text-yellow-800 bg-yellow-100 rounded-full">Proses</span>
                            </td>
                            <td class="p-3">10 Juni 2025</td>
                            <td class="p-3 text-right">
                                <button class="text-slate-500 hover:text-slate-800">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="1" />
                                        <circle cx="19" cy="12" r="1" />
                                        <circle cx="5" cy="12" r="1" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr class="border-b border-slate-200 hover:bg-slate-50">
                            <td class="p-3">Citra Lestari</td>
                            <td class="p-3">Mahir Public Speaking & Komunikasi</td>
                            <td class="p-3">
                                <span
                                    class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">Selesai</span>
                            </td>
                            <td class="p-3">28 Mei 2025</td>
                            <td class="p-3 text-right">
                                <button class="text-slate-500 hover:text-slate-800">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="1" />
                                        <circle cx="19" cy="12" r="1" />
                                        <circle cx="5" cy="12" r="1" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr class="border-b border-slate-200 hover:bg-slate-50">
                            <td class="p-3">Eko Prasetyo</td>
                            <td class="p-3">Dasar-Dasar Web Development</td>
                            <td class="p-3">
                                <span
                                    class="px-2 py-1 text-xs font-semibold text-red-800 bg-red-100 rounded-full">Dibatalkan</span>
                            </td>
                            <td class="p-3">12 Juni 2025</td>
                            <td class="p-3 text-right">
                                <button class="text-slate-500 hover:text-slate-800">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="1" />
                                        <circle cx="19" cy="12" r="1" />
                                        <circle cx="5" cy="12" r="1" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </Layout>
</template>
