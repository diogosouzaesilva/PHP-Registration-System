<?php

    SESSION_START();
    if (isset($_SESSION["login"])){
        $usuario = $_SESSION["login"];
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca de clientes</title>
    <link rel="shortcut icon" href="../../img/sneakers.png" type="image/x-icon">
    <link rel="stylesheet" href="../../stylebuscar.css">
    <?php include_once 'conexao.php'; ?>
</head>
<body>

    <div id="listar">
        <?php
            $cliente = $_POST['cxbuscanome'];
            $consulta = "select * from tbcliente where cliente LIKE  '%$cliente%'";
            $executar = mysqli_query($conn, $consulta);
            $resultado = mysqli_num_rows($executar);

            if($resultado != 0)
            {
                echo "<script>alert('Cliente localizado com sucesso!');</script>";
            }
            else
            {
                echo "<script>
                alert('Cliente não localizado!');

                window.location.href = '../../inputcliente.php'
                </script>";
            }
            while ($linha = mysqli_fetch_array($executar)){
        ?>


    <div id="cx1">
    <form action="alterarcliente.php" method="POST">
        Código do cliente: <input type="number" name="cxcod" value="<?php echo $linha['codcli']; ?>" readonly><br>
        Nome do cliente: <input type="text" name="cxnome" value="<?php echo $linha['cliente'];  ?>" ><br>
        Endereço do cliente: <input type="text" name="cxend" value="<?php echo $linha['endereco'];  ?>" ><br>
        Bairro do cliente: <input type="text" name="cxbairro" value="<?php echo $linha['bairro'];  ?>" ><br>
        Cidade do cliente: <input type="text" name="cxcidade" value="<?php echo $linha['cidade'];  ?>" ><br>
        CEP do cliente: <input type="number" name="cxcepcli" value="<?php echo $linha['CEP'];  ?>" ><br>
        Telefone do cliente: <input type="number" name="cxtelcli" value="<?php echo $linha['telefone'];  ?>" ><br>
        Email do cliente: <input type="email" name="cxemailcli" value="<?php echo $linha['email'];  ?>" ><br>
        Idade do cliente: <input type="number" name="cxidadecli" value="<?php echo $linha['idade'];  ?>" ><br>
        Nº do calçado: <input type="number" name="cxcalcadocli" value="<?php echo $linha['ncalcado'];  ?>" >

        <button type="submit">
        <a href="#"><img src="../../img/caneta.png" alt=""></a>
       
        </button>
        <a href="excluircliente.php?id=<?php echo $linha['codcli'];?>"><img src="../../img/delete.png" alt=""></a>
    </form>
        
    </div> 
    <form action="../../inputcliente.php">
        <button class="btn1" type="submit">Voltar</button>
    </form>

    <form action="../../index.php">
        <button class="btn1" type="submit">Sair</button>
    </form>
    
    

        <?php } ?>
        
    </div>
    
</body>
</html>

<?php 
}
else{
    echo "<script> 
            window.location.href = 'index.php';
        </script>
        ";
} 
?>

