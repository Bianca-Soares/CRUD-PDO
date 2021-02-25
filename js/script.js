//id btn  e método submit
$('#form_cadastro').submit(function(e){
    e.preventDefault();

    var nome_usuario = $('#nome_usuario').val();
    var telefone = $('#telefone').val();
    var endereco = $('#endereco').val();
    console.log(nome_usuario);

    $.ajax({
        url: "http://localhost:3000/registrar.php",
        method: "POST",
        data: {var_usuario: nome_usuario, var_telefone: telefone, var_endereco: endereco},
        dataType: "json"
    }).done(function(result){
        $('#nome_usuario').val('');
        $('#telefone').val('');
        $('#endereco').val('');

        console.log(result);
        getUsuario();
    
    });
});

function getUsuario() {

    $.ajax({
        url: "http://localhost:3000/consultar.php",
        method: "GET",
        dataType: "json"
    }).done(function(result){
            console.log(result);

        for (var i = 0; i < result.length; i++) {
            $('.lista_usuario').prepend('<div class="b_comm"><h4>' + result[i].nome_usuario + '</h4><p>' + result[i].telefone + '</p></div>'+ '</h4><p>' + result[i].var_endereco + '</p></div>');
        }
    
    });
}

getUsuario();
