<html>

<head>
<link rel="stylesheet" href="styles.css">
<title>PHP Program To determine the area of triangle</title>
<h1>Program To determine the Area of Triangle</h1>
</head>
<body>
<form method="post">
<br><br>
Enter A value: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="num1" value="">
<br><br>
Enter B value: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="num2" value="">
<br><br>
Enter C  value: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="num3" value="">
<br><br>
<input type="submit" name= "submit" value="Convert" style="font-size: 15; background-color:  #f27669;">
<?php
if(isset($_POST['submit']))
{
$a = $_POST['num1'];
$b = $_POST['num2'];
$c = $_POST['num3'];
// Compute s //
$s = ($a + $b + $c) / 2;
$area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c)); //Formula for area of the triangle
$precision = 4;
echo "<br>";
echo "<br>";
echo " Area of the trainagle is = ".number_format($area, $precision);
}
?>
</body>
<footer>
<section>
            <figure class="tree">
                <img src="./Images/18.jpg" alt="Area of Triangle">
                <figcaption>Area of Triangle</figcaption>
            </figure>
            <figure class="tree">
                <img src="./Images/19.jpg" alt="Area of Triangle">
                <figcaption>Area of Triangle</figcaption>
            </figure>
</section>
</footer>
=======
  <head>
    <title>PHP Program To determine the area of triangle</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  </head>
  <body>
    <form method="post">
      <table border="0">
      <tr>
        <td> <input type="text" name="num1" value="" placeholder="Enter a value"/> </td>
      </tr>
      <tr>
        <td> <input type="text" name="num2" value="" placeholder="Enter b value"/> </td>
      </tr>
      <tr>
        <td> <input type="text" name="num3" value="" placeholder="Enter c value"/> </td>
      </tr>

      <tr>
        <td> <input type="submit" name="submit" value="Submit"/></td>
      </tr>

      </table>
    </form>
    <?php
      $x='submit';

      if(isset($_POST['submit'])){
        $a = $_POST['num1'];
        $b = $_POST['num2'];
        $c = $_POST['num3'];
        // Compute s //
        $s = ($a + $b + $c) / 2;
        $area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c)); //Formula for area of the triangle
        $precision = 4;
        echo " Area of the trainagle is = ".number_format($area, $precision);
        echo "";
      }
    
    ?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>

</html>
