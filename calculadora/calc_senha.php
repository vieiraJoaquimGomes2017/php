<?php
session_start();
if(empty($_SESSION['login'])) { ?>
<script>location='calc_login.php';</script> <?php
exit;
}
?>
<form>
1° Número: <input type="text" name="n1">
2° Número: <input type="text" name="n2">
Operador:
<select name="op">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select>
<input type="submit" value="Calcular">
</form>
<hr>(<a href="calc_logout.php">logout</a>)<hr>
<?php
@$n1 = $_GET['n1'];
@$n2 = $_GET['n2'];
@$op = $_GET['op'];
if(is_numeric($n1) AND is_numeric($n2) AND !empty($op)) {
if($op=='+') {
$r = $n1 + $n2;
echo "Resultado: $n1 + $n2 = $r";
}
else if($op=='-') {
$r = $n1 - $n2;
echo "Resultado: $n1 - $n2 = $r";
}
else if($op=='*') {
$r = $n1 * $n2;
echo "Resultado: $n1 * $n2 = $r";
}
else if($op=='/') {
if($n2==0) {
echo "ERRO: divisão por zero!";
}
else {
$r = $n1 / $n2;
echo "Resultado: $n1 / $n2 = $r";
}
}
else {
echo "Operador inválido!";
}
}
?>