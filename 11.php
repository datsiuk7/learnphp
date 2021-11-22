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
        <p v-if="num < magic">Введіть більше число</p>
        <p v-if="num == magic">Ви знайшли загадане число</p>
        <p v-if="num > magic">Введіть менше число</p>
        <input type="number" v-model="num">
    </div>


    <script>
        let app = new Vue({
            el: '#app',
            data: {
                magic: 20,
                num: 0,
            }
        });
    </script>
<?php include "parts/footer.php"; ?>
