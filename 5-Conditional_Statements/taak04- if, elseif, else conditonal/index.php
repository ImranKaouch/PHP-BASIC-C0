<!DOCTYPE html>
<html>
<body>
<?php
$prod_besteld = 20;

if($prod_besteld < 10) {
    $prijs = 1.50;
    echo "1.50";
} elseif($prod_besteld < 20) {
    $prijs = 1.25;
    echo "1.25";
} else {
    $prijs = 1.00;
    echo "1.00";
}
echo " ";
$prod_besteld = 15;

if($prod_besteld < 10) {
    $prijs = 1.50;
    echo "1.50";
} elseif($prod_besteld < 20) {
    $prijs = 1.25;
    echo "1.25";
} else {
    $prijs = 1.00;
    echo "1.00";
}
echo " ";
$prod_besteld = 9;

if($prod_besteld < 10) {
    $prijs = 1.50;
    echo "1.50";
} elseif($prod_besteld < 20) {
    $prijs = 1.25;
    echo "1.25";
} else {
    $prijs = 1.00;
    echo "1.00";
}
?>
    
</body>
</html>