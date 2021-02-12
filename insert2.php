<?php

include("connect.php");

if(isset($_POST['Submit'])) {

$fname = mysqli_real_escape_string($conn,$_POST['fname']);

$password =mysqli_real_escape_string($conn,$_POST['password']);

$birthmonth =mysqli_real_escape_string($conn,$_POST['birthmonth']);

$birthyear =mysqli_real_escape_string($conn,$_POST['birthyear']);

$gender = mysqli_real_escape_string($conn,$_POST['gender']);

$country = mysqli_real_escape_string($conn,$_POST['country']);


$sql = "INSERT INTO students SET Fullname='$fname',

password='$password', birthmonth='$birthmonth', birthyear='$birthyear', gender='$gender', country='$country'";

$query = mysqli_query($conn,$sql) or die("Cannot query the

database.<br>" . mysqli_error($conn));


             echo "<script>";

                echo"window.alert('Database Updated.!')";
 
                   echo "</script>";

                         header("refresh:0.000000000001,url=students.php");



}
 

?>
<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	

<div class="container">
	<h1>Student Registration</h1>

	<div class="container-fluid">
		<div class="body">
		<form>
<div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputEmail4">Full name</label>
      <input type="text" class="form-control" id="inputEmail4">
    </div>

  
  </div>
  <div class="row">
    <div class="form-group col-md-4">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>

    <div class="form-group col-md-4">
      <label for="inputPassword4">Conf.Pwd</label>
       <input type="password" class="form-control" id="inputPassword4">
    </div>
  </div>

   <div class="row">
    <div class="form-group col-md-4">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>

    <div class="form-group col-md-4">
      <label for="inputPassword4">BirthMonth</label>
       <input type="password" class="form-control" id="inputPassword4">
    </div>
  </div>
  
   <div class="row">
    <div class="form-group col-md-4">
      <label for="inputPassword4">BirthYear</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>

    <div class="form-group col-md-4">
      <label for="inputPassword4">Gender</label>
       <input type="password" class="form-control" id="inputPassword4">
    </div>
  </div>
 
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
		</div>
	</div>
</div>


<script src="assets/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>

<?php


?>
