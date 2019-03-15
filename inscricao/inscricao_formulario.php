<!-- inscricao_formulario.php -->
<?php
	$link = mysqli_connect("127.0.0.1","root","","db_aula");
	$sql = "SELECT COUNT(*) qtde FROM tb_inscricao";
	$rs = mysqli_query($link, $sql);
	$r = mysqli_fetch_array($rs);
	$qtde = $r['qtde'];
	mysqli_free_result($rs);
	mysqli_close($link);

	if($qtde>=30) {
		echo "Não há mais vagas disponíveis<br>";
	}
	else { ?>
		<form method="POST" action="inscricao_inserir.php">
		Nome: <input type=text name=nome> <br>
		Telefone: <input type=text name=fone> <br>
		E-mail: <input type=text name=email><br>
				<input type=submit value=enviar>

		</form> <?php
	}
?>