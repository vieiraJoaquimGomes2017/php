<!doctype html>
<html lang="pt-BR">
<head>
<title>Listagem dos Contatos</title>
<meta charset="UTF-8" />
</head>
<body>
<?php
$link = mysqli_connect("127.0.0.1", "root", "", "db_aula")
or die('Erro '. mysqli_connect_errno(). ': '.
utf8_encode(mysqli_connect_error()));

$sql = "SELECT cod_cont, nome, endereco, cidade, fone, data_nasc
FROM tb_contato";
$rs = mysqli_query($link, $sql);
if(!empty($rs)) {
if(mysqli_num_rows($rs)>0){
while($r = mysqli_fetch_array($rs)){
$r = array_map('utf8_encode', $r);
echo "{$r['cod_cont']} |
{$r['nome']} |
{$r['endereco']} |
{$r['cidade']} |
{$r['fone']} |
{$r['data_nasc']} <br />";

}
mysqli_free_result($rs);
}
else {
echo "Nenhum registro localizado!";
}
}
else {
echo 'Erro '.mysqli_errno($link).': '. mysqli_error($link);
}
mysqli_close($link);
?>
</body>
</html>