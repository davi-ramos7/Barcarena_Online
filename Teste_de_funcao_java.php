<!-- 
<tr>
    <td>Houve Notificação? </td><td>
        <select id="notif" name="notif" onchange="camposNotif()">
            <option value="nao">Não</option>
            <option value="sim">Sim</option>
        </select></td>
</tr>
<tr name="campo_numNot" id="cmp_numNot">
    <td>Nº da notificação: </td><td><input type="text" style="display: none"></td>
</tr>
             
<tr id="span-real"></tr>

<script type="text/javascript">

    function camposNotif() {

        var modelo = $('#cmp_numNot').html();
        var modelo_string = modelo.toString();
        var campos = $('#notif').val();

        var texto = '';

        if (campos == "sim") {
            console.log("Sim");
            texto = modelo_string.replace("none", "inline"); 

        } else {
            console.log("Não");
        }

        $(#span-real).html(texto);

    }

</script>
 -->
<tr>
    <td>Houve Notificação? </td><td>
        <select id="notif" name="notif" onchange="myFunction()">
            <option value="nao">Não</option>
            <option value="sim">Sim</option>
        </select></td>
</tr><br><br>

<tr>
    <td>Nº da notificação: </td><td><input type="text" name="campo_numNot" id="cmp_numNot" style="display: none"></td>
</tr>

<script>
function myFunction() {
    var x = document.getElementById("notif").value;
    console.log(x);
    var display = document.getElementById("cmp_numNot").style.display;
    console.log(display);
    if(x == "sim" && display == "none"){
        document.getElementById("cmp_numNot").style.display = 'inline';
    }
    else{
        document.getElementById("cmp_numNot").style.display = 'none';
    }
}
</script>

