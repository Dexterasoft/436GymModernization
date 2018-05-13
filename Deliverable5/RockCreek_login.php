<?php
   include("connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM member WHERE member_username = '$myusername' AND member_password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // $_SESSION("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: DTprofile.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> RockCreek Gym </title>
<link rel="stylesheet" href="RockCreek.css" type="text/css">
<link rel="stylesheet" href="RockCreek_login.css" type="text/css">
</head>
<body>
  <div class="background">
    <div class="top">
      <img class="banner" src="RockCreekLogo.jpg" alt="Logo" >
      <table class="tabletop" border= "1">
        <tr>
          <th><a href="RockCreekHome.html" title="homepage">Home</a></th>
          <th><a href="RockCreekAppointment.html" title="homepage">Make an Appointment</a></th>
          <th>About Us</th>
          <th><a href="RockCreekLogin.html" title="Appointment">Log In/Sign Up</a></th>
          <th><a href="RockCreekContactUs.html" title="Contact Us">Contact Us</a></th>
        </tr>
      </table>
    </div>
    <div class="main" >
      <div class="leftside">
	<table border= "1" class="tableleft">
<tr>
<th>Search Bar can Go Here</th>
</tr>
</table>
		
	</div>
<div class="mainsub" >
	<div class="centerpiece">
		
<div class="login-page">
  <div class="form">
    <form method= "post" class="register-form" action="">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
		
		
		
		
	</div>
	

	<div class="rightside">
		
			
		
	</div>
	</div>
</div>
</div>
<script>
	$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>


</body></html>