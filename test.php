<html>
<head>
    <title></title>
</head>
<body>
    <?php
    session_start();

    if(!isset($_POST['submit']))
    {

        $_SESSION['count']=0;

    }
    ?>
    <div class="container h-100">
         <div class="row h-100 justify-content-center align-items-center">
            <form class="row g-3 needs-validation" method="POST" novalidate>
             <strong><h1>Convert fahrenheit to Celsius</h1></strong>
              <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Enter Temprature in Fahrenheit : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" class="form-control" autocomplete="off" id="validationCustom01" required name="far">
                <div class="invalid-feedback">
                  Please Enter Temprature in Fahrenheit!
                </div>
              </div>
              <div class="col-md-4">
                 <label for="validationCustom02" class="form-label">Temprature in Celcius</label>
                 <input type="text" class="form-control"  id="txtSecond" required disabled>
               </div>
              <div class="col-12">
                <button class="btn btn-primary"name="submit" type="submit">Convert</button>
                <button class="btn btn-danger" name= "reset" type="reset">Reset</button>
              </div>

            </form>
         </div>   
    </div>  

<?php
    if(isset($_POST['submit']))
    {
        echo $_POST['far'];
        echo "<br>";
        $count=$_SESSION['count']++;
        $f= $_POST['far'];
        $c= ($f - 32) * (5/9);
        echo "<br>";
        $count=$_SESSION['count']++;

        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class='form-control' id='txtFirst' value=$c >";
        if($count==3)
        {
            echo "You enter 2 times";
            echo "<br>";
            echo "press ok to get again";
            ?>
            <form method="post">
                <input type="submit" name="ok" value="ok">
            </form>
            <?php
            if(isset($_POST['ok']))
            {    
            header("Refresh:0");
            }
        }
    }
    ?>
</body>
</html>