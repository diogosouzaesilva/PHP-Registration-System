<?php

    SESSION_START();
    if(isset($_SESSION["login"])){
        $usuario = $_SESSION["login"];
?>

<?php
 if ($_POST['cxfuncionario'] != "")
 {
    include_once 'conexao.php';
    
    $loginfuncionario = $_POST['loginfunc'];
    $senhafuncionario = $_POST['senhafunc'];
    $endfunc = $_POST['cxendfunc'];
    $bairrofunc = $_POST['cxbairrofunc'];
    $cidadefunc = $_POST['cxcidadefunc'];
    $CEPfunc = $_POST['cxcepfunc'];
    $funcionariotel = $_POST['cxtelfunc'];
    $funcionarionome = $_POST['cxfuncionario'];
    $setorfunc = $_POST['setorfunc'];   
    
    $sql = "insert into tbfuncionario(login, senha, endereco, bairro, cidade, cep, telefone, nome, setor) values ('$loginfuncionario', '$senhafuncionario',  '$endfunc', '$bairrofunc', '$cidadefunc', '$CEPfunc', '$funcionariotel', '$funcionarionome', '$setorfunc');";

    $query = mysqli_query($conn, $sql);

    echo "<script> 
        alert('Funcionário cadastrado!');
            window.location.href = '../menu.php';
        </script>
        ";
 }
 else{
    echo "<script> 
        alert('Funcionário não cadastrado!');
            window.location.href = '../../inputfuncionario.php';
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
