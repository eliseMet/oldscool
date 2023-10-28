import '../bootstrap';
import { createApp } from 'vue'

if (document.querySelector('#quiz-component')) {
    const components = document.querySelectorAll('#quiz-component');
    import('./components/Quiz.vue').then(exports => {
        Array.from(components).map(component => {
            const app = createApp({});
            app.component('quiz-component', exports.default);
            app.mount(component)
        })
    });
}