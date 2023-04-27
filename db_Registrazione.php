<?php

$conn = mysqli_connect('localhost','c26giambanco','xv3!3wHV','c26Training_Me');
if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}

$nome_inserito = mysqli_real_escape_string($conn, $_POST["nome_utente"]);
$password_inserita = mysqli_real_escape_string($conn, $_POST["password_utente"]);
$altezza_utente = mysqli_real_escape_string($conn, $_POST["altezza_utente"]);
$peso_utente = mysqli_real_escape_string($conn, $_POST["peso_utente"]);
$cognome_utente = mysqli_real_escape_string($conn, $_POST["cognome_utente"]);
$email_utente = mysqli_real_escape_string($conn, $_POST["email_utente"]);
 //fare in modo che venga scritto nella password della form  
if (strlen($password_inserita) < 8) {
    die("La password deve contenere almeno 8 caratteri");
}

//$salt = bin2hex(random_bytes(32));

//$password_inserita = $password_inserita.$salt;
$hash_password = password_hash($password_inserita, PASSWORD_DEFAULT);

$sql = "INSERT INTO Utenti (Nome,Cognome,Email,Password,Altezza,Peso) VALUES ('$nome_inserito','$cognome_utente','$email_utente','$hash_password','$altezza_utente','$peso_utente')";

$result = mysqli_query($conn, $sql);

if($result){
    echo "Registrazione avvenuta con successo";
    session_start();
}else{
    echo "Registrazione fallita";
}

mysqli_close($conn);

?>
