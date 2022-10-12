<?php 
    session_start();

     if(!isset($_SESSION['confirm_order']) || empty($_SESSION['confirm_order']))
     {
         header('location:index.php');
         exit();
     }

    require_once('./inc/config.php');    
    require_once('./inc/helpers.php');  

    
	$pageTitle = 'Bestätigung';
	$metaDesc = 'Bestellungen';
	
    include('layouts/header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bestellung Bestätigung</title>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

	 <script>
       setTimeout(function() {
        swal({
            title: "Vielen Dank für Ihre Bestellung",
            text: "Ihre Bestellung wird versendet !",
            type: "success"
        }, function() {
            window.location = "http://adan.bplaced.net/index.html"; 
        });
    }, 1000);
</script>
</body>
</html>
<?php include('layouts/footer.php'); ?>    