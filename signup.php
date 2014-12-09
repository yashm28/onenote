<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>oneNOTES | SignUp</title>
    <link rel="stylesheet" href="foundation/css/foundation.css" />
    <script src="foundation/js/vendor/modernizr.js"></script>
  </head>
  <body>
  <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="index.php">oneNOTES</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>
  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
	  <li><a href="signin.php">Sign In</a></li>
      <li class="has-dropdown">
        <a href="#">New?</a>
        <ul class="dropdown">
          <li><a href="#">ABOUT</a></li>
		  <li><a href="#">Help</a></li>
          <li class="active"><a href="signup.php">Sign Up</a></li>
        </ul>
      </li>
	  <li class="active"><a href="signup.php">Sign Up</a></li>
	  <li class="active"><a href="#">Feedback</a></li>
    </ul>

    <!-- Left Nav Section -->
    <ul class="left">
      <li><a href="index.php">Home</a></li>
    </ul>
  </section>
</nav>
    <center>
    <div class="row">
      <div class="large-12 columns">
      	<div class="panel">
	        <h3>Sign Up! </h3>
	     <form>
				  <div class="row">
				    <div class="large-12 columns">
				      <label>Name*</label>
				      <input type="text" placeholder="First Name                      Middle Name                          Last Name" />
				    </div>
				  </div>
				  <div class="row">
				    <div class="large-4 medium-4 columns">
				      <label>Username*</label>
				      <input type="text" placeholder="Username" />
				    </div>
				    <div class="large-4 medium-4 columns">
				      <label>Password*</label>
				      <input type="password" placeholder="Password" />
				    </div>
					<div class="large-4 medium-4 columns">
				      <label>Confirm Password*</label>
				      <input type="password" placeholder="Confirm Password" />
				    </div>
				<div>
				<div class="row">
					<div class="large-4 medium-4 columns">
				      <label>City</label>
				      <input type="text" placeholder="City" />
				    </div>
				    <div class="large-4 medium-4 columns">
				      <label>Phone</label>
				      <input type="password" placeholder="Phone/(ISD CODE)Telephone" />
				    </div>
				    <div class="large-4 medium-4 columns">
				      <div class="row collapse">
				        <label>Email</label>
				        <div class="small-9 columns">
				          <input type="text" placeholder="Email" />
				        </div>
				        <div class="small-3 columns">
				          <span class="postfix">.com</span>
				        </div>
				      </div>
				    </div>
				  </div>
				  <div class="row">
				    <div class="large-12 columns">
				      <label>Address</label>
				      <textarea placeholder="Postal Address with PINCODE"></textarea>
				    </div>
				  </div>
				</form>   
	    <a href="#" class="medium success button">Sign Up!</a>
      	</div>
      </div>
    </div>
	</center>
    </div>
    <script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
