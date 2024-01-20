<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "empresa_sistemacrud";

    if($conn = mysqli_connect($host, $user, $pass, $bd)) {
        echo "Conectado!";
    } else {
        echo "Erro!";
    }

    function mensagemCadastro($textoMensagemCadastro, $tipo) {
        echo "<div class='alert alert-$tipo' role='alert'>
                $textoMensagemCadastro
            </div>";
    }
?>