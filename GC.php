<?php

    function verificarSeExisteComanda($cc) {
        include('conexao.php');

        $cc = mysqli_real_escape_string($conexao, $cc);

        $query = "SELECT nome_produto from {$cc}";

        $result = mysqli_query($conexao, $query);

        if($result) {
            $row = mysqli_num_rows($result);
                
            if ($row == 1) {
                return true;
            } else {
                return false;
            }

            echo $row;
            
        } else {
            return false;
        }

    } 

?>
