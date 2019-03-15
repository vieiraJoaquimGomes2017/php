<?php
	include "conexao.php";
	$codigo = $_GET["codigo"];
	$sql = "DELETE FROM tb_contato WHERE cod_cont = $codigo";
	$status = mysqli_query($link,$sql);
	mysqli_close($link);
	if($status==1)
		$msg = "Sucesso ao excluir registro";
	else
		$msg = "Erro ao excluir registro";

?>
<script>
	alert('<?php echo $msg; ?>');
	location = 'grid.php';
</script>