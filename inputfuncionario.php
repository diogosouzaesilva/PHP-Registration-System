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
    <title>Sessão de funcionários</title>
    <link rel="shortcut icon" href="img/sneakers.png" type="image/x-icon">
    <link rel="stylesheet" href="styleinputs.css">
    <script src="https://use.fontawesome.com/c382bc2935.js"></script>
</head>
<body>
<main class="container">
        <h2>Cadastro de funcionário</h2>
        <form action="php/crud/inserirdadosfuncionario.php" method="post">
            <div class="input-field">
                <input type="text" name="cxfuncionario"
                placeholder="Nome e Sobrenome">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text" name="loginfunc"
                placeholder="Login (Ex: diogosilva)">
                <div class="underline"></div>
            </div>
            <div class="input-field"><br>
                <input type="password" name="senhafunc"
                placeholder="Senha">
                <div class="underline"></div>
            </div>
            <div class="input-field"><br>
                <input type="number" name="cxtelfunc"
                placeholder="Telefone">
                <div class="underline"></div>
            </div>
            <div class="input-field"><br>
                <input type="text" name="cxendfunc"
                placeholder="Endereço">
                <div class="underline"></div>
            </div>
            <div class="input-field"><br>
                <input type="text" name="cxbairrofunc"
                placeholder="Bairro">
                <div class="underline"></div>
            </div>
            <div class="input-field"><br>
                <input type="text" name="cxcidadefunc"
                placeholder="Cidade">
                <div class="underline"></div>
            </div>
            <div class="input-field"><br>
                <input type="number" name="cxcepfunc"
                placeholder="CEP apenas números">
                <div class="underline"></div>
            </div>
            <div class="input-field"><br>
                <input type="text" name="setorfunc"
                placeholder="Setor">
                <div class="underline"></div>
            </div>
            
            <input type="submit" value="Cadastrar Funcionário">
        </form>

        <div class="footer">
            <span>Busca avançada</span>
            <div class="social-field">
                <div class="social-field search">
                    <a href="php/crud/formbusfunc.php">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        Buscar Funcionário
                    </a>
                </div>
                <div class="social-field list">
                    <a href="php/crud/listarfuncionarios.php">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        Listar funcionários
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

<?php 
}
else{
    echo "<script> 
            window.location.href = 'index.php';
        </script>
        ";
} 
?>
