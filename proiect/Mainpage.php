<?php
   session_start();
?>
<!DOCTYPE html>
<head>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Main Page.css"/>
    <link rel="stylesheet" href="css/styles.css"  >
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom  static-top ">
            <div class="container px-5">
                <a class="navbar-brand mr-1" >File upload</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                   <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="start.php">Sing out</a></li>
                       <!-- <li class="nav-item"><a class="nav-link" href="login.php">Log In</a></li>-->
                    </ul>
                </div>
            </div>
        </nav>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class=" bg-black" id="sidebar-wrapper">
               
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-dark  p-3" href="#!">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-dark p-3" href="#!">Shortcuts</a>
                    <a class="list-group-item list-group-item-action list-group-item-dark p-3" href="#!">Overview</a>
                    <a class="list-group-item list-group-item-action list-group-item-dark p-3" href="#!">Events</a>
                    <a class="list-group-item list-group-item-action list-group-item-dark p-3" href="#!">Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-dark p-3" href="#!">Status</a>
                </div>
            </div>
          
             <!--full pagine dupa asta srie ce vrei -->
                 <div id="page-content-wrapper"  style=" background: linear-gradient(0deg, #0CBAA6 0%, #2779e2 100%);  ">
                <!-- ceva text -->
                <div class="container-fluid">
                    <h1 class="mt-4">ceva text scris Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati facilis modi, blanditiis dolorem culpa quidem voluptates animi maiores totam dolores, asperiores est iure nihil eos assumenda id fugit aperiam ut.</h1>
                   
           
                </div>
            </div>
        </div>

</div>
<script src="App.js"> </script>
</body>

</html>