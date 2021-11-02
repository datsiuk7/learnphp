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
        <ul>
            <li v-for="(item, index) in items" v-on:mouseover="removeItem(index, item)">
                {{ item }}
            </li>
        </ul>
    </div>


    <script>
        let app = new Vue({
            el: '#app',
            data: {
                items: [1, 2, 3, 4, 5, 6, 7, 8, 9],
            },
            methods: {
                removeItem: function(index,item) {
                    this.items.splice(index, 1, item+"!");
                }
            }
        });
    </script>
<?php include "parts/footer.php"; ?>