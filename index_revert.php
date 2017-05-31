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
     #demoDrag{
        width: 140px; height: 140px; border:5px solid #ccc;border-radius:30px;
        background: url(img/ellas.png) no-repeat;box-shadow:4px 4px 4px #555;
}
    </style>
    <script>
         $(document).ready(function() {
          $("#demoDrag").draggable({
          revert: true
        });
        });
    </script>
</head> 
<body>
   <div id="demoDrag"></div>
</body>
</html>