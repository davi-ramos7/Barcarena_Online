$(document).ready(function(){

    
    $('#paginas').on('submit','#notif_form',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "Teste_Download.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == true){
                    $('#notif_form').trigger("reset");
                    alert("A notificação foi gerada com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });
               
});