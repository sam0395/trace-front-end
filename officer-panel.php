<?php
$admin = true;
$position = "treasurer";
$officerpanel=true;

include "header.php";
include "profile-nav-bar.php";
?>

<div class="container">
	<div class="row">

		<div class="col-lg-7 col-sm-6">
			<div class="message-creator"><h1>Message Creator</h1></div>
		</div>
		<div class="col-lg-5 col-sm-6">
			<div class="fixed-view top-pad">
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th>Date</th>

								<th>Meeting Type</th>
								<th># of Members</th>
							</tr>
						</thead>
					
						<tbody>

							<!--PHP CODE GOES HERE-->
							<tr>
								<td>08-25-2015</td>
								<td>Mock Sale</td>
								<td>7</td>
							</tr>
							<tr>
								<td>09-01-2015</td>
								<td>Mock Sale</td>
								<td>6</td>
							</tr>
							<tr>
								<td>09-08-2015</td>
								<td>Mock Sale</td>
								<td>6</td>
							</tr>
							<tr>
								<td>09-15-2015</td>
								<td>Mock Sale</td>
								<td>7</td>
							</tr>
							<tr>
								<td>09-22-2015</td>
								<td>Mock Sale</td>
								<td>7</td>
							</tr>
							<tr>
								<td>09-29-2015</td>
								<td>Mock Sale</td>
								<td>7</td>
							</tr>
							<tr>
								<td>10-06-2015</td>
								<td>Mock Sale</td>
								<td>7</td>
							</tr>
							<tr>
								<td>10-13-2015</td>
								<td>Mock Sale</td>
								<td>7</td>
							</tr>



						</tbody>

					</table>
				</div>
			</div>
		</div>
	</div> 
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-6">
			<div class="view">
				<h3>Paid Members</h3>
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th>Member Name</th>
								<th>Meetings Attended</th>
								<th>Rejection Therapy</th>
								<th>Quick Thinking</th>
								<th>Workshop</th>
								<th>Book Participation</th>
								<th>Eli^2</th>

							</tr>
						</thead>
						
						<tbody>
								<tr>
									<td>Sam Belcastro</td>
									<td>13</td>
									<td>6</td>
									<td>2</td>
									<td>0</td>
									<td>7</td>
									<td>0</td>
								</tr>


						</tbody>
					
					</table>
				</div>
			</div>
			<div class="view">
				<h3>Unpaid Members</h3>
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th>Member Name</th>
								<th>Meetings Attended</th>
								<th>Rejection Therapy</th>
								<th>Quick Thinking</th>
								<th>Workshop</th>
								<th>Book Participation</th>
								<th>Eli^2</th>
								<?php if($position === "treasurer") echo '<th>Upgrade</th>';?>

							</tr>
						</thead>
						<tbody>
								<tr>
									<td>Sam Belcastro</td>
									<td>13</td>
									<td>6</td>
									<td>2</td>
									<td>0</td>
									<td>7</td>
									<td>0</td>
									<?php if($position === "treasurer") echo '<td><div id="upgrade_button" class="btn btn-primary btn-twitter btn-sm"><center><span class="glyphicon glyphicon-arrow-up"></center></span><div></td>'?>
								</tr>


						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</div>   
</div>


</div> 
</div>

<script language="javascript" type="text/javascript" src="dist/js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="dist/js/bootstrap.js"></script>

<?php
include "footer.php";
?>