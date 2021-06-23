<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#100DaysOfVue</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

    <style>
    .bg-red {
        background-color: red;
    }

    .bg-blue {
        background-color: blue;
    }

    .is-loading {
        background-color: yellow;
    }

    </style>
</head>

<body>
    <h1>Day 5 - Learn Vue Js </h1>
    <p>#100DaysOfVue</p>

    <div id="app">
        <!-- <button :class="{ className }">Click me</button> -->
        <button :class="{ 'is-loading': isActive }" @click="toggleClass" >Click me</button>

    </div>

    <script>
        let app = new Vue({
            el: '#app',
            data: {
                title: 'Hey there',
                className: 'bg-red',
                isActive: false,
            },

            methods: {
                toggleClass(){
                    // this.className = 'bg-blue';
                    this.isActive = true;
                }
            }
           
        });
    </script>
</body>

</html>