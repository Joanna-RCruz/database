<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php include("estilos.php"); ?>
  </head>
  <body>
	<script>
		function hide_window(id){
			document.getElementById(id).style.display = "none";
		}
		
		function show_window(id){
			document.getElementById(id).style.display = "block";
		}
		
		function update_id(sql_id){
			document.getElementById("id-sel-upd").value = sql_id;
		}
		
		function delete_id(sql_id){
			document.getElementById("id-sel-del").value = sql_id;
		}
	</script>
	
    <table width="100%" style="background-color: lightblue;">
		<tr>
			<td width="auto">
				<h1 align="left" style="
					font-family: 'Tahoma';
					color: white;
					font-weight: normal;
				">Gerenciador de Pendências</h1>
			</td>
			<td width="104px">
				<input class="button" type="button" value="Criar novo item" onclick="show_window('create-window')">
			</form></td><td/>
		</tr>
	</table>
	<div class="container">

    <?php
	
	$url = 'http://localhost'.$_SERVER['REQUEST_URI'];

	if(!isset($_SESSION['urlv'])){
		$_SESSION['urlv'] = explode("?", $url);
	}
	
	include("connect.php");

    $sql = "SELECT id, nome, descricao, prazo_data FROM pendências";
    $result = $conn->query($sql);

    echo("<div class='box'>");
    if ($result->num_rows > 0){
        echo("
            <table class='db-display'>
                <tr>
                    <td class='column-head'>Nome</td>
                    <td class='column-head'>Descrição</td>
                    <td class='column-head'>Data Limite</td>
					<td class='column-head'>Ações<td>
                </tr>
        ");
        while($row = $result->fetch_assoc()){
			echo("
				<tr>
				<td>".$row["nome"]."</td>
				<td>".$row["descricao"]."</td>
				<td>".$row["prazo_data"]."</td>
				<td>
					<input class='button' type='button' value='Editar' onclick='show_window(\"update-window\"); update_id(\"".$row["id"]."\")'>
					<input class='button' type='button' value='Deletar' onclick='show_window(\"delete-window\"); delete_id(\"".$row["id"]."\")'>
				</td>
				</tr>
			");
        }
		echo("</table>");
    } else{
        echo "0 resultados.";
    }
    echo("</div>");

    ?>

	</div>
	
		<div id="create-window" class="box window" style="
		z-index: 1;
		display: none;
	">
		<form method="get" action="inserir_dados.php">
			<input id="inputField" type="text" name="nome" placeholder="Nome da pendência">
			<input id="inputField" type="textarea" name="desc" placeholder="Descrição">
			<input id="inputField" type="date" name="data">
			<input class="button" value="Salvar" type="submit" onclick="hide_window('create-window')">
			<input class="button" value="Fechar" type="button" onclick="hide_window('create-window')">
		</form>
	</div>
	
	<div id="update-window" class="box window" style="
		z-index: 1;
		display: none;
	">
		<form method="get" action="atualizar_dados.php">
			<input id="inputField" type="text" name="nome" placeholder="Nome da pendência">
			<input id="inputField" type="textarea" name="desc" placeholder="Descrição">
			<input id="inputField" type="date" name="data">
			<select style="display: none;" name="id">
				<option id="id-sel-upd" value=""></option>
			</select>
			<input class="button" value="Salvar" type="submit" onclick="hide_window('update-window')">
			<input class="button" value="Fechar" type="button" onclick="hide_window('update-window')">
		</form>
	</div>
	
	<div id="delete-window" class="box window" style="
		z-index: 1;
		display: none;
	">
		<form method="get" action="apagar_dados.php">
			<p>Tens a certeza de que queres apagar esta pendência?</p>
			<select style="display: none;" name="id">
				<option id="id-sel-del" value=""></option>
			</select>
			<input class="button" value="Sim" type="submit" onclick="hide_window('delete-window')">
			<input class="button" value="Não" type="button" onclick="hide_window('delete-window')">
		</form>
	</div>
	
  </body>
</html>