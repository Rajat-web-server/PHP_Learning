

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="array.php" method="post">
    <label for="">Enter a Country</label>
    <input type="text" name="country">
    <button type="submit">submit</button>
    </form>
</body>
</html>

<?php

$Capital = ["USA"=>"WA,DC","India"=>"New Delhi","Japan"=>"Kyoto","China"=>"Beijing"];

$Capital=$Capital[$_POST["country"]];

// foreach( $language as $lang ) {
    echo "The capital is {$Capital}";
// }
?>