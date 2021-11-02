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
        <p v-bind:class="classes">Абзац</p>
    </div>


    <script>
        let app = new Vue({
            el: '#app',
            data: {
                isActive: false,
                classes: {
                    active: true,
                    valid: true,
                    warning: false,
                }
            },
        });
    </script>
<?php include "parts/footer.php"; ?>