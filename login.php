<?php
/**
 * Created by PhpStorm.
 * User: J
 * Date: 5.4.2018
 * Time: 11:45
 */


   session_start();
   include"connect.php";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
       $l_email = mysqli_real_escape_string($db, $_POST['email']);
       $l_password = mysqli_real_escape_string($db, $_POST['password']);
       //Check if login credentails match database
       $sql = "SELECT password FROM user WHERE email = '$l_email'";
       $result = mysqli_query($db, $sql);
       $userID = mysqli_query($db, "SELECT userID FROM user WHERE email = '$l_email'");
       $sfName = mysqli_query($db, "SELECT firstName FROM user WHERE email = '$l_email'");
       $slName = mysqli_query($db, "SELECT lastName FROM user WHERE email = '$l_email'");
       $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
       $hashFromDb = $row['password'];
       //returns true is entered password matches one in db
       $passwordHash = password_verify($l_password, $hashFromDb);
       if($passwordHash){
           //Set sessions variable
           $_SESSION['login_user'] = $l_email;
           $_SESSION['userID'] =$userID;
           $_SESSION['fName'] = $sfName;
           $_SESSION['lName'] = $slName;
          header("location: etusivu.html");
       }else {
           $error = "<div class='error'>Invalid email or password</div>";
           echo $error;
           header("refresh:2; url=index.html");
       }
   }else{
      header ("refresh:1 url=index.html");

   }