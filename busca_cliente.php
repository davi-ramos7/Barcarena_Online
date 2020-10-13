<?php
    $sql = "SELECT * FROM clientes";
    include "conexao.php";
    $resposta = "";
    if($resultado = mysqli_query($con,$sql)){
        while($lh = mysqli_fetch_assoc($resultado)){
            $resposta .= "<tr>";
            $resposta .= "<td>".$lh['id_cliente']."</td>";
            $resposta .= "<td>".$lh['nome']."</td>";
            $resposta .= "<td>".$lh['sobrenome']."</td>";
            $resposta .= "<td>".$lh['cpf']."</td>";
            $resposta .= "<td>".$lh['endereco']."</td>";
            $resposta .= "<td>".$lh['telefone']."</td>";
            $resposta .= "<td>".$lh['email']."</td>";
            $resposta .= "</tr>";
        }
        echo $resposta;
    }
?>