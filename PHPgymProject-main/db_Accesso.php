<?php

$conn = mysqli_connect('localhost','c26giambanco','xv3!3wHV','c26Training_Me');
if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}

$email_utente = mysqli_real_escape_string($conn, $_POST["email_utente"]);
$password_inserita = mysqli_real_escape_string($conn, $_POST["password_utente"]);



$hash_password = password_hash($password_inserita, PASSWORD_DEFAULT);

$sql = "SELECT * FROM Utenti WHERE Email = '$email_utente'";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    echo "Accesso Avvenuto";
    session_start();
}else{
    echo "Registrati";
}


mysqli_close($conn);

?>
