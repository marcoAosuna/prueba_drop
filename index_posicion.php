
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
      #demoDrag { width: 140px; height: 140px; background: url(img/ellas.png) no-repeat; }
      #status{font-family:Verdana; padding:5px; color:#fff; background:#44c756;
        box-shadow:4px 4px 4px #444;border-radius:10px;}
     </style>
    <script>
         $(document).ready(function() {
         $("#demoDrag").draggable({
          stop: function(e, ui) {
            var rel = $("<p />", {
         text: "The Draggable was moved " + ui.position.top + "px down, and " + ui.position.left + "px left of its initial position."
            }),
            offset = $("<p />", {
         text: "The Draggable was moved " + ui.offset.top + "px down , and " + ui.offset.left + "px left relative to the displayport."
            });
            $("#status").empty().append(rel).append(offset);
          }
        });
        });
    </script>
</head> 
<body>
   <div id="container">
      <div id="demoDrag"></div>
    </div>
    <div id="status"></div>

</body>
</html>