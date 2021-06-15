<div>
    <form class="formulario" id="notif_form" method="post">
        <?php include_once("conexao.php"); ?>
        <table id="tb_notif">
            <tr>
                <td>N° da notificação: </td><td><input type="text" name="campo_numNot" id="cmpNt"></td>
            </tr>
            <tr>
                <td>N° do processo: </td><td><input type="text" name="campo_numProc" id="cmpNproc"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Enviar"></td><td></td>
            </tr>
        </table>