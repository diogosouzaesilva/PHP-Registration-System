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
    <link rel="stylesheet" href="../../stylebuscar.css">
    <title>Busca de funcionários</title>
    <link rel="shortcut icon" href="../img/sneakers.png" type="image/x-icon">
    <?php include_once 'conexao.php'; ?>
</head>
<body>
 
    <div id="listar">
        <?php
            $nome = $_POST['cxbuscanome'];
            $consulta = "select * from tbfuncionario where nome LIKE  '%$nome%'";
            $executar = mysqli_query($conn, $consulta);
            $resultado = mysqli_num_rows($executar);

            if($resultado != 0)
            {
                echo "<script>alert('Funcionário localizado com sucesso!');</script>";
            }
            else
            {
                echo "<script>
                alert('Funcionário não localizado!');

                window.location.href = '../../inputfuncionario.php'
                </script>";
            }
            while ($linha = mysqli_fetch_array($executar)){
        ?>
    <div id="cx1">
    <form action="alterarfuncionario.php" method="POST">
        Código do funcionário: <input type="number" name="cxcodfunc" value="<?php echo $linha['idfunc']; ?>" readonly><br>
        Login do funcionário: <input type="text" name="cxlogfunc" value="<?php echo $linha['login'];  ?>"><br>
        Senha do funcionário: <input type="text" name="cxsenhafunc" value="<?php echo $linha['senha'];  ?>" ><br>
        Endereço do funcionário: <input type="text" name="cxendfunc" value="<?php echo $linha['endereco'];  ?>" ><br>
        Bairro do funcionário: <input type="text" name="cxbairrofunc" value="<?php echo $linha['bairro'];  ?>"><br>
        Cidade do funcionário: <input type="text" name="cxcidadefunc" value="<?php echo $linha['cidade'];  ?>" ><br>
        CEP do funcionário: <input type="number" name="cxcepfunc" value="<?php echo $linha['cep'];  ?>" ><br>
        Telefone do funcionário: <input type="number" name="cxtelfunc" value="<?php echo $linha['telefone'];  ?>" ><br>
        Nome do funcionário: <input type="text" name="cxnomefunc" value="<?php echo $linha['nome'];  ?>" ><br>
        Setor: <input type="text" name="cxsetfunc" value="<?php echo $linha['setor'];  ?>" >

        <button type="submit">
        <img src="../../img/caneta.png">  
        
        </button>
        <a href="excluirfuncionario.php?id=<?php echo $linha['idfunc']; ?>"><img src="../../img/delete.png">
        </a>
    </form>    
    </div>  

    <form action="../../inputfuncionario.php">
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

