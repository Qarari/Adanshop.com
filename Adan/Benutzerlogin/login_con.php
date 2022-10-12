<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=adan_localhost', 'adan', '728103093AAmm!');
 
if(isset($_Post['login'])) {
    $username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

        
    //Überprüfung des Passworts
    if ($user !== false && password_verify($passwort, $user['passwort'])) {
        $_SESSION['userid'] = $user['id'];
        header('location: geheim.php');
        die('Login erfolgreich. Weiter zu <a href="geheim.php"> Internen Bereich </a>');

    } else {
        $errorMessage = "E-Mail oder Passwort war ungültig<br>";
    }

}
?>

	<?php 
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>