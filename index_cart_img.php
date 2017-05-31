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
<style>
	
	#myAcordion{
		width:400px;
		
		float:left;
		margin:25px;
		
	}
	#cart{
		width:400px;
		height:800px;
		border:2px solid black;
		float:left;
	}
	.tiny{
		width:30px;
		height:30px;
		border:2px solid black;
     }
     .eti{
     	float:left;

     }
</style>
<script>
	$(document).ready(function(){
		var total=0;
		 $( "#myAcordion" ).accordion();
		$(".source li").draggable({helper:"clone"});
		$("#cart").droppable({
			drop:function(event,ui){
				//$("#items").append($('<li><img src="img/ellas.png" alt="" /></li>'));
				var dir=ui.draggable.find('img').attr('src');
				var precio=parseFloat(ui.draggable.attr('precio'));
				var ident=ui.draggable.attr('ide');
				total=total+precio;
				$("#total").html("Total de la compra"+total);
				
               $("#items").append($('<li><img src="'+dir+'" alt="" class="img-responsive tiny" /><span ><strong>'
					+'    '+precio+' pesos    '+'</strong></span><button id="'+ident+'" precio="'+precio+'"  class="btn btn-danger btn-sm">Eliminar</button></li>'));

				

				}//fin drop

		});//fin droppable
		$(".xuno").on("click",function(){
			console.log("hice click");
		})
		$("#cart").on("click","ol button",function(){
			var subtotal=parseFloat($(this).attr('precio'));
			total=total-subtotal;
			$("#total").html("Total de la compra"+total);
			$(this).parent().remove();

		});
	})
</script>
</head>
 
<body>
	<button class="xuno">Click</button>
	<h2>Items</h2>
	<div id="myAcordion">
		<h3>Books</h3>
		<ul class="source">
			<li  precio="150" ide="uno"><img src="img/ellas.png" alt=""><span>Precio 150 pesos</span></li>
			<li precio="40" ide="dos"><img src="img/ellos_hombres.png" alt=""><span>Precio 40 pesos</span></li>
			<li precio="440" ide="tres"><img src="img/ella_final_malla.png" alt=""><span>Precio 440 pesos</span></li>
			
		</ul>
		<h3>Toys</h3>
		<ul  class="source">
			<li class="uno">Toy1</li>
			<li>Toy2</li>
			<li>Toy3</li>
			<li>Toy4</li>
		</ul>

	</div>
	<div id="cart">
		<h3>Shopping cart</h3>
		<ol id="items"></ol>
		<div id="total">Total</div>
	</div>
	
</body>
</html>
