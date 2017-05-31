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
      #demoDrag{border:5px solid #44c756;box-shadow:4px 4px 4px #555;}

    </style>
    <script>
         $(document).ready(function() {
           function createHelper() {
          return $("<div />", {
            css: {
              border: "5px solid #444",
              background:"#fa4b2a",
              height: 150,
              width: 150
            }
          });
        }          
         $("#demoDrag").draggable({
          helper: createHelper
        });

        });
    </script>
</head> 
<body>
   <img id="demoDrag" src="img/ellas.png">
  <p>Try dragging the image to see the Helper element.</p>
</body>
</html>