<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math.php" method="post">
    <label>Radius :</label>
    <input type="text" name="radius">
    <button type="submit">Calculate</button>
</form>
</body>
</html>


<?php

$radius = $_POST["radius"];
$circumference=null;
$area=null;
$volume=null;

$circumference=2*pi()*$radius;
$area=pi()*pow($radius,2);
$volume=4/3*pi()*pow($radius,3);
$volume=round($volume,3);

echo"Circumference = {$circumference}cm <br>";
echo"Area = {$area}cm <br>";
echo"Volume = {$volume}cm <br>";
?>