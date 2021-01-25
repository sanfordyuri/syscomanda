<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
        <?php 
                session_start();
                include('verifica_login.php');
        ?>
<h2>Olá, <?php echo $_SESSION['user']?></h2>
<h2><a href="logout.php">Sair</a></>   
<br> 
<h2><a href="GerenciarComanda.php">Gerenciar Comanda</a></> </body>
</html>