<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The New generation freelance Marketplace">
    <meta name="keywords" content="Freelance,work,online work,hourly payment,online hourly payments,pay-per-hour jobs,online jobs,skills,talents,find talents around me, sell skills, sell my skills online">
    <title>Create an account</title>

    <link href="../asset/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="../asset/fa/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/animate.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
         input[type='radio']:checked:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -3px;
        left: -1px;
        position: relative;
        background-color: #18C800 !important;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }
    </style>
</head>
<body>
     <!-- Nav Bar Sect -->
     <div class="sticky-top bg-white">
             <?php  include_once("../partials/header2.php")  ?>

        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                     <div class="card text-center position-absolute top-50 start-50 translate-middle border">
                            
                            <form action="../process/process_user_type.php" method="post">
                                <div class="card-body">

                                                <h2 class="card-title mb-5">Join as a Client or freelancer</h2>

                                                <div class="input-group col-10 mt-5 grid gap-5 column-gap-5 d-flex justify-content-between">

                                                    <div class="input-group-text col-5 p-3" id="">
                                                        <div class="card box" id="box1" style="width: 18rem;">
                                                            <div class="card-body box" id="box">
                                                                <input class="form-check-input mt-0 cli" id="client" type="radio" name="sign" value="client" aria-label="Radio button for following text input" autofocus>
                                                                <p style="font-size:25px;" id="text1">I'm a Client,<br> hiring for a project</p>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                    <div class="input-group-text col-5 p-3">
                                                        <div class="card box" id="box2" style="width: 18rem;">
                                                            <div class="card-body box" id="box">
                                                                <input class="form-check-input mt-0 cli" id="free" type="radio" name="sign" value="freelancer" aria-label="Radio button for following text input">
                                                                <p style="font-size:25px;" id="text2">I'm a freelancer,<br> looking for work</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                
                                    <button type="submit" class="btn mt-5 text-light" style="background-color : #18C800 !important;" disabled >Create account</button>
                               
                                
                                </div>
                            </form>   
                            
                    </div>
                </div>
            </div>
        </div>












        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="../asset/query.js"></script>
        <script>
            $(document).ready(function() {
                $(".box").hover(function(){
                    $(this).addClass("border border-success");
                },function(){
                    $(this).removeClass("border border-success");
                })

                $("#box1").click(function(){
                    $(this).addClass("bg-success");
                    $(this).addClass("text-light");
                    $(".btn").removeAttr("disabled").text("Apply as a Client");
                    var i = $("#client").prop("checked");
                   if (i == false) {
                    $("#client").prop("checked",'checked');
                   }
                   var get = $("#box2").hasClass("bg-success");
                   if (get == true) {
                    $("#box2").removeClass("bg-success");
                    
                   }
                   var x = $("#box2").hasClass("text-light");
                   if (x == true) {
                    $("#box2").removeClass("text-light");
                   }
                })

                $("#box2").click(function(){
                    $(this).addClass("bg-success");
                    $(this).addClass("text-light");
                    $(".btn").removeAttr("disabled").text("Apply as a Freelancer");
                    var i = $("#free").prop("checked");
                   if (i == false) {
                    $("#free").prop("checked",'checked');
                   }
                   var see = $("#box1").hasClass("bg-success");
                   if (see == true) {
                    $("#box1").removeClass("bg-success");
                   
                   }
                   var y = $("#box1").hasClass("text-light");
                   if (y == true) {
                    $("#box1").removeClass("text-light");
                   }
                })

            

                
            })
        </script>
</body>
</html>