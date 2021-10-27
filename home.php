<?php

session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'artgallery');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<script src="assets/js/slideshow.js"></script>
	<script src="assets/js/popup.js"></script>
	<script src="assets/js/addToCart.js"></script>
    <link rel="stylesheet" href="./assets/css/_home.css">
	<style>
	.header{
		width: 100%;
		height: 100vh;
		background-image: linear-gradient(rgba(11, 20, 10, 0.719), rgba(11, 20, 10, 0.719)), url('assets/images/paint-2985569_1280.jpg');
		background-size: 100% 100%;
		background-repeat: no-repeat;
		position: relative;
	}
	.small-button{
		width: 55%;
	}
	</style>

    <title>Homepage</title>
</head>
<body>
	<!--Tab & Header secton-->
	<div class="tab">
		<button class="tablinks" onclick="openCity(event, 'Home')">Home</button>
		<button class="tablinks" onclick="openCity(event, 'Paintings')">Paintings</button>
		<button class="tablinks" onclick="openCity(event, 'Gallery')">Gallery</button>
		<button class="tablinks" onclick="openCity(event, 'Artists')">Artists</button>
		<button class="tablinks" style="float:right" onclick="location.href='./admin/dashboard.php';">Admin</button>
		<button class="tablinks" style="float:right" onclick="location.href='./logout.php';">LogOut</button>	
		<button class="tablinks" style="float:right" onclick="location.href='./login.php';">LogIn</button>
	</div>
    
    <div class="header" id="topheader">
            <section class="header-section">
                <div class="center-div">
                    <h1 style="font-size: 3em; padding-bottom: 1.5em; color: #E3E3CD;">Welcome to Art Gallery <?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}?>!</h1>
                    <p style="padding-bottom: 1.5em;">Search here</p>
                    <div class="header-buttons">
                        <a href="./aboutUs.php" style="color: #E3E3CD;">About Us</a>
                        <a href="./mycart.php" style="color: #E3E3CD;">My Cart</a>
                    </div>
                </div>
            </section>
        
    </div>
	<!--Slideshow secton-->
	<div style="background-image: url('assets/images/black_gradient.jpg');">
	<div class="slideshow-container">

	<div class="mySlides fade">
	  <div class="numbertext">1 / 5</div>
	  <img src="assets/images/s1.jpg" style="width:100%">
	  <div class="text">Lone Tree in Rain</div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext">2 / 5</div>
	  <img src="assets/images/s2.jpg" style="width:100%">
	  <div class="text">Blue Flowers</div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext">3 / 5</div>
	  <img src="assets/images/s3.jpg" style="width:100%">
	  <div class="text">Lone Artist</div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext">4 / 5</div>
	  <img src="assets/images/s4.jpg" style="width:100%">
	  <div class="text">Cool Hut</div>
	</div>
	
	<div class="mySlides fade">
	  <div class="numbertext">5 / 5</div>
	  <img src="assets/images/s5.jpg" style="width:100%">
	  <div class="text">Ship</div>
	</div>
	
	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>

	</div>
	<br>

	<div style="text-align:center">
	  <span class="dot" onclick="currentSlide(1)"></span> 
	  <span class="dot" onclick="currentSlide(2)"></span> 
	  <span class="dot" onclick="currentSlide(3)"></span> 
	  <span class="dot" onclick="currentSlide(4)"></span>
	  <span class="dot" onclick="currentSlide(5)"></span>
	</div>
	</div>

	<form action="" method="POST">
	<div class="products" style="background-image:url('assets/images/products_bg.jpg'); padding-top:40px; padding-bottom:40px;">
		<div class="products-container">
			<div class="flex-p1"><img src="assets/images/p1.jpg" alt="p1" width="400" height="340" style="border: 2px solid #555">
				<p style="padding-left:170px;padding-top:8px;color:white;">₹499.00</p>
				<p style="padding-left:120px;padding-top:8px;"><input type="button" class="small-button" onclick="popup();addtocart('pstored1');" value="Add to Cart" name="p1atc"></input></p>
			</div>
			<div class="flex-p2"><img src="assets/images/p2.jpg" alt="p2" width="400" height="340" style="border: 2px solid #555">
				<p style="padding-left:170px;padding-top:8px;color:white;">₹299.00</p>
				<p style="padding-left:120px;padding-top:8px;"><input type="button" class="small-button" onclick="popup();addtocart('pstored2');" value="Add to Cart" name="p2atc"></input></p>
			</div>
			<div class="flex-p3"><img src="assets/images/p3.jpg" alt="p3" width="400" height="340" style="border: 2px solid #555">
				<p style="padding-left:170px;padding-top:8px;color:white;">₹1299.00</p>
				<p style="padding-left:120px;padding-top:8px;"><input type="button" class="small-button" onclick="popup();addtocart('pstored3');" value="Add to Cart" name="p3atc"></input></p>
			</div>
			<div class="flex-p4"><img src="assets/images/p4.jpg" alt="p4" width="400" height="340" style="border: 2px solid #555">
				<p style="padding-left:170px;padding-top:8px;color:white;">₹1599.00</p>
				<p style="padding-left:120px;padding-top:8px;"><input type="button" class="small-button" onclick="popup();addtocart('pstored4');" value="Add to Cart" name="p4atc"></input></p>
			</div>
			<div class="flex-p5"><img src="assets/images/p5.jpg" alt="p5" width="400" height="340" style="border: 2px solid #555">
				<p style="padding-left:170px;padding-top:8px;color:white;">₹399.00</p>
				<p style="padding-left:120px;padding-top:8px;"><input type="button" class="small-button" onclick="popup();addtocart('pstored5');" value="Add to Cart" name="p5atc"></input></p>
			</div>
			<div class="flex-p6"><img src="assets/images/p6.jpg" alt="p6" width="400" height="340" style="border: 2px solid #555">
				<p style="padding-left:170px;padding-top:8px;color:white;">₹199.00</p>
				<p style="padding-left:120px;padding-top:8px;"><input type="button" class="small-button" onclick="popup();addtocart('pstored6');" value="Add to Cart" name="p6atc"></input></p>
			</div>
			<div class="flex-p7"><img src="assets/images/p7.jpg" alt="p7" width="400" height="340" style="border: 2px solid #555">
				<p style="padding-left:170px;padding-top:8px;color:white;">₹249.00</p>
				<p style="padding-left:120px;padding-top:8px;"><input type="button" class="small-button" onclick="popup();addtocart('pstored7');" value="Add to Cart" name="p7atc"></input></p>
			</div>
			<div class="flex-p8"><img src="assets/images/p8.jpg" alt="p8" width="400" height="340" style="border: 2px solid #555">
				<p style="padding-left:170px;padding-top:8px;color:white;">₹999.00</p>
				<p style="padding-left:120px;padding-top:8px;"><input type="button" class="small-button" onclick="popup();addtocart('pstored8');" value="Add to Cart" name="p8atc"></input></p>
			</div>
		</div>
	</div>
	</form>


    <div class="footer-dark" style="background-color:#222222">
        <footer>
            <div class="f-container">
                <div class="f-row">
                    <div class="f-c1">
                        <h3 style="color:white;">Services</h3>                        
                            <p><a href="#" style="color: #E3E3CD;">Web design</a></p>
                            <p><a href="#" style="color: #E3E3CD;">Development</a></p>
                            <p><a href="#" style="color: #E3E3CD;">Hosting</a></p>                      
                    </div>
                    <div class="f-c2">
                        <h3 style="color:white;">About</h3>                       
                            <p><a href="#" style="color: #E3E3CD;">Company</a></p>
                            <p><a href="#" style="color: #E3E3CD;">Team</a></p>
                            <p><a href="#" style="color: #E3E3CD;">Careers</a></p>
                    </div>
                    <div class="f-c3">
                        <h3 style="color:white;">Art Gallery</h3>
                        <p style="color: #E3E3CD;">Providing Contemporary Art along with varieties of handmade products directly from our own house top artist. We are dedicated to provide the finest service available. Hope to see you visit us again!</p>
                    </div>
					</div>
                    <div class="social">
						<a href="#"><img src="assets/images/i1.png" style="width:3%"></a>
						<a href="#"><img src="assets/images/i2.png" style="width:3%"></a>
						<a href="#"><img src="assets/images/i3.png" style="width:3%"></a>
						<a href="#"><img src="assets/images/i4.png" style="width:3%"></a>
						<a href="#"><img src="assets/images/i5.png" style="width:3%"></a>
					</div>
                <p class="copyright">Art Gallery © 2021</p>
            </div>
        </footer>
    </div>

	<!--Invoke Js-->
	<script>
		showSlides(slideIndex);
	</script>
</body>
</html>