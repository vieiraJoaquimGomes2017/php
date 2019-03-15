<?php
	include "conexao.php";
	@$filtro = trim(addslashes($_GET['filtro']));
	$sql = "SELECT cod_cont, nome, endereco, cidade, fone,
				DATE_FORMAT(data_nasc,'%d/%m/%Y') data
			FROM tb_contato
			WHERE nome LIKE '$filtro%'";
	$rs = mysqli_query($link,$sql);
	echo '<table border=1>
			<th bgcolor=#EEEEEE>Gerenciar Contatos</th><tr><td>
				<table border=0>
					<tr>
						<td width= "20">&nbsp;</td>
						<td width= "20">&nbsp;</td>
						<td width= "40"><b>ID</td>
						<td width="200"><b>Nome</td>
						<td width="220"><b>Endereço</td>
						<td width="120"><b>Cidade</td>
						<td width="110"><b>Telefone</td>
						<td width= "80"><b>Data Nasc.<td>
					</tr>';

	if(empty($rs) OR mysqli_num_rows($rs)==0) {
		echo '<tr><td colspan=8 align=center>Nenhum contato encontrado</td></tr>';
	} else {
		while($r = mysqli_fetch_array($rs)){
			echo "<tr>
				<td><a href=\"excluir.php?codigo=".$r['cod_cont']."\"
					onClick=\"return confirm('Confirma a exclusão?');\">
					<img src=\"./img/excluir.png\" border=0 alt=excluir></a>
				</td>
				<td><a href=\"form.php?codigo=".$r['cod_cont']."\">
					<img src=\"./img/alterar.png\" border=0 alt=alterar></a>
				</td>
				<td>".$r['cod_cont']."</td>
				<td>".$r['nome']."</td>
				<td>".$r['endereco']."</td>
				<td>".$r['cidade']."</td>
				<td>".$r['fone']."</td>
				<td>".$r['data']."</td>
			</tr>";
		}
	}
	echo "</table></td></tr>";
	echo "<tr><td><table width=100% border=0><tr><td>
		<input type=button value=Novo onClick=\"location='form.php';\"></td>

		<form><td align=right>Pesquisar por: <input name=filtro>&nbsp;
		<input type=submit value=Buscar></td></form></tr></table>";
	echo "</td></tr></table>";
	mysqli_free_result($rs);
	mysqli_close($link);
?>