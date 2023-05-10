<?php
session_start();;
$conn = mysqli_connect('localhost','c26giambanco','zk!QyT49','c26Training_Me');
if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}
$nome_inserito = mysqli_real_escape_string($conn, $_POST["nome_utente"]);
$password_inserita = password_hash(mysqli_real_escape_string($conn, $_POST["password_utente"]), PASSWORD_DEFAULT);
$altezza_utente = mysqli_real_escape_string($conn, $_POST["altezza_utente"]);
$peso_utente = mysqli_real_escape_string($conn, $_POST["peso_utente"]);
$cognome_utente = mysqli_real_escape_string($conn, $_POST["cognome_utente"]);
$email_utente = mysqli_real_escape_string($conn, $_POST["email_utente"]);

$sql = "UPDATE Utenti SET Nome = '$nome_inserito', Cognome = '$cognome_utente', Email = '$email_utente', Password = '$password_inserita', Altezza = '$altezza_utente', Peso = '$peso_utente' WHERE Email = '$_SESSION[email]'";
$result = mysqli_query($conn, $sql);

if($result){
    header("Location:index.php");
    session_destroy();
}else{
    echo "Errore: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
