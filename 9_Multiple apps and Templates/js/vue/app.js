var app1 = Vue.createApp({
    data(){
        return {
            name: "",
            message: "Congratulations, Pobitoro Debnath",
        }

    }, 

});

app1.mount("#app1");



var app2 = Vue.createApp({
    data(){
        return {
           message: "Congratulations, Pobitoro Debnath",
        }

    }, 
   template: "<h2>{{ message }}</h2>",
});

app2.mount("#app2");