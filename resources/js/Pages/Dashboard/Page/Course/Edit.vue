<script setup>
import Layout from "@/Pages/Dashboard/Layouts/Admin.vue";
import { useForm, router } from "@inertiajs/vue3"
import { ref } from "vue";

const props = defineProps({
    course: {
        type: Object
    }
})
const formatter = new Intl.NumberFormat('id-ID', {
    style: "currency",
    currency: "IDR"
});

const formatted = ref(formatter.format(props.course.price))

const form = useForm({
    title_course: props.course.title_course,
    description: props.course.description,
    price: props.course.price,
});

// Submit update
function updateCourse() {
    form.patch(route('course.update' , props.course.course_id))
}

function formatPrice() {
    formatted.value = formatter.format(form.price)
}
function back(id) {
    router.get(route('dashboard.manage', id))
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
        <div class="bg-white rounded-lg border border-slate-200 shadow-sm max-w-lg justify-self-center w-full">
            <div class="px-4 py-2">
                <!-- <div class="image-course relative p-3 inline-block rounded">
                            <img src="https://placehold.co/100x60/8b5cf6/ffffff?text=WEB" alt="Kursus"
                                class="object-cover rounded-md" width="250">
                            <label for="upload_image"
                                class="hover:cursor-pointer absolute right-1 bottom-1 bg-slate-300 p-1 text-gray-600 rounded"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </label>
                            <input accept="image/png, image/jpeg" type="file" class="hidden" name="course_image"
                                id="upload_image">
                        </div> -->
                <div class="detail-course px-3 my-5">
                    <form @submit.prevent="updateCourse">
                        <div class="flex flex-col mb-3">
                            <label for="">Title</label>
                            <input type="text" v-model="form.title_course">
                        </div>
                        <div class="flex flex-col mb-3">
                            <label for="">Description</label>
                            <input type="text" v-model="form.description">
                        </div>
                        <div class="flex flex-col mb-3">
                            <label for="">Price</label>
                            <input @input="formatPrice" type="number" v-model="form.price">
                            <small class="text-gray-600">Format dalam Currency</small>
                            <p class="text-lg ms-2 ps-3 mt-2 text-gray-600 border-s">{{ formatted }}</p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="flex justify-end p-3 gap-3">
                <button @click="back($page.props.auth.user.id)" class="px-2 py-2 border border-slate-300 rounded">Cancel</button>
                <button @click="updateCourse" class="px-2 py-2 bg-indigo-500 rounded text-slate-200">Submit</button>
            </div>
        </div>
    </Layout>
</template>
