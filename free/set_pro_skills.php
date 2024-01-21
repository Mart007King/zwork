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
                                You have to Set-up your profile to get jobs
                            </p>
                            <hr>
                        </div>


                        <div class="card-body" id="gend_body"> 
                           

                        <div id="gend3" class="card-body animate__animated animate__fadeInRight"> 
                         
                            <div class=" text-center">
                                <h4 class="text-center text-primary">Select your Skills</h4>
                                <small> <p class="alert alert-info"> <i >  Please choose a category and select as many skills that suits you </i> </p> </small>
                            </div>

                            <p> <small> <i id="error1"></i> </small>  </p>

                            <div class="d-flex justify-content-center">

                                <form action="process/process_skill.php" method="post">

                                    <div class="d-flex flex-column gap-4 p-3">
                                    
                                            <select name="cate" id="show_cat" class="form-select mb-3 form-control show_cat">
                                                            <option value="">please select a category</option>
                                                            <?php
                                                                foreach ($category as $display) { 
                                                            ?>
                                                            <option value=" <?php echo $display['category_id']; ?> "> <?php echo $display['category_name']; ?> </option>
                                                            <?php
                                                                }
                                                            ?>
                                            </select> 
                                            
                                            <div class="d-flex gap-2 justify-content-center py-2">

                                                <div class="d-flex flex-wrap">

                                                    <button class="btn btn-sm select animate__animated animate__fadeInUp rest" type="button" id="select1" style="display: none;" >

                                                        <?php
                                                        $cat_id1 = 1;
                                                        $skill = $wk->get_skilbyid($cat_id1);

                                                        foreach ($skill as $name) {
                                                        ?>
                                                            <span class= 'badge d-flex p-2 align-items-center bg-primary border border-primary-subtle rounded-pill cover' >
                                                                
                                                                <span class='text-light'>

                                                                <input hidden class='hidden_check' type='checkbox' name="skill[]" value= "<?php echo $name['skill_id']; ?>" >   

                                                                    <?php echo $name['skill_name']; ?> 
                                                                    
                                                                </span>
                                                                
                                                            </span>
                                                            
                                                            
                                                        <?php     
                                                        }
                                                        ?>

                                                    </button>

                                                    <button class="btn btn-sm select animate__animated animate__fadeInUp rest" type="button" id="select2" style="display: none;">

                                                            <?php
                                                            $cat_id2 = 2;
                                                            $skill = $wk->get_skilbyid($cat_id2);

                                                            foreach ($skill as $name) {
                                                            ?>
                                                                <span class= 'badge d-flex p-2 align-items-center bg-primary border border-primary-subtle rounded-pill cover'>
                                                                    
                                                                    <span class='text-light'>

                                                                        <input hidden class='hidden_check' type='checkbox' name="skill[]" value= "<?php echo $name['skill_id']; ?>"> 

                                                                        <?php echo $name['skill_name']; ?> 
                                                                        
                                                                    </span>
                                                                    
                                                                </span>
                                                                
                                                                
                                                            <?php     
                                                            }
                                                            ?>

                                                    </button>

                                                    <button class="btn btn-sm select animate__animated animate__fadeInUp rest" type="button" id="select3" style="display: none;">

                                                        <?php
                                                        $cat_id3 = 3;
                                                        $skill = $wk->get_skilbyid($cat_id3);

                                                        foreach ($skill as $name) {
                                                        ?>
                                                            <span class= 'badge d-flex p-2 align-items-center bg-primary border border-primary-subtle rounded-pill cover'>
                                                                
                                                                <span class='text-light'>

                                                                    <input hidden class='hidden_check' type='checkbox' name="skill[]" value= "<?php echo $name['skill_id']; ?>" > 

                                                                    <?php echo $name['skill_name']; ?> 
                                                                    
                                                                </span>
                                                                
                                                            </span>
                                                            
                                                            
                                                        <?php     
                                                        }
                                                        ?>

                                                    </button>

                                                    <button class="btn btn-sm select animate__animated animate__fadeInUp rest" type="button" id="select4" style="display: none;">

                                                        <?php
                                                        $cat_id4 = 4;
                                                        $skill = $wk->get_skilbyid($cat_id4);

                                                        foreach ($skill as $name) {
                                                        ?>
                                                            <span class= 'badge d-flex p-2 align-items-center bg-primary border border-primary-subtle rounded-pill cover'>
                                                                
                                                                <span class='text-light'>

                                                                    <input hidden class='hidden_check' type='checkbox' name="skill[]" value= "<?php echo $name['skill_id']; ?>"> 

                                                                    <?php echo $name['skill_name']; ?> 
                                                                    
                                                                </span>
                                                                
                                                            </span>
                                                            
                                                            
                                                        <?php     
                                                        }
                                                        ?>

                                                    </button>

                                                    <button class="btn btn-sm select animate__animated animate__fadeInUp rest" type="button" id="select5" style="display: none;">

                                                        <?php
                                                        $cat_id5 = 5;
                                                        $skill = $wk->get_skilbyid($cat_id5);

                                                        foreach ($skill as $name) {
                                                        ?>
                                                            <span class= 'badge d-flex p-2 align-items-center bg-primary border border-primary-subtle rounded-pill cover'>
                                                                
                                                                <span class='text-light'>

                                                                    <input hidden class='hidden_check' type='checkbox' name="skill[]" value="<?php echo $name['skill_id']; ?>"> 

                                                                    <?php echo $name['skill_name']; ?> 
                                                                    
                                                                </span>
                                                                
                                                            </span>
                                                            
                                                            
                                                        <?php     
                                                        }
                                                        ?>

                                                    </button>

                                                    <button class="btn btn-sm select animate__animated animate__fadeInUp rest" type="button" id="select6" style="display: none;" >

                                                        <?php
                                                        $cat_id6 = 6;
                                                        $skill = $wk->get_skilbyid($cat_id6);

                                                        foreach ($skill as $name) {
                                                        ?>
                                                            <span class= 'badge d-flex p-2 align-items-center bg-primary border border-primary-subtle rounded-pill cover'>
                                                                
                                                                <span class='text-light'>

                                                                    <input hidden class='hidden_check' type='checkbox' name="skill[]" value= "<?php echo $name['skill_id']; ?>"> 

                                                                    <?php echo $name['skill_name']; ?> 
                                                                    
                                                                </span>
                                                                
                                                            </span>
                                                            
                                                            
                                                        <?php     
                                                        }
                                                        ?>

                                                    </button>

                                                    <button class="btn btn-sm select animate__animated animate__fadeInUp rest" type="button" id="select7" style="display: none;">

                                                        <?php
                                                        $cat_id7 = 7;
                                                        $skill = $wk->get_skilbyid($cat_id7);

                                                        foreach ($skill as $name) {
                                                        ?>
                                                            <span class= 'badge d-flex p-2 align-items-center bg-primary border border-primary-subtle rounded-pill cover' >
                                                                
                                                                <span class='text-light'>

                                                                    <input hidden class='hidden_check' type='checkbox' name="skill[]" value= "<?php echo $name['skill_id']; ?>"> 

                                                                    <?php echo $name['skill_name']; ?> 
                                                                    
                                                                </span>
                                                                
                                                            </span>
                                                            
                                                            
                                                        <?php     
                                                        }
                                                        ?>

                                                    </button>

                                                    <button class="btn btn-sm select animate__animated animate__fadeInUp rest" type="button" id="select8" style="display: none;">

                                                        <?php
                                                        $cat_id8 = 8;
                                                        $skill = $wk->get_skilbyid($cat_id8);

                                                        foreach ($skill as $name) {
                                                        ?>
                                                            <span class= 'badge d-flex p-2 align-items-center bg-primary border border-primary-subtle rounded-pill cover'>
                                                                
                                                                <span class='text-light'>

                                                                    <input hidden class='hidden_check' type='checkbox' name="skill[]" value=" <?php echo $name['skill_id']; ?>" > 

                                                                    <?php echo $name['skill_name']; ?> 
                                                                    
                                                                </span>
                                                                
                                                            </span>
                                                            
                                                            
                                                        <?php     
                                                        }
                                                        ?>

                                                    </button>

                                                    <button class="btn btn-sm select animate__animated animate__fadeInUp rest" type="button" id="select9" style="display: none;">

                                                        <?php
                                                        $cat_id9 = 9;
                                                        $skill = $wk->get_skilbyid($cat_id9);

                                                        foreach ($skill as $name) {
                                                        ?>
                                                            <span class= 'badge d-flex p-2 align-items-center bg-primary border border-primary-subtle rounded-pill cover'>
                                                                
                                                                <span class='text-light'>

                                                                    <input hidden class='hidden_check' type='checkbox' name="skill[]" value= "<?php echo $name['skill_id']; ?>" > 

                                                                    <?php echo $name['skill_name']; ?> 
                                                                    
                                                                </span>
                                                                
                                                            </span>
                                                            
                                                            
                                                        <?php     
                                                        }
                                                        ?>

                                                    </button>

                                                    <button class="btn btn-sm select animate__animated animate__fadeInUp rest" type="button" id="select0" style="display: none;">

                                                        <?php
                                                        $cat_id0 = 10;
                                                        $skill = $wk->get_skilbyid($cat_id0);

                                                        foreach ($skill as $name) {
                                                        ?>
                                                            <span class= 'badge d-flex p-2 align-items-center bg-primary border border-primary-subtle rounded-pill cover'>
                                                                
                                                                <span class='text-light'>

                                                                    <input hidden class='hidden_check' type='checkbox' name="skill[]" value= "<?php echo $name['skill_id']; ?>"> 

                                                                    <?php echo $name['skill_name']; ?> 
                                                                    
                                                                </span>
                                                                
                                                            </span>
                                                            
                                                            
                                                        <?php     
                                                        }
                                                        ?>

                                                    </button>

                                                    <button class="btn btn-sm select animate__animated animate__fadeInUp rest" type="button" id="select11" style="display: none;">

                                                        <?php
                                                        $cat_id11 = 11;
                                                        $skill = $wk->get_skilbyid($cat_id11);

                                                        foreach ($skill as $name) {
                                                        ?>
                                                            <span class= 'badge d-flex p-2 align-items-center bg-primary border border-primary-subtle rounded-pill cover'>
                                                                
                                                                <span class='text-light'>

                                                                    <input hidden class='hidden_check' type='checkbox' name="skill[]" value= "<?php echo $name['skill_id']; ?>"> 

                                                                    <?php echo $name['skill_name']; ?> 
                                                                    
                                                                </span>
                                                                
                                                            </span>
                                                            
                                                            
                                                        <?php     
                                                        }
                                                        ?>

                                                    </button>

                                                </div>
                                                
                                        
                                        </div>
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

            $(".cover").click(function() {
               
               var see = $(this).hasClass("bg-success");
               if (see == false) {
                   $(this).addClass("bg-success");
               } else {
                   // $(".hidden_check").removeAttr("checked");
                   $(this).removeClass("bg-success");  
               }

               var check = $(this).find("input").prop("checked");
               if (check == false) {
                   $(this).find("input").attr("checked",'checked');
               }else {
                   $(this).find("input").removeAttr("checked");
               }
           })

            $(".show_cat").change(function() {
                
                var data = $(this).val();      

                if (data == 1) {
                    $(".rest").hide();
                    $("#select1").show();
                    
                } else if (data == 2) {
                    $(".rest").hide();
                    $("#select2").show();
                    
                } else if (data == 3) {
                    $(".rest").hide();
                    $("#select3").show();
                    
                } else if (data == 4) {
                    $(".rest").hide();
                    $("#select4").show();
                    
                } else if (data == 5) {
                    $(".rest").hide();
                    $("#select5").show();
                    
                } else if (data == 6) {
                    $(".rest").hide();
                    $("#select6").show();
                    
                } else if (data == 7) {
                    $(".rest").hide();
                    $("#select7").show();
                   
                } else if (data == 8) {
                    $(".rest").hide();
                    $("#select8").show();
                    
                } else if (data == 9) {
                    $(".rest").hide();
                    $("#select9").show();
                    
                } else if (data == 0) {
                    $(".rest").hide();
                    $("#select0").show();
                    
                } else if (data == 11) {
                    $(".rest").hide();
                    $("#select11").show();
                    
                } else {
                    $(".rest").hide();
                }

                $("#btn3").removeAttr("disabled"); 
            })

    
        })
    </script>
</body>
</html>

   