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
  p{font-family:Verdana; padding:20px; background:#44c756; color:#fff;
        box-shadow:4px 4px 4px #555;border:5px solid #eee;}
#demoTooltip{font-family:Verdana; padding:20px; background:#44c756; color:#fff;
        box-shadow:4px 4px 4px #555;border:5px solid #eee;
	
}       

    </style>
    <script>
        $(document).ready(function() {
           $("#demoTooltip").tooltip({
          disabled: true
        });

        $("#enable").click(function(){
          $("#demoTooltip").tooltip("enable");
        })

        $("#disable").click(function(){
          $("#demoTooltip").tooltip("disable");
        })

        });
    </script>
</head> 
<body>
<br><br><br><br><br>

<p>In Terms of size <a href="#" id="demoTooltip" title="Planeta del sistema solar">
    Jupiter</a> is the Biggest Planet. Its mass in two and a half times the mass
  of all other planets in the orbit.It mainly composed of Hydrogen and Helium</p>
 <button id="enable">Enable Tooltip</button>
      <button id="disable">Disable Tooltip</button>
 
  <h4>Initially the tooltip is disabled, click on enable to enable tooltip </h4>
 
</body>
</html>  