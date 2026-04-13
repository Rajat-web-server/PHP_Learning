
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get_post.php" method="Post">
        <label>Books :</label>
        <input type="text" name="book_name"><br>
        <label>Quantity :</label>
        <input type="number" name="quantity"><br>
        <label>email :</label>
        <input type="email" name="email_name"><br>
        <label>Password :</label>
        <input type="password" name="Password"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>


<?php

    echo "{$_POST['book_name']}<br>";
    echo "{$_POST['quantity']}<br>";
    echo "{$_POST['email_name']}<br>";
    echo "{$_POST['Password']}<br>";

?>