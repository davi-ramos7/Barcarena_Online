<?php
    if(isset($_POST['campo_nome'])){
        $nome = $_POST['campo_nome'];
        $atividade = $_POST['campo_atividade'];
        $cnpj = $_POST['campo_cnpj_cpf'];
        $endereco = $_POST['campo_endereco'];
        
    }else{
        echo "erro";
    }
?>
