<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="filter.php" method="post">
    <label for="">Age :</label>
        <input type="text" name="age"><br>
        <label>email :</label>
        <input type="email" name="email_name"><br>
        <label>Password :</label>
        <input type="password" name="Password"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
     
</body>
</html>

<?php
    if(isset($_POST["submit"])){
    $age=$_POST["age"];
    $email=$_POST["email_name"];
    $password=$_POST["Password"];

    $filter_age=filter_var($age,FILTER_SANITIZE_NUMBER_INT);
    $filter_email=filter_var($email,FILTER_VALIDATE_EMAIL);
    $filter_passsword=filter_var($password,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
    echo $filter_age;
    echo $filter_email;
    echo $filter_passsword;
    }
    
   
?>