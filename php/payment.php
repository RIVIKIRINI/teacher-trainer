<html>
<head>
    <title>Payment-The Tutor-Online Teacher Traning Institute</title>
    <link rel="stylesheet" href="/CSS/payment.css">
</head>
<body>
<div class="contain">
    <div class="container">
        <!-- header -->
        <div class="header">
            <h1>The Tutor</h1>
        </div>
        <!-- menubar begins -->
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
<div class="full">
    <div class="left">

        <h3>Contact Information</h3><br>
        <form id="contact-form" action="" method="post">
            <label>
                Full name
                <input type="text" name="fullName" placeholder="Enter name" required>
            </label>
            <label>
                Email
                <input type="email" name="email" placeholder="Enter email" required>
            </label>
            <h3>Billing Address</h3><br>
            <label>
                Country:
                <select name="country" id="country" required>
                    <option value="">Choose country..</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="India">India</option>
                    <option value="Japan">Japan</option>
                    <option value="China">China</option>
                    <option value="Korea">Korea</option>
                    <option value="Pakistan">Pakistan</option>
                </select>
            </label>
            <label>
                <br>
                Address:
                <input type="text" name="address" id="address" placeholder="Enter address" required>
            </label>
            <label>
                <br>
                City:
                <input type="text" name="city" id="city" placeholder="Enter City">
            </label>
            <div id="zip">
                <label>
                    State:
                    <select name="state" id="state" required>
                        <option value="">Choose State..</option>
                        <option value="Central Province">Central Province</option>
                        <option value="Eastern Province">Eastern Province</option>
                        <option value="Northern Province">Northern Province</option>
                        <option value="North Central Province">North Central Province</option>
                    </select>
                </label>
                <label>
                    <br>
                    Zip code:
                    <input type="number" name="zipcode" id="zipcode" placeholder="Zip code" required>
                </label>
            </div>
    </div>
    
    <div class="right">

        <h3>Payment</h3><br>

        <p>Accepted Card:</p><br>
        <img src="/Images/paypal.png" width="150" alt="Accepted Card Image">
        <img src="/images/master.png" width="150" alt="Accepted Card Image">
        <img src="/images/visa.jpg" width="150" alt="Accepted Card Image">
        <img src="/images/discover.png" width="150" alt="Accepted Card Image">

        <label>
            <br>
            Name on Card:
            <input type="text" name="nameoncard" id="nameoncard" placeholder="Enter name" required>
        </label>

        <label>
            Credit Card Number:
            <input type="text" name="creditno" id="creditno" placeholder="Enter card number" required>
        </label>

        <div>
            <label for="expmonth">
                Exp month:
                <select name="expmonth" id="expmonth" required>
                    <option value="">Choose Month..</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
            </label>
        </div>

        <div id="zip">
            <label>
                Exp year:
                <select name="expyear" id="expyear" required>
                    <option value="">Choose Year..</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                </select>
            </label>
            <label>
                <br>
                CVV:
                <input type="number" name="cvv" id="cvv" placeholder="CVV" required>
            </label>
        </div>

        <button type="submit" name="Submit" id="btn">Submit</button>
        </form>

    </div>
</div>
<div class="Page">
    <h1><a href="quiz.html">Go To Play Quiz</a></h1>
</div>
    <!-- the footer part begins -->
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
</div>
<script src="/JS/test.js"></script>
</body>
</html>

<?php
require 'connection.php';

if (isset($_POST["Submit"])) {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $nameoncard = $_POST['nameoncard'];
    $creditno = $_POST['creditno'];
    $expmonth = $_POST['expmonth'];
    $expyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];

    $query = "INSERT INTO payment_tbl (fullName, email, country, address, city, state, zipcode, nameoncard, creditno, expmonth, expyear, cvv) 
              VALUES ('$fullName', '$email', '$country', '$address', '$city', '$state', '$zipcode', '$nameoncard', '$creditno', '$expmonth', '$expyear', '$cvv')";
    mysqli_query($conn, $query);
    echo "<script> alert('Data Inserted Successfully'); </script>";
}
?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="left">

        <h3>Contact Information</h3>
        <form id="contact-form" action="" method="post">
            <label>
                Full name
                <input type="text" name="fullName" placeholder="Enter name" required>
            </label>
            <label>
                Email
                <input type="email" name="email" placeholder="Enter email" required>
            </label>
            <h3>Billing Address</h3>
            <label>
                Country:
                <select name="country" id="country" required>
                    <option value="">Choose country..</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="India">India</option>
                    <option value="Japan">Japan</option>
                    <option value="China">China</option>
                    <option value="Korea">Korea</option>
                    <option value="Pakistan">Pakistan</option>
                </select>
            </label>
            <label>
                Address:
                <input type="text" name="address" id="address" placeholder="Enter address" required>
            </label>
            <label>
                City:
                <input type="text" name="city" id="city" placeholder="Enter City">
            </label>
            <div id="zip">
                <label>
                    State:
                    <select name="state" id="state" required>
                        <option value="">Choose State..</option>
                        <option value="Central Province">Central Province</option>
                        <option value="Eastern Province">Eastern Province</option>
                        <option value="Northern Province">Northern Province</option>
                        <option value="North Central Province">North Central Province</option>
                    </select>
                </label>
                <label>
                    Zip code:
                    <input type="number" name="zipcode" id="zipcode" placeholder="Zip code" required>
                </label>
            </div>
    </div>
    <div class="right">

        <h3>PAYMENT</h3>

        <p>Accepted Card:</p>
        <img src="images/unnamed.jpg" width="150" alt="Accepted Card Image">

        <label>
            Name on Card:
            <input type="text" name="nameoncard" id="nameoncard" placeholder="Enter name" required>
        </label>

        <label>
            Credit Card Number:
            <input type="text" name="creditno" id="creditno" placeholder="Enter card number" required>
        </label>

        <div>
            <label for="expmonth">
                Exp month:
                <select name="expmonth" id="expmonth" required>
                    <option value="">Choose Month..</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
            </label>
        </div>

        <div id="zip">
            <label>
                Exp year:
                <select name="expyear" id="expyear" required>
                    <option value="">Choose Year..</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                </select>
            </label>
            <label>
                CVV:
                <input type="number" name="cvv" id="cvv" placeholder="CVV" required>
            </label>
        </div>

        <button type="submit" name="Submit">Submit</button>
        </form>

    </div>
</div>
</body>
</html>
