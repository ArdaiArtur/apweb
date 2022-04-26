<?php
if(isset($_POST["submit"]))
{
  $name=$_POST["Name"];
  $email=$_POST["EMail"];
  $username=$_POST["UserName"];
  $pwd=$_POST["password"];
  $pwdRepeat=$_POST["confirm_password"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

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
  /*$curdir=".C:/xampp/htdocs/app user folder";
  $foldername=$_POST["UserName"];
  mkdir("testing", 0777);*/
 
}
else{
    header("location: ../autentificare.php");
    exit();
}