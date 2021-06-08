<?php
    if(isset($_POST['campo_nome'])){
        $nome = $_POST['campo_nome'];
        
        $sql = "INSERT INTO lista_de_documentos(documento) VALUES ('$nome')";
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