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
		height:400px;
		border:2px solid black;
		float:left;
	}
</style>
<script>
	$(document).ready(function(){
		 $( "#myAcordion" ).accordion();
		$(".source li").draggable({helper:"clone"});
		$("#cart").droppable({
			drop:function(event,ui){
				$("#items").append($("<li></li>").text(ui.draggable.text()));
		    }
	     });
	})
</script>
</head>
 
<body>
	<h2>Items</h2>
	<div id="myAcordion">
		<h3>Books</h3>
		<ul class="source">
			<li>book1</li>
			<li>book2</li>
			<li>book3</li>
			<li>book4</li>
		</ul>
		<h3>Toys</h3>
		<ul  class="source">
			<li>Toy1</li>
			<li>Toy2</li>
			<li>Toy3</li>
			<li>Toy4</li>
		</ul>

	</div>
	<div id="cart">
		<h3>Shopping cart</h3>
		<ol id="items"></ol>
	</div>
	
</body>
</html>
