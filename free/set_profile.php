<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set-Up your profile</title>

    <link href="../asset/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="../asset/fa/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/animate.min.css">

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <?php
    session_start();
        require_once("partials/header2.php");
        require_once('classes/User.php');
        require_once('classes/Work.php');
       

        if (isset($_SESSION['useronline'])) {

            $idd = $_SESSION['useronline'];
            $details = $user->get_userbyid($idd);
            $name = $details["user_fname"];
            

            $category = $wk->get_cate();

        }
    ?>
    <div class="container">
        
        <div class="row justify-content-center">

            <div class="col-md-3">

                <small class="d-block text-body-secondary">

                    <div class="card card-sm card-body mt-5 p-2 shadow-lg">

                        <div class="card-header">

                            <p> <strong> Hi, <?php echo $name; ?>. <br> Your Profile is almost ready! Just complete these few steps </strong> </p>
                           
                        </div>
         
                        <div class="d-flex flex-column flex-md-row mt-3 mx-auto">

                            <div class="list-group">

                                <label class="list-grop-item d-flex gap-3 mb-3">
                                    <input type="checkbox" class="form-check-input" checked disabled name="progress" id="pro">
                                    <span class="form-checked-input">
                                        <strong> <i> Gender </i> </strong>
                                    </span>
                                </label>

                                <label class="list-grop-item d-flex gap-3 mb-3">
                                    <input type="checkbox" class="form-check-input"  disabled name="progress" id="phone">
                                    <span class="form-checked-input">
                                        <strong> <i>Phone details</i> </strong>
                                    </span>
                                </label>

                                <label class="list-grop-item d-flex gap-3 mb-3">
                                    <input type="checkbox" class="form-check-input"  disabled name="progress" id="skil">
                                    <span class="form-checked-input">
                                        <strong> <i>Select Skill</i> </strong>
                                    </span>
                                </label>

                            </div>
                        </div>
                    </div>
                </small>
              
               
            </div>

            <div class="col-md-6 m-4">
                <div class="form-sigin w-100 mx-auto">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-head">
                            <h2 class="text-center font-weight-heavy my-3" style="color: darkgreen !important">
                            <i class="fas fa-users"></i> Set-Up Profile
                            </h2>
                            <p class="text-center font-weight-light">
                                You have to Set-up your profile to get jobs
                            </p>
                            <hr>
                        </div>

                        <?php 
                                    if (isset($_SESSION['errormsg'])) {

                                      echo "<div class='alert alert-danger'>". $_SESSION['errormsg']. "</div>";
                                      unset($_SESSION['errormsg']);
                                                
                                     }
                        ?>
                        <p> <small> <i id="error1"></i> </small>  </p>


                        <div class="card-body animate__animated animate__fadeInRight" id="gend_body"> 
                            
                            
                            <div class="d-flex justify-content-center">
                                <h4 class="text-center text-primary"> Select your Gender </h4>
                            </div>

                                <form action="process/process_gender.php" method="post" id="myform">

                                    <div class="d-flex justify-content-center">
                                    
                                        <div class="d-flex flex-column gap-4 p-3">

                                                <div class="list-group">
                                                    
                                                    <label class="list-group-item d-flex gap-2">

                                                        <i class="fas fa-person mt-1"></i>
                                                        <input type="radio" name="gender" value="male" id="gend" class="form-check-input gend">
                                                        <span>  Male </span>
                                    
                                                    </label>

                                                </div>

                                                <div class="list-group ">

                                                    <label class="list-group-item d-flex gap-2">

                                                        <i class="fas fa-person-dress mt-1"></i>
                                                        <input type="radio" name="gender" value="female" id="gend" class="form-check-input gend">
                                                        <span>  Female </span>
                                    
                                                    </label>
                                                    
                                                </div>
                                          
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end mt-3">
                                        <button type="submit" name="btn_next" class="btn btn-success" id="btn_go"> <i>next:</i>  Phone details</button>
                                    </div>

                                </form> 

                            </div>
                            
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
      
    </div>


    
     <!-- FOOTER -->
     <footer class="container-fluid" style="height:100px; line-height:100px;">
        
        <p>&copy; <?php echo 2023 . " - ". date("Y"); ?> &nbsp; <i>Z-work Technologies</i> </p>
        </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../asset/query.js"></script>
    <script>
        $(document).ready(function() {

            $("#btn_go").click(function(event) {

                var see = $("#gend").prop("checked");
               
                if (see == false) {
                    $("#error1").html("<div class='alert alert-danger'>"+'Please select a Gender'+'</div>');
                    event.preventDefault();
                } else {
                    $("#btn_go").unbind('submit');
                }
                
            })
    
        })
    </script>
</body>
</html>