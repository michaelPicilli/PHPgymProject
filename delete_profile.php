<?php
session_start();;
$conn = mysqli_connect('localhost','c26giambanco','zk!QyT49','c26Training_Me');
if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}
$email = $_SESSION['email'];

$sql = "DELETE FROM Utenti WHERE Email = '$email' ";
$result = mysqli_query($conn, $sql);

if($result){
    header("Location:index.php");
    session_destroy();
}else{
    echo "Errore: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
