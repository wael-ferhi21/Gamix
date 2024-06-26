<?php
   
    $successMessage = isset($_GET['success']) ? $_GET['success'] : '';
    $errorMessage = isset($_GET['error']) ? $_GET['error'] : '';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gamix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/featherlight.min.css">
    <link href='https://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
    
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="js/featherlight.min.js"></script> 

</head>
<body>
<?php if (!empty($successMessage)): ?>
    <div class="success-message"><?php echo $successMessage; ?></div>
<?php endif; ?>

<?php if (!empty($errorMessage)): ?>
    <div class="error-message"><?php echo $errorMessage; ?></div>
<?php endif; ?>
	<section class="login-section" id="loginSection" style="display: none;">
		<div class="wrapper">
			
			<button id="closeLogin">Close</button>
		  <h3>Login</h3>
		  <form class="login-form" action="authuser.php" method="post">
			<div class="form-group">
			  <label for="username">Username</label>
			  <input type="text" id="username" name="username" placeholder="Enter your username" required>
			</div>
			<div class="form-group">
			  <label for="password">Password</label>
			  <input type="password"  name="password" placeholder="Enter your password" required>
			</div>
			<div class="form-group">
			<input type="submit" name="login" value="Login">

			</div>
		  </form>
		</div>
	  </section>
	  <section class="signin-section" id="signinSection" style="display: none;">
		<div class="wrapper">
			<button id="closeSignin">Close</button>
		  <h3>Sign In</h3>
		  <form class="signin-form" action="adduser.php" method="post">
			<div class="form-group">
			  <label for="username">Username</label>
			  <input type="text" id="username" name="username" placeholder="Enter your username" required>
			</div>
			<div class="form-group">
			  <label for="password">Password</label>
			  <input type="password"  name="password" placeholder="Enter your password" required>
			</div>
			<div class="form-group">
			  <input type="submit" name="join" value="join">
			</div>
		  </form>
		</div>
	  </section>



    <header id="top">
        <div class="wrapper">
            <img class="logo" src="https://cdn.stockmediaserver.com/smsimg31/pv/IsignstockContributors/ISS_18907_18510.jpg?token=KmSkzo5lcVD8-6-CWs64Cbcw61VQcLR40DZfXUdbXuo&class=pv&smss=52&expires=4102358400" alt="">
            <nav>
                <ul id="navigation">
                    <li><a href="#home">Home</a></li>
                    
                    <li><a href="#services">Services</a></li>
                    <li><a href="#products">Top Sales</a></li>
                    <li><a class="nav-cta" href="#">Try Now</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="banner"><a name="home"></a>
        <div class="wrapper">
            <h2>Gamix</h2>
            <p class="subtitle">Clean, Minimal Landing Page Template</p>
            <div class="buttons">
                <a href="#" class="button-1">Try Now</a>
                <a href="#" class="button-2">Learn More</a>
            </div>
        </div>
    </section>
    
    <section class="video-section">    
        <div class="wrapper">
            <h3>What is Gamix?</h3>
            <p class="subtitle">Watch our promotional video</p>
            <video width="790"  poster="images/video-poster2.jpg" onclick="this.play();" controls preload>
                <p>Video playback unsupported</p>
            </video>
            <a href="#" class="button-1">Begin</a>
        </div>
    </section>
	
	<section class="services-section"><a name="services"></a>
		<div class="wrapper">
			<h3>Services</h3>
			<p class="subtitle">We do provide you with a lots of cool things</p>
			<ul class="services-list">
				<li>
					<div class="image-container">
						<img src="images/paly5.jpg" alt="services icon" >
					</div>
					<h5>Gaming Consoles</h5>
					<p>  get the best setup for gaming and consoloes </p>
					<a href="#">Learn More</a>
				</li>
				<li>
					<div class="image-container">
						<img src="images/fifa.png" alt="services icon" >
					</div>
					<h5>Latest games </h5>
					<p>get the latest games launched in every season </p>
					<a href="#">Learn More</a>
				</li>
				<li>
					<div class="image-container">
						<img src="images/xbox.png" alt="services icon" >
					</div>
					<h5>Gaming cards </h5>
					<p>get the gift cards for famous gaming platforms </p>
					<a href="#">Learn More</a>
				</li>
				<div class="clear"></div>	
			</ul>
		</div>
	</section>

	
	
	<section class="features-section">	
		<div class="wrapper">
			<ul class="feature-squares">
				<li>
					<div class="image">
						<img src="images/icon-eye.png" alt="feature icon">
					</div>
					<div class="text">
						<h5>Attention to Detail</h5>
						<p> keep yourself updated and check our promotions  </p>
					</div>
				</li>
				<li>
					<div class="image">
						<img src="images/icon-clock.png" alt="feature icon">
					</div>
					<div class="text">
						<h5>Save Time</h5>
						<p> you obtain your order in maximum 48h  </p>
				</li>
				<li>
					<div class="image">
						<img src="images/icon-dashboard.png" alt="feature icon">
					</div>
					<div class="text">
						<h5>Complete Control</h5>
						<p> have the best configurations on your setup </p>
					</div>
				</li>
				<li>
					<div class="image">
						<img src="images/icon-headset.png" alt="feature icon">
					</div>
					<div class="text">
						<h5>24/7 Support</h5>
						<p> our customer are available for you always  </p>
					</div>
				</li>
				<div class="clear"></div>	
			</ul>
		</div>
	</section>
	
	<section class="text-section">	
		<div class="wrapper">
			<div class="image align-right">
				<img src="images/chat-bubbles.png" alt="light bulb" class="align-left" style="margin-top: 60px;">
			</div>
			<div class="text align-right">
				<h3>Let’s Talk</h3>
				<p class="subtitle">We’re here to listen to your needs</p>
				<p>never hesitate to contact us and tell our customer service with your propositions and needs  </p>
				<ul class="list-checkmarks">
					<li>your feedback helps us to grow and evolve </li>
					<li>your satisfaction is our priority </li>
					<li>you can visit our shops in sousse,tunis,sfax</li>
					
				</ul>
			</div>
			<div class="clear"></div>	
		</div>
	</section>
	
	
	
	
	<section class="products-section"><a name="products"></a>
		<h3>Top sales </h3>
		<p class="subtitle">Our most saled products </p>
		
		<ul class="products-list"> 
			<li class="item">
				<a href="images/gojo.jpg" data-featherlight="images/gojo.jpg" class="photo-overlay">
					<img src="images/gojo.jpg" alt="" />
				</a>
			</li> 
			<li class="item">
				<a href="images/fifa22.png" data-featherlight="images/fifa22.png" class="photo-overlay">
					<img src="images/fifa22.png" alt="" />
				</a>
			</li> 
			<li class="item">
				<a href="images/headphone.jpg" data-featherlight="images/headphone.jpg" class="photo-overlay">
					<img src="images/headphone.jpg" alt="" />
				</a>
			</li> 
			<li class="item">
				<a href="images/screen.jpg" data-featherlight="images/screen.jpg" class="photo-overlay">
					<img src="images/screen.jpg" alt="" />
				</a>
			</li> 
			<li class="item">
				<a href="images/pcgamer.png" data-featherlight="images/pcgamer.png" class="photo-overlay">
					<img src="images/pcgamer.png"alt="" />
				</a>
			</li> 
			<li class="item">
				<a href="images/playstation5.jpg" data-featherlight="images/playstation5.jpg"  class="photo-overlay">
					<img src="images/playstation5.jpg" alt="" />
				</a>
			</li> 
			<div class="clear"></div>	
		</ul>
	</section>
	<section class="email-list-section">
		<h3>Subscribe</h3>
		<p class="subtitle">Stay up to date with us</p>
		
		<div class="loginsubs">
			<button id="showLoginForm" type="button" title="Submit" class="button-1">Login</button>
		</div>
		
	</section>
	
	
	<section class="text-section">
		<div class="text align-center">
			<h3>Heard Enough?</h3>
			<p class="subtitle">Let's get started</p>
			<button id="showSigninForm" type="button" title="Submit" class="button-1">Signup</button>
		</div>
	</section>

	<footer>
		<div class="wrapper">
			
			<div class="footer-left">
				<p class="copyright">Copyright 2023 &copy; Gamix</p>
				<p class="footer-links"><a href="#">Contact Us</a> I <a href="#">Terms &amp; Conditions</a> I<a href="#">Privacy</a></p>
			</div>
			<div class="footer-right">
				<a href="#" class="social facebook">Facebook</a>
				<a href="#" class="social twitter">Facebook</a>
				<a href="#" class="social google">Facebook</a>
			</div>
			<div class="clear"></div>
		</div>
	</footer>
</body>
<script>
   
    const showLoginFormButton = document.getElementById("showLoginForm");
    const showSigninFormButton = document.getElementById("showSigninForm");
    const loginSection = document.getElementById("loginSection");
    const signinSection = document.getElementById("signinSection");
	const closeSigninButton = document.getElementById("closeSignin");
    const closeLoginButton = document.getElementById("closeLogin");


    showLoginFormButton.addEventListener("click", function() {
        loginSection.style.display = "block"; 
        signinSection.style.display = "none";
		loginSection.scrollIntoView({ behavior: "smooth" }); 
    });

 
    showSigninFormButton.addEventListener("click", function() {
        signinSection.style.display = "block"; 
        loginSection.style.display = "none"; 
		signinSection.scrollIntoView({ behavior: "smooth" }); 
    });
	closeLoginButton.addEventListener("click", function() {
        loginSection.style.display = "none";
    });

    closeSigninButton.addEventListener("click", function() {
        signinSection.style.display = "none";
    });


</script>
</html>