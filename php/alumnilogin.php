<?php
 session_start();
 $connection=mysqli_connect("localhost","root","","TWINS");
if($connection == false){
    die("Couldn't connect". mysqli_connect_error());
}



if(isset($_POST['submit'])) {
  $sname=$_POST["sname"];
  $pword=$_POST["pword"];
  $query = "SELECT * FROM alumni WHERE surName='$sname' AND PassWords='$pword'";
		$run = mysqli_query($connection,$query);
		if (mysqli_num_rows($run)>0) {
			$_SESSION['sname'] = $sname;
			header('location: ../finalalumni.php');
		}else{
      $_SESSION['error'] = "INVALID CREDENTIALS.";
			header('location: ../alumni.php');
		}

  echo $result;
}





