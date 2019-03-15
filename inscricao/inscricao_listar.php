<!-- inscricao_listar.php -->
<?php
	$link = mysqli_connect("127.0.0.1","root","","db_aula");

	$sql="SELECT nome, fone, email, data, hora FROM tb_inscricao";

	$rs = mysqli_query($link,$sql);
	while ($r=mysqli_fetch_array($rs)) {
		echo "{$r[0]} | {$r[1]} | {$r[2]} | {$r[3]} | {$r[4]} <br>";
	}
	mysqli_free_result($rs);
	mysqli_close($link);
?>