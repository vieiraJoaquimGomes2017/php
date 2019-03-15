<?php
	$r = array();
	@$r['cod_cont'] = $_GET['codigo'];
	$r['nome'] = null;
	$r['endereco'] = null;
	$r['cidade'] = null;
	$r['fone'] = null;
	$r['data_nasc'] = null;
	if(!empty($r['cod_cont'])) {
		include "conexao.php";
		$sql = "SELECT cod_cont, nome, endereco, cidade, fone, data_nasc
				FROM tb_contato
				WHERE cod_cont=".$r['cod_cont'];
		//echo $sql."<br>";
		$rs = mysqli_query($link,$sql);
		$r = mysqli_fetch_array($rs);
		mysqli_close($link);
	}
?>
<table border=1>
	<th bgcolor=#EEEEEE>Formulário de Contatos</th>
	<tr><form action="salvar.php"><td>
		<table border=0>
			<tr><td>Código:</td>
					<td><input type=text
								name=codigo

								value="<?php echo $r['cod_cont']; ?>" readonly></td></tr>

	<tr><td>Nome:</td>
		<td><input type=text
					name=nome

					value="<?php echo $r['nome']; ?>"></td></tr>

	<tr><td>Endereço:</td>
	<td><input type=text
				name=endereco

				value="<?php echo $r['endereco']; ?>"></td></tr>

	<tr><td>Cidade:</td>
	<td><input type=text
				name=cidade

				value="<?php echo $r['cidade']; ?>"></td></tr>
	<tr><td>Telefone:</td>
		<td><input type=text
					name=fone

					value="<?php echo $r['fone']; ?>"></td></tr>

	<tr><td>Data Nasc.:</td>
		<td><input type=date
					name=data_nasc

					value="<?php echo $r['data_nasc']; ?>"></td></tr>

	</table>
</td></tr>
<tr><td>
	<table width=100% border=0>
		<tr><td>
			<input type=button
					value=Cancelar onClick="location='grid.php';"></td>
		<td align=right><input type=submit value=Salvar></td></form></tr>
		</table>
	</td></tr>
</table>