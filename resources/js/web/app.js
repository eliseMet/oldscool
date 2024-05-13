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

//Users profile picture
if (document.querySelector('#profile-picture-select-component')) {
    const components = document.querySelectorAll('#profile-picture-select-component');
    import('./components/ProfilePicturesSelect.vue').then(exports => {
        Array.from(components).map(component => {
            const app = createApp({});
            app.component('profile-picture-select-component', exports.default);
            app.mount(component)
        })
    });
}

//Calendar users
if (document.querySelector('#calendar-component')) {
    const components = document.querySelectorAll('#calendar-component');
    import('./components/Calendar.vue').then(exports => {
        Array.from(components).map(component => {
            const app = createApp({});
            app.component('calendar-component', exports.default);
            app.mount(component)
        })
    });
}