<!DOCTYPE html>
<html>
<head>
    <title>Crud PHP com MySQli</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery/jquery.mask.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $(document).ready(function(){
          $("#telefone").mask("(00) 0000-0000");
        });

        $(".btnRegistrar").click(function(){
          
        });
    });
</script>
</head>
<body>
	<section class="content p-5">
		<div class="box_form">
			<h1>Informações:</h1>
			<form id="form_cadastro">
				<label for="name">Nome</label><br>
				<input type="text" name="nome_usuario" id="nome_usuario" required/><br><br>
				<label for="name">Telefone</label><br>
				<input type="text" name="telefone" id="telefone" placeholder="(91) 9999-9999"/><br><br>
				<label for="name">Endereço</label><br>
				<input type="text" name="endereco" id="endereco"/><br><br>
				<input type="submit" form="form_cadastro" value="Registrar"/><br><br>
			</form>
		</div>
		
		<div class="lista_usuario">
			
		</div>
	</section>


	<script src="js/script.js"></script>
</body>
</html>