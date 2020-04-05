<template>
  <div class="catalog-item">
    <div class="item-name">
      <a :href="item.DETAIL_PAGE_URL" :title="item.NAME"> {{item.NAME}} </a>
    </div>
    <div class="item-pic">
      <a :href="item.DETAIL_PAGE_URL" :title="item.NAME">
        <span class="pic-bg" :style="'background-image:url('+item.PREVIEW_PICTURE.SRC+')'"></span>
      </a>
    </div>
  </div>
</template>

<script>
export default {
  name: "catalog-item",
  props:['item']
}
</script>

<style>
</style>