<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Response</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <!--icons-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="project.css" />
    <!-- animtion css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

    </style>
</head>
<?php

$conn = mysqli_connect('localhost','root','','project');
$Row = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `data_from_room` ORDER BY id DESC"));
$Row2 = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `date_from_baby` ORDER BY id DESC"));
$Row3 = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `date_from_humd` ORDER BY id DESC"));


?>

<body class="body_display_1">
    <header class="header_dis">
        <h1 class="text-center p-4"> لوحة العرض الرقمية </h1>
    </header>
    <div class="display_1 text-center mt-5">
        <div class="container">
            <div class="row  d-flex justify-content-center ">
                <!-- box1-->
                <div class="col-md-6 m-2   ">
                    <div class="dis_box  p-5">
                        <h1 class="pb-3">درجة حرارة الحاضنة</h1>
                        <h3 class="p-2 title"> الفعلية <span>  34 </span> </h3>
                  
                        <h3 class="tit_2"> المحددة <span class="pl-4 pr-4"> <?php echo $Row["num_upper"]; ?></span> - <span>  <?php echo $Row["num_lower"]; ?></span></h3>


                    </div>
                </div>
                <!-- box2-->
                <div class="col-md-6 m-2 ">
                    <div class="dis_box  p-5">
                        <h1 class="pb-3 ">درجة حرارة الطفل</h1>
                        <h3 class="p-2 title"> الفعلية <span> 12.6</span> </h3>
                        <h3 class="tit_2"> المحددة <span class="pl-4 pr-4"> <?php echo $Row2["number_lower"]; ?></span> - <span>  <?php echo $Row2["number_upper"] ; ?></span></h3>
                    </div>
                </div>
                <!-- box3-->
                <div class="col-md-6  m-2 ">
                    <div class="dis_box  p-5">
                        <h1 class="pb-3"> نسبة الرطوبة</h1>
                        <h3 class="p-2 title"> الفعلية <span> % 12.6 </span></h3>
                        <h3 class="tit_2"> المحددة <span class="pl-4 pr-4"> <?php echo $Row3["input_one"]; ?></span> - <span>  <?php echo $Row3["input_two"]; ?></span></h3>
                    </div>
                </div>

                <div class="col-6 d-flex justify-content-center">
                    <!--box1-->
                    <a href="index.html" class="btn dis_btn btn-primary m-5">قائمة الرئيسية</a>
                </div>
            </div>

        </div>
    </div>






    <script src="//cdn.rawgit.com/Mikhus/canvas-gauges/gh-pages/download/2.1.7/all/gauge.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js">
    </script>

    <script src="display.js"></script>


</body>

</html>