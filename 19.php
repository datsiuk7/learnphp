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
            margin-left: 15px;
            margin-top: 15px;
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
<div id="app" class="main">
    Від: <input v-model="start" type="number">
    До: <input v-model="end" type="number">
    Фільтер: <input v-model="company" type="text">

    <ul>
        <li v-for="animal in filteredList">{{animal.name}}</li>
    </ul>
    <span v-for="animal in animals">{{animal.name}} , </span>

</div>


<script>
    let app = new Vue({
            el: '#app',
            data: {
                start: 0,
                end: 2,
                animals:[
                    {'name': 'собака'},
                    {'name': 'кіт'},
                    {'name': 'кит'},
                    {'name': 'лисися'},
                    {'name': 'вовк'},
                ],
                company:""
            },
            methods: {
                array(){
                    return this.animals.slice(this.start, this.end);
                },
            },
            computed: {

                filteredList(){
                    var comp = this.company;
                    return this.array().filter(function (elem) {

                        if(comp==='') return true;
                        else return elem.name.indexOf(comp) > -1;
                    })
                }
            }
        })
    ;
</script>

</div><?php include "parts/footer.php"; ?>