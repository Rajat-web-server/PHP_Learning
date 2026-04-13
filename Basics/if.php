<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="if.php" method="post">
        <label for="">Enter your work hour per week</label>
        <input type="text" name="hour"><br>
        <label for="">Enter your rate per hour :</label>
        <input type="text" name="rate"><br>
        <button type="submit">calculate</button>
    </form>
</body>
</html>

<?php
    $hours = $_POST["hour"];
    $rate = $_POST["rate"];
    $weekly_pay=null;

    if($hours <= 0){
      $weekly_pay = 0;
    }
    elseif($hours <=40){
        $weekly_pay = $hours * $rate;
    }
    else{
        $weekly_pay = ( $rate*30) + ($hours*2)-40;
    }

    echo "You made \${$weekly_pay} this week"
?>