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
        <button v-on:mouseover="show">Нажми на меня</button>
    </div>


    <script>
    let app = new Vue({
        el: '#app',
        data: {
            num1: 1,
            num2: 2,
            num3: 3,
        },
        methods: {
            show: function () {
                alert(this.num1+this.num2+this.num3);
            }
        }
    });
    </script>
    </body>
</html>