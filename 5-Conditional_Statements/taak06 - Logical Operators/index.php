<!DOCTYPE html>
<html>
<body>
<?php
$var1 = 12;
$var2 = 30;

if ($var1 > 10 && $var2 < 35) {
    echo "De getallen zitten tussen de 10 en 35.";
}
else {
    echo "De getallen zijn kleiner dan 10 of groter dan 35";
}
echo "<br>";
if ($var1 > 10 || $var2 < 35) {
    echo "Één of beide getallen zitten de 10 en 35";
}
else {
    echo "Één of beide getallen zijn kleiner dan 10 of groter dan 35";
}
echo "<br>";
if ($var1 > 5 xor $var2 < 20) {
    echo "Één van de getallen zit tussen de 5 en 20";
}
else {
    echo "Beide getallen zitten tussen de 5 en 20 of beide getallen zitten onder de 5 en boven de 20";
}
echo "<br>";
if ($var1 != 20 && $var2 != 25) {
    echo "Beide getallen zijn geen 20 en 25.";
}
else {
    echo "Één of beide getallen is 20 en 25";
}


    ?>
</body>
</html>