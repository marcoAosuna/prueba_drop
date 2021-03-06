<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Checkboxradio - Default functionality</title>
 
  <link href="css/tema_black/jquery-ui.theme.min.css" rel="stylesheet">
  <link href="css/jquery-ui.structure.min.css" rel="stylesheet">
  <link href="libs/bootstrap/css/bootstrap.css" rel="stylesheet">
  
 <script src="js/jquery.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/ui_punch.js"></script>
<script src="libs/bootstrap/js/bootstrap.js"></script>

<style type="text/css">
	body{
		background-color: #fc9;
		font-family: sans-serif;
		font-size: 0.875em;
	}
	.azul, .rojo{
		width: 25px;
		height: 20px;
		position: absolute;
	}
	.azul{
		background-color: #33c;
	}
	.rojo{
		background-color: #c33;
	}
	.suelta{
		padding: 10px;
		border: 1px solid #ddd;
		width: 200px;
		float: right;
		text-align: center;
		margin: 10px;
	}
	#sueltarojo{
		background-color: #f99;
	}
	#sueltaazul{
		background-color: #99f;
		clear: both;
	}
	</style>
	<script type="text/javascript">
		function aleatorio(inferior,superior){ 
			numPosibilidades = superior - inferior 
			aleat = Math.random() * numPosibilidades 
			aleat = Math.floor(aleat) 
			return parseInt(inferior) + aleat 
		} 
		
		$(document).ready(function(){
			//defino los elementos que se pueden arrastrar
			$(".arrastrable").draggable();
			$(".arrastrable").data("soltado", false);
			
			//voy a crear una variable para contar los elementos que estoy soltando
			$(".suelta").data("numsoltar", 0);
			//defino elementos donde se puede soltar
			$(".suelta").droppable({
				drop: function( event, ui ) {
					if (!ui.draggable.data("soltado")){
						ui.draggable.data("soltado", true);
						var elem = $(this);
						elem.data("numsoltar", elem.data("numsoltar") + 1)
						elem.html("Llevo " + elem.data("numsoltar") + " elementos soltados");
					}
				},
				out: function( event, ui ) {
					if (ui.draggable.data("soltado")){
						ui.draggable.data("soltado", false);
						var elem = $(this);
						elem.data("numsoltar", elem.data("numsoltar") - 1);
						elem.html("Llevo " + elem.data("numsoltar") + " elementos soltados");
					}
				}
			});
			
			//soltar solo elementos rojos
			$("#sueltarojo").droppable("option", "accept", ".rojo");
			//soltar solo elementos azules
			$("#sueltaazul").droppable("option", "accept", ".azul");
			
			//enlaces para crear nuevos elementos rojos y azules
			$(".creaelemento").click(function(e){
				e.preventDefault();
				var posx = aleatorio(10, 500);
				var posy = aleatorio(80, 200);
				var nuevoElemento = $('<div class="' + $(this).attr("href") + ' arrastrable" style="top: ' + posy + 'px; left: ' + posx + 'px;"></div>');
				nuevoElemento.draggable();
				$(document.body).append(nuevoElemento);
			})
		})
	</script>
</head>
<body>
 
<h1>Probando el comportamiento droppable de jQueryUI</h1>
	<a href="rojo" class="creaelemento">Crea un elemento ROJO</a> | <a href="azul" class="creaelemento">Crea un elemento AZUL</a> 
	<div class="azul arrastrable" style="top: 140px; left: 150px;"></div>
	<div class="rojo arrastrable" style="top: 98px; left: 100px;"></div>
	<div class="rojo arrastrable" style="top: 120px; left: 180px;"></div>
	<div class="azul arrastrable" style="top: 120px; left: 90px;"></div>
	
	<div id="sueltarojo" class="suelta">
		Suelta aquí elementos rojos
	</div>
	<div id="sueltaazul" class="suelta">
		Suelta aquí elementos azules
	</div>

	

</body>
</html>