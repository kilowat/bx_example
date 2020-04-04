<template>
  <div class="pagen-component">
      <paginate
        v-model="page"
        :page-count="total"
        :click-handler="onClick"
        :prev-text="'Prev'"
        :next-text="'Next'"
        :container-class="'className'">
      </paginate>
  </div>
</template>

<script>
import Paginate from 'vuejs-paginate'

export default {
  name: 'pagination',
  props:['endpage', 'navpagenomer', 'navnum'],

  data(){
    return{
      page: parseInt(this.navpagenomer),
      total: parseInt(this.endpage),
    }
  },
  components:{
    Paginate 
  },
  created(){
 
  },
  methods:{
    onClick(val){
      this.$emit('page-click', val);
    }
  }
}
</script>
<style>
  .pagen-component{
    margin-top: 20px;
    text-align: center;;
  }
  .pagen-component ul{
    list-style: none;
    display: inline-flex;
    margin:0;
    padding:0;
  }
  .pagen-component li {
      margin-left: 5px;
      margin-right: 5px;
  }
  .pagen-component li.active > a{
    color: red;
  }
  .pagen-component li.disbled > a{
    color: grey;
  }
</style>