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
    <title>Sessão de produtos</title>
    <link rel="shortcut icon" href="img/sneakers.png" type="image/x-icon">
    <link rel="stylesheet" href="styleinputs.css">
    <script src="https://use.fontawesome.com/c382bc2935.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">

</head>
<body>
 
<main class="container">
        <h2>Cadastro de produtos</h2>
        <form action="php/crud/inserirdadosproduto.php" method="post">
            <div class="input-field">
                <input type="text" name="cxproduto"
                placeholder="Marca e modelo">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text" name="cxcorprod"
                placeholder="Cor">
                <div class="underline"></div>
            </div>
            <div class="input-field"><br>
                <input type="number" name="cxqntestoque"
                placeholder="Quantidade estoque">
                <div class="underline"></div>
            </div>
            <div class="input-field"><br>
                <input type="number" name="cxprecoprod"
                placeholder="Preço">
                <div class="underline"></div>
            </div>
            <div class="input-field"><br>
                <input type="text" name="cxoriprod"
                placeholder="Origem">
                <div class="underline"></div>
            </div>
            <div class="input-field"><br>
                <input type="number" name="cxtamprod"
                placeholder="Nº Calçado">
                <div class="underline"></div>
            </div>
            <div class="input-field"><br>
                <input type="text" name="cxmatprod"
                placeholder="Material (Ex: Camurça)">
                <div class="underline"></div>
            </div>
            <div class="input-field"><br>
                <input type="number" name="cxanolancprod"
                placeholder="Ano de lançamento">
                <div class="underline"></div>
            </div>
            <div class="input-field"><br>
                <input type="date" name="cxdatacompraprod"
                placeholder="Data da compra">
                <div class="underline"></div>
            </div>

            <input type="submit" value="Cadastrar Produto">
        </form>

        <div class="footer">
            <span>Busca avançada</span>
            <div class="social-field">
                <div class="social-field search">
                    <a href="php/crud/formbusprod.php">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        Buscar Produto
                    </a>
                </div>
                <div class="social-field list">
                    <a href="php/crud/listarprodutos.php">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        Listar produtos
                    </a>
                </div>
                <div class="social-field signout">
                    <a href="php/fimsessao.php">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        Sair
                    </a>
                </div>
            </div>
        </div>
    </main>

    
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
