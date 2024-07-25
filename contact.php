<?php
  include("include/connection.php");
  if(isset($_POST['submit']))
  {
	 $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
$sql=mysqli_query($con,"insert into contact(name,email,subject,message)values(
'$name','$email','$subject','$message')");	
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing E-commerce website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="web/glyphicon.html">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<section id="header">
    <a href="#"><img src="images/1b.png" alt="" class="logo"></a>
    <div>
        <ul id="navbar">
            <li><a  href="index.html">Home</a></li>
            <li><a  href="shop.html">Shop</a></li>
            <li><a  href="about.html">About</a></li>
            <li><a class="active" href="contact.php">Contact</a></li>
            <li><a href="admin/login.php">login</a></li>
            <li id="lg-bag"><a href="cart.html"><i class="fas fa-shopping-bag"></i></a></li>
            <a href="#" id="close"><i class="fas fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
        <a href="cart.html"><i class="fas fa-shopping-bag"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>

<section id="page-header" class="about-header">
    <h2>#Lets_talk</h2>
    <p>Leave a message ,we would love to hear from you</p>
</section>

<section id="contact-details" class="section-p1">
    <div class="details">
        <span>GET IN TOUCH</span>
        <h2> Visit one of our office location or contact us today </h2>
        <h3>Head office</h3>
        <div>
            <li>
            <i class="fas fa-map"></i>
            <p>xyz area Ujjain</p>
        </li>
        <li>
            <i class="far fa-envelope"></i>
            <p>contact@example.com</p>
        </li>
        <li>
            <i class="fas fa-phone-alt"></i>
            <p>+91-958746321</p>
        </li>
        <li>
            <i class="fas fa-clock"></i>
            <p>Monday to saturday</p>
        </li>
        </div>
    </div>

    <div class="nap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7358.215326999882!2d75.78626253868235!3d23.175473102737538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396375347362220d%3A0x54f15df351303576!2sUjjain%20Junction%20railway%20station!5e0!3m2!1sen!2sin!4v1703696536137!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<section id="form-details" >
<form action="contact.php" method="POST">
    <span>Leave a message</span>
    <h2> we love to hear from you</h2>
    <input type="text" id="name" name="name" placeholder="Name" required="">
	<input type="email" class="email" id="email" name="email" placeholder="Email" required="">
	<input type="text" id="subject" name="subject" placeholder="Subject" required="">
	<textarea name="message" id="message" placeholder="Message" required=""></textarea>
    <button class="normal" type="submit" value="submit" name="submit">submit</button>
</form>
<div class="people">
    <div>
        <img src="images/72.jpg" alt="">
        <p><span>John doe</span>
        Senior marketing manager<br>phone: +0000 123 00<br>E-mail:contact@example.com</p>
    </div>
    <div>
        <img src="images/69.jpg" alt="">
        <p><span>Emma stone</span>
        Senior marketing manager<br>phone: +0000 123 00<br>E-mail:contact@example.com</p>
    </div>
    <div>
        <img src="images/78.jpg" alt="">
        <p><span>William smith</span>
        Senior marketing manager<br>phone: +0000 123 00<br>E-mail:contact@example.com</p>
    </div>
    <div>
        <img src="images/79.jpg" alt="">
        <p><span>William smith</span>
        Senior marketing manager<br>phone: +0000 123 00<br>E-mail:contact@example.com</p>
    </div>
    
</div>
</section>

<section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign up for newsletters</h4>
            <p>Get E-mail updated about our latest shop and <span>special offers</span>. </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your E-mail address">
            <button class="normal">Sign Up</button>
        </div>
</section>

<footer class="section-p1">
    <div class="col">
        <img src="images/1b.png" alt="logo">
        <p>'Fashion' Where You Can Find the Fashion;</p>
    </div>

        <div class="col">
        <h4>Contact</h4>
        <p><strong>Address :</strong> 5 street 32 BLock-D </p>
        <p> <strong>Phone :</strong> +91-958746321</p>
        <p> <strong>Hours :</strong> 10:00 - 18:00 Mon-Sat</p>
        <div class="follow">
            <h4>Follow us</h4>
            <div class="icon">
                <i class="fa-brands fa-instagram fa-lg" style="color: #439d82;"></i>
                <i class="fa-brands fa-facebook fa-lg" style="color: #439d82;"></i>
                <i class="fa-brands fa-x-twitter fa-lg" style="color: #439d82;"></i>
                <i class="fa-brands fa-pinterest fa-lg" style="color: #439d82;"></i>
                <i class="fa-brands fa-youtube fa-lg" style="color: #439d82;"></i>
            </div>
        </div>
    </div>

    <div class="col">
        <h4>About</h4>
        <a href="#">About us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
    </div>

    <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
    </div>

    <div class="col install">
        <h4>Install App</h4>
        <p>From App Store Or Google Play</p>
        <div class="row">
            <img src="images/" alt="">
            <img src="images/" alt="">
        </div>
        <p>Secured Payment Gateways</p>
        <img src="images/" alt="">
    </div>

    <div class="copyright">
        <p>© 2023. All rights reserved. This Design is Made With the love by Tanishq 💗</p>
    </div>
</footer>

    <script src="java.js"></script>
</body>
</html>