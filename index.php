<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN - Projeto Comanda Convertido</title>
</head>
<body>
    <form name="form" action="login.php" method="POST">
        <input type="text" name="user" placeholder="Insira o Login de Acesso">
        <br>
        <br>
        <input type="password" name="pass" placeholder="Insira a Senha">
        <br>
        <label><input type="checkbox"> Lembre-me</label>
        <br>
        <br>
        <?php 
            if(isset($_SESSION['no_autenticated'])):
        ?>
        <h2> Erro Usuario ou senha Invalidos </h2>
        <?php 
            endif;
            unset($_SESSION['no_autenticated']);
        ?>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>