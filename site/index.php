
             <?php 
              include_once("../partials/header.php");
              require_once("../classes/Work.php");
              $categories = $wk->get_cate();
             ?>

        

        </div>

    <!-- Hero -->
    <div class="container ">
        <div class="row d-flex justify-content-end">
            <div class="col-md-6 mt-5" >

                <div class="text-md-start text-sm-start">
                    <h1 style="font-size: 5em; color: #18C800; !important " class="text-align-center">Find work <br> the Z way</h1>
                    <p class="text-secondary mt-3 mb-8x subtitle" style="font-size:20px;">The right person for your next project is here. <br> Home of all Talents in Naija. </p>
                </div>
                
                
                <form action="signup.php">
                    <button class="btn mx-4 mb-lg-0" type="submit" style="background-color: darkgreen; color: white ;!important"><b>Get Started</b></button>
                </form>
                
            </div>

            <div class="col-md-5 d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="../images/hero2.png" class="d-block w-100" alt="Hero">
                        </div>
                        <div class="carousel-item">
                        <img src="../images/hero.png" class="d-block w-100" alt="Hero">
                        </div>
                        
                    </div>
                </div>
                
            </div>

           
        </div>
    </div>

    <!-- body start-->

    <div class="container mt-4">

        <div class="row">
            <div class="col-md">
                <h2 style="font-size: 2em;">Browse talent by category</h2>
                <p>Looking for work? <a href="#" style="color: #18C800; !important">Browse Jobs</a></p>
            </div>
        </div>

        <div class="row small d-flex justify-content-center">

            <?php
                foreach ($categories as $cate) {
            ?>
            <div class="col-md-2 m-2 bg-success box" style=" border-radius: 15px;">
                <a href="category.php" class=" link-light" style="text-decoration: none !important;">
                    <h2 class="text-light small my-3">  <?php echo $cate['category_name']; ?>  </h2>
                    <p> <i class="fas fa-star text-warning"></i>  </p>
                </a>
            </div>
            <?php
                }
            ?>
        </div>

        <div class="row justify-content-between mt-4 d-none">
            <div class="col-md-3 bg-secondary box" style="min-height:100px; border-radius: 15px;"></div>
            <div class="col-md-3 bg-secondary box" style="min-height:100px; border-radius: 15px;"></div>
            <div class="col-md-3 bg-secondary box" style="min-height:100px; border-radius: 15px;"></div>
            <div class="col-md-2 bg-secondary box" style="min-height:100px; border-radius: 15px;"></div>
        </div>
    </div>

    <div class="container-fluid my-2">

        <div class="container px-4 py-5">
            <h2 class="pb-2 border-bottom" style="color: #18C800 !important;">Get Daily Online Jobs</h2>

            <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
                <div class="col d-flex flex-column align-items-start gap-2">
                    <img src="../video/tech.gif" alt="Animated description of zwork" class="img-fluid mt-4 rounded">  
                </div>

                <div class="col">
                    <div class="row row-cols-1 row-cols-sm-2 g-4">

                        <div class="col d-flex flex-column gap-2">
                            <div class="mx-4">
                                <i class="fas fa-users feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3 col-lg-3 mx-5 ml-2 p-2">
                            
                                </i>
                            </div>
                            <h4 class="fw-semibold mb-0 text-body-emphasis">Create your Account</h4>
                            <p class="text-body-secondary">Click on on sign-up button to create your account within 2mins.</p>
                        </div>

                        <div class="col d-flex flex-column gap-2">
                            <div class="mx-4">
                                <i class="fas fa-triangle-circle-square feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3 col-lg-3 mx-5 ml-2 p-2">
                            
                                </i>
                            </div>
                            <h4 class="fw-semibold mb-0 text-body-emphasis">Set-up your Profile</h4>
                            <p class="text-body-secondary">You have to set-up your profile to the standard level of attracting clients.</p>
                        </div>

                        <div class="col d-flex flex-column gap-2">
                            <div class="mx-4">
                                <i class="fas fa-hourglass-2 feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3 col-lg-3 mx-5 ml-2 p-2">
                            
                                </i>
                            </div>
                            
                            <h4 class="fw-semibold mb-0 text-body-emphasis">Specify Category</h4>
                            <p class="text-body-secondary">Make sure to specify your skill category. This will make sure your account is shown to clients when they run any search</p>
                        </div>

                        <div class="col d-flex flex-column gap-2">
                            <div class="mx-4">
                                <i class="fas fa-coins feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3 col-lg-3 mx-5 ml-2 p-2">
                            
                                </i>
                            </div>
                            <h4 class="fw-semibold mb-0 text-body-emphasis">Start Earning</h4>
                            <p class="text-body-secondary">You are ready to start getting jobs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="container justify-content-center mt-1 ">
        <div class="row">
            <div class="col-md">
                <img src="../images/client.png" class="img-fluid rounded d-md-block" alt="clients">
            </div>
        </div>
    </div>

    <div class="container me-auto px-3 justify-content-between" id="boxes">
        <div class="row">

        <div class="col-md-4"> 
                <div class="card w-30" >
                    <button class="bot" style="border-radius: 20px;">
                        <div class="card-body">
                            <h4 class="card-title">Post a job and hire a Pro</h4>
                            <p class="card-text">Ztalent Marketplace -></p>
                                    
                        </div>
                    
                    </button>
                </div>
            </div>

            <div class="col-md-4"> 
                <div class="card w-30" >
                    <button class="bot" style="border-radius: 20px;">
                        <div class="card-body">
                            <h4 class="card-title">Buy Projects</h4>
                            <p class="card-text">Zskils Marketplace -></p>
                                    
                        </div>
                    
                    </button>
                </div>
            </div>

            <div class="col-md-4"> 
                <div class="card w-30" >
                    <button class="bot" style="border-radius: 20px;">
                        <div class="card-body">
                            <h4 class="card-title">Post Job Bounties</h4>
                            <p class="card-text">Create jobs -></p>
                                    
                        </div>
                    
                    </button>
                </div>
            </div>

        </div>
    </div>

    <div class="container mt-5">
        <div class="row d-flex justify-content-center">

            <div class="col-md-3">
                <h3 class="heady" id="top"> <button class="btn btn-success"> Top Skills </button> </h3>
                
                <h3 class="heady" id= "naija"> <button class="btn btn-primary"> Top Skills in Naija </button> </h3>
            </div>

            <div class="col-md-3 hide bg-success text-light" style ="font-size:25px;">
                   <p> <a> Generative AI Specialists </a></p>
                   <p> Data Entry Specialists </p>
                  <p>  Video Editors</p>
                   <p> Data Analyst </p>
                   <p> Shopify Developer </p>
                    <p> Ruby on Rails Developer </p>
                  <p>  Android Developer</p>
                
                
            </div>

            <div class="col-md-3 hide bg-success text-light" style ="font-size:25px;" >
                <p>JavaScript Developer </p>
              <p>  Logo Designer </p>
               <p> Mobile App Developer</p>
              <p>  PHP Developer </p>
              <p>  Python Developer </p>
             
              <p>  Social Media Manager </p>
               <p> Software Developer </p>
       
           
            </div>

            <div class="col-md-2 bg-info text-light" style ="display: none; font-size:25px;" id="show">
                   <p> <a> Generative AI Specialists </a></p>
                   <p> Data Entry Specialists </p>
                  <p>  Video Editors</p>
                   <p> Data Analyst </p>
                   <p> Shopify Developer </p>
                    <p> Software Developer </p>
                  <p>  Android Developer</p>
                   <p> Bookkeeper </p>
                  <p>  Content Writer </p>
                 
            </div>

        </div>

       
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md">
                
                    <img src="../images/tal.png" class="img-fluid rounded" alt="for talents">
                    <div class="d-flex justify-content-center" id="findy">
                        
                            <button  class="btn btn-lg btn-outline-info">
                               <a href="#" class="link-offset-2 link-underline link-underline-opacity-0 link-light"> Find Opportunties </a> 
                            </button>

                    </div>
                
            </div>
        </div>
    </div>

   <?php require_once("../partials/footer.php") ?>

        <script>

            $(document).ready(function() {

                $(".box").mouseenter(function() {
                    $(this).fadeTo(10,0.8);
                })

                $(".box").mouseleave(function() {
                    $(this).fadeTo(5,1);
                })

                $(".bot").mouseenter(function() {
                    $(this).addClass("bg-success");
                })

                $(".bot").mouseleave(function() {
                    $(this).removeClass("bg-success");
                })

                $("#naija").click(function() {
                    $(".hide").hide();
                    $("#show").show();
                })

                $("#top").click(function() {
                    $("#show").hide();
                    $(".hide").show();
                })
            })



        </script>

    </body>
    
</html>