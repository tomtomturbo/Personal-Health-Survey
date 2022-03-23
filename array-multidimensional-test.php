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
    <h7>MULTIDIMENSIONAL ARRAYS</h7>
    <p>&nbsp;</p>
    <?php
    
    // Array setzen
    $people = array(
        array(
            "firstName" => "Fritz", 
            "lastName" =>"Müller", 
            "age" => 48
        ),
        array(
            "firstName" => "Paul",
            "lastName" => "Meier",
            "age" => 24
        ),
        array(
            "firstName" => "Hans",
            "lastName" => "Rutz",
            "age" => 35
        )
    );

    //einzelne Werte abrufen
   
    //was ist der 'lastName' vom 2. Personen-Datensatz
    //Vorgehen in 2(!!) Schritten:
    $personData = $people[1];
    echo "Als 2. Personen-Datensatz gibt es:<br>";
    print_r($personData);
    echo "<br>";
    $lastName = $personData['lastName'];
    echo "An zweiter Stelle kommt Herr/Frau $lastName:<br>";

    //Vorgehen in EINEM Schritt:
    $lastName = $people[1]['lastName'];
    echo "Nochmals: An zweiter Stelle kommt Herr/Frau $lastName:<br>";

    //Achtung! Prüfen, ob ein Schlüssel überhaupt existiert: isset()
    $x = 0; $y = 'lastName';
    if (isset($people[$x]) && isset($people[$x][$y])){
        $lastName = $people[$x][$y];
        echo "'lastName' aus x und y ist $lastName<br>";
    }
    else {
        // Schlüssel $x oder $y ist NICHT $people.
    }

    //Array in Seite ausgeben
    echo "<pre>";
    print_r($people);
    echo "<pre>";

    // Alle Werte im Array auflisten
    for ($i = 0; $i < count($people); $i++){
        $personData = $people[$i];

        $firstName = $personData['firstName'];
        $lastName = $personData['lastName']; 
        $age = $personData['age'];
        echo "$firstName $lastName ist $age jahre alt. <br>";
    }
    
  
    //Liste alle Personen, die jünger als 30 Jahre alt sind.

    ?>






    </div>
</div>
</body>
</html>



