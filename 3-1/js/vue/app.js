var app = Vue.createApp({
    data(){
        return {
        inputNumber: "", 
          result: ""
        };

    }, 

    methods: {
        handleInput(e){
         //   console.log(e);
            this.inputNumber = e.target.value; 
        }, 
        getDubble(){
            this.result = this.inputNumber * 2 ;
        }, 

        getSqure(){
            this.result = this.inputNumber * this.inputNumber ;
        }, 
        reset(){
            this.inputNumber = "", 
            this.result = ""
        }
    },
});

app.mount("#app");