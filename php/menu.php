<?php

    SESSION_START();
    if($_SESSION["login"]){
        $usuario = $_SESSION["login"];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="shortcut icon" href="../img/sneakers.png" type="image/x-icon">
    <link rel="stylesheet" href="../stylemenu.css">
</head>
<body>


<div class="box">
    <h1>Seja bem-vindo, <?php echo $usuario; ?></h1>
    <h2>Menu do Sistema</h2>
    <ul>
        <li><span>1</span><a href="../inputcliente.php">Sessão de Cliente</a><br></li>
        <li><span>2</span><a href="../inputfuncionario.php">Sessão de Funcionário</a><br></li>
        <li><span>3</span><a href="../inputproduto.php">Sessão de Produto</a></li>
        <li class="sair1"><a href="fimsessao.php" class="sair">Sair</a></li>
    </ul>
</div>

</body>
</html>

<?php 
}
else{
    echo "<script> 
            window.location.href = '../index.php';
        </script>
        ";
} 
?>
