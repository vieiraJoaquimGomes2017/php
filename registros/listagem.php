<?php
$link = mysqli_connect("127.0.0.1", "root", "", "db_aula");
$sql = "SELECT cod_cont, nome, endereco, cidade, fone, data_nasc
FROM tb_contato";
$resultado = mysqli_query($link, $sql);
while($registro = mysqli_fetch_array($resultado)){
echo $registro['cod_cont'] . " | " .
$registro['nome'] . " | " .
$registro['endereco'] . " | " .
$registro['cidade'] . " | " .
$registro['fone'] . " | " .
$registro['data_nasc'] . "<br />";
}
mysqli_close($link);
?>