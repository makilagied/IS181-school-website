<?php
 $connection=mysqli_connect("localhost","root","","TWINS");
if($connection == false){
    die("Couldn't connect". mysqli_connect_error());
}


$fname=$_POST['fname'];
$mname=$_POST['mname'];
$sname=$_POST['sname'];
$uname=$_POST['uname'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$cv=$_POST['cv'];
$twitter=$_POST['Twiter'];
$instagram=$_POST['Instagram'];
$facebook=$_POST['facebook'];
$pword=$_POST['pword'];

$sql = "INSERT INTO staff (FirstName,MiddleName,SurName,UserName,Phone,Email,DOB,CV,Twiter,Instagram,Facebook,Passwords) 
VALUES('$fname','$mname','$sname','$uname','$contact','$email','$dob','$cv','$twitter','$instagram','$facebook','$pword')";

if(mysqli_query($connection, $sql)){
    echo"Your records have been successfully added . you are now redirected to the loging page...........<br>";
    echo"IF IT TAKES LONG TIME CLICK ";?> <a href=" ../register.php">HERE</a><?php
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}



?>