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

 </head>
 
    <body>
 
        <div class="container">
            <div class="header clearfix">
                <h3 class="text-muted">Drag and Drop Element in DOM using jQuery</h3>
            </div>
 
            <div class="jumbotron" style="height: 700px;">
                <div class="listsa col-md-5"  style="background-color: antiquewhite;min-height: 500px;" id="test">
                    <!--<div class="col-md-5 at_drop" style="background-color: antiquewhite;min-height: 500px;" id="at_drag_1">-->
                    <div style="padding: 20px;" class="col-md-12"></div>
                    <div class="col-md-offset-4 col-md-5 " style="min-height: 100px;background-color: blueviolet;margin-bottom: 30px;" id="blue" color_code="blueviolet">
 
                    </div>
                    <div class="col-md-offset-4 col-md-5 " style="min-height: 100px;background-color: cadetblue; margin-bottom: 30px;" id="cad" color_code="cadetblue">
 
                    </div>
                    <div class="col-md-offset-4 col-md-5" style="min-height: 100px;background-color: gold;display: block;margin-bottom: 30px;" id="gold" color_code="gold">
 
                    </div>
                </div>
                <div  class="listsa col-md-5 col-md-offset-1" id="test2" style="background-color: beige;min-height: 500px;">
                    <div class="listsa  col-md-7 at_validate" style="min-height: 200px;border: 3px solid gold;margin-bottom: 10px;"  accept_color="gold">
 
                    </div>
                    <div class="listsa  col-md-7 at_validate" style="min-height: 200px;border: 3px solid cadetblue;margin-bottom: 10px;"  accept_color="cad">
 
                    </div>
                    <div class="listsa  col-md-7 at_validate" style="min-height: 200px;border: 3px solid blueviolet;margin-bottom: 10px;"  accept_color="blue">
 
                    </div>
                </div>
                <!-- /container -->
            </div>
 
        </div>
 
        <script>
            $(document).ready(function () {
                $('#test, #test2, .at_validate').sortable({
                    connectWith: ".listsa",
                    cursor: "move"
 
                }).disableSelection();
                $(".at_validate").mouseover(function () {
                    var acc_color = $(this).attr("accept_color");
                    var come_color = $(this).find('div').attr('id');
                    if (acc_color != come_color) {
                        $("#test").append($(this).find('div'));
                    }
                    else {
                        $(this).remove().fadeOut(1000);
                        var color_code = $(this).find('div').attr('color_code');
                        var push_div = '<div class="col-md-12" style="background-color: ' + color_code + ';margin-bottom:10px;"> <h3 style="color: green;">Color has been filled out</h3></div>'
                        $(push_div).hide().prependTo("#test2").fadeIn(1000);
                    }
                })
            });
        </script>
 
    </body>
</html>