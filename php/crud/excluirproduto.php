<?php

    SESSION_START();
    if(isset($_SESSION["login"])){
        $usuario = $_SESSION["login"];
?>

<?php
include_once 'conexao.php';

$cod = $_GET["id"];

$excluir = "delete from tbproduto where codprod = '$cod'";
$executar = mysqli_query($conn, $excluir);
if($executar)
{
    echo "<script> 
        alert('Produto excluído com sucesso!');
        window.location.href = '../../inputproduto.php';
        </script>
    ";
}
else
{
    echo "<script> 
        alert('Produto não excluído!');
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
