<form>
Pesquisar:<input type="text" name="filtro">
<input type="submit" value="Buscar">
</form><hr>
<?php
@$filtro = $_GET["filtro"];
$link = mysqli_connect("127.0.0.1","root","","db_aula");
$sql = "SELECT nome, cidade, data_nasc
FROM tb_contato
WHERE nome LIKE '$filtro%'";
$rs = mysqli_query($link, $sql);
if(!empty($rs) AND mysqli_num_rows($rs)>0) {
while($r = mysqli_fetch_array($rs)){
echo $r[0] . " | " . $r[1] . " | ". $r[2] . "<br />";
}
mysqli_free_result($rs);
}
mysqli_close($link);
?>