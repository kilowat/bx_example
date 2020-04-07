import jQuery from "jquery";
import Vue from 'vue';
import axios from 'axios';
import Vuex from 'vuex';
import store from './store';
import PrettyCheckbox from 'pretty-checkbox-vue';
import SmartFilter from '../vue-components/SmartFilter.vue';
import CatalogList from '../vue-components/CatalogList.vue';
import CatalogItem from '../vue-components/CatalogItem.vue';
import SmallBasket from '../vue-components/SmallBasket.vue';
import Pagination from '../vue-components/Pagination.vue';


window.axios = axios;
window.EventBus = new Vue();



Vue.use(PrettyCheckbox);

Vue.component('smart-filter', SmartFilter );
Vue.component('catalog-list', CatalogList );
Vue.component('catalog-item', CatalogItem );
Vue.component('small-basket', SmallBasket );
Vue.component('pagination', Pagination );

const vue_app = new Vue({
  el: '#app',
  store,
});

window.vue_app = vue_app;


jQuery(function() {
  //jQuery("body").css("color", "blue");
});
