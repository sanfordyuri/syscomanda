<?php
session_start();
include('conexao.php');


    if(empty($_POST['user']) || empty($_POST['pass'])) {
        header('Location: index.php');
        exit();
    }

    $user = mysqli_real_escape_string($conexao, $_POST['user']);
    $pass = mysqli_real_escape_string($conexao, $_POST['pass']);

    $query = "SELECT user from login where user = '{$user}' and pass = '{$pass}'";

    $result = mysqli_query($conexao, $query);

    $row = mysqli_num_rows($result);

    if ($row == 1) {
        $_SESSION['user'] = $user;
        header('Location: AreaGerenciamento.php');
        exit();
    } else {
        
        $_SESSION['no_autenticated'] = true;
        header('Location: index.php');
        exit();
    }

    echo $row;exit;
    
?>
 
