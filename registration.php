<?php
session_start();
require(connect.php);
/*User Variable Initialization*/
$name= "$_POST['name']";
$email= "$_POST['email']";
$password= "$_POST['password']";

/*Admin Login Database Query*/
$sql= " SELECT* FROM admin ";
$query= mysqli_query( $conn, $sql);




/*Admin Login Handler*/
if(isset($_POST['submit'])){
    while($row= mysqli_fetch_assoc($query) ){
    if($name != $row['name'] && $password != $row['password']){
        $regsql= "INSERT INTO admin (name,email,password) VALUES('$name,$email,$password)";
        $_SESSION['msg']= echo"You registered an account successfully";
        header('location:index.php')
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
    <lable>Registration Form</lable>
    <form method='post' action='registration.php'>
        <div class='loginform'>
            <input type="text" name='name' placeholder='Please enter your name' required>
            <input type="email" name='email' placeholder='Please enter your email' required>
            <input type="password" name='password' placeholder='Please enter your password' required>
            <button name='submit' class='loginbtn'> Register </button><br>
            <p>Already have an Account</p>
            <a href='index.php'><p>Login</p></a>
        </div>
    </form>
</body>
</html>
