<a href="?ordem=nome">Nome</a> |
<a href="?ordem=cidade">Cidade</a> |
<a href="?ordem=data_nasc">Data Nasc.</a> <hr />
<?php
$ordem = empty($_GET["ordem"]) ? "nome" : $_GET["ordem"];
$link = mysqli_connect("127.0.0.1", "root", "", "db_aula");
$sql = "SELECT nome, cidade, data_nasc
FROM tb_contato
ORDER BY $ordem";
$rs = mysqli_query($link, $sql);
while($r = mysqli_fetch_array($rs)){
echo $r[0] . " | " . $r[1] . " | ". $r[2] . "<br />";
}
mysqli_free_result($rs);
mysqli_close($link);
?>