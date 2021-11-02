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
        <button v-on:click="hideElem1">{{ show1 ? 'Скрыть' : 'Показать' }}</button>
        <button v-on:click="hideElem2">{{ show2 ? 'Скрыть' : 'Показать' }}</button>
        <button v-on:click="hideElem3">{{ show3 ? 'Скрыть' : 'Показать' }}</button>
        <p v-if="show1">hi 1</p>
        <p v-if="show2">hello 2</p>
        <p v-if="show3">welcome 3</p>
    </div>


    <script>
        let app = new Vue({
            el: '#app',
            data: {
                show1: true,
                show2: true,
                show3: true,
                name: 'Вася'
            },
            methods: {
                hideElem1: function() {
                    this.show1 = !this.show1;
                },
                hideElem2: function() {
                    this.show2 = !this.show2;
                },
                hideElem3: function() {
                    this.show3 = !this.show3;
                },
            }
        });
    </script>
<?php include "parts/footer.php"; ?>