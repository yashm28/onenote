<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>oneNOTES | SignIn</title>
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
	        <h3>Sign In </h3>
	     <form>
				<div class="row">
				    <div class="large-12 columns">
				      <label>Username*</label>
				      <input type="text" placeholder="Username" />
				    </div>
				</div>
				<div class="row">
				    <div class="large-12 columns">
				      <label>Password*</label>
				      <input type="password" placeholder="Password" />
				    </div>
				</div>
				</form>   
	    <a href="#" class="medium success button">Sign In</a>
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
