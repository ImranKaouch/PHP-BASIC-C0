<!DOCTYPE html>
<html>
<body>
<?php
function mijnNaamIsGroot () {
    $voornaam = "Imran";
    $achternaam = "Kaouch";
    $geheleNaam =  "Mijn naam is $voornaam  $achternaam";
    $volleNaam = strtoupper ($geheleNaam);
    echo ($volleNaam);
}


mijnNaamIsGroot ();
?>
   
</body>
</html>
