var app1 = Vue.createApp({
    data(){
        return {
          
        };
    }, 
    
});

app1.component('contact-details2',{
  data(){
    return {
      name: "Pobitro Debnath",
    }; 
  }, 
  template: `
      <h2>Congratulations Pobitro Debnath  </h2>
  `
  
});
app1.mount("#app1");