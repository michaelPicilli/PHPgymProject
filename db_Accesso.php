<?php

$conn = mysqli_connect('localhost', 'c26giambanco', 'xv3!3wHV', 'c26Training_Me');
if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}

$email_utente = mysqli_real_escape_string($conn, $_POST["email_utente"]);
$password_inserita = mysqli_real_escape_string($conn, $_POST["password_utente"]);




$sql = "SELECT * FROM Utenti WHERE Email = '$email_utente' AND Password = '$password_inserita'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);
    if (password_verify($password_inserita, $row['Password'])) {
        session_start();
        $_SESSION['Logged_in'] = true;
        header("Location:index.php");
    }




} else {
    header("Location:Registrazione.php");

}








if (mysqli_num_rows($result) > 0 && password_verify($password_inserita, )) {
    session_start();
    $_SESSION['Logged_in'] = true;
    header("Location:index.php");
} else {
    header("Location:Registrazione.php");
}


mysqli_close($conn);



?>