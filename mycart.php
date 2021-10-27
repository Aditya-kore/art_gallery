<?php

session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'artgallery');

$s = "SELECT 'name','image','price' FROM cart";



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Cart</title>

    <link rel="stylesheet" href="./assets/css/_cart.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="./assets/css/_footer.css">
    <script src="https://code.jquery.com/jquery-2.2.4.js" charset="utf-8"></script>
	<script src="assets/js/addToCart.js"></script>
    <meta name="robots" content="noindex,follow" />
	
	<style>
		.delete-btn {
			display: inline-block;
			cursor: pointer;
			width: 18px;
			height: 17px;
			background: url("assets/images/delete-icn.svg") no-repeat center;
			margin-right: 20px;
		}
		.like-btn {
			position: absolute;
			top: 9px;
			left: 15px;
			display: inline-block;
			background: url("assets/images/twitter-heart.png");
			width: 60px;
			height: 60px;
			background-size: 2900%;
			background-repeat: no-repeat;
			cursor: pointer;
		}

		.tab {
		  overflow: hidden;
		  background-color: #99AEAD;
		}

		/* Style the buttons inside the tab */
		.tab button {
		  background-color: inherit;
		  float: left;
		  border: none;
		  outline: none;
		  cursor: pointer;
		  padding: 14px 16px;
		  transition: 0.3s;
		  font-size: 17px;
		}

		/* Change background color of buttons on hover */
		.tab button:hover {
		  background-color: #ddd;
		}

		/* Create an active/current tablink class */
		.tab button.active {
		  background-color: #ccc;
		}

		/* Style the tab content */
		.tabcontent {
		  display: none;
		  padding: 6px 12px;
		  -webkit-animation: fadeEffect 1s;
		  animation: fadeEffect 1s;
		}

		/* Fade in tabs */
		@-webkit-keyframes fadeEffect {
		  from {opacity: 0;}
		  to {opacity: 1;}
		}

		@keyframes fadeEffect {
		  from {opacity: 0;}
		  to {opacity: 1;}
		}
	</style>
	
  </head>
  <body>
  <?php

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num > 0){
      while($product = mysqli_fetch_array($result)){
          
        ?>
    <?php
      }
    }

  ?>
	<audio id="clearPlay" src="./assets/sounds/aww.mp3"></audio>
	<audio id="buyPlay" src="./assets/sounds/cash.mp3"></audio>


	<!--Tab & Header secton-->
	<div class="tab">
		<button class="tablinks" onclick="location.href='./home.php';">Home</button>
		<button class="tablinks" onclick="openCity(event, 'Paintings')">Paintings</button>
		<button class="tablinks" onclick="openCity(event, 'Gallery')">Gallery</button>
		<button class="tablinks" onclick="openCity(event, 'Artists')">Artists</button>
		<button class="tablinks" style="float:right" onclick="location.href='./login.php';">Sign In</button>
		<button class="tablinks" style="float:right" onclick="location.href='./login.php';">Login</button>	
	</div>   
	
	<!-- shopping cart -->
    <div class="shopping-cart">
      <!-- Title -->
      <div class="title">
        My Cart
      </div>

      <!-- Product #1 -->
      <div class="item" id="item1">
        <div class="buttons">
          <span class="delete-btn" onclick='hideMe("1")'></span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="./assets/images/p1.jpg" alt="p1" width="95" height="80">
        </div>

        <div class="description">
          <span>French Fries</span>
          <span>Oil</span>
          <span>golden</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button">
            <img src="./assets/images/plus.svg" alt="" />
          </button>
          <input type="text" name="name" value="1">
          <button class="minus-btn" type="button" name="button">
            <img src="./assets/images/minus.svg" alt="" />
          </button>
        </div>

        <div class="total-price" id="pstored1">499</div>
      </div>

      <!-- Product #2 -->
      <div class="item" id="item2">
        <div class="buttons">
          <span class="delete-btn" onclick='hideMe("2")'></span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="./assets/images/p2.jpg" alt="p2" width="95" height="80">
        </div>

        <div class="description">
          <span>Wall Pattern</span>
          <span>Print</span>
          <span>Brown</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button">
            <img src="./assets/images/plus.svg" alt="" />
          </button>
          <input type="text" name="name" value="1">
          <button class="minus-btn" type="button" name="button">
            <img src="./assets/images/minus.svg" alt="" />
          </button>
        </div>

        <div class="total-price" id="pstored2">299</div>
      </div>

      <!-- Product #3 -->
      <div class="item" id="item3">
        <div class="buttons">
          <span class="delete-btn" onclick='hideMe("3")'></span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="./assets/images/p3.jpg" alt="p3" width="95" height="80">
        </div>

        <div class="description">
          <span>Design</span>
          <span>Print</span>
          <span>Black</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button">
            <img src="./assets/images/plus.svg" alt="" />
          </button>
          <input type="text" name="name" value="1">
          <button class="minus-btn" type="button" name="button">
            <img src="./assets/images/minus.svg" alt="" />
          </button>
        </div>

        <div class="total-price" id="pstored3">1299</div>
      </div>
	  
      <!-- Product #4 -->
      <div class="item" id="item4">
        <div class="buttons">
          <span class="delete-btn" onclick='hideMe("4")'></span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="./assets/images/p4.jpg" alt="p4" width="95" height="80">
        </div>

        <div class="description">
          <span>Abstract</span>
          <span>Print</span>
          <span>Brown</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button">
            <img src="./assets/images/plus.svg" alt="" />
          </button>
          <input type="text" name="name" value="1">
          <button class="minus-btn" type="button" name="button">
            <img src="./assets/images/minus.svg" alt="" />
          </button>
        </div>

        <div class="total-price" id="pstored4">1599</div>
      </div>
	  
      <!-- Product #5 -->
      <div class="item" id="item5">
        <div class="buttons">
          <span class="delete-btn" onclick='hideMe("5")'></span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="./assets/images/p5.jpg" alt="p5" width="95" height="80">
        </div>

        <div class="description">
          <span>Natural Soap</span>
          <span>Handmade</span>
          <span>All colos</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button">
            <img src="./assets/images/plus.svg" alt="" />
          </button>
          <input type="text" name="name" value="1">
          <button class="minus-btn" type="button" name="button">
            <img src="./assets/images/minus.svg" alt="" />
          </button>
        </div>

        <div class="total-price" id="pstored5">399</div>
      </div>
	  
      <!-- Product #6 -->
      <div class="item" id="item6">
        <div class="buttons">
          <span class="delete-btn"  onclick='hideMe("6")'></span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="./assets/images/p6.jpg" alt="p6" width="95" height="80">
        </div>

        <div class="description">
          <span>Diyas</span>
          <span>Handmade</span>
          <span>Red & Green</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button">
            <img src="./assets/images/plus.svg" alt="" />
          </button>
          <input type="text" name="name" value="1">
          <button class="minus-btn" type="button" name="button">
            <img src="./assets/images/minus.svg" alt="" />
          </button>
        </div>

        <div class="total-price" id="pstored6">199</div>
      </div>
	  
      <!-- Product #7 -->
      <div class="item" id="item7">
        <div class="buttons">
          <span class="delete-btn" onclick='hideMe("7")'></span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="./assets/images/p7.jpg" alt="p7" width="95" height="80">
        </div>

        <div class="description">
          <span>Earrings</span>
          <span>Handmade</span>
          <span>Blue & Gold</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button">
            <img src="./assets/images/plus.svg" alt="" />
          </button>
          <input type="text" name="name" value="1">
          <button class="minus-btn" type="button" name="button">
            <img src="./assets/images/minus.svg" alt="" />
          </button>
        </div>

        <div class="total-price" id="pstored7">249</div>
      </div>
	  
      <!-- Product #8 -->
      <div class="item" id="item8">
        <div class="buttons">
          <span class="delete-btn" onclick='hideMe("8")'></span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="./assets/images/p8.jpg" alt="p8" width="95" height="80">
        </div>

        <div class="description">
          <span>Baskets</span>
          <span>Handmade</span>
          <span>Brown</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button">
            <img src="./assets/images/plus.svg" alt="" />
          </button>
          <input type="text" name="name" value="1">
          <button class="minus-btn" type="button" name="button">
            <img src="./assets/images/minus.svg" alt="" />
          </button>
        </div>

        <div class="total-price" id="pstored8">999</div>
      </div>
    </div>
    <?php

    if(isset($_SESSION['username']) && isset($_POST['buynow'])){
      $oname = htmlentities($_COOKIE['cartorder'], 3, 'UTF-8');
      $otname = htmlentities($_COOKIE['carttotal'], 3, 'UTF-8');
      $uname = $_SESSION["username"];
      
      $s2 = "UPDATE admin SET orders = orders + $oname, total = total + $otname WHERE username = '$uname'";

      mysqli_query($con, $s2);
    }

    ?>
    <form action="" method=POST>
	<div style="display:flex; justify-content:center; align-items:center;margin-top: -25px; padding-bottom:80px;">
		<input type="submit" value="Buy Now" name="buynow" class="small-button" onclick='buyPlay();alert("Thanks for the Purchase !");clearAll();sessionStorage.clear();'></input>
		<button class="small-button" onclick="clearAll();sessionStorage.clear();clearPlay();deleteAllCookies();">Clear Cart</button>
	</div></form>
	
	<!-- ------------------Footer section--------------- -->
	<div class="footer-dark" style="background-color:#222222;position: relative;width: 100%;height: 400px;margin:auto;">
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
						<p style="color: #E3E3CD;">Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
					</div>
					</div>
					<div class="social">
						<a href="#"><img src="assets/images/i1.png" style="width:3%"></a>
						<a href="#"><img src="assets/images/i2.png" style="width:3%"></a>
						<a href="#"><img src="assets/images/i3.png" style="width:3%"></a>
						<a href="#"><img src="assets/images/i4.png" style="width:3%"></a>
						<a href="#"><img src="assets/images/i5.png" style="width:3%"></a>
					</div>
				<p class="copyright">Company Name © 2018</p>
			</div>
		</footer>
	</div>
	
	<script type="text/javascript" src="assets/js/shoppingCart.js"></script>
  <script>
    window.onload = function countOrder(){
    var count =0;
  
    for (const [key, value] of Object.entries(sessionStorage)) {
       if(value==1){count++;}
    }

    var prices = countTotalS();

    document.cookie = "cartorder=" + count + ";" + "SameSite=None;" + "secure" ; 
    document.cookie = "carttotal=" + prices + ";" + "SameSite=None;" + "secure" ; 
    console.log(count);
    console.log(document.cookie);
    }

    function deleteAllCookies() {
      var cookies = document.cookie.split(";");

      for (var i = 0; i < cookies.length; i++) {
          var cookie = cookies[i];
          var eqPos = cookie.indexOf("=");
          var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
          document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT" + "SameSite=None;" + "secure";
      }
    }

    function countTotalS() {
      var price = 0;
      for (const [key, value] of Object.entries(sessionStorage)) {
        if(value==1){
        var price = price + parseInt(document.getElementById(key).innerHTML);
        }
      }
      return price;
    }
    
  </script>
  </body>
</html>
