<!DOCTYPE html>
<html>
<body>
<?php function geefTienProcent () {
     $koopPrijs = 75;
     $korting = ($koopPrijs/100)*10;
     return $koopPrijs - $korting;
} 
        
function goeiePrijs () { 
    echo 'Het totaal bedrag is '.geefTienProcent().' euro';
} 
goeiePrijs ();
?>
</body>
</html>