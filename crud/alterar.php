<!–- alterar.php -->
<?php
include "menu.php";
$link = mysqli_connect("127.0.0.1", "root", "", "db_aula");
$sql = "SELECT cod_cont, nome FROM tb_contato";
$rs = mysqli_query($link, $sql);
while($r=mysqli_fetch_array($rs)){
echo "<a href=alterar2.php?cod_cont=".$r["cod_cont"].">"
.$r["nome"]."</a><br>";
}
mysqli_free_result($rs);
mysqli_close($link);
?>
<!-- alterar2.php -->
<?php
include "menu.php";
$cod_cont = $_GET["cod_cont"];
$link = mysqli_connect("127.0.0.1", "root", "", "db_aula");
$sql = "SELECT * FROM tb_contato WHERE cod_cont = $cod_cont";
$rs = mysqli_query($link,$sql);
$r = mysqli_fetch_array($rs);
mysqli_free_result($rs);
mysqli_close($link);
?>
<form method="GET" action="alterar3.php">
Código:<input type="text" name="cod_cont" value="<?php echo $r[0]; ?>" readonly><br>
Nome: <input type="text" name="nome" value="<?php echo $r[1]; ?>"><br>
Endereço: <input type="text" name="endereco" value="<?php echo $r[2]; ?>"><br>
Cidade: <input type="text" name="cidade" value="<?php echo $r[3]; ?>"><br>
Telefone: <input type="text" name="fone" value="<?php echo $r[4]; ?>"><br>
Data Nasc.: <input type="date" name="data_nasc" value="<?php echo $r[5]; ?>"><br>
<br><input type="submit" value="Atualizar">
</form>
<?php
include "menu.php";
@$cod_cont = $_GET["cod_cont"];
@$nome = $_GET["nome"];
@$endereco = $_GET["endereco"];
@$cidade = $_GET["cidade"];
@$fone = $_GET["fone"];
@$data_nasc = $_GET["data_nasc"];
$link = mysqli_connect("127.0.0.1", "root", "", "db_aula");
$sql = "UPDATE tb_contato
SET nome='$nome',
endereco='$endereco',
cidade='$cidade',
fone='$fone',
data_nasc='$data_nasc'
WHERE cod_cont=$cod_cont";
$status = mysqli_query($link,$sql);
if ($status==0) echo "Erro ao atualizar.<br>";
else if ($status==1) echo "Atualizado com sucesso.<br>";
mysqli_close($link);
?>