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
         #draggable-5 { 
            width: 100px; height: 50px; padding: 0.5em; float: left;
            margin: 22px 5px 10px 0; 
         }
         #droppable-8 {    
            width: 120px; height: 90px;padding: 0.5em; float: left; 
            margin: 10px;
         }
      </style>
      
      <script>
         $(function() {
            $( "#draggable-5" ).draggable();
            $("#droppable-8").droppable({
               drop: function (event, ui) {
                  $( this )
                  .addClass( "ui-state-highlight" )
                  .find( "p" )
                  .html( "Dropped!" );
               },  
					
               over: function (event, ui) {
                  $( this )
                  .addClass( "ui-state-highlight" )
                  .find( "p" )
                  .html( "moving in!" );
               },
               out: function (event, ui) {
                  $( this )
                  .addClass( "ui-state-highlight" )
                  .find( "p" )
                  .html( "moving out!" );
               }      
            });
         });
      </script>
   </head>
   
   <body>
      <div id = "draggable-5" class = "ui-widget-content">
         <p>Drag me to my target</p>
      </div>
      <div id = "droppable-8" class = "ui-widget-header">
         <p>Drop here</p>
      </div>
   </body>
</html>