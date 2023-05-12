<?php

$conn = mysqli_connect('localhost','c26giambanco','zk!QyT49','c26Training_Me');
if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}

$nome_inserito = mysqli_real_escape_string($conn, $_POST["firstName"]);
$cognome = mysqli_real_escape_string($conn, $_POST["lastName"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$telefono = mysqli_real_escape_string($conn, $_POST["phone"]);
$problema = mysqli_real_escape_string($conn, $_POST["message"]);

$sql = "INSERT INTO Contatti (Nome,Cognome,Email,Telefono,Problema) VALUES ('$nome_inserito','$cognome','$email','$telefono','$problema')";

$result = mysqli_query($conn, $sql);

if($result){
    header("Location:index.php");
    session_start();
}else{
    echo "Errore: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
