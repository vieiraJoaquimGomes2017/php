<!–- excluir.php -->
<?php
include "menu.php";
$link = mysqli_connect("127.0.0.1", "root", "", "db_aula");
if (!empty($_GET["cod_cont"])) {
$codigos = implode(", ", $_GET["cod_cont"]);
$sql = "DELETE FROM tb_contato WHERE cod_cont IN (".$codigos.")";
$status = mysqli_query($link,$sql);
if ($status==0) echo "Erro ao excluir.<br>";
}
?>
<form method="GET" action="">
<?php
$sql = "SELECT cod_cont, nome FROM tb_contato";
$rs = mysqli_query($link,$sql);
while($r=mysqli_fetch_array($rs)){
echo "<input type=checkbox name=cod_cont[] value=".$r["cod_cont"].">"
.$r["nome"]."<br>";
}
mysqli_free_result($rs);
mysqli_close($link);
?>
<br><input type="submit" value="Excluir"></form>