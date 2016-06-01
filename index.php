<!DOCTYPE html>
<html>
<head>

	<title>Protestos Brasil</title>

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/style.css">
</head>
<body>

	<div class="header">
		<div class="background">		
			<div class="container">
				<nav>
					<div class="nav-wrapper">						
						<ul id="nav-mobile" class="right hide-on-med-and-down">
							<li>
								<a href="sass.html">Cadastrar Protesto</a>
							</li>
							<li>
								<a href="badges.html">Colabore</a>
							</li>
								<li>
								<a href="collapsible.html">Contato</a>
							</li>
						</ul>
					</div>
				</nav>

				<!-- Page Content goes here -->
				<h1>Protestos Brasil</h1>

				<div class="row">
					<div class="input-field col s12">
						<input id="search" type="text" class="validate">
						<label for="search">Procurar Protesto</label>
					</div>
				</div>
				<div class="row">
					
					<div class="input-field col s6">
						<select>
							<option value="">Escolha o estado</option>
							<option value="1">Option 1</option>
							<option value="2">Option 2</option>
							<option value="3">Option 3</option>
						</select>
						<label>Filtro de Estado</label>
					</div>

					<div class="input-field col s6">
						<select multiple>
							<option value="">Escolha a cidade</option>
							<option value="1">Option 1</option>
							<option value="2">Option 2</option>
							<option value="3">Option 3</option>
						</select>
						<label>Filtro de Cidade</label>
					</div>

				</div>

				<div class="row">
				 	<div class="col s12 text-center">
						<a class="waves-effect waves-light btn-large red">Procurar</a>
					</div>
				</div>

			</div>
		</div>
	</div>
	        

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-rc1/jquery.min.js"></script>
	
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
	<script>
		$(document).ready(function() {
			$('select').material_select();
		});
	</script>
</body>
</html>