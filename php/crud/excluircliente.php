<?php

    SESSION_START();
    if(isset($_SESSION["login"])){
        $usuario = $_SESSION["login"];
?>

<?php

    include_once 'conexao.php';
    $cod = $_GET["id"];

    $excluir = "delete from tbcliente where codcli = '$cod'";
    $executar = mysqli_query($conn, $excluir);
    if($executar)
    {

        echo "<script> 
        alert('Cliente excluído com sucesso!');
        window.location.href = '../../inputcliente.php';
        </script>
    ";
        
    }
    else
    {

        echo "<script> 
        alert('Cliente não excluído!');
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
