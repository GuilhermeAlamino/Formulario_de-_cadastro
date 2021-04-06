<?php require_once("./banco.php");?>

<?php include("./header.php")?>

        

<div class="container mb-3 mt-3">

<button type="button" class="btn btn-primary" style="margin-bottom:10px;" id="botao1" onclick="filtrarDados('clt')">CLT</button>
<button type="button" class="btn btn-primary" style="margin-bottom:10px;" id="botao2" onclick="filtrarDados('pj')">PJ</button>
<button type="button" class="btn btn-primary" style="margin-bottom:10px;" id="botao3" onclick="filtrarDados('autonomo')">Autönomo</button>

<table class="table table-striped table-bordered mydatatable" style="width:100%" >

<thead>
<tr>
<th>UsuarioID</th>
<th>Nome</th>
<th>Sobrenome</th>
<th>Email</th>
<th>Tipo de Carteira</th>
<th>Celular</th>
<th>CPF</th>
</tr>
</thead>

    <tbody class="content-table">

    </tbody>

</table>
</div>
<script>

    function filtrarDados(params){
        $.ajax({
            url: 'function.php',
            type: 'get',
            dataType: "json",
            data: 'tipo='+params,
        }).done(function success(request){
                    //recebendo dados em string ou seja em nome.
                    var data = JSON.parse(JSON.stringify(request));
                    //limpando dados da tabela
                    $('.content-table td').remove();
                    //imprimindo dados na tabela
                    $.each(data, function(key, item){
                        $('.content-table').append('<tr>'+
                        '<td>'+(item.id ? item.id : '-')+'</td>'+
                        '<td>'+item.nome+'</td>'+
                        '<td>'+item.sobrenome+'</td>'+
                        '<td>'+(item.email ? item.email : '-')+'</td>'+
                        '<td>'+(item.tipo ? item.tipo : '-')+'</td>'+
                        '<td>'+(item.celular ? item.celular : '-')+'</td>'+
                        '<td>'+(item.cpf ? item.cpf : '-')+'</td>'+
                        '</tr>');            
                    });
                
                }).fail(function error(request){
                    console.log(request);
                    console.log("ERRO AO ENVIAR DADOS");
               
        });
    }

</script>

<?php include("./footer.php")?>