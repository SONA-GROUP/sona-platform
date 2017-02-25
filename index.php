<?php
	
	include("includes/navheader.php");

?>
<div class="body-section">
	<!-- slider section -->
	<div id="slider-section">
		<div class="btn-place-middle">
			<button class="btn btn-default trigger-request-modal">make a Request now</button>
		</div>
	</div>
	<!-- slider section  ends..-->

	<!-- product display section -->
	<div class="product-display-section">
		<div class="product-search">
			<form class="form-horizontal">
				<input type="text" class="form-control search-form-input" placeholder="Serach For Design">
			</form>
		</div>
		<div class="container">
			<!-- grid section --> 
			<div class="row">
				<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4">
					<div class="product-container">
						<div class="product-image-box">
							<img src="images/15.jpg" class="img-responsive product-image">
						</div>
						<div class="product-discrib">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							</p>
							<button class="btn btn-orange btn-sm">request</button>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4">
					<div class="product-container">
						<div class="product-image-box">
							<img src="images/15.jpg" class="img-responsive product-image">
						</div>
						<div class="product-discrib">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							</p>
							<button class="btn btn-orange btn-sm">request</button>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4">
					<div class="product-container">
						<div class="product-image-box">
							<img src="images/15.jpg" class="img-responsive product-image">
						</div>
						<div class="product-discrib">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							</p>
							<button class="btn btn-orange btn-sm">request</button>
						</div>
					</div>
				</div>
			</div>
			<!-- grid section  ends-->

				<!-- grid section --> 
			<div class="row">
				<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4">
					<div class="product-container">
						<div class="product-image-box">
							<img src="images/15.jpg" class="img-responsive product-image">
						</div>
						<div class="product-discrib">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							</p>
							<button class="btn btn-orange btn-sm">request</button>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4">
					<div class="product-container">
						<div class="product-image-box">
							<img src="images/15.jpg" class="img-responsive product-image">
						</div>
						<div class="product-discrib">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							</p>
							<button class="btn btn-orange btn-sm">request</button>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4">
					<div class="product-container">
						<div class="product-image-box">
							<img src="images/15.jpg" class="img-responsive product-image">
						</div>
						<div class="product-discrib">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							</p>
							<button class="btn btn-orange btn-sm">request</button>
						</div>
					</div>
				</div>
			</div>
			<!-- grid section  ends-->
			<ul class="pagination right">
				<li><a href="#">&laquo;</a></li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">&raquo;</a></li>
			</ul>
		</div>
	</div>
	<!-- product display section ends.. -->

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class=" col-xs-12 col-md-6 col-sm-6 col-lg-6">
					<div class="footer-grids">
						<h3>About Us</h3>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse.<span>Excepteur sint occaecat cupidatat 
							non proident, sunt in culpa qui officia deserunt mollit.</span></p>
					</div>		
				</div>
				<div class=" col-xs-12 col-md-6 col-sm-6 col-lg-6  ">
					<div class="footer-grids">
						<h3>Contact Info</h3>
						<ul>
							<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
						</ul>
					</div>
				</div>
					</div>
				</div>
				<div class="clearfix"> </div>
		</div>
</div>

<!-- Modal  login -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content modal-content-form">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
				<h4 class="modal-title" id="myModalLabel">
					Login
				</h4>
			</div>
			<div class="modal-body">
				<form class="form" id="login-form"> 
					<div class="form-group">
						<label for="">Username / E-mail</label>
						<input type="text" class="custom-input" placeholder="enter your username or email " required>
					</div>	
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="custom-input" placeholder="" required>
					</div>
					<div class="forgot">
							<a href="#">Forgot Password?</a>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn  btn-orange btn-full" form="login-form" >
					Login 
				</button>
			</div>
		</div><!-- /.modal-content -->
	</div>
</div><!-- /.modal login ends..-->

<!-- Modal  register -->
<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content modal-content-form">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
				<h4 class="modal-title" id="myModalLabel">
					SignUP
				</h4>
			</div>
			<div class="modal-body">
				<form class="form" id="signup-form"> 
					<div class="form-group">
						<label for="">Fullname</label>
						<input type="text" class="custom-input" placeholder="enter your name  " required>
					</div>	
					<div class="form-group">
						<label for="">Username / E-mail</label>
						<input type="text" class="custom-input" placeholder="enter your email " required>
					</div>	
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="custom-input" placeholder="" required>
					</div>
					<div class="form-group">
						<label for="password">Confirm Password</label>
						<input type="password" class="custom-input" placeholder="" required>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn  btn-orange btn-full" form="signup-form" >
					SignUp
				</button>
			</div>
		</div><!-- /.modal-content -->
	</div>
</div>
<!-- Modal register ends ... -->
<script>
	window.onLoad = setInterval(slider,5000);	
	function getRandomInt(min, max) {
		min = Math.ceil(min);
  		max = Math.floor(max);
  		return Math.floor(Math.random() * (max - min)) + min;
	}
			
	function slider()
	{
		var link = "url('images/" +getRandomInt(1,15)+ ".jpg')";
		var slider = document.getElementById("slider-section");
		slider.style.backgroundImage = link;
	}	
</script>
</body>
</html>