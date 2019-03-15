<!-- inserir.php -->
<!-- Faremos a inclusão de dados em 2 passos:
1. Formulário para digitar os dados
2. Programa para obter os dados do formulário e gravar no banco de dados -->

<?php include "menu.php"; ?>
<form method="GET" action="inserir2.php">
Nome: <input type="text" name="nome"> <br>
Endereço: <input type="text" name="endereco"> <br>
Cidade: <input type="text" name="cidade"> <br>
Telefone: <input type="text" name="fone"> <br>
Data Nasc.: <input type="date" name="data_nasc"><br>
<br><input type="submit" value="Gravar">
</form>