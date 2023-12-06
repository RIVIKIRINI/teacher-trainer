<!DOCTYPE html>
<head>
  <title>Sign In-The Tutor-Online Teacher Traniner Institute</title>
  <link rel="stylesheet" href="/CSS/signin.css">
</head>
  <body>
      <div id="container">
        <!-- header -->
        <div class="header">
          <h1>The Tutor</h1>
      </div>
        <div class="menu">
          <div class="logo">
              <a href="Page.html"><img src="/Images/logo1.jpg" alt="logo not found"></a>
          </div>
          <div class="nav">
              <div class="search">
                  <input type="text" placeholder="What you are looking for?">
                  <button type="submit">search</button>
              </div>
              <div class="list">
                  <ul>
                      <li><a href="Home.html">Home</a></li>
                      <li><a href="About Us.html">About Us</a></li>
                      <li><a href="Contact Us.html">Contact Us</a></li>
                      <li><a href="Helppage.html">Help</a></li>
                  </ul>
              </div>
          </div>
          <div class="profile">
              <a href="user account.html"><img src="/Images/profile.png"></a>
          </div>
          <div class="login">
              <ul>
                  <li><a href="signup.html">Log in</a>
                      <div class="in_menu">
                          <ul>
                              <li><a href="signin.html">Sign in</a></li>
                              <li><a href="signup.html">Sign up</a></li>
                          </ul>
                      </div>
                  </li>
              </ul>
          </div>
      </div>
    </div>
			<div id="content">
				<h1>Welcome Back!!<br>Let's Learn<br> &#128512</h1>
				<p></p>
			</div>
            <div class="form">
                <form onsubmit="return validateForm()" method="POST" action="/signin.php">
                    <h2>Sign in</h2>
                    
                    <div>
                        <label for="Email">Email</label>
                        <input type="Email" id="Email" required="@gmail.com" name="Email">
                    </div>
                    <div>
                        <label for="password">Password:</label>
                        <input type="password" id="password" required name="pss">

                        <label for="confirmPassword">Confirm Password:</label>
                        <input type="password" id="confirmPassword" required name="pssc">
                        
                    </div>
                    <div id="signup">
                        If you don't have an account <a href="signup.html">Click here</a><br><br>
                        Forgrot password <a href="forgotpassword.html">click here</a>
                    </div>
                    <div>
                        
                        <button type="submit" value="submit" class="btn" name="btn">Log In</button>
                    </div>
                </form>
            </div>
		</div>
    <div class="Page">
      <h1><a href="quiz.html">Go To Play Quiz</a></h1>
    </div>
    <footer>
      <div class="Main-footer">
        <div class="sub-footer1">
        <div class="logo">
          <img src="/Images/logo1.jpg" height="100px" width="100px">
        </div>
        <br>
        <h4>Terms and conditions | Cookie Settings | Privacy policy</h4>
        </div>
        <div class="sub-footer2">
        <h4>Now available in:</h4>
        <a href="https://play.google.com/store/apps/details?id=com.sliitgo.evoxlk" target="_blank"><img src="/Images/playstore.jpg" height="50px" width="170px"></a>
        <a href="https://play.google.com/store/apps/details?id=com.evoxsolutions.am_sliit" target="_blank"><img src="/Images/apple.jpg" height="50px" width="170px"></a>
        <br>
        <h4>Copyright 2023 &copy The Tutor. All Rights Reserved</h4>
        </div>
        <div class="social">
        <div class="fb">
          <a href="https://www.facebook.com/sliit.lk/" target="_blank"><img src="/Images/facebook.jpg"></a>
        </div>
        <div class="isnta">
          <a href="https://www.instagram.com/sliit.life/?hl=en" target="_blank"><img src="/Images/insta.jpg"></a>
        </div>
        <div class="gmail">
          <a href="https://www.sliit.lk/email/" target="_blank"><img src="/Images/mail.jpg"></a>
        </div>
        <div class="linkedin">
          <a href="https://lk.linkedin.com/company/fcsc-sliit" target="_blank"><img src="/Images/linkedin.jpg"></a>
        </div>
        </div>
      </div>
      </footer>
          <script src="/JS/Myjs.js"></script>
	</body>
</html>

<?php
include_once'config.php';
?>
<?php


  
 
   /*if(isset($_POST["btn"]))
	   {
	      $email=$_POST["Email"];
	      $password=$_POST["pss"];
          $conpassword=$_POST["pssc"];
		  $valid=false;
		  
		  
		
		  
		  $con = mysqli_connect("localhost","root","","online teacher trainer");
		   if(!$con)
			{	
				die("Cannot connect to DB server");		
			}
			
			$sql="SELECT * FROM `teacher_register` WHERE `Email`='".$email."' and `Password`='".$password."'";
			
			$result = mysqli_query($con,$sql);
		 
		  
 if(mysqli_num_rows($result) >0)
		{

			  $valid=true;
		  }
		  else
		  {
			  $valid=false;
		  }
		  
		  if($valid)
		  {
			  $_SESSION["username"] =$email;
			  header('Location:index.php');
		  }
		  
		  else
		  {
			  
			  echo "Please enter the correct username and password";
		  }
	
	   
	   }*/
	  
?>

<?php
session_start();
include_once 'config.php';

if (isset($_POST["btn"])) {
    $email = $_POST["Email"];
    $password = $_POST["pss"];
    $conpassword = $_POST["pssc"];
    $valid = false;

    $con = mysqli_connect("localhost", "root", "", "online teacher trainer");
    if (!$con) {
        die("Cannot connect to DB server");
    }

    // Use prepared statements to prevent SQL injection
    $sql = "SELECT * FROM teacher_register WHERE Email='$email' AND Password='$password'";
   
   $result = mysqli_query($con,$sql);

    if (mysqli_num_rows($result) > 0) {
        $valid = true;
    } else {
        $valid = false;
    }

    if ($valid) {
        $_SESSION["username"] = $email;
        header('Location: Home.html');
        exit();
    } else {
        $error = "Invalid username or password";
		echo "$error";
    }
}
?>


