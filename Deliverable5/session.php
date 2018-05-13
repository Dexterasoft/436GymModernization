<?php
   include('connect.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select * from member where member_username = '$user_check' ");

   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['member_username'];
   $login_fname = $row['member_fname'];
   $login_city = $row['memeber_city'];
   $login_state = $row['member_state'];
   
   if(!isset($_SESSION['login_user'])){
      header("location: RockCreek_login.php");
   }
?>
