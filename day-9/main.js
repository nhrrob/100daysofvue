Vue.component('message', {
    props: ['title', 'body'], 
    template: `
    <article class="message" v-show='isVisible'>
        <div class="message-header">
            <p>{{ title }}</p>
            <button class="delete" @click='deleteModal' aria-label="delete"></button>
        </div>
        <div class="message-body">
            {{ body }}
        </div>
    </article>
    `,
    methods: {
        deleteModal() {
            return this.isVisible=false; 
        }
    }, 
    data() {
        return {
            isVisible: true,
        }
    }
});


let app = new Vue({
    el: '#app',
    data: {
        
    }
});