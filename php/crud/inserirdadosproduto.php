<?php

    SESSION_START();
    if(isset($_SESSION["login"])){
        $usuario = $_SESSION["login"];
?>

<?php
 if ($_POST['cxproduto'] != "")
 {
    include_once 'conexao.php';
    
    $marcaproduto = $_POST['cxproduto'];
    $corproduto = $_POST['cxcorprod'];
    $estoqueproduto = $_POST['cxqntestoque'];
    $valorproduto = $_POST['cxprecoprod'];
    $origemproduto = $_POST['cxoriprod'];
    $tamanhoproduto = $_POST['cxtamprod'];
    $materialproduto = $_POST['cxmatprod'];
    $anolancamentoproduto = $_POST['cxanolancprod'];
    $datacompraproduto = $_POST['cxdatacompraprod'];   
    
    $sql = "insert into tbproduto(marca, cor, estoque, valor, origem, tamanho, material, anolanc, datacompra) values ('$marcaproduto', '$corproduto',  '$estoqueproduto', '$valorproduto', '$origemproduto', '$tamanhoproduto', '$materialproduto', '$anolancamentoproduto', '$datacompraproduto');";

    $query = mysqli_query($conn, $sql);

    echo "<script> 
    alert('Produto Cadastrado!');
    window.location.href = '../menu.php';
    </script>
    ";
 }
 else{
    echo "<script> 
    alert('Produto não cadastrado!');
    window.location.href = '../../inputproduto.php';
    </script>
    ";
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
