var app = Vue.createApp({
    data(){
        return {
            mobile: "", 
            name: {
                firstName:"", 
                lastName: "", 
            }
        }

    }, 


    watch: {
        mobile (newValue, oldValue){
            console.log(newValue);
            if(isNaN(newValue)){
                alert('Enter Number no text');
                this.mobile = oldValue;
            }

            if(newValue.length == 11){
                alert ("OTP Send Send Successfull"); 
            }
        }, 

        // specific vabe porperti er object dhora 
        // 'name.firstName': function(newValue, oldValue){
        //     console.log(newValue);
        // },
        // 'name.lastName': function(newValue, oldValue){
        //     console.log(newValue);
        // },
// full poperties dhora 
        name:{
            deep: true, 
            handler: function(newValue, oldValue){
                console.log(newValue);
            }
        }

    }
});

app.mount("#app");