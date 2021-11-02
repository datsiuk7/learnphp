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
        <button v-on:click="addItem">Добавить</button>

        <ul>
            <li v-for="item in items">{{ item }}</li>
        </ul>
    </div>


    <script>
    let app = new Vue({
        el: '#app',
        data: {
            items: ['1', '2', '32', '4', '51'],
        },
        methods: {
            addItem: function() {
                this.items = this.items.filter(function(elem) {
                    if (elem >= 0 && elem <= 10) {
                        return elem;
                    }
                });
            }
        }
    });
    </script>
<?php include "parts/footer.php"; ?>