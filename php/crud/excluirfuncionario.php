<?php

    SESSION_START();
    if(isset($_SESSION["login"])){
        $usuario = $_SESSION["login"];
?>

<?php
    include_once 'conexao.php';
    $cod = $_GET["id"];

    $excluir = "delete from tbfuncionario where idfunc = '$cod'";
    $executar = mysqli_query($conn, $excluir);
    if($executar)
    {

        echo "<script> 
        alert('Funcionário excluído com sucesso!');
        window.location.href = '../../inputfuncionario.php';
        </script>
    ";
    }
    else
    {

        echo "<script> 
        alert('Funcionário não!');
        window.location.href = '../../inputfuncionario.php';
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
