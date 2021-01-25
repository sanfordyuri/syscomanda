<?php
include('conexao.php');


if(empty($_POST['cp']) || empty($_POST['cc']) || empty($_POST['qtd'])) {
    header('Location: GerenciarComanda.php');
    echo "Existem Campos em Branco!";
    exit();
} else {

}

?>
