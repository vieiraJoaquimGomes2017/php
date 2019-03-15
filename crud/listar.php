<!-- listar.php -->
<?php
include "menu.php";
$link = mysqli_connect("127.0.0.1","root","","db_aula");
$sql = "SELECT cod_cont, nome, endereco, cidade, fone, data_nasc
FROM tb_contato";
$rs = mysqli_query($link, $sql);
while($r = mysqli_fetch_array($rs)){
echo $r["cod_cont"] . " | " .
$r["nome"] . " | " .
$r["endereco"] . " | " .
$r["cidade"] . " | " .
$r["fone"] . " | " .
$r["data_nasc"] . "<br />";
}
mysqli_free_result($rs);
mysqli_close($link);
?>