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
         .wrap {
            display: table-row-group;
         }
         #japanpeople,#indiapeople, #javatutorial,#springtutorial { 
            width: 120px; height: 70px; padding: 0.5em; float: left;
            margin: 0px 5px 10px 0; 
         }
         
         #japan,#india,#java,#spring { 
            width: 140px; height: 100px;padding: 0.5em; float: left; 
            margin: 10px;  
         }
      </style>

      <script>
         $(function() {
            $( "#japanpeople" ).draggable();
            $( "#indiapeople" ).draggable();

            $( "#japan" ).droppable({
               accept: "#japanpeople",
               drop: function( event, ui ) {
                  $( this )
                  .addClass( "ui-state-highlight" )
                  .find( "p" )
                  .html( "Dropped!" );
               }
            });
				
            $( "#india" ).droppable({
               accept: "#indiapeople",
               drop: function( event, ui ) {
                  $( this )
                  .addClass( "ui-state-highlight" )
                  .find( "p" )
                  .html( "Dropped!" );
               }
            });

            $( "#javatutorial" ).draggable({scope : "java"});
            $( "#springtutorial" ).draggable({scope : "spring"});
				
            $( "#java" ).droppable({
               scope: "java",
               drop: function( event, ui ) {
                  $( this )
                  .addClass( "ui-state-highlight" )
                  .find( "p" )
                  .html( "Dropped!" );
               }
            });
				
            $( "#spring" ).droppable({
               scope: "spring",
               drop: function( event, ui ) {
                  $( this )
                  .addClass( "ui-state-highlight" )
                  .find( "p" )
                  .html( "Dropped!" );
               }
            }); 
         });
      </script>
   </head>
   
   <body>
      <div class = "wrap" >
         <div id = "japanpeople" class = "ui-widget-content">
            <p>People to be dropped to Japan</p>
         </div>

         <div id = "indiapeople" class = "ui-widget-content">
            <p>People to be dropped to India</p>
         </div>

         <div id = "japan" class = "ui-widget-header">
            <p>Japan</p>
         </div>

         <div id = "india" class = "ui-widget-header">
            <p>India</p>
         </div>
      </div>
      <hr/>
         
      <div class = "wrap" >
         <div id = "javatutorial" class = "ui-widget-content">
            <p>People who want to learn Java</p>
         </div>
         <div id = "springtutorial" class = "ui-widget-content">
            <p>People who want to learn Spring</p>
         </div>
         <div id = "java" class = "ui-widget-header">
            <p>Java</p>
         </div>

         <div id = "spring" class = "ui-widget-header">
            <p>Spring</p>
         </div>
      </div>
   </body>
</html>