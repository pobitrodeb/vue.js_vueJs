<template>
 <div class="card">
  <div class="products" v-for="product in products" :key="product.id">
   <img :src="product.image" alt="">
    <h4> {{ product.title }}</h4>
    <p>{{ product.price }}</p>
  </div>
 </div>
</template>

<script>
import axios from 'axios';
export default {
  data(){
    return {
      product: [],
    };
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
.card{
  display: flex;
  justify-content: space-around;
}
.card img{
    width: 70%;
}
</style>
