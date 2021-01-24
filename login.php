<?php
session_start();
include('conexao.php');


    if(empty($_POST['user']) || empty($_POST['pass'])) {
        header('Location: index.html');
        exit();
    }

    $user = mysqli_real_escape_string($conexao, $_POST['user']);
    $senha = mysqli_real_escape_string($conexao, $_POST['pass']);

    $query = "SELECT pass from login where user = '{$user}'";

    $result = mysqli_query($conexao, $query);

    $row = mysqli_num_rows($result);

    if ($row == 1) {
        $_SESSION['user'] = $user;
        header('Location: AreaGerenciamento.php');
        exit();
    } else {
        header('Location: index.html');
        exit();
    }

    echo $row;exit;

?>
