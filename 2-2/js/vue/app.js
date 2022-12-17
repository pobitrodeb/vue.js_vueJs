var app = Vue.createApp({
    data(){
        return {
            message : "wellcme to ", 

            info: {
                name: "Pobitro Debnath", 
                webiste: "http://www.pobitrodeb.com/", 
                gihub: "https://github.com/pobitrodeb"
            }, 
            
            htmlCode: 'https://facebook.com/pobitrodeb',   
        }
    }
});

app.mount("#app");