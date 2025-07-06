<script setup>
import Layout from "@/Pages/Dashboard/Layouts/Admin.vue";
import { useForm, router } from "@inertiajs/vue3"
import { ref, reactive } from "vue";

const props = defineProps({
    course: {
        type: Object
    },
    modules: {
        type: Array
    }
})
const listofModule = ref(props.modules);
const modal = ref(false);

const formatter = new Intl.NumberFormat('id-ID', {
    style: "currency",
    currency: "IDR"
});

const formatted = ref(formatter.format(props.course.price))

// Course
const form = useForm({
    title_course: props.course.title_course,
    description: props.course.description,
    price: props.course.price,
});

const errorMsg = "Judul modul dan link Module wajib di isi"
const isError = ref(false);


// Course Section
function updateCourse() {
    form.patch(route('course.update', props.course.course_id));
}

// End of section

// Modul section
const module = useForm({
    module_name: "",
    description: "",
    course_id: props.course.course_id
});

// Edit per module
const editedmodule = useForm({
    module_name: "",
    description: "",
});
const editedModuleId = ref(0);
//  cari index modul, kemudian ganti value dari edited module menjadi module yng di dapat
function getModule(id) {
    const searchIndex = listofModule.value.findIndex((modul) => modul.module_id == id);
    modal.value = 'edit';
    const foundModule = listofModule.value[searchIndex]
    editedModuleId.value = foundModule.module_id; // setid yang akan di ubah
    // set value berdasarkan id yang di dapat
    editedmodule.module_name = foundModule.module_name;
    editedmodule.description = foundModule.description;
}

const addModule = () => {
    module.post(route('module.store'), {
        onSuccess: () => {
            isError.value = false
            location.reload();
            setTimeout(() => {
                module.reset()
            }, 2000);
        },
        onError: () => {
            console.log("Error bro")
            isError.value = true
        }
    })
}

// post module yang di edit
function editModule(id) {
    editedmodule.patch(route('module.update', id), {
        onSuccess: () => {
            isError.value = false;
            location.reload();
            // Reset editedmodule
            setTimeout(() => {
                editedmodule.reset();
            }, 2000);
        },
        onError: () => {
            console.log("Error bro")
            isError.value = true
        }
    });
}

// delete module secara spesifik
function deleteModule(id) {
    console.log(id);
    router.delete(route('module.delete', id), {
        onSuccess: () => {
            location.reload();
        }
    });
}

function formatPrice() {
    formatted.value = formatter.format(form.price)
}
function back(id) {
    router.get(route('dashboard.manage', id))
}

function toggleModal(mode) {
    modal.value = mode
    console.log(props.modules)
}
function offModal() {
    modal.value = false
}
</script>
<template>
    <Layout>
        <button @click="back($page.props.auth.user.id)" type="button"
            class="text-xs text-violet-600 font-bold rounded">&laquo Back</button>
        <div class="mb-4">
            <h2 class="text-2xl font-bold text-slate-800">Edit Kursus</h2>
            <p class="mt-1 text-sm text-slate-500">Edit kursus yang telah anda buat di platform Banua Kursus.</p>
        </div>
        <div class="bg-white rounded-lg border border-slate-200 shadow-sm">
            <div class="px-4 py-2">
                <section class="detail-course gap-3 px-3 my-5 flex flex-col lg:flex-row lg:justify-between">
                    <img class="thumbnail rounded" src="https://placehold.co/1280x720/8b5cf6/ffffff?text=WEB" alt=""
                        width="320" height="180">
                    <form @submit.prevent="updateCourse" class="flex-1 max-w-lg mt-3 sm:mt-auto items-center">
                        <div class="flex flex-col mb-5">
                            <label for="title">Judul Kursus</label>
                            <input id="title" type="text" v-model="form.title_course"
                                class="rounded border border-gray-400" autocomplete="off">
                        </div>
                        <div class="flex flex-col mb-5">
                            <label for="desc">Deskripsi Kursus</label>
                            <QuillEditor v-model:content="form.description" toolbar="minimal" style="height: 100px;"
                                contentType="html">
                            </QuillEditor>
                        </div>
                        <div class="flex flex-col mb-5">
                            <label for="price">Harga Kursus</label>
                            <input id="price" @input="formatPrice" type="number" v-model="form.price"
                                class="rounded border border-gray-400">
                            <small class="text-gray-600">Format dalam Currency</small>
                            <p class="text-lg ms-2 ps-3 mt-2 text-gray-600 border-s">{{ formatted }}</p>
                        </div>
                    </form>
                </section>
                <!-- End of detail course -->
                <hr class="my-6">
                <!-- Modul Course -->
                <div class="mt-4">
                    <div
                        class="headSection mb-12 flex flex-col lg:flex-row justify-between items-start lg:items-center gap-3 sm:gap-0">
                        <div class="desc">
                            <div class="text-lg font-bold text-slate-800">Session Course</div>
                            <div class="text-sm text-slate-500">Edit atau tambah session dari course anda yang telah
                                dibuat Banua Kursus
                            </div>
                        </div>
                        <button @click="toggleModal('create')"
                            class="mt-3 lg:mt-0 inline-flex items-center px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            Tambah Session Baru
                        </button>
                    </div>
                    <div class="listModul grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                        <div v-for="a in listofModule" :key="a"
                            class="modul-card px-2 py-4 bg-indigo-300 text-white rounded flex flex-col relative">
                            <div class="titleModule mb-3">
                                <p>Nama Sesi : </p>
                                <p class="ps-3 border-s">{{ a.module_name }}</p>
                            </div>
                            <div class="body">
                                <p>Deskripsi Sesi : </p>
                                <div v-html="a.description" class="ps-3 border-s text-black" target="_blank"></div>
                            </div>
                            <div class="flex absolute px-1 top-0 right-0 gap-1 py-1">
                                <button id="editModul" @click="getModule(a.module_id)"
                                    class="text-black hover:text-indigo-800"><svg class="w-5 h-5"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg></button>
                                <button id="deleteModul" @click="deleteModule(a.module_id)"
                                    class="text-black hover:text-indigo-600"><svg class="w-5 h-5"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end p-3 gap-3">
                <button @click="back($page.props.auth.user.id)"
                    class="px-2 py-2 border border-slate-300 rounded">Cancel</button>
                <button @click="updateCourse" class="px-2 py-2 bg-indigo-500 rounded text-slate-200">Submit</button>
            </div>
        </div>
        <!-- Modal of add module -->
        <div v-if="modal == 'create' || modal == 'edit'" class="fixed inset-0 bg-gray-500/75 transition-opacity"
            aria-hidden="true"></div>
        <div v-if="modal == 'create'" id="modal" class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
                <div
                    class="relative transform overflow-hidden rounded-lg bg-white text-center shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4">
                            <div class="headModal w-full border-b mb-3 pb-3">
                                <h3 class="font-semibold text-gray-900" id="dialog-title">Tambah Modul</h3>
                            </div>
                            <div class="bodyModal text-start">
                                <form @submit.prevent="addModule">
                                    <div>
                                        <label for="namemodule">Nama Session</label>
                                        <input id="namemodule" type="text" class="textinput mt-1 block w-full" required
                                            autofocus autocomplete="name" v-model="module.module_name">
                                        <small v-if="isError" class="errorMsg">{{ errorMsg }}</small>
                                    </div>
                                    <div class="mt-4">
                                        <label for="modulelink">Deskripsi Session</label>
                                        <QuillEditor v-model:content="module.description" toolbar="minimal"
                                            style="height: 150px;" contentType="html">
                                        </QuillEditor>
                                        <small v-if="isError" class="errorMsg">{{ errorMsg }}</small>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button :disable="form.processing" @click="addModule" type="button"
                            class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 sm:ml-3 sm:w-auto disabled:bg-gray-500">Tambah</button>
                        <button @click="toggleModal" type="button"
                            class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs ring-1 ring-gray-300 ring-inset hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal of edit module -->
        <div v-if="modal == 'edit'" id="modal" class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
                <div
                    class="relative transform overflow-hidden rounded-lg bg-white text-center shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4">
                            <div class="headModal w-full border-b mb-3 pb-3">
                                <h3 class="font-semibold text-gray-900" id="dialog-title">Edit Modul</h3>
                            </div>
                            <div class="bodyModal text-start">
                                <form @submit.prevent="editModule(editedModuleId)">
                                    <div>
                                        <label for="namemodule">Judul Session</label>
                                        <input id="namemodule" type="text" class="textinput mt-1 block w-full" required
                                            autofocus autocomplete="name" v-model="editedmodule.module_name">
                                        <small v-if="isError" class="errorMsg">{{ errorMsg }}</small>
                                    </div>
                                    <div class="mt-4">
                                        <label for="modulelink">Deskripsi</label>
                                        <QuillEditor v-model:content="editedmodule.description" toolbar="minimal"
                                            style="height: 150px;" contentType="html">
                                        </QuillEditor>
                                        <small v-if="isError" class="errorMsg">{{ errorMsg }}</small>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button :disable="form.processing" @click="editModule(editedModuleId)" type="button"
                            class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 sm:ml-3 sm:w-auto disabled:bg-gray-500">Edit</button>
                        <button @click="offModal" type="button"
                            class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs ring-1 ring-gray-300 ring-inset hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

    </Layout>
</template>
