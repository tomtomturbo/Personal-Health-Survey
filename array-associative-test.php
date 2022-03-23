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
    <h7>ASSOCIATIVE ARRAYS</h7>
    <p>&nbsp;</p>
    <?php
    
    // Array setzen (Namen - Alter)
    $persons = array(
        "Julian" => 34, 
        "Nina" => 15, 
        "Jürgen" => 32
    );

    //
    $persons["Holger"] = 46;

    //einzelne Werte abrufen
    $age = $persons['Nina'];
    echo "Nina ist $age Jahre jung. <br>";

    $name = "Jürgen";
    $age = $persons[$name];
    echo "$name ist $age Jahre jung. <br>";

   
    

    //Array in Seite ausgeben
    echo "<pre>";
    print_r($persons);
    echo "<pre>";

    // Alle Werte im Array auflisten
    foreach($persons as $name => $age){
        echo "$name is $age jahre jung. <br>";
    }
    /*
    foreach($array as $key => $value){
    }
    */
    //Liste alle Personen, die jünger als 30 Jahre alt sind.
    foreach($persons as $name => $age){
        if ($age < 30){
            echo "$name ist $age Jahre jung und jünger als 30.<br>";
        }
    }
    
    ?>






    </div>
</div>
</body>
</html>



