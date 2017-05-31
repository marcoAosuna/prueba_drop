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
         #draggable-2 { 
            width: 100px; height: 50px; padding: 0.5em; 
            margin: 0px 5px 10px 0; 	    
         }
         #droppable-2,#droppable-3, #droppable-4,#droppable-5 { 
            width: 120px; height: 90px;padding: 0.5em; float: left; 
            margin: 10px; 
         }
      </style>

      <script>
         $(function() {
            $( "#draggable-2" ).draggable();
            $( "#droppable-2" ).droppable({
               drop: function( event, ui ) {
                  $( this )
                  .addClass( "ui-state-highlight" )
                  .find( "p" )
                  .html( "Dropped!" );
               }
            });
				
            $( "#droppable-3" ).droppable({
               disabled : "true",
               drop: function( event, ui ) {
                  $( this )
                  .addClass( "ui-state-highlight" )
                  .find( "p" )
                  .html( "Dropped!" );
               }
            });
				
            $( "#droppable-4" ).droppable({
               tolerance: 'touch',
               drop: function( event, ui ) {
                  $( this )
                  .addClass( "ui-state-highlight" )
                  .find( "p" )
                  .html( "Dropped with a touch!" );
               }
            });
				
            $( "#droppable-5" ).droppable({
               tolerance: 'fit',
               drop: function( event, ui ) {
                  $( this )
                  .addClass( "ui-state-highlight" )
                  .find( "p" )
                  .html( "Dropped only when fully fit on the me!" );
               }
            });
         });
      </script>
   </head>
   
   <body>
      <div id = "draggable-2" class = "ui-widget-content">
         <p>Drag me to my target</p>
      </div>
      <div id = "droppable-2" class = "ui-widget-header">
         <p>Drop here</p>
      </div>
      <div id = "droppable-3" class = "ui-widget-header">
         <p>I'm disabled, you can't drop here!</p>
      </div>
      <div id = "droppable-4" class = "ui-widget-header">
         <p>Tolerance Touch!</p>
      </div>
      <div id = "droppable-5" class = "ui-widget-header">
         <p>Tolerance Fit!</p>
      </div>
   </body>
</html>