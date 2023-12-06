<!DOCTYPE html>
<html>
	<head>
		<title>Contact Us</title>
		<link rel="stylesheet" type="text/css" href="cStyle.css">
		<script>
			function submitted(){
				alert("Our term will respond you ASAP!");
			}
		</script>
	</head>
	<body>
		<header>
			<nav>
				<div class="navi">
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="">My Courses</a></li>
						<li><a href="AboutUs.html">About Us</a></li>
						<li><a href="">Contact Us</a></li>
						<li><a href="">Help</a></li>
					</ul>
				</div>
			</nav>
			<div class="main-header">
				<img src="Logo.jpeg" height="160px" width="240px">
				<div class="Heading">	
					<h1>The Tutor</h1>
					<br>
					<h1>Contact Us</h1>
				</div>
			</div>
		</header>
		<script type="text/javascript">
			var d = new Date();
			theDay=d.getDay();
			switch (theDay)
			{
				case 6:
					document.write("<b>Super Saturday,</b></h1><br><h3>Enjoy the weekend</h3>");
				break;
				case 5:
					document.write("<b>Finally Friday,</h1><br><h3>Have a happy weekend</h3></b>");
				break;
				case 4:
					document.write("<b><h1>Phenomenal Thursday,</h1><br><h3>One more day to weekend</h3></b>");
				break;
				case 3:
					document.write("<b><h1>Miraculous Wednesday,</h1><br><h3>Have a nice day</h3></b>");
				break;
				case 2:
					document.write("<b><h1>Wondrous Tuesday,</h1><br><h3>Keep rocking</h3></b>");
				break;
				case 1:
					document.write("<b><h1>Awesome Monday,</h1><br><h3>a new begining</h3></b>");
				break;
				case 0:
					document.write("<b><h1>Happy Sunday,</h1><br><h3>Stress Buster</h3></b>");
				break;
				default:
				document.write("<b>I'm really looking forward to this weekend!</b>");
			}
		</script>
		<br><br><br><br>
		<div class="form-container">
		<form action="contactForm.php" class="ProblemForm" border="1" method="POST">
		<fieldset>
		<legend>Enter your details :-</legend>
		<div class="form-flex">
			<div>
				<label for="F_Name"><b>First Name : </b></label>
				<input type="text" name="FirstName" id="F_Name" class="FName" placeholder="* Enter the First Name" required>
			</div>
			<br>
			<div>
				<label for="L_Name"><b>Last Name : </b></label>
				<input type="text" name="LastName" id="L_Name" class="LName" placeholder="*Enter the Last Name" required>
			</div>
			<br>
			<div>
				<label for="Mail_Address"><b>Email :</b></label>
				<input type="email" name="Mail" id="Mail_Address" class="MailAddress" placeholder="*Enter the email address" maxlength="25" minlength="15" required>
			</div>
			<br>
			<div>
				<label for="hint"><b>Password :</b></label>
				<input type="password" name="Hint" id="hint" class="PasWord" placeholder="*Enter the email password" maxlength="12" minlength="8" required>
			</div>
			<br>
			<div>
				<label for="Phone_Number"><b>Contact Number :</b></label>
				<input type="tel" name="YourNumber" id="Phone_Number" class="PhoneNumber" placeholder="*Enter the contact number" maxlength="10" minlength="10" required>
			</div>
			<br>
			<div>
				<p><b>Fill the below text area with your problems :</b></p>
				<textarea class="problem" name="YourProblem">How can we help you?....</textarea>
			</div>
			<br>
			<div class="BTN" align="center">
				<button type="submit" name="submit" class="CustomButton" onclick="submitted()">Submit</button>
				<button type="reset" class="CustomButton">Reset</button>
			</div>
		</div>
		</fieldset>
		</form>
		<div>
			<div class="location" align="left">Our Branches</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.194046863206!2d79.9729445!3d6.9146775!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256db1a6771c5%3A0x2c63e344ab9a7536!2sSri%20Lanka%20Institute%20of%20Information%20Technology!5e0!3m2!1sen!2slk!4v1684682395966!5m2!1sen!2slk" width="200" height="250" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" align="right"></iframe>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15732.638546576574!2d80.0188237!3d9.667398!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afe56a82a20ed27%3A0x1b929fc1913bd72c!2sSLIIT%20JAFFNA%20CENTRE!5e0!3m2!1sen!2slk!4v1684684390270!5m2!1sen!2slk" width="200" height="250" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" align="right"></iframe>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15830.779369140519!2d80.6127217!3d7.2755222!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae368bfd631eeb9%3A0x881fd608acc078bb!2sSLIIT%20Kandy%20Center!5e0!3m2!1sen!2slk!4v1684684495916!5m2!1sen!2slk" width="200" height="250" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" align="right"></iframe>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12794.001758924736!2d79.84820782436951!3d6.906945654024885!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2596aaa8742d9%3A0xced655398fd4d621!2sSLIIT%20Metropolitan%20Campus!5e0!3m2!1sen!2slk!4v1684684649497!5m2!1sen!2slk" width="200" height="250" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" align="right"></iframe>
		</div>
	</div>
	<br><br>
	<footer class="Main-footer">
		<div class="sub-footer1">
			<img src="Logo.jpeg" height="100px" width="100px">
			<br>
			<h4>Terms and conditions | Cookie Settings | Privacy policy</h4>
		</div>
		<div class="sub-footer2">
			<h4>Now available in:</h4>
			<a href="https://play.google.com/store/apps/details?id=com.sliitgo.evoxlk" target="_blank"><img src="googleplay.png" height="50px" width="170px"></a>
			<a href="https://play.google.com/store/apps/details?id=com.evoxsolutions.am_sliit" target="_blank"><img src="Appstore.png" height="50px" width="170px"></a>
			<br>
			<h4>Copyright 2023 &copy The Tutor. All Rights Reserved</h4>
		</div>
		<div class="social">
			<div class="fb">
				<a href="https://www.facebook.com/sliit.lk/" target="_blank"><img src="facebook.png" height="30px" width="30px"></a>
			</div>
			<div class="isnta">
				<a href="https://www.instagram.com/sliit.life/?hl=en" target="_blank"><img src="Instagram_logo.png" height="30px" width="30px"></a>
			</div>
			<div class="gmail">
				<a href="https://www.sliit.lk/email/" target="_blank"><img src="Gmail-logo.png" height="30px" width="50px"></a>
			</div>
			<div class="linkedin">
				<a href="https://lk.linkedin.com/company/fcsc-sliit" target="_blank"><img src="linked in.png" height="30px" width="30px"></a>
			</div>
		</div>
	</footer>
	</body>
</html>

<?php
	require 'form.php';
	
	if(isset($_POST["submit"])){
		$FirstName= $_POST["FirstName"];
		$LastName= $_POST["LastName"];
		$Email= $_POST["Mail"];
		$Password= $_POST["Hint"];
		$ContactNumber= $_POST["YourNumber"];
		$Issues = $_POST["YourProblem"];
		
		$sql= "INSERT INTO contactus VALUES('','$FirstName','$LastName','$Email','$Password','$ContactNumber','$Issues')";
		//mysqli_query($connection, $sql)//
		
		if(mysqli_query($connection,$sql)===true){
			echo "<script>Uploaded Successfully</script>";
		}
		else{
			echo "Upload Failed ";
		}
	}
	echo "<script>alert('Our term will respond you ASAP!')</style>";
?>