/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


 
require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
 
// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('comments-edit-component', require('./components/comments/EditComponent.vue').default);
Vue.component('comments-create-component', require('./components/comments/CreateComponent.vue').default);

Vue.component('followers-edit-component', require('./components/followers/EditComponent.vue').default);
Vue.component('followers-create-component', require('./components/followers/CreateComponent.vue').default);

Vue.component('posts-edit-component', require('./components/posts/EditComponent.vue').default);
Vue.component('posts-create-component', require('./components/posts/CreateComponent.vue').default);

Vue.component('reactions-edit-component', require('./components/reactions/EditComponent.vue').default);
Vue.component('reactions-create-component', require('./components/reactions/CreateComponent.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
