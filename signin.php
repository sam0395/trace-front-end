<?php 
include 'header.php';
?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-bar"></div>


<div class="signin-container">
	<h1 class="stroke">Society of Sales Engineers</h1>
	<h4>Sign In</h4>
	<br>
	<div class="container">
		<div class="col-lg-2"></div>
		<div class="col-lg-8">
			<form action="sign-in.php" method="post" class="form">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<input class="form-control" name="firstname" placeholder="First Name" type="text"
						required autofocus />
					</div>
				
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
					</div>
				</div>
				<br />
				<input class="form-control" name="email" placeholder="Your Email" type="email" />


				<br />
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input class="form-control register-button input-lg" type="submit" value="Sign In!">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<a href="/"><button class="form-control register-button input-lg" type="button">Return to Login</button></a>
						</div>
					</div>
				</div>
			</form>
			<div class="col-lg-2"></div>



		</div>
	</div>

</div>

<?php
include 'footer.php';
?>