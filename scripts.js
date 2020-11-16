$(document).ready(function(){

    $('#conteudo').on('submit','#formEmpresa',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_empresa.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    $('#formEmpresa').each(function(){
                        this.reset();
                    });
                    alert("A empresa/pessoa física foi inserida com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    $('#conteudo').on('click','#btn_bscCliente',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "busca_cliente.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#tblCliente').html(response);
            }
        });
    });
               
});