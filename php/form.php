<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
  <title>The Tutor-Online Teacher Traniner Institute</title>
<
  <link rel="stylesheet" type="text/css" href="CSS/">
</head>
<body>
		<div id="container">
			<div id="menu">
				<a href="The Tutor.html"><img src="C:\Users\Lapstore.lk\Desktop\my web page\Project01\Teacher logo.jpg" alt="logo not found"></a>
				<ul>
					<li><a href="Home.html">Home</a></li>
					<li><a href="About us.html">About Us</a></li>
					<li><a href="Contact us.html">Contact Us</a></li>
					<li><a href="Stories.html">Stories</a></li>
					<li><a href="Resgister.html">Register</a></li>
				</ul>
			</div>
  <br>
  <br>
  <br>
  <br>    
  <div class="container">
    <h1>Forgot your Password ?</h1>
    <p>Please, enter your email address below to receive your user and a new password</p>
    <form action="form.php" method="post">
      <label class="ML" for="email">Email:</label>
      <input type="email" id="email" name="email" class="fill" placeholder="Enter your e-mail address" required >
      <button type="submit" name="yourSubmit">Reset Password</button>
    </form>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>



  
  <footer>
    <div class="Main-footer">
      <div class="sub-footer1">
       
        <br>
        <h4>Terms and conditions | Cookie Settings | Privacy policy</h4>
      </div>
      <div class="sub-footer2">
        <h4>Now available in:</h4>
        <a href="https://play.google.com/store/apps/details?id=com.sliitgo.evoxlk" target="_blank"><img src="C:\Users\Lapstore.lk\Desktop\my web page\Project01\Googleplay.jpg" height="50px" width="170px"></a>
        <a href="https://play.google.com/store/apps/details?id=com.evoxsolutions.am_sliit" target="_blank"><img src="C:\Users\Lapstore.lk\Desktop\my web page\Project01\Googleapp.jpg" height="50px" width="170px"></a>
        <br>
        <h4>Copyright 2023 &copy The Tutor. All Rights Reserved</h4>
      </div>
      <div class="social">
        <div class="fb">
          <a href="https://www.facebook.com/sliit.lk/" target="_blank"><img src="C:\Users\Lapstore.lk\Desktop\my web page\Project01\facebook.jpg" height="30px" width="30px"></a>
        </div>
        <div class="isnta">
          <a href="https://www.instagram.com/sliit.life/?hl=en" target="_blank"><img src="C:\Users\Lapstore.lk\Desktop\my web page\Project01\Instragram.jpg" height="30px" width="30px"></a>
        </div>
        <div class="gmail">
          <a href="https://www.sliit.lk/email/" target="_blank"><img src="C:\Users\Lapstore.lk\Desktop\my web page\Project01\Gmail.jpg"  height="30px" width="50px"></a>
        </div>
        <div class="linkedin">
          <a href="https://lk.linkedin.com/company/fcsc-sliit" target="_blank"><img src="C:\Users\Lapstore.lk\Desktop\my web page\Project01\linkedn.jpg"height="30px" width="30px"></a>
        </div>
      </div>
    </div>
    </footer>
</body>
</html>


<?php
    require "config.php";

    if(isset($_POST['yourSubmit'])){
        $mail=$_POST['email'];

        $query = "INSERT INTO resetpassword VALUES('','$mail')";

        if(mysqli_query($connection,$query)===true){
            echo "<script>alert('Request uploaded successfully')</script>";
        }
        else{
            echo"error";
        }
    }


?>