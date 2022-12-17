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

        incress(){
            this.count = this.count+1; 
        },
        decress(){
            this.count = this.count-1; 
        }

    },
});

app.mount("#app");