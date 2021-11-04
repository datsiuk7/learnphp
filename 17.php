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
        .flip-list-move {
            transition: transform 1s;
        }
        .block{
            background-color: red;
            width: 50px;
            height: 50px;
            margin: 1px;

        }
        .player {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background-color: green;
            position: relative;
            top: -10px;
        }
    </style>
</head>
<body>
<div class="block" id="b1"></div>
<div class="block" id="b2"></div>
<div class="block" id="b3"></div>
<div class="block" id="b4"></div>
<div class="block" id="b5"></div>
<div class="player"></div>

<div id="app">

</div>


<script>

</script>

</div><?php include "parts/footer.php"; ?>