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
    <title>Code Shoes</title>
    <link rel="shortcut icon" href="../../img/sneakers.png" type="image/x-icon">
    <link rel="stylesheet" href="../../stylelogin.css">
    <script src="https://use.fontawesome.com/c382bc2935.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>
<main class="container">
        <h2>Busca avançada de produtos</h2>
        <form action="buscarprodutonome.php" method="post">
            <div class="input-field">
                <input type="text" name="cxbuscanome"
                placeholder="Nome do produto">
                <div class="underline"></div>
            </div>

            <input type="submit" value="Buscar">
        </form>

        <div class="footer">
            <span>Ações</span>
            <div class="social-field">
                <div class="social-field arrow">
                    <a href="../../inputproduto.php">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        Voltar
                    </a>
                </div>
                <div class="social-field signout">
                    <a href="../../index.php">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        Sair
                    </a>
                </div>
            </div>
        </div>
    </main>

    
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