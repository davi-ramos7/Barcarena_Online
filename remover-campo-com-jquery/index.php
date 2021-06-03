<!DOCTYPE HTML>
<html lang="pt-br">  
    <head>  
        <meta charset="utf-8">
        <title>Celke - Remover Campo</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
            .form-group{
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <h1>Adicionar Campo</h1>
        <form>
            <div id="formulario">
                <div class="form-group">
                    <label>Aula: </label>
                    <input type="text" name="titulo[]" placeholder="Nome da aula">
                    <button type="button" id="add-campo"> + </button>
                </div>
            </div>
            <div class="form-group">
                <input type="button" value="Cadastrar">
            </div>
        </form>

        <script>
            var cont = 1;
            //https://api.jquery.com/click/
            $('#add-campo').click(function () {
                cont++;
                //https://api.jquery.com/append/
                $('#formulario').append('<div class="form-group" id="campo' + cont + '"> <label>Aula: </label><input type="text" name="titulo[]" placeholder="Nome da Aula"> <button type="button" id="' + cont + '" class="btn-apagar"> - </button></div>');
            });

            $('form').on('click', '.btn-apagar', function () {
                var button_id = $(this).attr("id");
                $('#campo' + button_id + '').remove();
            });
        </script>
    </body>
</html>