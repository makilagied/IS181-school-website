<?php
 session_start();
 $connection=mysqli_connect("localhost","root","","TWINS");
if($connection == false){
    die("Couldn't connect". mysqli_connect_error());
}



if(isset($_POST['submit'])) {
  $uname=$_POST["uname"];
  $password=$_POST["pword"];
  $query = "SELECT * FROM staff WHERE userName='$uname' AND passwords='$password'";
		$run = mysqli_query($connection,$query);
		if (mysqli_num_rows($run)>0) {
			$_SESSION['uname'] = $uname;
			header('location: ../finalreg.php');
		}else{
      $_SESSION['error'] = "INVALID CREDENTIALS.";
			header('location: ../register.php');
		}

  echo $result;
}





