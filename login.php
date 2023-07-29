<?php
include 'includes/header.inc.php'

?>
<div class="col-sm-4"></div>

<div class="col-sm-4">
	
		<form method= "post" >
		  <div class="form-group">
		  	<h3 style="margin-bottom: 50px; font: 30px bold; color: green" >LOGIN FORM</h3>
		    <label >Email address:</label>
		    <input type="text" class="form-control" id="email" name="username">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" name="password" id="pwd">
		  </div>
		  
		  <input  type="submit" name = "submit" value="submit" class="btn btn-success">
		 
		</form>


</div>
<div class="col-sm-4"></div>
<?php
							include('includes/connect.php');
							
							if(isset($_POST['submit']))
							{
							
							$username=$_POST['username'];
							$password=sha1($_POST['password']);
							$pass = sha1($_POST['password']);
								$sqla="SELECT * FROM admin WHERE ademail = '$username' AND pass = '$password'";
								$sql_user = "SELECT * FROM staff WHERE s_email = '$username' AND pass = '$pass' " ;
								$sql_applicant = "SELECT * FROM staff WHERE s_email = '$username' AND pass = '$pass' " ;

								$result = mysqli_query($conn,$sqla) or die(mysqli_error($conn));
								$result_user = mysqli_query($conn,$sql_user) or die(mysqli_error($conn));
								$result_applicant = mysqli_query($conn,$sql_applicant) or die(mysqli_error($conn));
							
								$row = mysqli_fetch_array($result);
								$row_user = mysqli_fetch_array($result_user);
								$row_applicant = mysqli_fetch_array($result_applicant);
								$numberOfRows = mysqli_num_rows($result);	
								$numberOfRows_user = mysqli_num_rows($result_user);	
								$numberOfRows_applicant = mysqli_num_rows($result_applicant);	

																
						if ($numberOfRows > 0)	{
																		session_start();
																	$_SESSION['id'] = $row['aid'];
																
																header("Location:admin/students.php");
																
				}else if ($numberOfRows_user>0) {
																unset($_SESSION['id']);
																session_start();
																$_SESSION['uid'] = $row_user['staffid'];
																header("Location:applicant.php");
															}else if ($numberOfRows_applicant>0){
																unset($_SESSION['uid']);
																session_start();
																$_SESSION['sid'] = $row_applicant['st_id'];
																$get_id = $row_applicant['st_id'];

																header('Location:applicant_page.php'."?applicant=$get_id");
															}else{
															
																echo " <br><center><font color= 'red' size='3'>Invalid Username or Password </center></font>";
																echo sha1('admin');
															}
							
							}
							?>
	


