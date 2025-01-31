<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=adan_localhost', 'adan', '728103093AAmm!');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Index</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="blog, business, clean, clear, cooporate, creative, design web, flat, marketing, minimal, portfolio, shop, shopping, unique">
    <meta name="author" content="PISEN | Deer Creative Theme">
    <link rel="stylesheet" href="\assets/css/style.css">
    <link rel="stylesheet" href="\assets/css/slick.css">
    <link rel="stylesheet" href="\assets/css/jquery-ui.css">
    <link rel="stylesheet" href="\assets/css/custom_bootstrap.css">
    <link rel="stylesheet" href="\assets/css/fontawesome.css">
    <link rel="stylesheet" href="\assets/css/elegant.css">
    <link rel="stylesheet" href="\assets/css/plyr.css">
    <link rel="stylesheet" href="\assets/css/aos.css">
    <link rel="stylesheet" href="\assets/css/animate.css">
    <link rel="stylesheet" href="\assets/css/themify-icons.css">
    <link rel="shortcut icon" href="\assets/images/shortcut_logo.png">
<!--===============================================================================================-->
	<link rel="icon" type="Finalist/image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
  </head>
  <body>
    <div id="main">
      <header>
        <div class="header-wrapper">
          <div class="container">
            <div class="header-menu">
              <div class="row no-gutters align-items-center justify-content-center">
                <div class="col-4 col-md-2"><a class="logo" href="\index.html"><img src="\assets/images/Adan.png" alt="logo"></a></div>
                <div class="col-8 col-md-8">
                  <div class="mobile-menu"><a href="#" id="showMenu"><i class="fas fa-bars"></i></a></div>
                  <nav class="navigation">
                    <ul>
                      <li class="nav-item"><a class="pisen-nav-link active" href="\index.html">Home</a><i class="submenu-opener fas fa-plus"></i>
                      <li class="nav-item"><a class="pisen-nav-link" href="\Produkte/Produkte.html">Produkte</a><i class="submenu-opener fas fa-plus"></i>
                          <li class="nav-item"><a class="pisen-nav-link" href="\shop_checkout.html">Kasse</a><i class="submenu-opener fas fa-plus"></i>
                      </li>
                      </li>
                      <li class="nav-item"><a class="pisen-nav-link" href="\about_us.html">Uber uns</a></li>

                    </ul>
                  </nav>
                </div>

                <div class="col-0 col-xl-2">
                  <div class="menu-function">
                    <div class="social-contact"><a href="login.php"><i class="fas fa-user"></i></a></div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </header><!--End header-->

      <?php
      $showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll

      if(isset($_GET['register'])) {
          $error = false;
          $vorname = $_POST['vorname'];
          $nachname = $_POST['nachname'];
          $email = $_POST['email'];
          $passwort = $_POST['passwort'];
          $passwort2 = $_POST['passwort2'];

          if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              echo 'Bitte Füllen Sie die Formular aus<br>';
              $error = true;
          }
          if(strlen($passwort) == 0) {
              echo '';
              $error = true;
          }
          if($passwort != $passwort2) {
              echo 'Die Passwörter müssen übereinstimmen<br>';
              $error = true;
          }

          //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
          if(!$error) {
              $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
              $result = $statement->execute(array('email' => $email));
              $user = $statement->fetch();

              if($user !== false) {
                  echo 'Diese E-Mail-Adresse ist bereits vergeben<br>';
                  $error = true;
              }
          }

          //Keine Fehler, wir können den Nutzer registrieren
          if(!$error) {
              //$passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);
              $passwort_hash = password_hash($passwort, PASSWORD_BCRYPT);

              $statement = $pdo->prepare("INSERT INTO users (email, passwort, vorname, nachname) VALUES (:email, :passwort, :vorname, :nachname)");
              $result = $statement->execute(array('email' => $email, 'passwort' => $passwort_hash, 'vorname' => $vorname,'nachname' => $nachname));

              if($result) {
                  echo 'Du wurdest erfolgreich registriert. <a href="login.php">Zum Login</a>';
                  $showFormular = false;
              } else {
                  echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
              }
          }
      }

      if($showFormular) {
      ?>
      <!--
         <div class="limiter">
          <div class="container-login100">
            <div class="wrap-login100">
              <div class="login100-pic js-tilt" data-tilt>
              <img src="Finalist/images/login.jpg" alt="IMG">
              </div>
              -->
              <h1 style="text-align: Center; font-weight: bold"> Regestrieren</h1>
              <form action="?register=1" method="post">

              Vorname:<br>
        <input class="input100" type="text" size="40" maxlength="250" name="vorname"><br><br>
				<span class="focus-input100"></span>
						<span class="symbol-input100">
						</span>

            Nachname:<br>
        <input class="input100" type="text" size="40" maxlength="250" name="nachname"><br><br>
				<span class="focus-input100"></span>
						<span class="symbol-input100">
						</span>

            E-Mail:<br>
				<input class="input100" type="email" size="40" maxlength="250" name="email"><br><br>
				<span class="focus-input100"></span>
						<span class="symbol-input100">
						</span>

            Dein Passwort:<br>
        <input class="input100" type="password" size="40"  maxlength="250" name="passwort"><br>
				<span class="focus-input100"></span>
						<span class="symbol-input100">
						</span>

            Passwort wiederholen:<br>
      <input class="input100" type="password" size="40"  maxlength="250" name="passwort2"><br>
				<span class="focus-input100"></span>
						<span class="symbol-input100">
						</span>

                <div class="container-login100-form-btn">
                  <button class="login100-form-btn">
                    Registrieren
                  </button>
                </div>

                </form>

                <div class="container-login100-form-btn">
						<a class="txt2" href="login.php">
							<h2>Anmelden
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i></h2>
						</a>
					</div>



      <?php
      } //Ende von if($showFormular)
      ?>


      <!--===============================================================================================-->
      <script src="\vendor/jquery/jquery-3.2.1.min.js"></script>
      <!--===============================================================================================-->
        <script src="\vendor/bootstrap/js/popper.js"></script>
        <script src="\vendor/bootstrap/js/bootstrap.min.js"></script>
      <!--===============================================================================================-->
        <script src="\vendor/select2/select2.min.js"></script>
      <!--===============================================================================================-->
        <script src="\vendor/tilt/tilt.jquery.min.js"></script>
        <script >
          $('.js-tilt').tilt({
            scale: 1.1
          })
        </script>
      <!--===============================================================================================-->
        <script src="\js/main.js"></script>


      <script src="\assets/js/jquery-3.4.0.min.js"></script>
      <script src="\assets/js/jquery-ui.min.js"></script>
      <script src="\assets/js/slick.min.js"></script>
      <script src="\assets/js/plyr.min.js"></script>
      <script src="\assets/js/aos.js"></script>
      <script src="\assets/js/jquery.scrollUp.min.js"></script>
      <script src="\assets/js/masonry.pkgd.min.js"></script>
      <script src="\assets/js/imagesloaded.pkgd.min.js"></script>
      <script src="\assets/js/numscroller-1.0.js"></script>
      <script src="\assets/js/jquery.countdown.min.js"></script>
      <script src="\assets/js/main.js"></script>
    </div>
  </body>
</html>
