<?php

include ("db_connection.php");  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#b7defa"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/woordspel.css">
    <script src="../javascript/validatie.js"></script>
    <title>woordspel</title>
</head>
<body>
<div id="snow"></div>
    <?php

    $sql= "SELECT * FROM spel ORDER BY rand() limit 1";  //select alles van db spel random limit is niet meer dan 1


    $data = $conn->query($sql); //dit is enkel om de query uit te voeren 
    foreach ($data as $row)  // voor elke data maakt foreach een nieuwe rij 
    {   
        $htmlOutput  = "";         
        $htmlOutput .= '<div class="container">'; // niets meer als je div waar je alles wilt hebben 
        $htmlOutput .= '<img src="../img/' . $row['afbeelding'] . '" class="afbeelding">';  // hier zeg ik dat hij moet gaan zoeken in het mapje img 
        $htmlOutput .= '<input type="hidden" id="imageName" value="' . $row['woord'] . '">'; //hier zet ikk een input op hidden zodat ik deze later kan gebr in js 
        $htmlOutput .= '</div>';   // niets meer als de div waar je in html hem afsluit 
        echo $htmlOutput;
    }  
    ?>
    <div class="knop">
     <input type="text" onfocus="this.value=''" id="userInput">
     <button onclick="validate()">ga!</button>
     </div>
     <a href="score.php"><button class="stop">stop</button></a>
</body>
</html>