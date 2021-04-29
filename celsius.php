
<html>
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
   
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

      <strong><h1>Convert fahrenheit to Celsius</h1></strong>
   </head>
   <body align="center">
      <center>
         <form method="post">
            <br><br><br>
             Enter Temprature in Fahrenheit : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="far">
            <br><br>
            <input type="submit" name= "submit" value="Convert" style="font-size: 2em; background-color:  #f27669;">
            <input type="reset" value="Reset" style="font-size: 2em; background-color: #4c4c4c;">
         </form>
      </center>

      <?php
         if(isset($_POST['submit'])){
            $f= $_POST['far'];
            $c= ($f - 32) * (5/9);
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style='background-color: #e4ddcb'><center><label class='col-sm-2 control-label' >Temprature in Celcius =</label> <input class='easypositive' value=$c ></span></center>";
         }
     ?>
   </body>
</html>
