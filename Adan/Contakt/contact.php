<?php
// database connection code
if(isset($_POST['txtName']))
{
// Connect to Daten Bank
$con = mysqli_connect('localhost', 'adan', '728103093AAmm!','adan_localhost');

// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>sweet alert</title>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

	 <script>
       setTimeout(function() {
        swal({
            title: "Danke Für Ihre Nachricht",
            text: "Wir Melden So schenell wie Möglich bei Ihnen an!",
            type: "success"
        }, function() {
            window.location = "http://adan.bplaced.net/index.html"; 
        });
    }, 1000);
</script>
</body>
</html>