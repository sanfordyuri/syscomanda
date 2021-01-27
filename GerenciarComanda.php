<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="validacao.js"></script>
    <title>Document</title>
</head>
<body>
    <?php 
    
    session_start();
    include('verifica_login.php');
    include('GC.php');

    ?>
    <form name="form" method="POST">
          <input type="text" name="cc" placeholder="Codigo da Comanda" />
          <input type="text" name="cp" placeholder="Codigo do Produto" />
          <input type="number" name="qtd" placeholder="Quantidade" />
          <br>
          <button onclick="validar(this.form.cc.value,this.form.cc.value,this.form.cc.value);" type="subimit">Adicionar</button>

          <h1 name="nomedoproduto"></h1>
            <?php 
                if(!verificarSeExisteComanda($_POST['cc'])):
            ?>
            <h2> Essa Comanda não existe. </h2>
            <?php 
                endif;
            ?>
    </form>

</body>
</html>