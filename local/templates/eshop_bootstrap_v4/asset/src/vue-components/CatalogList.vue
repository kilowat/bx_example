<template>
  <div class="catalog-component">
      <loading :active.sync="loading" :is-full-page="false"></loading>
      <div class="sorting-block" v-if="sortParams.length > 0">
        <div class="sort-item" v-for="sortItem in sortParams" :key="sortItem.value">
          <span class="sort-name">{{ sortItem.name }}</span>
          <span class="sort-value-items">
            <span class="sort-value">
              <label for="">asc</label>
              <input type="radio" name="sort" 
                :value="sortItem.value + '_asc'"
                :checked="isChecedSort(sortItem.value + '_asc')"
                @change="setSort(sortItem.value + '_asc')"
              >
            </span>
            <span class="sort-value">
              <label for="">desc</label>
              <input type="radio" 
                name="sort" 
                :value="sortItem.value + '_desc'"
                :checked="isChecedSort(sortItem.value + '_desc')"
                @change="setSort(sortItem.value + '_desc')"
              >
            </span>
          </span>
        </div>
      </div>

      <div class="catalog-list">
        <catalog-item 
          v-for="item in items" 
          :key="item.ID" 
          :item="item" />
      </div>

        <pagination 
          v-if="endpage > 1"
          :endpage="endpage" 
          :navpagenomer="navpagenomer"
          @page-click="onPagenLinkClick" 
          :navnum="navnum"></pagination>
  </div>
</template>

<script>
import CatalogItem from './CatalogItem'
import Loading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/vue-loading.css';
import History from 'html5-history-api';
import QueryString from 'query-string';
import Pagenation from './Pagination';

export default {
    name: "catalog-list",
    props:[
      'items_json',
      'ajax_url', 
      'catalog_url',
      'sort_params',
      'endpage',
      'navpagenomer',
      'navnum'
    ],
    data(){
      let res_items = JSON.parse(this.items_json);
      let sort_params = this.parseSortParams(JSON.parse(this.sort_params));
      return{
        items: res_items,
        sortParams: sort_params,
        loading: false,
      }
    },
    components:{
      CatalogItem,
      Loading,
      Pagenation
    },
    mounted(){
      EventBus.$on('set-filter', this.onSetFilter);
    },
    methods:{
      onPagenLinkClick(number){
        let parsed = QueryString.parse(location.search);
        parsed['PAGEN_'+this.navnum] = number;
        let newUrl = this.updateGetParams(parsed);
        this.update(newUrl);

      },
      setSort(params){
        let parsed = QueryString.parse(location.search);
        parsed.sort = params;
        let newUrl = this.updateGetParams(parsed);
        this.update(newUrl);
      },
      isChecedSort(value){
        return this.getGetParam('sort') == value;
      },
      parseSortParams(sort_params){
        let result = [];
        sort_params.forEach((value, index, arr)=>{
          if(value.length > 0)
            result.push({ name:value.split('|')[0], value:value.split('|')[1], selected: false});
        });
        return result;
      },
      updateGetParams(parsed){
        let newParams = QueryString.stringify(parsed);
        let url = location.href.split('?')[0];
        let newUrl = url + "?" + newParams;
        History.pushState(null, null, newUrl);
        return newUrl;
      },
      getGetParam(name){
        if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search))
          return decodeURIComponent(name[1]);
      },
      getRequestParams(){
        let params = "";
        if(location.href.split("?").length > 1){
          params = location.href.split("?")[1];
          params = "?" + params;
        }
        return params;
      },
      onSetFilter(url){
        History.pushState(null, null, url + this.getRequestParams());

        this.update(url);
      },
      update(url){
        if(this.loading) return false;

        this.loading = true;
        let ajaxUrl = url.replace(this.catalog_url, this.ajax_url);   

        axios({
          method: 'get',
          url: ajaxUrl
        })
        .then((response)=>{
          let html = document.createRange().createContextualFragment(response.data);
          let catalogList = html.querySelector('catalog-list');
          let catalogResult = catalogList.getAttribute('items_json');
          this.items = JSON.parse(catalogResult);
          this.loading = false;
        })
        .catch((response)=>{
          this.loading = false;
          console.log('update catalog error');
        }); 
      }
  }
}
</script>

<style>

</style>