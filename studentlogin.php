<style>
img
{
	position:fixed;
	z-index:-1;
	opacity:0.5;
	margin-left:400px;
}
</style>
<img src="images/student.png">
<?php include('allhead.php'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<!-- Stdeunt login page -->
			<fieldset>
				<legend>
					<h3 style="padding-top: 25px;"><span class="glyphicon glyphicon-lock"></span>&nbsp;  Student Login</h3>
				</legend>
				<form name="studentlogin" action="loginlinkstudent" method="POST">
					<div class="control-group form-group">
						<div class="controls">
							<label>Email Id:</label>
							<input type="text" class="form-control" name="sid" required style="width:200px">
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Passsword:</label>
							<input type="password" class="form-control" name="pass" required style="width:200px">
							<p class="help-block"></p>
						</div>
					</div>
					<center>
						<button type="submit" name="login" class="btn btn-primary" style="
background-color: #EEFE2A;color:black;
border-color: #D21B1B;">Login</button>
						<button type="reset" class="btn btn-primary" style="
background-color: #E52727;
border-color: #D21B1B;">Reset</button>
					</center>
			</fieldset>
			</form>
		</div>
	</div>
	<?php include('allfoot.php'); ?>