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
    <input v-model="name">
    <input type="number" v-model="price">
    <input type="number" v-model="quantity">
    <input type="checkbox" v-model="check">
    <button v-on:click="add">add</button>
    <br>
    <table border="1px" width="300px">
        <tr>
            <th>Назва</th>
            <th>Ціна</th>
            <th>Кількість</th>
            <th>Загальна вартість</th>
            <th>Видалити</th>
        </tr>
        <tr v-for="todo, index in todos" v-bind:class="{red: !todo.active, green: todo.active}">
            <td>{{todo.name}}</td>
            <td>{{todo.price}}</td>
            <td>{{todo.quantity}}</td>
            <td>{{todo.quantity * todo.price}}</td>
            <td><button v-on:click="remove(index)">X</button></td>
        </tr>
    </table>
<!--    <ul>-->
<!--        <li v-for="todo, index in todos" v-bind:class="{red: !todo.active, green: todo.active}">-->
<!--            {{todo.name}}-->
<!--            <button v-on:click="remove(index)">X</button>-->
<!--        </li>-->
<!--    </ul>-->
</div>


<script>
    let app = new Vue({
        el: '#app',
        data: {
            name: '',
            price: 0,
            quantity: 0,
            check: false,
            todos:[
                {name: 'product1', price: 100, quantity: 4, active: true},
                {name: 'product2', price: 200, quantity: 5, active: false},
                {name: 'product3', price: 300, quantity: 6, active: true},
            ]
        },
        methods: {
            add: function () {
                this.todos.push({
                    name: this.name,
                    price: this.price,
                    quantity: this.quantity,
                    active: this.check
                });
            },
            remove: function (index) {
                this.todos.splice(index, 1);
            }
        }
    });
</script>
<?php include "parts/footer.php"; ?>