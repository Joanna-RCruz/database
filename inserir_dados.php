<?php 

include("connect.php");

session_start();

$sql = "INSERT INTO pendências (nome, descricao, prazo_data)
VALUES ('".$_GET["nome"]."', '".$_GET["desc"]."', '".$_GET["data"]."')";

if (mysqli_query($conn, $sql)) {
	echo("<script>window.location.replace('".$_SESSION['urlv'][0]."');</script>");
} else {
	echo("Erro: " . $sql . "<br>" . mysqli_error($conn));
	echo("<a href='".$_SESSION['urlv'][0]."'>Retornar</a>");
}

?>