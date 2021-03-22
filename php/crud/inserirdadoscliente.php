<?php

    SESSION_START();
    if(isset($_SESSION["login"])){
        $usuario = $_SESSION["login"];
?>

<?php

 if ($_POST['cxnomecliente'] != "")
 {
    include_once 'conexao.php';
    
    $nomecliente = $_POST['cxnomecliente'];
    $enderecocliente = $_POST['cxenderecocliente'];
    $bairrocliente = $_POST['cxbairrocliente'];
    $cidadecliente = $_POST['cxcidadecliente'];
    $cepcliente = $_POST['cxcepcliente'];
    $telefonecliente = $_POST['cxtelefonecliente'];
    $emailcliente = $_POST['emailcliente'];
    $idadecliente = $_POST['idadecliente'];
    $numerocalcado = $_POST['ncalcadocliente'];   
    
    $sql = "insert into tbcliente(cliente, endereco, bairro, cidade, CEP, telefone, email, idade, ncalcado) values ('$nomecliente', '$enderecocliente',  '$bairrocliente', '$cidadecliente', '$cepcliente', '$telefonecliente', '$emailcliente', '$idadecliente', '$numerocalcado');";

    $query = mysqli_query($conn, $sql);

    
    echo "<script> 
    alert('Cliente cadastrado!');
            window.location.href = '../menu.php';
        </script>
        ";
 }
 else{
    "<script> 
    alert('Cliente não cadastrado! Tente novamente');
            window.location.href = '../../inputcliente.php';
        </script>
        ";
 }
?>

<?php 
}
else{
    echo "<script> 
            window.location.href = 'index.php';
        </script>
        ";
} 
?>
