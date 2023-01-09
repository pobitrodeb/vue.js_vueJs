<template>
  <div clas="card">
     <product  v-for="product in products" 
     :key="product.id" 
     :title="product.title" 
     :image="product.image"
     >
     </product>
  </div>
</template>

<script>
import axios from 'axios';
import Product from '../components/Product.vue';
export default {
  data(){
    return {
      product: [],
    };
  },
  props: {
        title:String, 
        image: {
            type: String, 
            required:true,
        },
    },
  components: {
        Product,
    },
 mounted(){
 axios.get('https://fakestoreapi.com/products').then(res => {
  this.products = res.data;
  console.log(res); 
 })
 .catch((e) => { 
  console.log(res); 
  });
 },
};
</script>

<style>

</style>
