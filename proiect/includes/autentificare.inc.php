<?php
session_start();
if(isset($_POST["submit"]))
{
  $name=$_POST["Name"];
  $email=$_POST["EMail"];
  $username=$_POST["UserName"];
  $pwd=$_POST["password"];
  $pwdRepeat=$_POST["confirm_password"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';
  $curdir='C:\xampp\htdocs\apweb-1\proiect\uploads/';
  $foldername=$_POST["UserName"];
  
  //$_SESSION["userfolder"] = $foldername;
  
  
  if(mkdir($curdir.$foldername, 0777))
  {
    echo'<script>alert( "cont creat /ptfolder/")</script>';

  }
  else
  { echo'<script>alert( "no cont /ptfolder/")</script>';}

  if(emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat)!==false) {
    header("location: ../autentificare.php?error=EmptyInput");
    exit();
  }
  if(InvalidUid($username)!==false) {
    header("location: ../autentificare.php?error=InvalidUid");
    exit();
  }
  if(InvalidEmail($email)!==false) {
    header("location: ../autentificare.php?error=InvalidEmail");
    exit();
  }
  if(pwdMatch($pwd,$pwdRepeat)!==false) {
    header("location: ../autentificare.php?error=PasswordsDontMatch");
    exit();
  }
  if(UidExists($conn,$username,$email)!==false) {
    header("location: ../autentificare.php?error=UsernameTaken");
    exit();
  }

  createUser($conn,$name,$email,$username,$pwd);
  
 
}
else{
    header("location: ../autentificare.php");
    exit();
}
?>