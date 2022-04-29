<?php
   session_start();
?>
<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css"  >
</head>
<body>
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
        
      
   
<div >

    <section id="card" class="vh-100"  style=" background: linear-gradient(0deg, #0CBAA6 0%, #2779e2 100%);"> 
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
                <h1 class="text-uppercase text-center mb-5">Login</h1> 
    <br>
    <form action="includes/login.inc.php" method="post">
        
        <label for="Username"  >UserName:</label>  
        <input type="text" id="uid" name="uid"  placeholder="Name/Email..."><br>
        <br>

        <label for="Parola">Password:</label>
        <input type="password" id="pwd" name="pwd" placeholder="Password..."> <br>
        <br>   
        <br>
        <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-info btn-lg mb-1 ":hover action="Mainpage.php" 
        name="submit">Sign up</button>
        </div>
        <div class="d-flex justify-content-center">
         <h5>Don't have an account?<a href="autentificare.php"> Create account</a></h5>
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