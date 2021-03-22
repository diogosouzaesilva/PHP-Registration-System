<?php

    SESSION_START();
    if(isset($_SESSION["login"])){
        $usuario = $_SESSION["login"];
?>

<?php
    include_once 'conexao.php';

    $cod = $_POST["cxcodfunc"];
    $loginfunc=$_POST["cxlogfunc"];
    $senhafunc=$_POST["cxsenhafunc"];
    $endfunc = $_POST["cxendfunc"];
    $bairrofunc = $_POST["cxbairrofunc"];
    $cidadefunc = $_POST["cxcidadefunc"];
    $cepfunc = $_POST["cxcepfunc"];
    $telfunc = $_POST["cxtelfunc"];
    $nomefunc = $_POST["cxnomefunc"];
    $setorfunc = $_POST["cxsetfunc"];

    $alterar = "
     update tbfuncionario set 
    login = '$loginfunc',
    senha = '$senhafunc',
    endereco = '$endfunc',
    bairro = '$bairrofunc',
    cidade = '$cidadefunc',
    cep = '$cepfunc',
    telefone = '$telfunc',
    nome = '$nomefunc', 
    setor = '$setorfunc'
    where 
    idfunc = '$cod';
    ";
    $executar = mysqli_query($conn, $alterar);
    if($alterar)
    {

        echo "<script> 
        alert('Dados alterados com sucesso!');
            window.location.href = '../../inputfuncionario.php';
        </script>
        ";
    }
    else
    {
        echo "<script> 
        alert('Dados não alterados!');
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
