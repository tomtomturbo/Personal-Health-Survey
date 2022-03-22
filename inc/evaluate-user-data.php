<?php


/*
Achtung: Zuerst prüfen, ob ein Schlüssel-Wert überhaupt gesetzt ist,
sonst reagiert PHP mit einem Fehler.

Die Funktion dazu: isset()
*/
$totalPoints = 0;

if (isset($_SESSION['index'])){
    $post = $_SESSION['index'];
    
    if (isset($post['range-slider'])){
    $valueQuestion1 = $post['range-slider'];

    $valueQuestion1 = intval($valueQuestion1);

    if ($valueQuestion1 > 3){
        // "ungesund" (0 Punkte) sind WErte von 0 bis und mit 3
        $totalPoints = $totalPoints + 1;
    }
}
else {
    echo "Development ERROR: the requested value is not given in the POST.";
}

}