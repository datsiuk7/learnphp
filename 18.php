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
            min-height: 400px;
            border: 1px dashed gray;
            margin: 10px;
        }
        .box{
            border: 5px solid black;
            margin: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        input{
          width: 70px;
        }
        .text{
          width: 150px;
        }

    </style>
</head>
<body>
<div id="app">

    <div class="main">
        <div class="box" v-bind:style="{
         backgroundColor: backgroundColor,
         color:color,
         height: height*10+'px',
         width: width*10+'px',
         borderColor: bordercolor,
        'border-top-left-radius':borderradiuslt+'px',
        'border-bottom-left-radius':borderradiuslb+'px',
        'border-top-right-radius':borderradiusrt+'px',
        'border-bottom-right-radius':borderradiusrb+'px',
        'font-size': fontsize+'px'
      }">{{text}}</div>
    </div>
    <br>
    Колір фону: <input v-model="backgroundColor" type="color">
    Колір тексту: <input v-model="color" type="color">
    Колір границі: <input v-model="bordercolor" type="color">
    Висота: <input v-model="height" type="number">
    Ширина: <input v-model="width" type="number">
    <br>
    <hr>
    Границя ліва верхня: <input v-model="borderradiuslt" type="number">
    Границя права верхня: <input v-model="borderradiusrt" type="number">
    <br>
    <br>
    Границя ліва нижня: <input v-model="borderradiuslb" type="number">
    Границя права нижня: <input v-model="borderradiusrb" type="number">
    <br>
    <hr>
    текст: <input class="text" v-model="text" type="text">
    висота тексту: <input v-model="fontsize" type="number">

</div>
<script>
    let app = new Vue({
            el: '#app',
            data: {
                color: "",
                backgroundColor: "",
                height: 15,
                width: 15,
                borderradiuslt: 0,
                borderradiuslb: 0,
                borderradiusrt: 0,
                borderradiusrb: 0,
                bordercolor:"",
                text:"Привіт світе!",
                fontsize:15,
            },
            methods: {
                colors() {
                    return this.color;
                }
            }
        })
    ;
</script>

</div><?php include "parts/footer.php"; ?>
