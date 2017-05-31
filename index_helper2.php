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
        .demoDrag, .demoDrop {font-family:Verdana; border:5px solid #aaa;
            padding:10px; width: 150px; background-color:#44c654;}
        .demoDrop {height: 200px; width: 200px;background:#fa5}
        #dropZone {position: absolute; right: 5px;}
        .demoDrop.active {border:5px dashed #444}
        .demoDrop.hover {background-color:yellow;}
      </style>
       <script>
         $(document).ready(function() {
            
            $('div.demoDrag').draggable({
                helper: "clone"
            });        
            
            $('#dropBox').droppable({
                activeClass: "active",
                hoverClass: "hover"
            });        
        });

      </script> 
     
</head> 
<body>
  <div id="dropZone">
        <div id="dropBox" class="demoDrop">
            <span>Drop Zone</span>
        </div> 
    </div>
    <div class="demoDrag">
        <img class="img-responsive" src="img/ellas.png"/>
    </div>

</body>
</html>