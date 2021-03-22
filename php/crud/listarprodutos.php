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
    <title>Listagem de produtos</title>
    <link rel="shortcut icon" href="../../img/sneakers.png" type="image/x-icon">
    <link rel="stylesheet" href="../../stylelist.css">
    <?php include_once 'conexao.php'; ?>
</head>
<body>


 
    <div id="listar">
        <?php
            $consulta = "select * from tbproduto";
            $executar = mysqli_query($conn, $consulta);
            while ($linha = mysqli_fetch_array($executar)){
        ?>
    <div id="cx1">
        Código do produto: <input type="number" value="<?php echo $linha['codprod']; ?>" readonly><br>
        Marca do produto: <input type="text" value="<?php echo $linha['marca'];  ?>" readonly><br>
        Cor do produto: <input type="text" value="<?php echo $linha['cor'];  ?>" readonly><br>
        Estoque do produto: <input type="text" value="<?php echo $linha['estoque'];  ?>" readonly><br>
        Valor do produto: <input type="number" value="<?php echo $linha['valor'];  ?>" readonly><br>
        Origem do produto: <input type="text" value="<?php echo $linha['origem'];  ?>" readonly><br>
        Tamanho do produto: <input type="number" value="<?php echo $linha['tamanho'];  ?>" readonly><br>
        Material do produto: <input type="text" value="<?php echo $linha['material'];  ?>" readonly><br>
        Ano de lançamento do produto: <input type="number" value="<?php echo $linha['anolanc'];  ?>" readonly><br>
        Data da compra: <input type="date" value="<?php echo $linha['datacompra'];  ?>" readonly>
    </div>    

        <?php } ?>

        <form action="../../inputproduto.php">
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
