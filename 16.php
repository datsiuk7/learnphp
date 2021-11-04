<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>HTML5</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <style>
        .red {
            color: red;
        }

        .green {
            color: green;
        }

        .width {
            width: 200px;
        }

        #app {
            display: flex;
            justify-content: space-around;
        }

        .left {
            text-align: center;
        }
    </style>
</head>
<body>


<div id="app">
    <div class="left">
        <input type="text" class="width" v-model="name"><br>
        <textarea v-model="text" class="width" placeholder="введите несколько строчек"></textarea><br>
        Active: <input type="checkbox" v-model="active"><br>
        <button v-on:click="add" class="width">{{button}}</button>
    </div>
    <div class="right">
        <table border="1px">
            <tr>
                <th>id</th>
                <th>Імя</th>
                <th>Замітка</th>
                <th>Дата створення</th>
                <th>Видалити</th>
            </tr>
            <tr v-for="todo, index in todos" v-bind:class="{red: !todo.active, green: todo.active}">
                <th>{{index + 1}}</th>
                <th>{{todo.name}}</th>
                <th>
                    <button v-on:click="open(index)">Відкрити</button>
                    <button v-on:click="rename(index)">Редагувати</button>
                </th>
                <th>{{todo.time}}</th>
                <th>
                    <button v-on:click="remove(index)">X</button>
                </th>
            </tr>
        </table>
    </div>
</div>


<script>
    let app = new Vue({
        el: '#app',
        data: {
            name: '',
            text: '',
            time: 0,
            active: false,
            todos: [
                {name: '', text: '', time: 0, active: false},
            ],
            button: 'Добавити',
        },
        methods: {
            add: function () {
                this.todos.push({
                    name: this.name,
                    text: this.text,
                    time: new Date().toLocaleTimeString(),
                    active: this.active
                });
            },
            open: function (index) {
                this.name = this.todos[index].name;
                this.text = this.todos[index].text;
                this.active = this.todos[index].active;
                this.button = "Створити";
            },
            rename: function (index) {
                this.name = this.todos[index].name;
                this.text = this.todos[index].text;
                this.text = this.todos[index].text;
                this.time = this.todos[index].time;
                this.todos.splice(index, 1);
                this.button = "Редагувати";
            },
            remove: function (index) {
                this.todos.splice(index, 1);
            }
        }
    });
</script>

</div><?php include "parts/footer.php"; ?>