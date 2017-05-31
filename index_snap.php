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
     #demoDrag { width: 150px; height: 150px; background: url(img/ellas.png) no-repeat; }
.ui-draggable-dragging { cursor: move; }
#snapBoundry { width: 500px; height: 200px; border: 5px solid #555; }

    </style>
    <script>
         $(document).ready(function() {
          $("#demoDrag").draggable({
          snap: "#snapBoundry",
          snapMode: "inner",
          snapTolerance: 50
        });
        });
    </script>
</head> 
<body>
   <div id="demoDrag"></div>
    <div id="snapBoundry"></div>
</body>
</html>