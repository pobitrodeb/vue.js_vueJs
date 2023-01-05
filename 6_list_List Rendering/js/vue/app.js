var app = Vue.createApp({
    data(){
        return {
            // skills: ['html', 'css', 'js', 'php', 'mysql', 'oop'], 
            // array data 
            skills: [
                {name: 'HTML', project_exprience:35},
                {name: 'CSS', project_exprience:25},
                {name: 'BOOTSTRAP', project_exprience:22},
                {name: 'RESPONSIVE DESIGN', project_exprience:18},
                {name: 'JAVASCRIPT', project_exprience:15},
                {name: 'VUE JS', project_exprience:25},
                {name: 'jQuery', project_exprience:28},
                {name: 'PHP', project_exprience:15},
                {name: 'MySQl', project_exprience:15},
                {name: 'OOP', project_exprience:15},
                {name: 'LARAVEL', project_exprience:18},
            ],
            newSkill: "",
        };

    }, 

    methods: {
        addSkill(){
            this.skills.push(this.newSkill);
            // this.newskill = " ";
        }, 
        removeSkill(index){
            this.skills.splice(index, 1);
        }
    },
});

app.mount("#app");