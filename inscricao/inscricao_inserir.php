<!-- inscricao_inserir.php -->
<?php
	@$nome = $_POST["nome"];
	@$fone = $_POST["fone"];
	@$email = $_POST["email"];
	if(empty($nome) OR empty($fone) OR empty($email)) {
		$msg = "Todos os campos devem ser preenchidos";
	}
	else {
		$link = mysqli_connect("127.0.0.1","root","","db_aula");
		$data = date("Y/m/d");
		$hora = date("H:i:s");
		$sql="INSERT INTO tb_inscricao(nome,fone,email,data,hora)
			  VALUES('$nome','$fone','$email','$data','$hora')";

		$status = mysqli_query($link,$sql);
		if ($status==1) $msg = "Inscrição inserida com sucesso";

		else $msg = "Erro ao inserir inscrição.";
		mysqli_close($link);
	}
?>
<script>
	alert('<?php echo $msg; ?>');
	location = 'inscricao_formulario.php';
</script>