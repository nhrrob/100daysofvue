<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#100DaysOfVue</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>

<body>

    <div id="app">
        <input type="text" id="name" v-model="name" value="">
        <p>My name is {{ name }}</p>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                name: 'Vue js is awesome!',
                message: 'Vue Js is Great!'
            }
        });
    </script>
</body>

</html>