<?php
$servername = "127.0.0.1";
$username = "username";
$password = "";
$dbname = "painel";

// Cria conexão
$conn = @mysqli_connect($servername, $username, $password, $dbname);
// Verifica conexão
echo "Status da conexão: ";
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());

}else{
	echo"<hr>";
}
?>



