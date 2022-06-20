<!DOCTYPE html>
<?php 
    session_start();

    if(!$_SESSION['uname']) {
        header('location: register.php');
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
            <li class="current"><a href="register.php">Register</a></li>
            <li ><a href="alumni.php">Alumni</a></li>
            <li><a href="staff.html">Staff</a></li>
            <li><a href="contacts.html">Contacts</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <section id="main">
        <div class="container">
          <div>
          <p>WELCOME <b> <?=$_SESSION['uname'] ?></b> these are your fellow staff</p>
          </div>
      
          <?php
             if(!empty($_SESSION['uname'])){
              echo '<div class="button"><a href="logout.php">logout</a></div>';
            }
          ?>
<table border ="1" cellspacing="0" cellpadding="8">
  <tr>
    <th>S.N</th>
    <th>Full Name</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Birth Year</th>
    <th>Social Medias</th>
  </tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "TWINS");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
$query = "SELECT * FROM staff";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['FirstName']." " .$data['MiddleName'] ." " .$data['SurName']; ?> </td>
   <td><?php echo $data['Phone']; ?> </td>
   <td><?php echo $data['Email']; ?> </td>
   <td><?php echo $data['DOB']; ?> </td>
   <td><?php echo $data['Twiter']; ?> </td>
   
  </tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="6">No data found</td>
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
