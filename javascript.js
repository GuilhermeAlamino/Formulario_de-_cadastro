$(function(){
    $('#msg1').hide();
});
    $('#form').submit(function(e){
        e.preventDefault();
        var formulario = $(this);
        var retorno = inserirnoFormulario(formulario);
    });

        function inserirnoFormulario(dados){
            $.ajax({
                type:"POST",
                data:dados.serialize(),
                url:'banco.php',
                async:false,
            }).done(sucesso);

            function sucesso(data){
                if(sucesso){
                    $('#msg1').show().html('DADOS ENVIADO!');
                }else{
                    console.log("ERRO");
                }
            }
    
        }

    