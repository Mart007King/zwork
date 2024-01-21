    <?php
    session_start();
    require_once("admin_guard.php");
    require_once("partials/header.php"); 
        require_once("classes/Admin.php");
        $ad = new Admin();
        $users = $ad->fetch_user();
        $client = $ad->fetch_client();
        $free = $ad->fetch_freelancer();
        $job = $ad->fetch_job();
        $active =  $ad->fetch_active_job();
        $inactive =  $ad->fetch_inactive_job();
        $admin_id = $_SESSION['admin_online'];
        $data = $ad->fetch_admin($admin_id);
    ?>


    <div class="my-3">
        <div class="p-5 text-center bg-body-tertiary">
            <div class="container py-5">
            <h1 class="text-body-emphasis"> Welcome <i class="text-success">  <?php echo $data['admin_name']; ?> </i> to your Dashboard</h1>
            <p class="col-lg-8 mx-auto lead">
                All activities that happens on Z-work User side can be viewed from here including
                All registered users, Users registered as clients, Users registered as freelancers, total amount of 
                jobs posted,active and in-active jobs.
            </p>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row  d-flex justify-content-center">
            
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Total Registered Users</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                            <h4> <?php echo $users; ?> </h4> 
                            <br>
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Total Users registered as Client</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                            <h4> <?php echo $client; ?> </h4> 
                            <br>
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row  d-flex justify-content-center">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Total Users registered as freelancers</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <h4> <?php echo $free; ?> </h4> 
                            <br>
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                     </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Total number of posted jobs</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                           <h4> <?php echo $job; ?> </h4> 
                            <br>
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                </div>
            </div>
        </div>

        <div class="row  d-flex justify-content-center">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-info text-white mb-4">
                    <div class="card-body">Total number of active jobs</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <h4> <?php echo $active; ?> </h4> 
                            <br>
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                     </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-secondary text-white mb-4">
                    <div class="card-body">Total number of in-active jobs</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <h4> <?php echo $inactive; ?> </h4> 
                            <br>
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

                  
        
                           
     
                         


    </main> 

  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>