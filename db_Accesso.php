<?php

$conn = mysqli_connect('localhost','c26giambanco','xv3!3wHV','c26Training_Me');
if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}

$email_utente = mysqli_real_escape_string($conn, $_POST["email_utente"]);
$password_inserita = mysqli_real_escape_string($conn, $_POST["password_utente"]);

$salt = bin2hex(random_bytes(32));
$password_inserita = $password_inserita.$salt;


$sql = "SELECT * FROM Utenti WHERE Email = '$email_utente' ";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0 ){
   session_start();
   $_SESSION['Logged_in'] = true;
   header("Location:index.php");
}else{
    header("Location:Registrazione.php");
}


mysqli_close($conn);



?>
