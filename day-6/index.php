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
    <h1>Day 6 - Learn Vue Js </h1>
    <p>#100DaysOfVue</p>

    <div id="app">
        <!-- <h1>{{ reversedText }}</h1> -->

        <h2>All Tasks</h2>
        <ul>
            <li v-for="task in tasks" v-text="task.description"></li>
        </ul>

        <!-- <h2>Completed Tasks</h2>
        <ul>
            <li v-for="task in tasks" v-if="task.completed" v-text="task.description"></li>
        </ul> -->

        <!-- <h2>Incomplete Tasks</h2>
        <ul>
            <li v-for="task in tasks" v-if="task.completed == false" v-text="task.description"></li>
        </ul>
         -->
        <h2>Incomplete Tasks</h2>
        <ul>
            <li v-for="task in incompleteTasks" v-text="task.description"></li>
        </ul>
    </div>

    <script>
        let app = new Vue({
            el: '#app',
            data: {
            //   message: 'Hello World',  
                tasks: [
                    { description: 'Go to the store', completed: true },
                    { description: 'Buy fruits', completed: false },
                    { description: 'Buy medicine', completed: false },
                    { description: 'Make tutorial video', completed: false },
                    { description: 'Learn laravel from laracast', completed: false },
                    { description: 'Subscribe to nazmulrobin.com\'s youtube channel', completed: true },
                ]
            },

            computed: {
                // reversedText() {
                //     return this.message.split('').reverse().join('');
                // }
                incompleteTasks() {
                    // return this.tasks.filter(function(task){
                    //     return !task.completed;
                    // })
                    
                    return this.tasks.filter(task => !task.completed);
                }
            }
           
        });
    </script>
</body>

</html>