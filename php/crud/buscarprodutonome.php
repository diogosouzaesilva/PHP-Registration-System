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
    <title>Busca de produtos</title>
    <link rel="shortcut icon" href="../img/sneakers.png" type="image/x-icon">
    <link rel="stylesheet" href="../../stylebuscar.css">
    <?php include_once 'conexao.php'; ?>
</head>
<body>
 
    <div id="listar">
        <?php
            $marca = $_POST['cxbuscanome'];
            $consulta = "select * from tbproduto where marca LIKE  '%$marca%'";
            $executar = mysqli_query($conn, $consulta);
            $resultado = mysqli_num_rows($executar);
            
            if($resultado != 0)
            {
                echo "<script>alert('Produto localizado com sucesso!');</script>";
            }
            else
            {
                echo "<script>
                alert('Produto não localizado!');

                window.location.href = '../../inputproduto.php'
                </script>";
            }
            while ($linha = mysqli_fetch_array($executar)){
        ?>
    <div id="cx1">
    <form action="alterarproduto.php" method="post">
        Código do produto: <input type="number" name="codproduto" value="<?php echo $linha['codprod']; ?>" readonly><br>
        Marca do produto: <input type="text"  name="marcaproduto" value="<?php echo $linha['marca'];  ?>" ><br>
        Cor do produto: <input type="text"  name="corproduto" value="<?php echo $linha['cor'];  ?>" ><br>
        Estoque do produto: <input type="text"  name="estproduto" value="<?php echo $linha['estoque'];  ?>" ><br>
        Valor do produto: <input type="number"  name="valprod" value="<?php echo $linha['valor'];  ?>" ><br>
        Origem do produto: <input type="text"  name="orprod" value="<?php echo $linha['origem'];  ?>" ><br>
        Tamanho do produto: <input type="number" name="tamprod" value="<?php echo $linha['tamanho'];  ?>" ><br>
        Material do produto: <input type="text"  name="matprod" value="<?php echo $linha['material'];  ?>" ><br>
        Ano de lançamento do produto: <input type="number"  name="anoprod" value="<?php echo $linha['anolanc'];  ?>"><br>
        Data da compra: <input type="date"  name="comprod" value="<?php echo $linha['datacompra'];  ?>" >

        <button type="submit">
            <img src="../../img/caneta.png">   
                    
        </button>
        <a href="excluirproduto.php?id=<?php echo $linha['codprod']; ?>">
        <img src="../../img/delete.png">
        </a>     
    </form>
    </div>    

        <?php } ?>
        
    </div>

    <form action="../../inputproduto.php">
        <button class="btn1" type="submit">Voltar</button>
    </form>

    <form action="../../index.php">
        <button class="btn1" type="submit">Sair</button>
    </form>
    
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
