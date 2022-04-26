<?php
   session_start();
?>
<!DOCTYPE html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" href="autentificare.css">
</head>
<body>
    
    <?php
   include_once 'header.php';
   ?> 
    <div >
<section id="card"> 
    <div id="title"><h1>Create account</h1> </div>
    <br>
        <div class="signup-form">
    <form action="includes/autentificare.inc.php" method="post">
        
        <label for="Name">Name:</label>  
        <input type="text" id="Name" name="Name" placeholder="Jhony" ><br>
        <br>
        <label for="UserName">User Name:</label>  
        <input type="text" id="UserName" name="UserName" placeholder="Username..."><br>
        <br>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Password..."> <br>
        <br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password..."  
        > <br>
        <br>

        <label for="EMail">E-mail:</label>
        <input type="email" id="EMail" name="EMail" placeholder="Email..."  ><br>
        <br>

        <br>
        <h5><a href="login.php">Already have an account? Login</a></h5>
        <button type="submit" action="Mainpage.php" name="submit">Sign up</button>
      
    </form> 
        </div>
      <?php
       if(isset($_GET["error"])){
        if($_GET["error"]=="EmptyInput"){
            echo "<p>Fill in all the fields!</p>";
        }
        else if ($_GET["error"]=="InvalidUid") {
            echo "<p>Choose a proper username!</p>";
        }
        else if ($_GET["error"]=="InvalidEmail") {
            echo "<p>Choose a proper email!</p>";
        }
        else if ($_GET["error"]=="PasswordsDontMatch") {
            echo "<p>Passwords don`t match!</p>";
        }
        else if ($_GET["error"]=="stmtFailed") {
            echo "<p>Something went wrong. Try again!</p>";
        }
        else if ($_GET["error"]=="UsernameTaken") {
            echo "<p>Username already taken!</p>";
        }
        else if ($_GET["error"]=="none") {
            echo "<p>Account created succesfully!</p>";
        }
       }
      ?>
      <link rel="javcode" href="App.js">
    </section>
</div>
</body>
</html>