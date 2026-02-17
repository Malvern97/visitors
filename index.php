<?php
session_start();
require(connect.php);
/*User Variable Initialization*/
$name= "$_POST['name']";
$password= "$_POST['password']";

/*Admin Login Database Query*/
$sql= " SELECT* FROM admin ";
$query= mysqli_query( $conn, $sql);

/*Guards Login Database Query*/
$sql= " SELECT* FROM guard ";
$query2= mysqli_query( $conn, $sql);


/*Admin Login Handler*/
if(isset($_POST['submit'])){
    while($row= mysqli_fetch_assoc($query) ){
        /*User Authentication*/
        if($name==$row['name'] && $password=$row['password'] ){
            
            $_SESSION['msg']= echo"You successfully logged in";
            header('location:adminhome.php');
        }
        else{
            echo" Incorrect Credentials";
            exit();
        }
    }
}
/*Guard Login Handler*/
elseif(isset($_POST['submit'])){
    while($row= mysqli_fetch_assoc($query2) ){
    /*User Authentication*/
    if($name==$row['name'] && $password=$row['password'] ){
        
        $_SESSION['msg']= echo"You successfully logged in";
        header('location:homepage.php');
    }
    else{
        echo" Incorrect Credentials";
        exit();
    }
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' >
</head>
<body>
    <!--The User Login Form-->
    <form method='post' action='index.php'>
        <div class='loginform'>
            <input type="text" name='name' placeholder='Please enter your name' required>
            <input type="password" name='password' placeholder='Please enter your password' required>
            <button name='submit' class='loginbtn'> Login </button><br>
            <a href='registratioin.php'><p>Create an account</p></a>
        </div>
    </form>
</body>
</html>
