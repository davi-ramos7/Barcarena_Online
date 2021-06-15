<?php
    $sql = "SELECT * FROM lista_de_documentos";
    include "conexao.php";
    $resposta = "<option value='#'>Selecione...</option>";
    if($resultado = mysqli_query($con,$sql)){
        while($lh = mysqli_fetch_assoc($resultado)){
            $resposta .= "<option value='".$lh['documento']."'>".$lh['documento']." </option>";
        }
        echo $resposta;
    }
?>