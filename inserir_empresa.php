<?php
    if(isset($_POST['campo_nome'])){
        $nome = $_POST['campo_nome'];
        $atividade = $_POST['campo_atividade'];
        $cnpj = $_POST['campo_cnpj_cpf'];
        $endereco = $_POST['campo_endereco'];
        $sql = "INSERT INTO lista_de_empresas(nome,atividade,cnpj_cpf,endereco) VALUES ('$nome','$atividade','$cnpj','$endereco')";
        include "conexao.php";
        if (mysqli_query($con, $sql)) {
            mysqli_close($con);
            echo "ok";
        }else{
            echo "Erro: " . $sql . "<br>" . mysqli_error($con);
        }

    }else{
        echo "erro";
    }
?>