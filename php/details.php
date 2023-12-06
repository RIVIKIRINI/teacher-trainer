<!DOCTYPE html>
<html>
<head>
  <title>User details</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="script.js"></script>
</head>
<body>
 
<div id="container">
			<div id="menu">
				<a href="The Tutor.html"><img src="C:\Users\Lapstore.lk\Desktop\my web page\Project02\Teacher logo.jpg" alt="logo not found"></a>
				<ul>
					<li><a href="Home.html">Home</a></li>
					<li><a href="About us.html">About Us</a></li>
					<li><a href="Contact us.html">Contact Us</a></li>
					<li><a href="Stories.html">Stories</a></li>
					<li><a href="Resgister.html">Register</a></li>
				</ul>
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
    <form action="details.php" method="POST">
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
        <a href="https://play.google.com/store/apps/details?id=com.sliitgo.evoxlk" target="_blank"><img src="C:\Users\Lapstore.lk\Desktop\my web page\Project02\Googleplay.jpg" height="50px" width="170px"></a>
        <a href="https://play.google.com/store/apps/details?id=com.evoxsolutions.am_sliit" target="_blank"><img src="C:\Users\Lapstore.lk\Desktop\my web page\Project02\Googleapp.jpg" height="50px" width="170px"></a>
        <br>
        <h4>Copyright 2023 &copy The Tutor. All Rights Reserved</h4>
      </div>
      <div class="social">
        <div class="fb">
          <a href="https://www.facebook.com/sliit.lk/" target="_blank"><img src="C:\Users\Lapstore.lk\Desktop\my web page\Project02\facebook.jpg" height="30px" width="30px"></a>
        </div>
        <div class="isnta">
          <a href="https://www.instagram.com/sliit.life/?hl=en" target="_blank"><img src="C:\Users\Lapstore.lk\Desktop\my web page\Project02\Instragram.jpg" height="30px" width="30px"></a>
        </div>
        <div class="gmail">
          <a href="https://www.sliit.lk/email/" target="_blank"><img src="C:\Users\Lapstore.lk\Desktop\my web page\Project02\Gmail.jpg"  height="30px" width="50px"></a>
        </div>
        <div class="linkedin">
          <a href="https://lk.linkedin.com/company/fcsc-sliit" target="_blank"><img src="C:\Users\Lapstore.lk\Desktop\my web page\Project02\linkedn.jpg"height="30px" width="30px"></a>
        </div>
      </div>
    </div>
    </footer>
</body>
</html>

<?php
require 'common.php';
if(isset ($_POST['save'])){
    $firstname=$_POST['Firstname'];
    $lastname=$_POST['Lastname'];
    $Emailaddress=$_POST['email'];
    $Paasword=$_POST['password'];
    $Shortbio=$_POST['bio'];

    $query="Insert into useraccount values('','$firstname','$lastname',' $Emailaddress','$Paasword',' $Shortbio')";
    if(mysqli_query($connection,$query)===true){
        echo("<script> alert ('Information inserted successfully')</script>");
    }
    else{
        echo "error";
    }
 }

?>