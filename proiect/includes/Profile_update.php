<?php
 
 session_start();
 include "includes/dbh.inc.php";
 if(isset($_POST['edit']))
 {
    $id=$_SESSION['userid'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $select= "select * from users where id='$id'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['iuserId'];
    if($res === $id)
    {
   
       $update = "update users set usersName='$fname',usersUid='$lname',UsersEmail='$email' where id='$id'";
       $sql2=mysqli_query($conn,$update);
if($sql2)
       { 
           /*Successful*/
           header('location:profil.php');
          echo $fname;
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:profiledit.php');
          echo $id;
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:profiledit.php');
      echo $id;
    }
 }
?>