<?php
function emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat){
   $result=false;
   if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
    $result=true;
   } 
   else{
       $result=false;
   }
   return $result;
}
function InvalidUid($username){
    $result=false;
    if(preg_match ("^[a-zA-Z0-9]*$", $username)){
     $result=true;
    } 
    else{
        $result=false;
    }
    return $result;
 } 
 function InvalidEmail($email){
    $result=false;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     $result=true;
    } 
    else{
        $result=false;
    }
    return $result;
 }
 function pwdMatch($pwd,$pwdRepeat){
    $result=false;
    if($pwd !== $pwdRepeat){
     $result=true;
    } 
    else{
        $result=false;
    }
    return $result;
 }
 function UidExists($conn,$username,$email){
     $sql="SELECT * FROM users WHERE usersUid= ? OR usersEmail= ?;";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../autentificare.php?error=stmtFailed");
        exit();
    } 
    mysqli_stmt_bind_param($stmt,"ss",$username,$email);
    mysqli_stmt_execute($stmt);
    
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
      return $row;
    }
    else{
        $result=false;
        return $result;
    }

    mysqli_stmt_close($stmt);
 }
 function  createUser($conn,$name,$email,$username,$pwd){
    $sql="INSERT INTO users (usersName,usersEmail,usersUid,usersPassword) VALUES (?,?,?,?);";
   $stmt=mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql)){
       header("location: ../autentificare.php?error=stmtFailed");
       exit();
   } 

   $hashedPwd=password_hash($pwd, PASSWORD_DEFAULT);
    
   mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$username,$hashedPwd);
   mysqli_stmt_execute($stmt);
 mysqli_stmt_close($stmt);
 header("location: ../autentificare.php?error=none");
       exit();
}
function emptyInputLogin($username,$pwd){
    $result=false;
    if(empty($username) || empty($pwd)){
     $result=true;
    } 
    else{
        $result=false;
    }
    return $result;
 }
 function loginUser($conn,$username,$pwd){
    $uidExists = UidExists($conn,$username,$username);

    if($uidExists === false){
        header("location: ../login.php?error=WrongCredentials");
        exit();
    }
    $pwdHashed = $uidExists["usersPassword"];
    $checkPwd = password_verify($pwd,$pwdHashed);

    if($checkPwd === false){
        header("location: ../login.php?error=WrongCredentials");
        exit();
    }
    else if($checkPwd === true){
      session_start();
      $_SESSION["userid"] = $uidExists["userId"];
      $_SESSION["useruid"] = $uidExists["usersUid"];
      $_SESSION["UserName"] = $uidExists["usersName"];
      $_SESSION["foldername"]=$uidExists["usersUid"];
      $_SESSION["email"]=$uidExists["usersEmail"];
      header("location: ../Mainpage.php");
      
      exit();
    }
 }
 ?>