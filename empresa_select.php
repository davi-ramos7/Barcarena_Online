<?php
    $sql = "SELECT * FROM dados_empresas";
    include "conexao.php";
    $resposta = "<option value='#'>Selecione...</option>";
    if($resultado = mysqli_query($con,$sql)){
        while($lh = mysqli_fetch_assoc($resultado)){
            $resposta .= "<option value='".$lh['id_empresas']."'>".$lh['nome']." </option>";
        }
        echo $resposta;
    }
?>