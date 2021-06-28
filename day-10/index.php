<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#100DaysOfVue</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>

<body>
    <h1>Day 10 - Learn Vue Js </h1>

    <div id="app">
        <div class="container">
            <modal v-if="showModal" @close='showModal=false'>
                <p>Any text here added</p>
            </modal>

            <button @click='showModal=true'>Click to Open Modal</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

    <script src="main.js"></script>

</body>

</html>