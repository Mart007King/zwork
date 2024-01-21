
<?php
    
        require_once("../classes/Work.php");
        require_once("../classes/User.php");
        
        if (isset($_SESSION['useronline'])) {
            
            $idd = $_SESSION['useronline'];
            $details = $user->get_userbyid($idd);
            $name = $details["user_fname"];
            $lname = $details["user_lname"];

            $dp = $wk->fetch_picture($idd);

        }

    ?>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <div class="navbar-brand m-0">
        <img src="../uploaded/<?php echo $dp['profille_pic']; ?>" class="navbar-brand-img h-100 rounded-5" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white"> <?php echo $name . " ". $lname; ?> </span>
      </div>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="alljobs.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">All Jobs</span>
          </a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link text-white " href="message.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-briefcase opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Messages</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="profile.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../logout.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Log-out</span>
          </a>
        </li>
        
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn bg-gradient-success w-100" href="../jobs/create_jobs.php" >Create A Job </a>
      </div>
    </div>
  </aside>