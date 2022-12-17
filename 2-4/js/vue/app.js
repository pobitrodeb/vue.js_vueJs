var app = Vue.createApp({
    data(){
        return {
            count: 1,
        };

    }, 

    methods: {
        
        test(event){
            console.log("test");
            console.log(event);
        }
    },
});

app.mount("#app");