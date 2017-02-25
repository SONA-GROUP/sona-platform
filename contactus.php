<?php 
	include("includes/navheader.php");
?>
<div class="body-section">
	<div class="section">
		<div class="card card-lg card-topBottom-border border-blue">
			<h3>Reach out To US</h3>
			<hr>
			<form>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="">Fullname</label>
							<input type="text" class="custom-input" placeholder="enter your name  " required>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="">E-mail</label>
							<input type="email" class="custom-input" placeholder="email Address " required>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="">Subject</label>
					<input type="text" class="custom-input" placeholder="cc:  " required>
				</div>
				<div class="form-group">
					<label for="">Message</label>
					<textarea class="form-control" rows="10"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-green btn-effect">Send Message</button>
				</div>
				

			</form>
			
		</div>
	</div>
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
</body>
</html>	