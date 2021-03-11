<!DOCTYPE html>
<html>
<body>
<ul>
<?php
$myDogNames = array("<li>Tom</li>", "<li>Brodie</li>", "<li>Louis</li>");
echo $myDogNames [0], $myDogNames [1], $myDogNames [2];
$myDogNames [0] = '<li>Timmy</li>';
echo $myDogNames [0], $myDogNames [1], $myDogNames [2];
?>   
</ul>
</body>
</html>