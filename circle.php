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
                     <h1> Area and Circumference of a Circle</h1>

                      <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Enter the radius of a circle : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" class="form-control" autocomplete="off"  id="validationCustom01" required name="radius">
                        <div class="invalid-feedback">
                          PleaseEnter the radius of a circle!
                        </div>
                      </div>


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



                      <div class="col-md-4">
                         <label for="validationCustom02" class="form-label">Circumference of a circle </label>
                         <input type="text" class="form-control"  id="txtSecond" required disabled>
                       </div>


                          <div class="col-md-4">
                         <label for="validationCustom02" class="form-label">diameter of a circle </label>
                         <input type="text" class="form-control"  id="txtFourth" required disabled>
                       </div>


                          <div class="col-md-4">
                         <label for="validationCustom02" class="form-label">Area of a Circle </label>
                         <input type="text" class="form-control"  id="txtSix" required disabled>
                       </div>

                      <div class="col-11">
                        <button class="btn btn-primary"name="submit" type="submit">Convert</button>
                        <button class="btn btn-danger" name= "reset" type="reset">Reset</button>
                      </div>


                    </form>

                 </div>
            </div>

            <?php

         } while ($count == 3);

         if(isset($_POST['submit'])){
               $r= $_POST['radius'];
              $pi = 3.14;
              $area = $pi * $r * $r;
              $cir = 2*$pi*$r;
              $diameter = 2*$r;
               $count=$_SESSION['count'];

               echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class='form-control' id='txtFirst' value=$cir >";
               echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class='form-control' id='txtThird' value=$cir >";
               echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class='form-control' id='txtFifth' value=$area >";
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
        document.addEventListener('DOMContentLoaded', () =>{
             if (document.getElementById('txtThird').value != 0 ){
                document.getElementById('txtFourth').value = document.getElementById('txtThird').value
             }
         });
         document.addEventListener('DOMContentLoaded', () =>{
             if (document.getElementById('txtFifth').value != 0 ){
                document.getElementById('txtSix').value = document.getElementById('txtFifth').value
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
