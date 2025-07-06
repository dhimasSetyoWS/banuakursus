import '../css/app.css';
import "animate.css";
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import { Head, Link } from '@inertiajs/vue3';
import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css';
import Swal from 'sweetalert2';
const app = createApp()

const appName = 'BanuaKursus';


createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        const vueapp =  createApp({ render: () => h(App, props) })

        vueapp.config.globalProperties.Swal = Swal // Initialize Swal
        return vueapp
            .use(plugin)
            .use(ZiggyVue)
            .component("Head" , Head)
            .component("Link" , Link)
            .component('QuillEditor', QuillEditor)
            .mount(el);
    },
    progress: {
        color: '#B33791',
        showSpinner : true
    },
});
