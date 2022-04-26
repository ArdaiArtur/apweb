<div id="header"> 
        <div id="Autentificare">  
        <h5> <a href="Mainpage.php">Main page</a> |
        <?php
        if(isset($_SESSION["useruid"])){
            echo "<a href='Profile.php'>Profile page</a> |";
            echo "<a href='includes/logout.inc.php'>Log out</a> ";
        }
        else{
            echo "<a href='autentificare.php'>Autentificare</a> |";
            echo "<a href='login.php'>Login</a>";
        }
        ?>
        
        
    </h5> 
        </div>  
  
     <div id="title"> <h1>File Share</h1></div>
</div>          