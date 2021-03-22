<?php

    SESSION_START();
    if(isset($_SESSION["login"])){
        $usuario = $_SESSION["login"];
?>

<?php
    include_once 'conexao.php';

    $cod = $_POST["cxcod"];
    $nomecliente = $_POST["cxnome"];
    $enderecocliente = $_POST["cxend"];
    $bairrocliente = $_POST["cxbairro"];
    $cidadecliente = $_POST["cxcidade"];
    $cepcliente = $_POST["cxcepcli"];
    $telefonecliente = $_POST["cxtelcli"];
    $emailcliente = $_POST["cxemailcli"];
    $idadecliente = $_POST["cxidadecli"];
    $ncalcado = $_POST["cxcalcadocli"];

    $alterar = "update tbcliente set 
    cliente = '$nomecliente',
    endereco = '$enderecocliente',
    bairro = '$bairrocliente',
    cidade = '$cidadecliente',
    CEP = '$cepcliente',
    telefone = '$telefonecliente',
    email = '$emailcliente',
    idade = '$idadecliente',
    ncalcado = '$ncalcado'
    where
    codcli = '$cod'; ";
    $executar = mysqli_query($conn, $alterar);
    if($alterar)
    {
        echo "<script> 
        alert('Dados alterados com sucesso!');
        window.location.href = '../../inputcliente.php';
        </script>
        ";
    }
    else
    {
        echo "<script> 
        alert('Erro: Não foi possível alterar os dados! Tente novamente.');
        window.location.href = '../../inputcliente.php';
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
