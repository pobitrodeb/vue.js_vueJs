var app = Vue.createApp({
    data(){
        return {
            skills: ['html', 'css', 'js', 'php', 'mysql', 'oop'], 
            newSkill: ""
        };

    }, 

    methods: {
        addSkill(){
            this.skills.push(this.newSkill);
        }, 
        removeSkill(index){
            this.skills.splice(index, 1);
        }
    },
});

app.mount("#app");