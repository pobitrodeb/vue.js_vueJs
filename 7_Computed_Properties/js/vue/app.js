var app = Vue.createApp({
    data(){
        return {
            skills: [
                {name: 'HTML', project: 15},
                {name: 'CSS', project: 5},
                {name: 'JavaScript', project: 5},
                {name: 'PHP', project: 10},
                {name: 'Laravel', project: 18},
            ]
        };

    }, 

    methods: {
        removeList(index){
            this.skills.splice(index, 1);
        }, 
        totoalSkillCount()
        {
            return this.skills.length;
        }
    },
});

app.mount("#app");