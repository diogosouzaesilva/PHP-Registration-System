<?php

    SESSION_START();
    if(isset($_SESSION["login"])){
        $usuario = $_SESSION["login"];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de clientes</title>
    <link rel="shortcut icon" href="../../img/sneakers.png" type="image/x-icon">
    <link rel="stylesheet" href="../../stylelist.css">
    <?php include_once 'conexao.php'; ?>
</head>
<body>

    <div id="listar">
        <?php
            $consulta = "select * from tbcliente";
            $executar = mysqli_query($conn, $consulta);
            while ($linha = mysqli_fetch_array($executar)){
        ?>

    <div id="cx1">
        Código do cliente: <input type="number" value="<?php echo $linha['codcli']; ?>" readonly><br>
        Nome do cliente: <input type="text" value="<?php echo $linha['cliente'];  ?>" readonly><br>
        Endereço do cliente: <input type="text" value="<?php echo $linha['endereco'];  ?>" readonly><br>
        Bairro do cliente: <input type="text" value="<?php echo $linha['bairro'];  ?>" readonly><br>
        Cidade do cliente: <input type="text" value="<?php echo $linha['cidade'];  ?>" readonly><br>
        CEP do cliente: <input type="number" value="<?php echo $linha['CEP'];  ?>" readonly><br>
        Telefone do cliente: <input type="number" value="<?php echo $linha['telefone'];  ?>" readonly><br>
        Email do cliente: <input type="email" value="<?php echo $linha['email'];  ?>" readonly><br>
        Idade do cliente: <input type="number" value="<?php echo $linha['idade'];  ?>" readonly><br>
        Nº do calçado: <input type="number" value="<?php echo $linha['ncalcado'];  ?>" readonly>
        <br><br>
        <br><br>
    </div>

        <?php } ?>  

        <form action="../../inputcliente.php">
        <button class="btn1" type="submit">Voltar</button>
    </form>

    <form action="../../index.php">
        <button class="btn1" type="submit">Sair</button>
    </form>
    </div>


    
</body>
</html>

<?php 
}
else{
    echo "<script> 
            window.location.href = '../../index.php';
        </script>
        ";
} 
?>
