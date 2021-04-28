
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
<strong><h1>Convert Fahrenheit to Celsius</h1></strong>
</head>
<body>
<form method="post">
<br><br>
 Enter Temprature in Fahrenheit : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="far">
<br><br>
<input type="submit" name= "submit" value="Convert" style="font-size: 15px; background-color:  #f27669;">

<?php
if(isset($_POST['submit']))
{
 $f= $_POST['far'];
 $c= ($f - 32) * (5/9);
 echo "<br>";
 echo "<br>";
 echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style='background-color: #e4ddcb'><center><label class='col-sm-2 control-label' >Temprature in Celcius =</label> <input class='easypositive' value=$c ></span></center>";
}
 ?>
</body>
<footer>
<section>
            <figure class="two">
                <img src="./Images/14.jpg" alt="Fahrenheit to Celsius">
                <figcaption>Fahrenheit to Celsius</figcaption>
            </figure>
            <figure class="two">
                <img src="./Images/15.jpg" alt="Fahrenheit to Celsius">
                <figcaption>Fahrenheit to Celsius</figcaption>
            </figure>
</section>
</footer>
</html>
