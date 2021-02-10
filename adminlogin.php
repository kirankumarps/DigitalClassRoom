<?php include('allhead.php'); ?>
<style>
img
{
	position:fixed;
	z-index:-1;
	width:1400px;
	opacity:0.4;
}
</style>
<img src="images/a.png">
<div class="container">
	<div class="row">
	</div>
	<div class="row">
		<div class="col-md-5">
			<fieldset>
				<legend>
					<h3 style="padding-top: 25px;"><span class="glyphicon glyphicon-lock"></span>&nbsp;Admin Login</h3>
				</legend>
				<!-- Admin login form -->
				<form name="adminlogin" action="loginlinkadmin.php" method="POST" style="margin-left:100px">
					<div class="control-group form-group">
						<div class="controls">
							<label>Admin Id:</label>
							<input type="text" class="form-control" name="aid" style="width:180px;">
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Passsword:</label>
							<input type="password" class="form-control" name="apass" style="width:180px;">
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