

require('./bootstrap');

window.Vue = require('vue').default;



Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('index-component', require('./components/Index.vue').default);



const app = new Vue({
    el: '#app',
});
