<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
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
<link rel="stylesheet" href="./assets/css/_footer.css">
</head>
<body>

	<!--Tab & Header secton-->
	<div class="tab">
		<button class="tablinks" onclick="location.href='./home.php';">Home</button>
		<button class="tablinks" onclick="openCity(event, 'Paintings')">Paintings</button>
		<button class="tablinks" onclick="openCity(event, 'Gallery')">Gallery</button>
		<button class="tablinks" onclick="openCity(event, 'Artists')">Artists</button>
		<button class="tablinks" style="float:right" onclick="location.href='./login.php';">Sign In</button>
		<button class="tablinks" style="float:right" onclick="location.href='./login.php';">Login</button>	
	</div>   

<div class="about-section" style="padding-bottom:80px;padding-top:80px;">
  <h1 style="color:#E98195">About Us Page</h1>
  <p style="padding-bottom:80px;padding-top:80px;">Text here for about us  is simply dummy text of the printing and typesetting industry.
  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
  It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
  and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..</p>
  <p>Return to Home to buy more products.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="./assets/images/pro-pic.jpg" alt="abc1" style="width:50%">
      <div class="container">
        <h2>Abc Xyz</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>abc@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="./assets/images/pro-pic.jpg" alt="abc2" style="width:50%">
      <div class="container">
        <h2>Abc Xyz</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>abc@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="./assets/images/pro-pic.jpg" alt="abc3" style="width:50%">
      <div class="container">
        <h2>Abc Xyz</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>abc@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
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

</body>
</html>
