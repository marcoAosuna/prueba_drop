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
  #draggable, #draggable2 { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  #droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
  #droppable_dos { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
  </style>
  
  <script>
  $( function() {

    $( "#draggable" ).draggable({
       revert: "valid",
       cursor: "move",
       cursorAt: { top: 56, left: 56 },

       
        /* classes: {
    "ui-draggable": "highlight"
  }, */
      start: function( event, ui) {
        //console.log("me movi");
         //ui.position.left = Math.min( 100, ui.position.left );
      },
      drag: function( event, ui) {
        //console.log("moviendome");
       
      },
      stop: function( event, ui) {
       //console.log("me detuve");
       //$(this ).draggable( "option", "disabled", true );
       //$(this).draggable( "option", "revert", true );
       //$(this).draggable( "disable" );

      } 
    });

    $( "#draggable" ).data("soltado",false);
    $( "#droppable" ).data("numsoltar",0);

    $( "#draggable2" ).draggable({
     //revert: "invalid" 
   });



 
    $( "#droppable" ).droppable({
      //accept: "#draggable",
      /*classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },*/
      drop: function( event, ui ) {
        //console.log("se solto");
       /* $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Correcto!" );*/
            //$(ui.draggable).draggable({revert:false});
           /* if($(ui.draggable).is($("#draggable"))){
             $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Correcto!" );
             
              console.log("es el target");
            }*/
           if (!ui.draggable.data("soltado")){ 
         ui.draggable.data("soltado", true); 
         var elem = $(this); 
         elem.data("numsoltar", elem.data("numsoltar") + 1) 
         elem.html("Llevo " + elem.data("numsoltar") + " elementos soltados"); 
      }   
      },
      out: function( event, ui ) {
        //cuando entra y sale
        //console.log("esta fuera");
        if (ui.draggable.data("soltado")){ 
         ui.draggable.data("soltado", false); 
         var elem = $(this); 
         elem.data("numsoltar", elem.data("numsoltar") - 1); 
         elem.html("Llevo " + elem.data("numsoltar") + " elementos soltados"); 
      } 
      },
       over: function( event, ui ) {
        //console.log("sobre");
       }
    });

    $( "#droppable_dos" ).droppable({
      //accept: "#draggable2",
     //tolerance: "fit",
     /* classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },*/
      drop: function( event, ui ) {
       //$(this).droppable( "disable" );
      },
      out: function( event, ui ) {
        //cuando entra y sale
        //console.log("esta fuera");
       
      },
       over: function( event, ui ) {
        //console.log("sobre");
       }
    });
  } );//fin function
  </script>

</head>
<body>
 
<div id="draggable" class="ui-widget-content special">
   <img id="imagen" src="img/mesa.jpg" class="img-responsive" alt="">
</div>
 
<div id="draggable2" class="ui-widget-content">
  <img src="img/mesa.jpg" class="img-responsive" alt="">
</div>
 
<div id="droppable" class="ui-widget-header">
  <p>Table</p>
</div>

<div id="droppable_dos" class="ui-widget-header">
  <p>Table dos</p>
</div> 
<div id="res">Respuesta</div>
 
</body>
</html>