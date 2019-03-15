<?php
	include "conexao.php";
	@$codigo = $_GET["codigo"];
	@$nome = $_GET["nome"];
	@$endereco = $_GET["endereco"];
	@$cidade = $_GET["cidade"];
	@$fone = $_GET["fone"];
	@$data_nasc = $_GET["data_nasc"];
	if(empty($codigo)) {
		$sql = "INSERT INTO tb_contato(nome, endereco, cidade, fone, data_nasc)
				VALUES('$nome', '$endereco', '$cidade', '$fone', '$data_nasc')";
	}
	else {
		$sql = "UPDATE tb_contato
				SET nome = '$nome',
					endereco = '$endereco',
					cidade = '$cidade',
					fone = '$fone',
					data_nasc = '$data_nasc'
				WHERE cod_cont = $codigo";
	}
	//echo $sql."<br>";
	$status = mysqli_query($link,$sql);
	mysqli_close($link);
	if($status==1)
		$msg = "Sucesso ao salvar registro";
	else
		$msg = "Erro ao salvar registro";
?>
<script>
alert('<?php echo $msg; ?>');
location = 'grid.php';
</script>