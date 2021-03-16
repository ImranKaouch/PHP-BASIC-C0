<!DOCTYPE html>
<html>
<body>
<?php
$test1 = 3;
$test2 = 6;

if ($test1 == $test2) {
    echo "De vergelijking is waar.";
}
else {
    echo "De vergelijking is niet waar.";
}
echo "<br>";

if ($test1 <> $test2) {
    echo "Test1 en test2 zijn ongelijk";
}
else {
    echo "Test1 is wel gelijk aan test2";
}
echo "<br>";
if ($test1 === $test2) {
    echo "Test1 is identiek aan test2";
}
else {
    echo "Test1 is niet identiek aan test2";
}
echo "<br>";
if ($test1 > $test2) {
    echo "Test1 is groter dan test2";
}
else {
    echo "Test1 is niet groter dan test2";
}
echo "<br>";
if ($test1 < $test2) {
    echo "Test1 is kleiner dan test2";
}
else {
    echo "Test1 is niet kleiner dan test2";
}
echo "<br>";
if ($test1 >= $test2) {
    echo "Test1 is groter of gelijk aan test2";
}
else {
    echo "Test1 is niet groter of gelijk aan test2";
}
echo "<br>";
if ($test1 <= $test2) {
    echo "Test1 is kleiner of gelijk aan test2";
}
else {
    echo "Test1 is niet kleiner of gelijk aan test2";
}
?>
    
</body>
</html>