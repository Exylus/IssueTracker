<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: home.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
                                <!-- head -->
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    	<link rel="stylesheet" href="css/aos.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>OwlSight - Flexible Issue Tracker</title>
  </head>
                                <!-- BODY  -->
  <body>
    <header>
      <h1 data-aos-delay = "300" data-aos = "zoom-out">OwlSight</h1>
      <div class="Sign-in" data-aos-delay = "3000" data-aos = "zoom-in">
      <a class='btn btn-link' href="login.php"><h3>Sign in</h3></a>
      </div>
    </header>
    <div class="topbg">
      <div id="content">
        <section id="section1">
          <div class="OwlsightPres">
            <h2 data-aos="slide-left">Flexible Issue Tracker</h2>
            <h4>Clean. Efficient.<br><strong>Track your bugs.</strong></h4>
          </div>
        </section>
        <section id="section2" data-aos="flip-left" data-aos-delay="500">
          <div class="Performant">
            <h2>Simple as can be</h2>
            <p>New decade, New look, New <b>YOU</b> <br> Why not try <b>OwlSight Issue Tracker</b> ?</p>
          </div>
        </section>
      </div>
    </div>
    <div class="midbg">
      <section id="section3" class="aos">
  			<article class="bloc" data-aos="flip-left" id="left">
  				<h2>Designed for usability</h2>
  				<h3>Back to what's needed. Powerfully clever.</h3>
  				<p>
  					OwlSight keeps track of any project, issue you might have.
            Clear display of what is needed to be done.
  				</p>
  			</article>
  		</section>
  		<section id="section4" class="aos">
  			<article class="bloc" data-aos="slide-down">
  				<h2>Astonishing UI</h2>
  				<h3>A web application so smooth softwares would only dream of it.</h3>
  				<h4>The best of Issue and Bug Tracking with a crisp clean interface. Improved.</h4>
  			</article>
  		</section>
    </div>
    <div class="bottombg">
    </div>
    <div class="clear">

    </div>
    <footer>
      <div class="up" id="up">
        <i class="fas fa-chevron-up"></i>
      </div>
      <p>&copy; 2019-2020 Erwan Thomy</p>
    </footer>
  </body>


                            <!-- JAVASCRIPT  -->
  <script src="js/aos.js"></script>
  <script type="text/javascript">
		AOS.init({duration:1200,});
	</script>
</html>
