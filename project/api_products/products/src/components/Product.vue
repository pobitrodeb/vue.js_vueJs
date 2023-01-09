<template>
    <div class="card">
     <div class="products">
      <img :src="image" alt="">
       <h4> {{ title }}</h4>
      <h3>{{ price }}</h3>
     </div>
    </div>
   </template>
<script>
export default {
  
   
};
</script>
<style scoped>
</style>
<style scoped>
.card{
  display: flex;
  justify-content: space-around;
}
.card img{
    width: 70%;
}
</style>