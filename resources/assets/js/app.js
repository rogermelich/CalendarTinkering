
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('full-calendar', require('./components/calendar/FullCalendar.vue'))
Vue.component('calendar-events', require('./components/calendar/CalendarEvents.vue'))
Vue.component('calendar', require('./components/calendar/Calendar.vue'))

import Multiselect from 'vue-multiselect'

Vue.component(Multiselect)

const app = new Vue({
    el: '#app',
    data() {
        return {
            value: null,
            options: ['list','of','values']
        }
    }
});
