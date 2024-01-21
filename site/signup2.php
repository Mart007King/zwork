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
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      #look {
        margin-top: -35px;
      }
    </style>
</head>
<body>
     <!-- Nav Bar Sect and inclusion of header and class -->
     <div class="sticky-top bg-white">
             <?php  
             session_start();
             include_once("../partials/header3.php"); 
             require_once("../classes/User.php");

             $country = $user->fetch_country();
             
             
             ?>

     </div>

     <!-- content starts here -->

     <main class="form-signin w-100 m-auto">

        <div class="container col-md-6 px-4 py-5">

            <h1 class="text-center"> Create your <?php
                if (isset($_SESSION['usertype'])) {
                echo "<span class='text-success'>"."<i>". $_SESSION['usertype']."</i>"."</span>";
                
                }
                ?> <br> Account
            </h1>
            <p> <i id="error"></i> </p>

            <form action="../process/process_signup.php" method="post" name="myform" id="myform">

                <div class="form-group row mt-4">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="fname" id="namy" class="form-control border-success required" id="floatingfname" placeholder="Firstname" >
                           
                            <label for="floatingfname">Firstname</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="lname" id="lnamy" class="form-control border-success required" id="floatinglname" placeholder="Lastname">
                            
                            <label for="floatinglname">Lastname</label>
                        </div>
                    </div>

                </div>

                <div class="form-group row mt-4">
                    <div class="col-md-6">
                        <div class="">
                            <select class="form-select border-success" name="countries" id="country">
                                <option value=""> <i> Please select country </i> </option>
                                <?php
                                    foreach ($country as $place) {
                                ?>
                                    <option value=" <?php echo $place['country_id']; ?> "> <?php echo $place['country_name']; ?> </option>

                                <?php
                                    }
                                ?>
                            </select>
                            
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="">
                            <p id="state"></p>
                            <label for=""></label>
                        </div>
                    </div>

                </div>

                <div class="form-floating mb-3 mt-3">
                            <input type="email" name="email" id="mails" class="form-control border-success required" id="floatingemail" placeholder="Email address">

                            <p> <i id="mailerror"></i> </p>
                            
                            <label for="floatingemail">Email</label>
                </div>

                <div class="form-floating mb-3">
                            <input type="password" name="password" id="pwd" class="form-control border-success required" id="floatingpwd" placeholder="Password">
                            <i id="look" class="fas fa-eye d-flex justify-content-end"></i>

                            <p class="mt-3"> <i id="pwdfeed"></i> </p>
                            <label for="floatingpwd">Password</label>
                </div>
                
                <div class="form-floating mt-5 mb-3">
                            <input type="password" name="conpwd" id="cpwd" class="form-control border-info required" id="floatingconpwd" placeholder="Confirm Password">
                            
                            <label for="floatingconpwd">Confirm Password</label>
                </div>

                <div class="put">
                    <label for="term"> <input type="checkbox" class="form-checkbox" name="check" id="terms"> I agree to the <a href="#" style="text-decoration: none !important;"> Terms & conditions </a> </label>
                </div>

                <button class="w-100 btn btn-lg noround text-light mt-3 put" disabled style="background-color: #18C800 !important;"  name="btnsubmit" id="btnn" type="submit">Create Account</button>

            </form>

        </div>
        <!-- content ends here -->

        <!-- FOOTER -->
        <footer class="container-fluid" style="height:100px; line-height:100px;">
        
        <p>&copy; <?php echo date("Y"); ?> Z-work Technologies</p>
        </footer>

    </main>



     <script src="../asset/query.js"></script>
    <script>
        $(document).ready(function() {

            $("#country").change(function() { 
                $("#state").load("../process/process_state.php");
            })

            $("#terms").click(function() {
                var see = $("#terms").prop('checked');
                if (see == true) {
                    $("#btnn").removeAttr("disabled");
                } else {
                    $("#btnn").attr("disabled", 'disabled');
                }
                
            })

            $("#look").click(function() {
                
                if ( $("#pwd").attr('type') ==='password' ) {
                    $("#pwd").attr('type','text');
                } else {
                    $("#pwd").attr('type','password');
                }
                 
            })

            $("#mails").change(function(event) {
                event.preventDefault();

                var mail = $("#mails").val();
                var pwd =  $("#pwd").val();

                var mails = "email="+mail;
                    $.ajax({
                        url: "../process/process_email.php",
                        data: mails,
                        type: "post",
                        datatype: "text",
                        beforeSend:function() {
                            event.preventDefault();
                        },
                        success:function(rsp) {
                           $("#mailerror").html(rsp);                       
                        }
                    })
            })

            $("#pwd").change(function(event) {
                event.preventDefault();

               
                var pwd =  $("#pwd").val();

                var pass = "pcode="+pwd;
                    $.ajax({
                        url: "../process/process_pwd.php",
                        data: pass,
                        type: "post",
                        datatype: "text",
                        beforeSend:function() {
                            event.preventDefault();
                        },
                        success:function(rsp) {
                           $("#pwdfeed").html(rsp);                       
                        }
                    })
            })



            $("#myform").submit(function(event) {
             
                var fname = $("#namy").val();
                var lname = $("#lnamy").val();
                var country = $("#country").val();
                var mail = $("#mails").val();
                var pwd = $("#pwd").val();
                var cpwd = $("#cpwd").val();
              
                if ( fname == "" || lname == "" || country == "" || mail == " " || pwd == "" || cpwd == "") {
                    $("#error").html( "<div class='alert alert-danger'>"+"Please complete the form"+"</div>");

                    event.preventDefault();

                }else if (pwd != cpwd) {
                    $("#error").html( "<div class='alert alert-danger'>"+"Password and confirm password must match"+"</div>");

                    event.preventDefault();
                }else {
                    $("#myform").unbind('submit');
                }

            })

        })
    </script>
