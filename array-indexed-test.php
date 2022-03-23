<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="row">>
    <div class="col-sm-8">
    <!--CONTENT-->
    <h7>INDEXED ARRAYS</h7>
    <p>&nbsp;</p>
    <?php
    
    // Array setzen
    $people = array("Petra", "Felicitas", "Julia", "Juan", "Pablo");

    //einzelne Werte abrufen
    $name = $people[2]; //wird julia sein
    echo "An dritter Position ist $name.";

    $i = 0;
    $name1 = $people[$i];
    echo "An erster Position ist $name1.<br>";

    //Array in Seite ausgeben
    echo "<pre>";
    print_r($people);
    echo "<pre>";

    // Alle Werte im Array auflisten
    for ($i = 0; $i < count($people); $i++){
        $name = $people[$i];
        echo "An $i-ten Position ist $name.<br>";
    }

    //Finde heraus, ob "Felicitas" sich in der Personenliste befindet. 

    $name= "Felicitas";

    for ($i = 0; $i < count($people); $i++){
        if ($people[$i] === "Felicitas")
        echo "Ja, $name ist dabei!";
    }
    ?>




    </div>
</div>
</body>
</html>



