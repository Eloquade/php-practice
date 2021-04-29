<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">

</head>
<body>
<form method="post">
</body>

   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
         #txtFirst {
            display: none;
         }
         #txtThird {
            display: none;
         }
         #txtFifth {
            display: none;

         }
         #validationCustom01 {
             height: 30px;
         }
         #txtFourth {
             width: center;
         }
         #txtSix{
            width: center;
         }

      </style>

      <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   </head>
   <body>
      <?php

       session_start();


       if(!isset($_POST['submit']))
       {
          $_SESSION['count'] = 0;

       }

       do {
          $count=$_SESSION['count']++;
            ?>
            <div class="container h-100" id="demo">
                 <div class="row h-100 justify-content-center align-items-center">
                    <form class="row g-3 needs-validation" method="POST" novalidate>
                     <h1> Area of triangle</h1>

                      <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Enter A value: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" class="form-control" autocomplete="off"  id="validationCustom01" required name="a">
                        <div class="invalid-feedback">
                          Please Enter the Right value!
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Enter B value: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" class="form-control" autocomplete="off"  id="validationCustom01" required name="b">
                        <div class="invalid-feedback">
                          Please Enter the Right value!
                        </div>
                      </div>
                       <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Enter C value: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" class="form-control" autocomplete="off"  id="validationCustom01" required name="c">
                        <div class="invalid-feedback">
                          Please Enter the Right value!
                        </div>
                      </div>



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

                      <div class="col-md-4">
                         <label for="validationCustom02" class="form-label">Area of rectangle</label>
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

         } while ($count == 3);

         if(isset($_POST['submit'])){
              $a = $_POST['a'];
              $b = $_POST['b'];
              $c = $_POST['c'];
              $s = ($a + $b + $c) / 2;
              $area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
              $precision = 4;
               $count=$_SESSION['count'];

               echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class='form-control' id='txtFirst' value= $area>";

               if($count == 3){
                   ?>
                       <div class="container h-100">
                            <div class="row h-100 justify-content-center align-items-center">
                               <form class="row g-3 needs-validation" method="POST" novalidate>
                                <strong><h1>Do you want to continue ?</h1></strong>
                                 <div class="col-md-4">
                                   <button class="btn btn-primary"name="ok"  type="submit">Continue </button>
                                 </div>
                               </form>
                            </div>
                       </div>
                       <script>
                          function myFunction() {
                            var myobj = document.getElementById("demo");
                            myobj.remove();
                          }
                          myFunction();
                       </script>
                   <?php
                   if(isset($_POST['ok']))
                   {
                   header("Refresh:0");
                   }
               }
         }
     ?>
     <script>
         document.addEventListener('DOMContentLoaded', () =>{
             if (document.getElementById('txtFirst').value != 0 ){
                document.getElementById('txtSecond').value = document.getElementById('txtFirst').value
             }
         });

         (function () {
           'use strict'
           let forms = document.querySelectorAll('.needs-validation')
           Array.prototype.slice.call(forms)
             .forEach(function (form) {
               form.addEventListener('submit', function (event) {
                 if (!form.checkValidity()) {
                   event.preventDefault()
                   event.stopPropagation()
                 }

                 form.classList.add('was-validated')
               }, false)
             })
         })()
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
   </body>

</html>
