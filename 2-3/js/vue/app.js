var app = Vue.createApp({
    data(){
        return {
            count: 0,
        };

    }, 

    methods: {
        getCurrentTime()
        {
            let ct = new Date(); 
            return new Date();
        }, 
    },
});

app.mount("#app");