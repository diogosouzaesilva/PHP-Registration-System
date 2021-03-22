<?php

    SESSION_START();
    if(isset($_SESSION["login"])){
        $usuario = $_SESSION["login"];
?>

<?php
    include_once 'conexao.php';

    $cod = $_POST["codproduto"];
    $marca = $_POST["marcaproduto"];
    $corproduto = $_POST["corproduto"];
    $estoque = $_POST["estproduto"];
    $valor = $_POST["valprod"];
    $origem = $_POST["orprod"];
    $tamanho = $_POST["tamprod"];
    $material = $_POST["matprod"];
    $anolanc = $_POST["anoprod"];
    $datacompra = $_POST["comprod"];

    $alterar = "
        update tbproduto set 
        marca = '$marca',
        cor = '$corproduto',
        estoque = '$estoque',
        valor = '$valor',
        origem = '$origem',
        tamanho = '$tamanho',
        material = '$material',
        anolanc = '$anolanc',
        datacompra = '$datacompra'
        where
        codprod = '$cod';
        ";
        $executar = mysqli_query($conn, $alterar);
        if($alterar)
        {

            echo "<script> 
            alert('Dados alterados com sucesso!');
            window.location.href = '../../inputproduto.php';
            </script>
        ";
        }
        else
        {

            echo "<script> 
            alert('Dados não alterados!');
            window.location.href = '../../inputproduto.php';
            </script>";
        }
?>

<?php 
}
else{
    echo "<script> 
            window.location.href = '../../index.php';
        </script>
        ";
} 
?>
