<?php
session_start();
include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METOD']=="POST")
{
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    $user_email=$_POST['email'];
    $user_sex=$_POST['man'];
    $user_age=$_POST['age'];
    if(!empty($user_name)&&!empty($password)&&!is_numeric($user_name))
    {
        $user_id=random_num(20);
        $query="insert into users(user_id,user_name,password,user_email,user_sex,user_age) 
        values('$user_id','$user_name','$password','$user_email','$user_sex','$user_age')";
        mysqli_query($con,$query);
        header("Location:login.php");
        die;

    }
    else
    {
        echo "Please enter some valid information";
    }
}



?>


<!DOCTYPE html>
<head>
</head>
<body>
    <link rel="stylesheet" href="autentificare.css">
    <link rel="javcode" href="App.js">
    <div id="continut">
<div id="card"> 
    <div id="title"><h1>Create account</h1> <hr> </div>
    <form >
        
        <label for="User-Name">User Name:</label>  
        <input type="text" id="user_name" name="user_name" placeholder="Jhony" required><br>
        <br>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <label for="Parola">Password:</label>
        <input type="password" id="password" name="password" placeholder="***********"
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required> <br>
        <br>

        <label for="ConfirmParola">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="***********"  
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required> <br>
        <br>

        <label for="EMail">E-mail:</label>
        <input type="email" id="email" name="email" placeholder="Jhony@gmail.com" required><br>
        <br>
        
        <label for="Sex" >Sex:</label>
        <input type="radio" id="man" name="man" required>
        <label for="Barbat">Barbat</label>        

        <input type="radio" id="man" name="man" required>
        <label for="Femeie">Femeie</label> <br>
        <br>

        <label for="Varsta">Varsta:</label>
        <input type="text" id="age" name="age" required><br>
        <br>
        <hr><h5><a href="login.html">Already have an account? Login</a></h5>
      <input type="submit"></form> 
      
      
      
      <link rel="javcode" href="App.js">
   </div>
</div>
</body>
</html>