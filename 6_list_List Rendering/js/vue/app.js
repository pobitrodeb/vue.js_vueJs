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
        }
    },
});

app.mount("#app");