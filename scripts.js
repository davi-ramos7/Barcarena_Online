$(document).ready(function(){

    $('#paginas').on('submit','#empresa_form',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "inserir_empresa.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    $('#empresa_form').each(function(){
                        this.reset();
                    });
                    alert("A empresa/pessoa física foi inserida com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    $('#paginas').on('focus','#cmpdoc1',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "laptop_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpLp').html(response);
            }
        });
    });
               
});