<!DOCTYPE html>
<html>
<head>
  <title>User Account-The Tutor-Online Teacher Traniner Institute</title>
  <link rel="stylesheet" type="text/css" href="/CSS/details.css">
  <script src="/script.js"></script>
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
  <div class="container">
    <h1>Profile Photo</h1>
    <center>
    <div class="profile-photo" id="profilePhoto"></div>
    </center>
    <input type="file" id="photoUpload" style="display: none;">
    <a href="#" class="btn" id="choosePhotoBtn">Choose Profile Photo</a>
    <a href="#" class="btn" id="removePhotoBtn" style="display: none;">Remove Profile Photo</a>
  
    <script>
      // JavaScript code to handle the buttons and profile photo
      const choosePhotoBtn = document.getElementById('choosePhotoBtn');
      const removePhotoBtn = document.getElementById('removePhotoBtn');
      const profilePhoto = document.getElementById('profilePhoto');
      const photoUpload = document.getElementById('photoUpload');
  
      choosePhotoBtn.addEventListener('click', () => {
        photoUpload.click();
      });
  
      photoUpload.addEventListener('change', (e) => {
        const file = e.target.files[0];
        const reader = new FileReader();
  
        reader.onload = () => {
          const imageData = reader.result;
          profilePhoto.style.backgroundImage = `url(${imageData})`;
          removePhotoBtn.style.display = 'inline-block';
        };
  
        reader.readAsDataURL(file);
      });
  
      removePhotoBtn.addEventListener('click', () => {
        profilePhoto.style.backgroundImage = 'none';
        removePhotoBtn.style.display = 'none';
        photoUpload.value = '';
      });
    </script>
    <br>
    <br>
    <br>
    <h1>User details</h1>
    <form action="/php/common.php" method="POST">
      <label for="first name">First name:</label>
      <input type="text" id="username" name="Firstname" required>
      <label for="last name">Last name:</label>
      <input type="text" id="username" name="Lastname" required>
      
      <label for="email">Email Address:</label>
      <input type="email" id="email" name="email" required>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <label for="shortbio">Short bio:</label>
      <textarea name="bio" class="bio"></textarea>
      <button type="submit" name="save" class="saves">save changes</button>
     
     
    </form>
  </div>
  <br>
  <br>
  <div class="adition">
    <div class="Page">
      <h1><a href="My Courses.html">My Courses</a></h1>
    </div>
    <div class="Page">
      <h1><a href="Payment.html" class="Page">Make Payment</a></h1>
    </div>
  </div>
  <br>
  <br>
  <br>
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
    $connection=mysqli_connect("localhost","root","","onlineteachertraining");

    if($connection->connect_error){
        echo "Error";
    }
    else{
        echo "Connected successfully";
    }
?>