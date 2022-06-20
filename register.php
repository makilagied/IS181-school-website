<!DOCTYPE html>
<?php
  session_start();
  if(!empty($_SESSION['uname']))
    header('Location: finalreg.php');
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
          <form  class="form1" action="php/login.php" method="POST" >
            <h1 class="page-title"> School Portal</h1>
            <div>
                <input type="text" name="uname" placeholder="Enter your Username" id="uname">
                <?php
                  // if($_SESSION['error']) {
                  //   echo "<p class='error'>Wroung Username/Password</p>";
                  // }
                ?>
                <input type="password" name="pword" placeholder="Password" id="pword">
            
            
              </div>
              <input type="submit" name="submit" value="LOGIN" id="btn">
            
            </div>
          </form>
          <p align="center"><i> STAFF! click <a href="staffportal.html" >here</a> to register if you don't have an account</i></p>
          
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
