<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>PHP Program To find Area and Circumference of a Circle</title>
<h1>Program To find Area and Circumference of a Circle</h1>
</head>
<body>
<form method="post">      
<br><br>
Enter the radius of a circle : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="num1" value="">
<br><br>
<input type="submit" name= "submit" value="Convert" style="font-size: 15; background-color:  #f27669;">  
<br>
<?php
if(isset($_POST['submit']))
{
$r = $_POST['num1'];
$pi = 3.14;
$area = $pi * $r * $r;
echo "<br>";
echo "Area of a Circle is: ".$area;
echo "<br>";
$cir = 2*$pi*$r;
echo "Circumference of a circle is: " .$cir;
echo "<br>";
$diameter = 2*$r;
echo "diameter of a circle is: " .$cir;
echo "<br>";
}
?>
</body>
<footer>
<section>
            <figure class="two">
                <img src="./Images/12.jpg" alt="Area and Circumference of Circle">
                <figcaption>Area and Circumference of Circle</figcaption>
            </figure>
            <figure class="two">
                <img src="./Images/13.jpg" alt="Area and Circumference of Circle">
                <figcaption>Area and Circumference of Circle</figcaption>
            </figure>
</section>
</footer>
</html>
