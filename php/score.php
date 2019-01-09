<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/score.css">
    <title>score</title>
</head>
<body>
<div id="snow"></div>
    <div id="scoreboard">
        <script>
        document.getElementById('scoreboard').innerHTML = sessionStorage.getItem("key");
        </script>
    </div>
    <div class="samba">
   <h1>tot snel!</h1>
<img src="../img/thanks.gif"width="100%">
<a href="../index.html"><button class="stop">ga</button></a>
</div>
</html>