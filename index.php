<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Shoes</title>
    <link rel="shortcut icon" href="img/sneakers.png" type="image/x-icon">
    <link rel="stylesheet" href="stylelogin.css">
    <script src="https://use.fontawesome.com/c382bc2935.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>
<main class="container">
        <h2>Login</h2>
        <form action="php/crud/validar.php" method="post">
            <div class="input-field">
                <input type="text" name="cxlogin" id="username"
                placeholder="Ex: diogosilva">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="password" name="cxsenha" id="password"
                placeholder="Senha">
                <div class="underline"></div>
            </div>

            <input type="submit" value="Acessar Sistema">
        </form>

        <div class="footer">
            <span>Acessar portfolio do desenvolvedor</span>
            <div class="social-field">
                <div class="social-field github">
                    <a href="https://github.com/diogosouzaesilva">
                        <i class="fa fa-github" aria-hidden="true"></i>
                        Acessar Github
                    </a>
                </div>
                <div class="social-field linkedin">
                    <a href="https://www.linkedin.com/in/souza-diogo/">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        Acessar LinkedIn
                    </a>
                </div>
            </div>
        </div>
    </main>

    
</html>