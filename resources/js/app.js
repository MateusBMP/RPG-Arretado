/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.axios.defaults.headers.common['remember_token'] = document.head.querySelector("[name~=remember_token]").content;

Vue.prototype.app = {
    bus: new Vue(),
    route: window.location.origin,
    csrfToken: document.head.querySelector("[name~=csrf-token]").content,
    name: document.head.querySelector("[name~=app-name]").content,
};

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('system-alert-component', require('./components/SystemAlertComponent.vue').default);
Vue.component('user-icon-component', require('./components/UserIconComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
