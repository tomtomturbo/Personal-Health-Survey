<?php
/* dieses Script ist für Testzwecke. */

echo "Good Morning - lets make errors!<br>";

// Syntax-Errors
/*
 $hello='"
-> gibt ein Fehler:
Parse error: syntax error, unexpected string content "";" 
in /home/oppdev2021/Dokumente/projects/Personal Health Survey/inc/error-types.php on line 8
*/

//nicht existierende Variablen
//if ($car === 'Volvo') {echo 'I like Volvo!';}
//-> Warning: Undefined variable $car in /home/.../inc/error-types.php on line 15



// nicht existierende Array-Schlüssel (Keys)

/*$persons = [
    "Peter" => "Peter Muster", 
    "Fritz" => "Fritz Müller"
];

echo $persons["Petra"];
// Warning: Undefined array key "Petra" in /home/.../inc/error-types.php on line 27
*/


?>