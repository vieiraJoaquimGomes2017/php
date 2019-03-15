<?php
$link = mysqli_connect("127.0.0.1","root","","db_aula");
$sql = "SELECT COUNT(*) qtde FROM tb_contato";
$rs = mysqli_query($link, $sql);
$r = mysqli_fetch_array($rs);
$total = $r['qtde'];
$qtde = 10;
$num_pags = ceil($total/$qtde);
$pagina = empty($_GET['pagina']) ? 1 : $_GET['pagina'];
for($i=1; $i<=$num_pags; $i++) {
if($i!=$pagina)
echo "<a href=\"?pagina=$i\">$i</a> ";
else
echo "[$i] ";
}
echo "<hr />";
$sql = "SELECT nome, cidade, fone
FROM tb_contato
LIMIT ".($pagina-1)*$qtde.", $qtde";
$rs = mysqli_query($link, $sql);
while($r = mysqli_fetch_array($rs)){
echo $r[0]." | ". $r[1]." | ". $r[2]." | ". "<br />";
}
mysqli_free_result($rs);
mysqli_close($link);
?>  