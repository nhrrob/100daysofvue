Vue.component('task', {
    template: '<li><slot></slot></li>',
    data(){
        return {
            message : 'Hello world',
        }
    }
});

Vue.component('task-list', {
    template: `<div>
                    <task v-for="task in tasks"> 
                        {{ task.description }}
                    </task>
                </div>`,
    data(){
        return {
            tasks: [
                { description: 'Go to store', isCompleted: true } ,
                { description: 'Go to bank', isCompleted: false }, 
                { description: 'Go to stadium', isCompleted: false }, 
                { description: 'Drink water', isCompleted: false }, 
                { description: 'Watch Portugal vs Belgium', isCompleted: true } 
            ]
        }
    }
})

new Vue({
 el: '#app',   
});