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

    $('#paginas').on('submit','#doc_form',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "inserir_doc.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    $('#doc_form').each(function(){
                        this.reset();
                    });
                    alert("O documento foi inserido com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    $('#paginas').on('submit','#form_notif',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "criar_notif.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    $('#form_notif').each(function(){
                        this.reset();
                    });
                    alert("Notificação gerada com sucesso!");
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
            url: "doc_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpdoc1').html(response);
            }
        });
    });

    $('#paginas').on('focus','#cmpdoc2',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "doc_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpdoc2').html(response);
            }
        });
    });

    $('#paginas').on('focus','#cmpdoc3',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "doc_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpdoc3').html(response);
            }
        });
    });

    $('#paginas').on('focus','#cmpdoc4',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "doc_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpdoc4').html(response);
            }
        });
    });

    $('#paginas').on('focus','#cmpdoc5',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "doc_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpdoc5').html(response);
            }
        });
    });

    $('#paginas').on('focus','#cmpdoc6',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "doc_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpdoc6').html(response);
            }
        });
    });

    $('#paginas').on('focus','#cmpdoc7',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "doc_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpdoc7').html(response);
            }
        });
    });

    $('#paginas').on('focus','#cmpdoc8',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "doc_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpdoc8').html(response);
            }
        });
    });

    $('#paginas').on('focus','#cmpdoc9',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "doc_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpdoc9').html(response);
            }
        });
    });

    $('#paginas').on('focus','#cmpdoc10',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "doc_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpdoc10').html(response);
            }
        });
    });
               
});