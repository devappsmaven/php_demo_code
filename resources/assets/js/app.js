
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
Vue.use(require('vue-resource'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('notificationscomponent', require('./components/Notifications.vue').default);
Vue.component('selectcomponent', require('./components/Select.vue').default);
Vue.component('selectembroiderycomponent', require('./components/SelectEmbroidery.vue').default);
Vue.component('selecttemplatecomponent', require('./components/SelectTemplate.vue').default);
Vue.component('productlist', require('./components/ProductList.vue').default);
Vue.component('products', require('./components/Products.vue').default);
Vue.component('productlistembroidery', require('./components/ProductListEmbroidery.vue').default);
Vue.component('productlistpricequote', require('./components/ProductListPriceQuote.vue').default);
Vue.component('productlist2', require('./components/ProductList2.vue').default);
Vue.component('productlist3', require('./components/ProductList3.vue').default);
// Vue.component('productlist4', require('./components/ProductList4.vue').default);
Vue.component('clipartscomponent', require('./components/Cliparts.vue').default);
Vue.component('clipartsembroiderycomponent', require('./components/ClipartsEmbroidery.vue').default);
Vue.component('clipartscomponent2', require('./components/Cliparts2.vue').default);
Vue.component('clipartscomponent3', require('./components/Cliparts3.vue').default);
Vue.component('templatescomponent', require('./components/Template.vue').default);
Vue.component('templatescomponentembroidery', require('./components/TemplateEmbroidery.vue').default);
Vue.component('templatescomponent2', require('./components/Template2.vue').default);
Vue.component('medialistradiocomponent', require('./components/MediaListRadio.vue').default);
Vue.component('medialistcheckcomponent', require('./components/MediaListCheck.vue').default);
Vue.component('InfiniteLoading', require('vue-infinite-loading'));



const app = new Vue({
    el: '#app'
});



