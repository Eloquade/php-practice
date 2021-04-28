<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>PHP Program To find Area and Perimeter of a rectangle</title>
<h1>Program To find Area and Perimeter of a rectangle</h1>
</head>
<body>
<form method="post">
<br><br>
Enter length of rectangle side: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="num1" value="">
<br><br>
Enter width of rectangle side : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="num2" value="">
<br><br>
<input type="submit" name= "submit" value="Convert" style="font-size: 15; background-color:  #f27669;">
<?php
if(isset($_POST['submit']))
{
$a = $_POST['num1'];
$b = $_POST['num2'];
$area = $a * $b; //Equation for Area of a square
$perimeter = 2*($a+$b); //Equation for Perimeter of a square
echo "<br>";
echo "<br>";
echo "Area of rectangle  is "." = ".$area ;
echo "<br>";
echo "Perimeter of rectangle is "." = ".$perimeter;
}
?>
</body>
<footer>
<section>
            <figure class="tree">
                <img src="./Images/16.jpg" alt="Perimeter of Rectangle">
                <figcaption>Perimeter of Rectangle</figcaption>
            </figure>
            <figure class="tree">
                <img src="./Images/17.jpg" alt="Fahrenheit to Celsius">
                <figcaption>Perimeter of Rectangle</figcaption>
            </figure>
</section>
</footer>
</html>
