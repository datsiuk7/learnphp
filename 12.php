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
    </style>
</head>
<body>


<div id="app">
    <input v-model="people">
    <input type="checkbox" v-model="check">
    <button v-on:click="add">add</button>
    <br>
    <ul>
        <li v-for="todo, index in todos" v-bind:class="{red: !todo.active, green: todo.active}">
            {{todo.name}}
            <button v-on:click="remove(index)">X</button>
        </li>
    </ul>
</div>


<script>
    let app = new Vue({
        el: '#app',
        data: {
            people: '',
            check: false,
            todos: [
                {name: 'Коля', active: true},
                {name: 'Вася', active: true},
                {name: 'Петя', active: false},
            ]
        },
        methods: {
            add: function () {
                this.todos.push({name: this.people, active: this.check});
            },
            remove: function (index) {
                this.todos.splice(index, 1);
            }
        }
    });
</script>
<?php include "parts/footer.php"; ?>