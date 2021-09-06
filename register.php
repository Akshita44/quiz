<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();

$con = mysqli_connect("localhost","root");
if($con)
{
    echo "successfully established";
}
else{
    echo "no connection";
}
mysqli_select_db($con,"projectjs128");

$username=$_POST["username"];
$email =$_POST["email"];
$password=$_POST["password"];
$confirmpassword=$_POST["confirmpassword"];
$query ="select * from user where email='$email' and password= '$password';";

$result= mysqli_query($con,$query);
$r=mysqli_num_rows($result);
if($r!=0)
{
    echo "already exists";
}
else{
    if($username === "" || $email === "" || $password === "")
    {
        echo "You can not leave any field empty";
    }
    else{
    $q="insert into user values('$username','$email','$password')";
    mysqli_query($con,$q);
    header("location:index.php");
    }
}
?>  
</body>
</html>
