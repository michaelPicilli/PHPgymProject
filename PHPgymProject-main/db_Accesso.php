<?php

$conn = mysqli_connect('localhost','c26giambanco','xv3!3wHV','c26Training_Me');
if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}

$nome_inserito = mysqli_real_escape_string($conn, $_POST["nome_utente"]);
$password_inserita = mysqli_real_escape_string($conn, $_POST["password_utente"]);


 //fare in modo che venga scritto nella password della form  
if (strlen($password_inserita) < 8) {
    die("La password deve contenere almeno 8 caratteri");
}

$hash_password = password_hash($password_inserita, PASSWORD_DEFAULT);

$sql = "INSERT INTO Utenti (Nome, Password) VALUES ('$nome_inserito','$hash_password')";

$result = mysqli_query($conn, $sql);

if($result){
    echo "Registrazione avvenuta con successo";
}else{
    echo "Registrazione fallita";
}

mysqli_close($conn);

?>
