<?php
include_once "header.php";
?>

<h2>Cadastro Dos Cria De Diadema</h2>
<form action="cadastrar.php" method="post">
    <label>Nome:</label><input type="text" name="txt_nome" required maxlength="100"><br>
    <label>Login:</label><input type="text" name="txt_login" required maxlength="100"><br>
    <label>Senha:</label><input type="password" name="txt_senha" required maxlength="100"><br>
    <label>CPF:</label><input type="text" name="txt_cpf" required maxlength="11"><br>
    <label>Data de Nascimento:</label><input type="date" name="dt_data" required><br>
    <label>Endereço:</label><input type="text" name="txt_end" required maxlength="100"><br>
    <label>Bairro:</label><input type="text" name="txt_bairro" required maxlength="50"><br>
    <label>Cidade:</label><input type="text" name="txt_cidade" required maxlength="50"><br>
    <input type="submit" value="Cadastrar">
</form>
<?php
include_once "footer.php";
?>