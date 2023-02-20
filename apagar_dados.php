<?php 

include("connect.php");

session_start();

$sql = "DELETE FROM pendências WHERE id='".$_GET["id"]."'";

if (mysqli_query($conn, $sql)) {
	echo("<script>window.location.replace('".$_SESSION['urlv'][0]."');</script>");
} else {
	echo("Erro: " . $sql . "<br>" . mysqli_error($conn));
	echo("<a href='".$_SESSION['urlv'][0]."'>Retornar</a>");
}

?>