<template>
  <div></div>
</template>

<script>
import axios from 'axios';
export default {
 mounted(){
 axios.get('https://fakestoreapi.com/products').then(res => {
  console.log(res); 
 })
 .catch((e) => { 
  console.log(res); 
  });
 },
};
</script>

<style></style>
