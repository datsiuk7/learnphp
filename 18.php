<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>HTML5</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .main{
            min-height: 300px;
        }
        .box{
            border: 5px solid black;
            margin: 15px;
        }
        .red {
            background-color: red;
        }

        .green {
            background-color: green;
        }

        .yellow {
            background-color: yellow;
        }

        .blue {
            background-color: blue;
        }
    </style>
</head>
<body>
<div id="app">

    <div class="main">
        <div class="box" v-bind:style="{backgroundColor: backgroundColor,color:color, height: height*10+'px', width: width*10+'px', borderColor: bordercolor,}">{{text}}</div>
    </div>
    <br>
    backgroundColor: <input v-model="backgroundColor" type="color">
    color: <input v-model="color" type="color">
    bordercolor: <input v-model="bordercolor" type="color">
    height: <input v-model="height" type="number">
    width: <input v-model="width" type="number">
    text: <input v-model="text" type="text">

</div>


<script>
    let app = new Vue({
            el: '#app',
            data: {
                color: "",
                backgroundColor: "",
                height: 15,
                width: 15,
                bordercolor:"",
                text:""
            },
            methods: {
                colors() {
                    return this.color;
                }
            },
            computed: {

            }
        })
    ;
</script>

</div><?php include "parts/footer.php"; ?>