<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>HTML5</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    </head>
    <body>

    <div id="app">
        <input v-model="newItem">
        <button v-on:click="addItem">Добавить</button>
        <ul>
            <li v-for="item, index in items">{{ item }}
                <button v-on:click="removeItem(index)">Видалити</button>
            </li>
        </ul>
    </div>


    <script>
        let app = new Vue({
            el: '#app',
            data: {
                newItem: '',
                items: ['a', 'b', 'c', 'd', 'e'],
            },
            methods: {
                addItem: function() {
                    this.items.unshift(this.newItem);
                },
                removeItem: function(index) {
                    this.items.splice(index, 1);
                }
            }
        });
    </script>
<?php include "parts/footer.php"; ?>