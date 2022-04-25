<?php
session_start();
include("connection.php");
include("function.php");

$user_data=check_login($con);
?>

<!DOCTYPE html>
<head>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Main Page.css">
</head>
<body>
    
    <div id="header"> 
        <div id="Autentificare">  
        <h5> <a href="signup.php">Autentificare</a> | <a href="login.php">Login</a>  
        </h5> 
        </div>  
  
     <div id="titlu"> <h1>File Share<?php echo $user_data['user_name'];?></h1></div>
     </div>
      
<div id="meniu">
    
    <button  name="Upload picture" class="button" style="cursor: pointer" >
        <i class="fa fa-arrow-circle-up" aria-hidden="true" onclick=""></i>Upload picture 
    </button>  
    <br>
    <p>file1<i class="fa fa-folder-o" aria-hidden="true"></i></p>
    <p>file2<i class="fa fa-folder-o" aria-hidden="true"></i></p>
    <p>file3<i class="fa fa-folder-o" aria-hidden="true"></i></p>
    <button onclick="TogglePopup()"  class="btn" > 
        <i class="fa fa-plus" aria-hidden="true"></i> Create folder
    </button>
</div>
<div class="pop-up flex-container-center hidden">
    <div class="card">
        <h2>Name Folder</h2>
        <label class="input">
          <input class="input__field" type="text" placeholder="Numele of the folder" />
        </label>
        <div class="button-group">
          <button onclick="">Create Folder</button>
          <button onclick="TogglePopup()" type="Cancel">Cancel</button>
        </div> 
    </div>
</div>
<div id="continut"> Content
</div>
<div class="Footer">
</div>
<script src="App.js"> </script>
</body>

</html>