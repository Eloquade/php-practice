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
=======
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <title>PHP Program To find Area and Circumference of a Circle</title>
    </head>
    <body>
        <form method="post">
            <table border="0">
                <tr>
                    <td><input type="text" name="num1" value="" placeholder="Enter the radius of a circle"/></td>
                </tr>
                <tr>
                    <td> <input type="submit" name="submit" value="Submit"/></td>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $r = $_POST['num1'];
                $pi = 3.14;
                $area = $pi * $r * $r;
                echo "Area of a Circle is: ".$area;
                echo "<br>";
                $cir = 2*$pi*$r;
                echo "Circumference of a circle is: " .$cir;
                echo "<br>";
                $diameter = 2*$r;
                echo "diameter of a circle is: " .$cir;
                echo "<br>";

                return 0;
            }
        ?>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>

</html>
