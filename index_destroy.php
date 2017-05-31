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
         .draggable-4 { 
            width: 90px; height: 50px; padding: 0.5em; float: left;
            margin: 0px 5px 10px 0;
            border: 1px solid red;  
            background-color:#B9CD6D;
         }
         .droppable-7 { 
            width: 100px; height: 90px;padding: 0.5em; float: left; 
            margin: 10px; 
            border: 1px solid black; 
            background-color:#A39480;
         }
         .droppable.active { 
            background-color: red; 
         }
      </style>
      
      <script>
         $(function() {
            $('.draggable-4').draggable({ revert: true });
            $('.droppable-7').droppable({
               hoverClass: 'active',
               drop: function(e, ui) {
                  $(this).html(ui.draggable.remove().html());
                  $(this).droppable('destroy');
                  $( this )
                  .addClass( "ui-state-highlight" )
                  .find( "p" )
                  .html( "i'm destroyed!" );
               }
            });
         });
      </script>
   </head>
   
   <body>
      <div class = "draggable-4"><p>drag 1</p></div>
      <div class = "draggable-4"><p>drag 2</p></div>
      <div class = "draggable-4"><p>drag 3</p></div>

      <div style = "clear: both;padding:10px"></div>

      <div class = "droppable-7">drop here</div>
      <div class = "droppable-7">drop here</div>
      <div class = "droppable-7">drop here</div>
   </body>
</html>