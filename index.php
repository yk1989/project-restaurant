<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Document</title>
<link rel="stylesheet" href="css/style.css" />
<script src="js/jquery-2.2.4.min.js"></script>
</head>
<body>
	<div id="wrapper">
		<header>
			<img src="image/logo.gif" alt="Logo del restaurante" />
			<nav>
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Carta</a></li>
					<li><a href="">Promociones</a></li>
					<li><a href="">Contacto</a></li>
				</ul>
			</nav>
		</header>
		<main>
		<section id="principal">
			<h1>MENU DEL DIA</h1>
			
			<?php
			/* aca vamos a crear un menu dinamico que cambia con el dia */
			$platos = array (
					"carne.jpg",
					"ensaladas.jpg",
					"pasta.jpg",
					"pechuga.jpg",
					"pizza.jpg",
					"tarta.jpg",
					"picada.jpg" 
			);
			$precios = array (
					"350 PESOS",
					"200 PESOS",
					"240 PESOS",
					"210 PESOS",
					"250 PESOS",
					"230 PESOS",
					"300 PESOS" 
			);
			$diaActual = date ( 'w' );
			/* w en php toma el valor numerico del dia actual siendo domingo el 0 */
			$platoDia = $platos [$diaActual];
			/* Dia actual en valor numerico asignado a su plato */
			$precioDia = $precios [$diaActual];
			/* Dia actual en valor numerico asignado a su precio */
			
			function ($platoDia, $precioDia) {
			};
			?>
			
			<img class="centrar" src="image/<?php echo("$platoDia") ?>"
				alt="Menú del día" title="Comete esta" />
			<p class="precioFormato">Gran oferta : A SOLO <?php echo$precioDia?>!!!</p>
			<div id="servicios">

				
			<script>

		 $(document).ready(function(){
				
				$.getJSON("servicios.json", function(datos){
					for (var i in datos.prestaciones){
						var tiposServicios=datos.prestaciones[i].descripcion;
						$("#servicios").append(" / "+tiposServicios+" / ");	

					}
				});
			});

	</script>	</div>

<!-- $(document).ready(function(){

$.getJSON("servicios.json", function(datos){

	for (var i in datos.prestaciones){
var tiposServicios=datos.prestaciones[i].descripcion;
$("#servicios").append(" / "+tiposServicios+" / ");
	
		}
	});

}); -->			

			
			<p></p>
		</section>
		<img src="" alt="" /></main>

		<footer>&copy; 2017|Todos los derechos reservados</footer>


	</div>
</body>


</html>



