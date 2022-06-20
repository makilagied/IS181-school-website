<?php
 $connection=mysqli_connect("localhost","root","","TWINS");
if($connection == false){
    die("Couldn't connect". mysqli_connect_error());
}


$fname=$_POST['fname'];
$mname=$_POST['mname'];
$sname=$_POST['sname'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$occupation=$_POST['ocupation'];
$address=$_POST['address'];
$yoe=$_POST['yoe'];
$hos1=$_POST['hos1'];
$yog=$_POST['yog'];
$hos2=$_POST['hos2'];
$famous=$_POST['famous'];
$result=$_POST['result'];
$pword=$_POST['pword'];



$sql = "INSERT INTO alumni (firstName,midleName,surName,phone,email,occupation,currentAddress,YoE,headE,YoG,headG,FamousTeacher,Results,PassWords) 
VALUES('$fname','$mname','$sname','$contact','$email','$occupation','$address','$yoe','$hos1','$yog','$hos2','$famous','$result','$pword')";

if(mysqli_query($connection, $sql)){
    echo"Your records have been successfully added . you are now redirected to the loging page...........";
    echo"IF IT TAKES LONG TIME CLICK ";?> <a href=" ../register.php">HERE</a><?php
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}



?>


