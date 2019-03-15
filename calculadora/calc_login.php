<?php
session_start();
@$usuario = $_POST['usuario'];
@$senha = $_POST['senha'];
if(!empty($usuario) AND !empty($senha)) {
if($usuario=="PHP" AND $senha=="PHP") {
$_SESSION['login'] = true;

}
}
if(!empty($_SESSION['login'])) { ?>
<script>location='calc_senha.php';</script> <?php
exit;
}
else { ?>
<pre>
<form method="POST">

Usuário: <input type="text" name="usuario"><br>
Senha: <input type="password" name="senha"><br>
<input type="submit" value="Entrar">

</form>
</pre> <?php
}
?>