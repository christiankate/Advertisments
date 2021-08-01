<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>We Talk Art</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="main_container" id="home">
	
	<div class="navbar">
		<div class="logo">
			<a href="#">We Talk Art.</a>
		</div>
		<div class="navbar_items">
			<ul>
				<li><a href="#">home</a></li>
				<li><a href="#about">about</a></li>
				<li><a href="#services">services</a></li>
				<li><a href="#contactus">contact</a></li>
			</ul>
		</div>
	</div>
	<div class="banner_image">
		<div class="banner_content">
			<h1>We will make love an art,<br> <span>and We will love like artists.<span></h1>
			<p>Here we Publish, and of course You find what you really like. </p>
		</div>	
		<br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div class="wrapper">
			<div class="title-text">
			   <div class="title login">
				  Login Form
			   </div>
			   <div class="title signup">
				  Signup Form
			   </div>
			</div>
			<div class="form-container">
			   <div class="slide-controls">
				  <input type="radio" name="slide" id="login" checked>
				  <input type="radio" name="slide" id="signup">
				  <label for="login" class="slide login">Login</label>
				  <label for="signup" class="slide signup">Signup</label>
				  <div class="slider-tab"></div>
			   </div>
			   <div class="form-inner">
				  <form action="loginc.php" method="POST" class="login">
					 <div class="field">
						<input type="text" placeholder="Enter Username" name="Username" required>
					 </div>
					 <div class="field">
						<input type="password" placeholder="Enter Password" name="Password" required>
					 </div>
					 <div class="field btn">
						<div class="btn-layer"></div>
						<input type="submit" value="Login">
					 </div>
					 <div class="signup-link">
						Not a member? <a href="">Signup now</a>
					 </div>
				  </form><br><br>
				  <form action="addcust.php" method="POST" class="signup">
					<div class="field">
						<input type="text" name="Names" placeholder="Your Names Here" required>
					 </div>
					 <div class="field">
						<input type="text" name="Username" placeholder="Choose Username" required>
					 </div>
					 <div class="field">
						<input type="password" name="Password" placeholder="Choose Password" required>
					 </div>
					 <div class="field btn">
						<div class="btn-layer"></div>
						<input type="submit" value="Submit">
					 </div>
				  </form>
			   </div>
			</div>
		 </div>
		 <script>
			const loginText = document.querySelector(".title-text .login");
			const loginForm = document.querySelector("form.login");
			const loginBtn = document.querySelector("label.login");
			const signupBtn = document.querySelector("label.signup");
			const signupLink = document.querySelector("form .signup-link a");
			signupBtn.onclick = (()=>{
			  loginForm.style.marginLeft = "-50%";
			  loginText.style.marginLeft = "-50%";
			 });
			 loginBtn.onclick = (()=>{
			  loginForm.style.marginLeft = "0%";
			  loginText.style.marginLeft = "0%";
			 });
			 signupLink.onclick = (()=>{
			  signupBtn.click();
			  return false;
			});
		 </script>
	</div>
	<div class="about" id="about">
		<h1 class="title">About Us</h1>
		<p>#ArtWork Advertisment are all found here, we are here to let you know the best trending Artworks, In case You like any, You can suggest through Sugestion are Down below, With us what you have is Enjoyment. You Art, Your Feel. </p>
	</div>
	<div class="services" id="services">
		<h1 class="title">What We Offer</h1>
		<p>We Only Advertise Visual Art, Graphic Art and Decorative Art, Find what You Like and Enjoy as well.</p>
		<div class="diff_services">
			<div class="diff_services_item">
				<img src="images/pai.jpg" alt="service_image">
				<h3 class="sub_title">Visual Art</h3>
				<p>The visual arts are art forms such as painting, drawing, printmaking, sculpture, ceramics, photography, video, filmmaking, design, crafts and architecture.</p>
			</div>
			<div class="diff_services_item">
				<img src="images/dra.jpg" alt="service_image">
				<h3 class="sub_title">Graphic Art</h3>
				<p>A category of fine art, graphic art covers a broad range of visual artistic expression, typically two-dimensional, i.e. produced on a flat surface..</p>
			</div>
			<div class="diff_services_item">
				<img src="images/deco.jpg" alt="service_image" height="320">
				<h3 class="sub_title">Decorative Art</h3>
				<p>The decorative arts are arts or crafts whose object is the design and manufacture of objects that are both beautiful and functional. It includes most of the arts making objects for the interiors of buildings, and interior design, but not usually architecture.</p>
			</div>
		</div>
	</div>
	<div class="contactus" id="contactus">
		<h1 class="title">contact us</h1>
		<div class="form_wrapper">
			<form action="messend.php" method="POST">			
			<div class="form_input">
				<input type="text" placeholder="Your Names" name="Sender" required>
			</div>
			<div class="form_input">
				<input type="text" placeholder="Subject" name="Subject" required>
			</div>
			<div class="form_input">
				<textarea placeholder="Message" name="Comment" required></textarea>
			</div>
			<div class="btn-layer"></div>
			<input type="submit" value="Submit">
		 </div>
		</div>
	</div>

	<div class="footer">
		<a href="#">© 219000369&nbsp;&&nbsp;218006750</a>
	</div>
	<div class="arrow">
		<a href="#home"><img src="images/arrow.png" alt="up_arrow"></a>
	</div>
</div>	
	
</body>
</html>