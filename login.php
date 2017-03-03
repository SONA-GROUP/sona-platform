<?php
	include("includes/navheader.php");

?>
<div class="body-section">
	<div class="container">
		<div class="section">
			<div class="login-box">
				<h4 class="text-center ">Login Here</h4>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						<button class="btn facebook-login">
							<i class="fa fa-facebook"></i>
							<p>Continue With Facebook Account</p>
						</button>
					</div>
					<div class="col-sm-6">
						<button class=" btn google-login">
							<i class="fa fa-google"></i>
							<p>Continue With Google Account</p>
						</button>
					</div>
				</div>
				<br>
				<form>

					<div class="form-group">
						<label>E-mail / Username</label>
						<input type="text" name="" class="custom-input">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="" class="custom-input">
					</div>
					<spam><a href="#">Forget Password?</a></spam>
					<div class="form-group">
						<label>
							<input type="checkbox">
							keep me signed in... 
						</label>
					</div>
					<div class="form-group">
						
						<input type="submit" name="" class="btn btn-green" value="Login">
					</div>
					<spam>Don't have an account yet sign up <a href="signup.php">here</a></spam>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>