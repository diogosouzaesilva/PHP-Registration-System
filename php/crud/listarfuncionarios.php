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
    <title>Listagem de Funcionários</title>
    <link rel="shortcut icon" href="../../img/sneakers.png" type="image/x-icon">
    <link rel="stylesheet" href="../../stylelist.css">
    <?php include_once 'conexao.php'; ?>
</head>
<body>

 
    <div id="listar">
        <?php
            $consulta = "select * from tbfuncionario";
            $executar = mysqli_query($conn, $consulta);
            while ($linha = mysqli_fetch_array($executar)){
        ?>
    <div id="cx1">
        Código do funcionário: <input type="number" value="<?php echo $linha['idfunc']; ?>" readonly><br>
        Login do funcionário: <input type="text" value="<?php echo $linha['login'];  ?>" readonly><br>
        Senha do funcionário: <input type="text" value="<?php echo $linha['senha'];  ?>" readonly><br>
        Endereço do funcionário: <input type="text" value="<?php echo $linha['endereco'];  ?>" readonly><br>
        Bairro do funcionário: <input type="text" value="<?php echo $linha['bairro'];  ?>" readonly><br>
        Cidade do funcionário: <input type="text" value="<?php echo $linha['cidade'];  ?>" readonly><br>
        CEP do funcionário: <input type="number" value="<?php echo $linha['cep'];  ?>" readonly><br>
        Telefone do funcionário: <input type="number" value="<?php echo $linha['telefone'];  ?>" readonly><br>
        Nome do funcionário: <input type="text" value="<?php echo $linha['nome'];  ?>" readonly><br>
        Setor: <input type="text" value="<?php echo $linha['setor'];  ?>" readonly>
    </div>    

        <?php } ?>

        <form action="../../inputfuncionario.php">
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
