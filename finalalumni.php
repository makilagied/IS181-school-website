<!DOCTYPE html>
<?php 
    session_start();

    if(!$_SESSION['sname']) {
        header('location: alumni.php');
    }
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Twins Sec School. Ordinar Level School that provides proper education for your child, welcome.">
	  <meta name="keywords" content="School,olevel,education,twins,seconary">
  	<meta name="author" content="makilagied">
    <title>TWINS SEC | register </title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="../img/favicon.png">
    <style>
      a{
        text-decoration:none;
        font-weight: bold;
        color: brown;
        float:right;
      }
      
     
    </style>
  </head>
  <body>
    <header >
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">TWINS SECONDARY SCHOOL</span> </h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li ><a href="register.php">Register</a></li>
            <li class="current"><a href="alumni.html">Alumni</a></li>
            <li><a href="staff.html">Staff</a></li>
            <li><a href="contacts.html">Contacts</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <section id="main">
        <div class="container">
        <?php
            if(!empty($_SESSION['sname'])){
              echo '<div class="button"><a href="logout.php">logout</a></div>';
            }
          ?>
            <div>
            <p>WELCOME <b> <?=$_SESSION['sname'] ?></b> these are your fellow Alumnies</p>
            </div>
            <div>
            <?php
 $conn = mysqli_connect("localhost", "root", "", "TWINS");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
$query = "SELECT firstName, midleName, surName, phone, email, occupation, currentAddress,YoE, headE,YoG, headG, FamousTeacher,Results FROM alumni";
$result = mysqli_query($conn, $query);
?>
<table border ="1" cellspacing="0" cellpadding="8">
  <tr>
    <th>S.N</th>
    <th>Full Name</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Occupation</th>
    <th>Address</th>
    <th>Year Enrolled</th>
    <th>Head of School</th>
    <th>Year Graduated</th>
    <th>Head of School</th>
    <th>Famous Teacher</th>
    <th>NECTA results</th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['firstName']." " .$data['midleName'] ." " .$data['surName']; ?> </td>
   <td><?php echo $data['phone']; ?> </td>
   <td><?php echo $data['email']; ?> </td>
   <td><?php echo $data['occupation']; ?> </td>
   <td><?php echo $data['currentAddress']; ?> </td>
   <td><?php echo $data['YoE']; ?> </td>
   <td><?php echo $data['headE']; ?> </td>
   <td><?php echo $data['YoG']; ?> </td>
   <td><?php echo $data['headG']; ?> </td>
   <td><?php echo $data['FamousTeacher']; ?> </td>
   <td><?php echo $data['Results']; ?> </td>
 <tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="12">No data found</td>
    </tr>

 <?php } ?>
 </table
       


            </div>
      
        
          
        </div>
      </section>
      

    <footer>
      <div id="boxes">
        <div class="container">
          <div class="box box-links">
            <h3>Important Links</h3>
            <ul class="links">
              <li><a href="nacte.go.tz">NACTE</a></li>
              <li><a href="tamisemi.go.tz">TAMISEMI</a></li>
              <li><a href="necta.go.tz">NECTA</a></li>
              <li><a href="tie.go.tz">TIE</a></li>
              <li><a href="tcu.go.tz">TCU</a></li>
            </ul>
            </div>
          <div class="box box-links">
            <h3>Social Medias</h3>
            <ul  class="links">
              <li><a href=" ">Facebook</a></li>
              <li><a href=" ">WhatsApp</a></li>
              <li><a href=" ">Linkedin</a></li>
              <li><a href=" ">Twiter</a></li>
              <li><a href=" ">Instagram</a></li>
            </ul></div>
          <div class="box box-links">
            <h3>Our Partiners and sponsers</h3>
            <ul  class="links">
              <li><a href=" ">NBC</a></li>
              <li><a href=" ">CRDB</a></li>
              <li><a href=" ">Heritage Schools</a></li>
              <li><a href=" ">FEZA Schools</a></li>
              <li><a href=" ">UKAID</a></li>
            </ul></div>
        </div>
      </div>
    <div><p id="ls">Designed by makilagied, Copyright &copy; 2022</p></div>
  </footer>
  </body>
</html>
