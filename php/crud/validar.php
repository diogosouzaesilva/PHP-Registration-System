<?php
    SESSION_START();
    $login = isset($_POST["cxlogin"])?strtolower($_POST["cxlogin"]): "";
    $senha = isset($_POST["cxsenha"])?strtolower($_POST["cxsenha"]): "";

    include_once 'conexao.php';

    $log = mysqli_query($conn, "select * from tbfuncionario where login = '$login' and senha = '$senha'")or die(mysql_error);
    $linha = mysqli_fetch_array($log);
    
    if($login == " " || $senha == " ")
    { 
       echo "Acesso restrito! Efetue o login.";
       
    }
    if($login != $linha["login"] && $senha != $linha["senha"])
    {
        echo "Acesso restrito! Efetue o login.";
    }
    if($login == $linha["login"] && $senha == $linha["senha"])
    {
        $_SESSION["login"]=$linha["nome"];
        echo "<script>window.location.href='../menu.php';</script>";
    }
    else
    {
        echo "<script>alert('Acesso negado!');
        window.location.href='../../index.php';
        </script>";
    }
?>