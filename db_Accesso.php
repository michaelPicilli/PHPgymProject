<?php

$conn = mysqli_connect('localhost','c26giambanco','xv3!3wHV','c26Training_Me');
if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}

$nome_inserito = mysqli_real_escape_string($conn, $_POST["nome_utente"]);
$password_inserita = mysqli_real_escape_string($conn, $_POST["password_utente"]);



$hash_password = password_hash($password_inserita, PASSWORD_DEFAULT);

$sql = "SELECT * FROM Utenti WHERE Nome = '$nome_inserito' AND Password = '$hash_password'";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    echo "Sei già registrato";
}else{
    echo "Registrati";
}


mysqli_close($conn);

?>
