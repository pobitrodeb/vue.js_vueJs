var app = Vue.createApp({
    data(){
        return {
            mobile: ""
        }

    }, 


    watch: {
        mobile (newValue, oldValue)
        {
            console.log(newValue);
            if(isNaN(newValue)){
                alert('Enter Number no text');
                this.mobile = oldValue;
            }

            if(newValue.length == 11){
                alert ("OTP Send Send Successfull"); 
            }
        }
    }
});

app.mount("#app");