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
    <h1>Day 3 - Learn Vue Js </h1>
    <p>#100DaysOfVue</p>

    <div id="app">
        <ul>
            <li v-for='name in names'>{{ name }}</li>
        </ul>

        <input type="text" id="nameInput">
        <button id="addName">Add Name</button>
    </div>

    <script>
        let app = new Vue({
            el: '#app',
            data: {
                names: ['name 1', 'name 2', 'name 3'],
            },
            mounted() {
                document.querySelector('#addName').addEventListener('click', () => {
                    let nameValue = document.querySelector('#nameInput').value;
                    app.names.push(nameValue);
                    document.querySelector('#nameInput').value = '';
                })
            }
        });
    </script>
</body>

</html>