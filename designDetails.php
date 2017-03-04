<?php
	include("includes/navheader.php");
?>
<div class="body-section">
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="row">
						<div class="col-xs-8 col-sm-8">
							<div class="image-view">
								<img src="images/design1.jpg" class="image-viewer img-thumbnail img-responsive">
							</div>
						</div>
						<div class=" col-xs-4 col-sm-4">
							<div class="row">
								<img src="images/design1.jpg" class="images img-thumbnail img-responsive">
							</div>
							<div class="row">
								<img src="images/design2.jpg" class="images img-thumbnail img-responsive">
							</div>
							<div class="row">
								<img src="images/design3.jpg" class="images img-thumbnail img-responsive">
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="col-xs-12 col-sm-6">
					<div class="card card-left-border border-blue">
						<h3 class="design-name">Men's Solid Casual Shirt</h3>
						<spam class="design-price">#20,000</spam>
						<br>
						<h4>Description</h4>
						<p class="design-details"> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<div class="section">
							<button class="btn btn-orange btn-sm" data-toggle="modal" data-target="#measurement-modal">
								Order
							</button>
						</div>
						<div class="section">
							<p class="tags">Tags: 
								<spam class="label label-primary">T-shirts</spam>
								<spam class="label label-info">Office</spam>
								<spam class="label label-warning">Casual</spam>
								<spam class="label label-danger">Custom</spam>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section related-design-box">
		<div class="container">
				<h1 class="text-center">Related Designs</h1>
				<hr>
			<!-- grid section --> 
			<div class="row">
				<div class="col-xs-12 col-md-3 col-sm-3 col-lg-3">
					<div class="product-container">
						<div class="product-image-box">
							<img src="images/12.jpg" class="img-responsive product-image">
						</div>
						<div class="product-discrib">
							<p>
								Lorem ipsum dolor 
							</p>
							<a href="designDetails.php" class="btn btn-orange btn-sm">View Details</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-3 col-sm-3 col-lg-3">
					<div class="product-container">
						<div class="product-image-box">
							<img src="images/12.jpg" class="img-responsive product-image">
						</div>
						<div class="product-discrib">
							<p>
								Lorem ipsum dolor 
							</p>
							<a href="designDetails.php" class="btn btn-orange btn-sm">View Details</a>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-md-3 col-sm-3 col-lg-3">
					<div class="product-container">
						<div class="product-image-box">
							<img src="images/12.jpg" class="img-responsive product-image">
						</div>
						<div class="product-discrib">
							<p>
								Lorem ipsum dolor 
							</p>
							<a href="designDetails.php" class="btn btn-orange btn-sm">View Details</a>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-md-3 col-sm-3 col-lg-3">
					<div class="product-container">
						<div class="product-image-box">
							<img src="images/12.jpg" class="img-responsive product-image">
						</div>
						<div class="product-discrib">
							<p>
								Lorem ipsum dolor 
							</p>
							<a href="designDetails.php" class="btn btn-orange btn-sm">View Details</a>
						</div>
					</div>
				</div>
			</div>
			<!-- grid section  ends-->
		</div>
	</div>
	 <?php
		include("includes/footer.php");

	?>
</div>
<div class="modal fade" id="measurement-modal">
  <div class="modal-dialog measurement-box" role="document">
    <div class="modal-content border-radius-zero modal-position-down ">
      <div class="modal-header">
        <h5 class="modal-title">Enter your measurement detalis here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function()
{
	$('.images').on('click', function()
	{
		var image_link = $(this).attr('src');
		console.log(image_link);
		$('.image-viewer').slideDown(5000).attr('src',image_link);
	});
})		

</script>
</body>
</html>