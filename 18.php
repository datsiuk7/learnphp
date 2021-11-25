<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>HTML5</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

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
        canvas{
          display: none;
        }
        #generate{
          width: 200px;
        }

    </style>
</head>
<body>
<div id="app">

    <div class="main">
        <div id="block" class="box" style="font-family: 'courier new'" v-bind:style="{
         backgroundColor: backgroundColor,
         color:color,
         height: height*10+'px',
         width: width*10+'px',
         borderColor: bordercolor,
        'border-top-left-radius':borderradiuslt+'px',
        'border-bottom-left-radius':borderradiuslb+'px',
        'border-top-right-radius':borderradiusrt+'px',
        'border-bottom-right-radius':borderradiusrb+'px',
        'font-size': fontsize+'px',
        'margin-left': movex+'%',
        'margin-top': movey+'%'
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
    <br>
    <br>
    Перемістити по осі X: <input v-model="movex" type="number">
    Перемістити по осі Y: <input v-model="movey" type="number">


</div>
<hr>
<!-- <input type="button" id="generate"  onclick="create()" value="Згенерувати картинку"> -->
<hr>
<p>Ваша картинка знизу</p>
<div id="img">
  Тут буде ваша картинка
</div>
<div id="canvashide">
  <canvas id="canvas" width="300" height="300"></canvas>
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
                movex:0,
                movey:0,
            },
            methods: {
                colors() {
                    return this.color;
                }
            }
        })
    ;
</script>
<script type="text/javascript">
function create() {
  var parent = document.getElementById("canvashide");
  var child = document.getElementsByTagName("canvas")[0];
  parent.removeChild(child);


  let count = 0;
  html2canvas(document.querySelector("#block")).then(canvas => {
    var node = document.getElementById("canvashide");
    node.appendChild(canvas);
    document.body.appendChild(node);
    var canvas = document.getElementsByTagName("canvas")[0];
    var img = canvas.toDataURL("image/png");
    var element = document.getElementById("img");
    var text = '<img src="'+img+'"/>';
    element.innerHTML = text;

  });
}
let timerId = setInterval(() => create(), 1000);
</script>
</div><?php include "parts/footer.php"; ?>
