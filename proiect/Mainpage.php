<?php
   session_start();
   
   include 'uploads.php';
 
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
                   

                <div class="btn-group">
  <button type="button" class="btn btn-dark " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    NEW
  </button>
  <div class="dropdown-menu">
  <button onclick="TogglePopup()" class="dropdown-item">
                   Upload</button>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#"> create folder</a>
  </div>
</div>
                    <a class="btn  list-group-item list-group-item-action list-group-item-dark p-3  d-flex justify-content-center" href="profil.php">Profile</a>
                   
                    
                   
                </div>
                
            </div>
           <div class="pop-up flex-container-center hidden">
    <div class="card ">
        <h2>UPLOAD</h2>
        <div class="button-group justify-content-center">
        <div class="gallery-upload justify-content-center">
                        <form action="includes/uploads.php" method="post" enctype="multipart/form-data">
                           <!--  <input type="text" name="filename" placeholder="File name...">
                            <input type="text" name="filetitle" placeholder="Image title...">
                            <input type="text" name="filedesc" placeholder="Image descripcion...">
                                    -->
                            <input type="file" name="file" id="file" >
                             <input type="submit" value="Upload Image" name="submit"  style=" background:#FFFFFF"></button>

                        </form>
                    </div>
        
          <button onclick="TogglePopup()" style=" background:#FFFFFF"class ="btn d-flex  btn  list-group-item list-group-item-action  p-3  justify-content-center" type="button" name="Cancel">Cancel</button>
        </div> 
    </div>
</div>
             <!--full pagine dupa asta srie ce vrei -->
                 <div id="page-content-wrapper"  style=" background: linear-gradient(0deg, #0CBAA6 0%, #2779e2 100%);  ">
               

                 <div class="gallery">
                     <div class="gcon">
                        <h2>Gallery</h2>
                        <div class="d-flex flex-wrap p-2">
                        <?php
                
// Include the database configuration file
include 'includes/dbh.inc.php';
$uu=$_SESSION["useruid"];
$userid=$_SESSION["userid"];
//echo $uu;
//print_r($_SESSION);
// Get images from the database
// redo images table with username upload id
//in query Where username upload = $uu
$query = $conn->query("SELECT * FROM images WHERE userid='".$userid."' ORDER BY uploaded_on DESC ");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = "../proiect/uploads/$uu/".$row["file_name"];
        $fname= $row["file_name"];
        
?>
                                    
                                
                                     <a href="#">
                                        <div><img src="<?php echo $imageURL; ?>" alt="nuuu" width="300" height="300" /></div>
                                     
                                     <p class="justify-content-center text-center" ><?php echo $fname; ?></p>
                                        </a>
                                        
                                              
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>  </div>
                    </div>
                 </div>
                 <!-- ceva text -->
                
                
               
               
            </div>
        </div>

</div>
<script src="App.js"> </script>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>