<template>
  <div class="catalog-item">
    <div class="item-name">
      <slot name="item-name">  
        <a :href="item.DETAIL_PAGE_URL" :title="item.NAME"> {{item.NAME}} </a>
      </slot>
    </div>
    <div class="item-pic">
      <slot name="item-pic">
        <a :href="item.DETAIL_PAGE_URL" :title="item.NAME">
          <span class="pic-bg" :style="'background-image:url('+item.PREVIEW_PICTURE.SRC+')'"></span>
        </a>
      </slot>
    </div>
    <div class="">
      
    </div>

  </div>
</template>

<script>
export default {
  name: "catalog-item",
  props:{
    item: {
      type: Object,
      default () {
        return {
          ID: "",
          DETAIL_PAGE_URL: "",
          NAME: "",
          PREVIEW_PICTURE:{SRC: ""}
        }
      }      
    }
  },
}
</script>

<style>
</style>