Vue.component('task', {
    template: '<li><slot></slot></li>',
    data(){
        return {
            message : 'Hello world',
        }
    }
});

new Vue({
 el: '#app',   
});