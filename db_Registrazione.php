<?php

$conn = mysqli_connect('localhost','c26giambanco','zk!QyT49','c26Training_Me');
if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}

$nome_inserito = mysqli_real_escape_string($conn, $_POST["nome_utente"]);
$password_inserita = mysqli_real_escape_string($conn, $_POST["password_utente"]);
$altezza_utente = mysqli_real_escape_string($conn, $_POST["altezza_utente"]);
$peso_utente = mysqli_real_escape_string($conn, $_POST["peso_utente"]);
$cognome_utente = mysqli_real_escape_string($conn, $_POST["cognome_utente"]);
$email_utente = mysqli_real_escape_string($conn, $_POST["email_utente"]);
$numero_allenamenti = mysqli_real_escape_string($conn, $_POST["numero_allenamenti"]);
$sesso_utente = mysqli_real_escape_string($conn, $_POST["sesso_utente"]);
 //fare in modo che venga scritto nella password della form  
if (strlen($password_inserita) < 8) {
    die("La password deve contenere almeno 8 caratteri");
}

$hash_password = password_hash($password_inserita,PASSWORD_BCRYPT);

$sql = "INSERT INTO Utenti (Nome,Cognome,Email,Password,Altezza,Peso,allenamenti,Sesso) VALUES ('$nome_inserito','$cognome_utente','$email_utente','$hash_password','$altezza_utente','$peso_utente','$numero_allenamenti','$sesso_utente')";

$result = mysqli_query($conn, $sql);

if($result){
    header("Location:index.php");
    session_start();
}else{
    echo "Registrazione fallita";
}

mysqli_close($conn);

?>
