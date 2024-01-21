
<?php
    session_start();
        require_once("classes/Work.php");
        require_once("classes/User.php");
        
        if (isset($_SESSION['useronline'])) {
            
            $idd = $_SESSION['useronline'];
            $details = $user->get_userbyid($idd);
            $name = $details["user_fname"];

            $dp = $wk->fetch_picture($idd);

        }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Client Dashboard </title>

    <link href="../asset/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="../asset/fa/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/animate.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <style>
        .navbar-nav .nav-item:hover > a {
            color: #FF6B6B;
        }

        .navbar-nav .nav-item:hover > a::after {
        width: 100%;
        }

        .navbar {
            padding: 0;
            position: relative;
            transition: all 0.3s ease-out 0s;
        }

        .navbar-nav .nav-item a {
            font-weight: 400;
            font-size: 16px;
            color: #fff;
            padding: 25px 0;
            position: relative;
            transition: all 0.3s ease-out 0s;
            text-decoration: none;
        }

        .navbar-nav .nav-item a::after {
        content: '';
        position: absolute;
        bottom: 0px;
        left: 0;
        width: 0;
        height: 3px;
        background-color: #18C800;
        transition: all 0.3s ease-out 0s;
        }

        .navbar-nav .nav-item a.active {
        color: #FF6B6B;
        }

        .navbar-nav .nav-item a.active::after {
        width: 100%;
        }
    </style>

</head>

<body>
   
    <main>

        <header>

            <div class="bg-dark position-sticky">

                <div class="container  mb-5">

                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start navbar navbar-expand-lg ">
                        <div class="col-5">
                        <a href="client_dashboard.php" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                            <img src="../images/logo.png" class="bi me-2 img-fluid" width="20%" alt="logo">
                        </a>
                        </div>
                        

                        

                        <ul class="navbar-nav col-5 col-lg-auto my-2 justify-content-start gap-2 my-md-0 text-small">
                            
                            <li class="nav-item">
                                <a href="dashboard.php" class="page-scroll active text-white">
                                <p class="fas fa-home bi d-block p-3 my-3" aria-placeholder="Dashboard"></p>  
                                    <!-- <p class="mt-0"> Dashboard </p>  -->
                                </a>
                            </li>

                            h

                            <!-- <li>
                                
                                <a href="#" class="nav-link link-light text-white">
                                    <p class="fas fa-user bi d-block p-2 mx-3 mb-0"></p> 
                                    <p class="mt-0"> All users </p> 
                                </a>

                            </li>
                        
                            <li>

                                <a href="#" class="nav-link text-white">
                                    <p class="fas fa-business-time bi d-block p-2 mx-3 mb-0"></p> 
                                    <p class="mt-0"> Active jobs </p> 
                                </a>

                            </li> -->

                            <li class="nav-item">

                                <a href="addskill.php" class="text-white">
                                    
                                    <div class="d-flex align-items-center mt-2 p-2">
                                    <p class="fas fa-message bi d-block  my-3" aria-placeholder="Messages"></p> 
                                    </div>
                                   
                                    <!-- <p class="mt-0"> Category/skills </p>  -->
                                </a>

                            </li>

            
                        </ul>

                        <div class="col-1 d-block justify-content-end">
                            <div class="dropdown d-flex justify-content-end text-end mx-2">
                                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle text-success" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="uploaded/<?php echo $dp['profille_pic']; ?>" alt="mdo" width="32" height="32" class="rounded-circle">
                                </a>
                                <ul class="dropdown-menu text-small">
                                    <li><a class="dropdown-item" href="#">Add admin</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Change picture</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                                </ul>
                            </div>
                        </div>
                        

                    </div>

                </div>

            </div>

        </header>

	
