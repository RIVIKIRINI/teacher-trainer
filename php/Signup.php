<!DOCTYPE html>
<head>
  <title>Sign Up-The Tutor-Online Teacher Traniner Institute</title>
  <link rel="stylesheet" href="/CSS/signup.css">
  <script src="/JS/Myjs.js"></script>
</head>
  <body>
      <div id="container">
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
				<h1 >Welcome to</h1><br><h1>"THE TUTOR" <br>Online Teacher Traning Institute</h1>
        <br>
				<p></p>
			</div>
            <div class="form">
                <form onsubmit="return validateForm()" method="POST" action="Signup.php">
                    <h2><br>Sign Up</h2><br>
                    <div>
                        <label for="username">First name</label>
                        <input type="text" name="f1">
                        <label for="username">Last name</label>
                        <input type="text" name="f2">
                    </div>
                    <div>
                        <label for="Email">Email</label>
                        <input type="Email" id="Email" required="@gmail.com" name="f3">
                    </div>
                    <div>
                        <label for="password">Password:</label>
                        <input type="password" id="password" required name="f4">

                        <label for="confirmPassword">Confirm Password:</label>
                        <input type="password" id="confirmPassword" required name="f5">
                        
                    </div>
                    <div>
                        <label for="Qulifications">Qulifications</label>
                        <textarea name="f6" id="Qulifications" cols="100" rows="10" placeholder="Enter Your Qulifications"></textarea><br>
                        <div id="signup">
                          Do you have an account ? <a href="signin.html">Click here</a>
                        </div>
                        <button type="submit" value="submit" class="btn">submit</button>
                    </div>
                </form>
                
            </div>
            <p style="color: azure;" id="try">Try out our customer care <a href="Helppage.html">Click here</a></p>
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
	</body>
</html>

<?php
include_once'config.php';
?>
<?php
$F_name=$_POST["f1"];
$L_name=$_POST["f2"];
$Email=$_POST["f3"];
$Password=$_POST["f4"];
$Con_Password=$_POST["f5"];
$Qual=$_POST["f6"];

$sql="insert into 
teacher_register(Teacher_ID,First_Name,Last_Name,Email,Password,Confirm_password,Qualification)values('','$F_name','$L_name','$Email','$Password','$Con_Password','$Qual')";
//execute the query
if(mysqli_query($conn,$sql)){
    echo"<script>alert('Record inserted succesful')</script>";
header("Location:Home.html");
}else{
    echo"<script>alert('Error ')</script>";
}

//close the connection 
mysqli_close($conn);
?>