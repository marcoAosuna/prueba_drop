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
      .demoDrag, .demoDrop {font-family:Verdana; border: 5px solid #eee;
        padding: 10px; width: 120px; text-align: center;margin:10px;
        background-color: #44c756; margin: 10px; box-shadow:4px 4px 4px #666;}
      .demoDrop {margin: 5px; height: 70px; width: 150px; margin:20px;
        background:#bce;}
        #dropBox {position: absolute; right:25px;}
        div span {position: relative; }
      .demoDrop.active {border: 3px dashed yellow;}
        .demoDrop.hover {background-color: #fa4b2a;}

    </style>
    <script>
         $(document).ready(function() {
             $('.demoDrag').draggable();
            
            $('div.demoDrop').droppable({
                drop: function(event, ui) {
                  ui.draggable.text("Status : Dropped");
                },
                activeClass: "active",
                hoverClass: "hover",
                tolerance: "fit"
            });

        });
    </script>
  </head> 
<body>
 <div id="dropBox">
        <div id="asiaDrop" class="demoDrop">
            <span>Asia</span>
        </div>
        <div id="europeDrop" class="demoDrop">
            <span>Europe</span>
        </div>        
    </div>
    <div id="india" class="demoDrag">
        <span>India</span>
    </div>
    <div id="germany" class="demoDrag">
        <span>Germany</span>
    </div>    
 
</body>
</html>