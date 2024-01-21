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
        require_once("classes/User.php");
        require_once("classes/Work.php");
       

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

                            <p> <strong> Great, <?php echo $name; ?>. <br> This is the final step! </strong> </p>
                           
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
                                    <input type="checkbox" class="form-check-input" checked disabled name="progress" id="phone">
                                    <span class="form-checked-input">
                                        <strong> <i>Phone details</i> </strong>
                                    </span>
                                </label>

                                <label class="list-grop-item d-flex gap-3 mb-3">
                                    <input type="checkbox" class="form-check-input" checked disabled name="progress" id="skil">
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
                                You have to Set-up your profile to posting jobs
                            </p>
                            <hr>
                        </div>


                        <div class="card-body" id="gend_body"> 
                           
                        <?php 
                                    if (isset($_SESSION['errormsg'])) {

                                      echo "<div class='alert alert-danger'>". $_SESSION['errormsg']. "</div>";
                                      unset($_SESSION['errormsg']);
                                                
                                     }
                        ?>
                        <p> <small> <i id="error1"></i> </small>  </p>


                        <div id="gend3" class="card-body animate__animated animate__fadeInRight"> 
                         
                            <div class=" text-center">
                                <h4 class="text-center text-primary">Upload a Picture</h4>
                                
                            </div>

                            <p> <small> <i id="error1"></i> </small>  </p>

                            <div class="d-flex justify-content-center">
                                <!-- <img src="images/user.png" alt="display" id="display" width="100" height="100" class="rounded-circle border border-success"> -->
                               

                                <form action="process/process_uupload.php" method="post" id="myform" enctype="multipart/form-data">

                                    <div class="d-flex flex-column align-items-center gap-4 p-3">
                                                                                 
                                        <input type="file" name="picture" id="uplo" class="form-control">
                                        <button type="submit" class="btn btn-success" name="btn_submit" id="btn5"> Submit </button>

                                    </div>

                                    
                                </form>
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
            
            $("#btn5").click(function(event) {
               
                var fileToUpload = $('#uplo').val();
                if (fileToUpload == "") {
                    $("#error1").html("<div class='alert alert-danger'>"+'Please upload a display picture'+'</div>');
                    event.preventDefault();
                } else {
                      $("#btn5").unbind("submit");
                }
              
                // var form = new FormData(allform);
                        // $.ajax
                    // ({
                    //     url: "process/process_uupload.php",
                    //     data: fileToUpload,
                    //     type: "post",
                    //     dataType: "json",
                    //     cache: false,
                    //     contentType: false,
                    //     processData: false,
                    //     success:function(rsp) {
                    //         if (rsp['status'] == 1) {
                    //             $("#display").html(`<img src='uploaded/${rsp['message']}' width='100' height='100'>`);
                    //         } else {
                    //             $("#display").html(rsp['message']);
                    //         }
                    //     },
                    //     error:function(err) {
                    //         console.error(err);
                    //     }
                    // })
                
            })
        })
    </script>
</body>
</html>

   