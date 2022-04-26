<?php
   session_start();
?>
<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="login.css">
</head>
<body>
    
    <?php
   include_once 'header.php';
    ?> 
<div >

    <section id="card"> 
    <div id="title"><h1>Login</h1> </div> 
    <br>
    <form action="includes/login.inc.php" method="post">
        
        <label for="Username"  >UserName:</label>  
        <input type="text" id="uid" name="uid"  placeholder="Name/Email..."><br>
        <br>

        <label for="Parola">Password:</label>
        <input type="password" id="pwd" name="pwd" placeholder="Password..."> <br>
        <br>   
        <br>

         <h5><a href="autentificare.php">Don`t have an account? Create account</a></h5>

       <button type="submit" name="submit">Login</button>
      </form>
      <?php
       if(isset($_GET["error"])){
        if($_GET["error"]=="EmptyInput"){
            echo "<p>Fill in all the fields!</p>";
        }
        else if ($_GET["error"]=="WrongCredentials") {
            echo "<p>Incorrect Username or Password</p>";
        }
       }
      ?> 
      </section>

</div>
</body>
</html>