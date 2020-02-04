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
    <title>OwlSight - Flexible Issue Tracker</title>
  </head>
                                <!-- BODY  -->
  <body>
    <div class="Sign-in">
    <h3><a href="login.php">Sign in</a></h3>
    </div>
    <div class="topbg">
      <div id="content">
        <section id="section1">
          <div class="OwlsightPres">
            <h2 data-aos="slide-left">OwlSight</h2>
            <p>Clean. Efficient.<br>Track your bugs.</p>
          </div>
        </section>
        <section id="section2" data-aos="flip-left" data-aos-delay="500">
          <div class="Performant">
            <h2>Simple as can be</h2>
            <p>New decade, New look, New <b>YOU</b> <br> Why not try <b>OwlSight Issue Tracker</b> ?</p>
          </div>
        </section>
      </div>
    <div class="midbg">
    <div class="bottombg">
    </div>
    </div>
    </div>
  </body>


                            <!-- JAVASCRIPT  -->
  <script src="js/aos.js"></script>
  <script type="text/javascript">
		AOS.init({duration:1200,});
	</script>
</html>
