<?php
   session_start();
?>
<!DOCTYPE html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" href="css/styles.css"  >
</head>
<body>
    
     <!-- Navigation-->
     <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="start.php">File upload</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                   <!--<ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="autentificare.php">Sign Up</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Log In</a></li>
                    </ul>-->
                </div>
            </div>
        </nav>
    <div >
        
        
<section id="card" class="vh-100"  style=" background: linear-gradient(0deg, #0CBAA6 0%, #2779e2 100%);"> 
<div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
                <h1 class="text-uppercase text-center mb-5">Create account</h1> 
    <br>
        <div class="signup-form">
    <form action="includes/autentificare.inc.php"  method="post">
    <div class="form-outline mb-4">
        <label for="Name">Name:</label>  
        <input type="text" id="Name" name="Name" placeholder="Jhony" ><br>
        </div>
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
        <input type="email" id="EMail" name="EMail" placeholder="Email..."  ><br><br>
        

        
        <div class="d-flex justify-content-center">
        <button type="submit" action="Mainpage.php" 
        name="submit"class="btn btn-info btn-lg mb-1 ":hover >Sign up</button>
        </div>
        <div class="d-flex justify-content-center">
        <h5 class="">Already have an account?  <a href="login.php">Login</a></h5>
        </div>
    </form> 
    </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      <?php
       if(isset($_GET["error"])){
        if($_GET["error"]=="EmptyInput"){
           echo'<script>alert( "Fill in all the fields!")</script>';
         
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