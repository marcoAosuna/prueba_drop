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
     #demoDrag {
  width: 200px; height: 200px;
  background: url(img/ellas.png) no-repeat;
  border:5px solid #eee;
  box-shadow:5px 5px 5px #555;
}

#dragHandle {
	width:50px; height: 50px; border-bottom: 10px solid #44c756;
	border-left: 10px solid #44c765; position: absolute;
	right: 15px; top: 15px; cursor: move;
}
    </style>
    <script>
         $(document).ready(function() {
            $("#demoDrag").draggable({
          handle: "#dragHandle"
        });
        });
    </script>
</head> 
<body>
   <div id="demoDrag">
      <div id="dragHandle"></div>
    </div>
  <p>The drag object can be dragged only using 
    the handle specified by green border</p>
</body>
</html>