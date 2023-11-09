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

//Users reviews cards
if (document.querySelector('#reviews-cards-component')) {
    const components = document.querySelectorAll('#reviews-cards-component');
    import('./components/ReviewsCards.vue').then(exports => {
        Array.from(components).map(component => {
            const app = createApp({});
            app.component('reviews-cards-component', exports.default);
            app.mount(component)
        })
    });
}