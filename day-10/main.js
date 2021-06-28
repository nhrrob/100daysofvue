Vue.component('modal', {
    template: `<div class="modal is-active">
                    <div class="modal-background"></div>
                    <div class="modal-content">
                        <div class="box">
                            <slot></slot>
                    </div>
                    </div>
                    <button class="modal-close is-large" @click="$emit('close')" aria-label="close"></button>
                </div>`,
});


let app = new Vue({
    el: '#app',
    data: {
        showModal: false,
    },
    // methods: {
    //     showModalMethod(){
    //         console.log('clicked');
    //         return this.showModal = true;
    //     }
    // }
});