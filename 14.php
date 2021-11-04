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
    <input v-model="message">
    <p>{{ message | capitalize }}</p>
</div>


<script>
    let app = new Vue({
        el: '#app',
        data: {
            message: 'hello',
        },
        filters: {
            capitalize: function(str) {
                return str.toUpperCase();
            }
        }
    });
</script>
<?php include "parts/footer.php"; ?>