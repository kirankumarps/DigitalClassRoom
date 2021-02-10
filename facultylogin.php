<style>
img
{
	position:fixed;
	z-index:-1;
	width:1400px;
	opacity:0.4;
}
</style>
<img src="images/te.png">
<?php include('allhead.php'); ?> 
 </nav>
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<fieldset>
				<!-- Faculty login page -->
				<legend>
					<h3 style="padding-top: 25px;"><span class="glyphicon glyphicon-lock"></span>&nbsp;  Faculty Login</h3>
				</legend>
				<form name="facultylogin" action="loginlinkfaculty" method="POST" style="margin-left:150px;">
					<div class="control-group form-group">
						<div class="controls">
							<label>Faculty ID:</label>
							<input type="text" class="form-control" name="fid" required data-validation-required-message="Please enter your Faculty Id.">
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Passsword:</label>
							<input type="password" class="form-control" name="pass" required data-validation-required-message="Please enter your password.">
							<p class="help-block"></p>
						</div>
					</div>
					<center>
						<button type="submit" class="btn btn-primary" style="
    background-color: #EEFE2A;color:black;
    border-color: #D21B1B;" >Login</button>
						<button type="reset" class="btn btn-primary" style="
    background-color: #E52727;
    border-color: #D21B1B;">Reset</button>
					</center>
			</fieldset>
			</form>
		</div>
	</div>
	<?php include('allfoot.php'); ?>