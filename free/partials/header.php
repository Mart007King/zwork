<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="assets/fa/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/animate.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <style>

    .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }
    </style>
   
</head>

<body>
   
    <main>

        <header>

            <div class="bg-dark position-sticky">

                <div class="container  mb-5">

                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start ">

                        <a href="dashboard.php" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                            <img src="../images/logo.png" class="bi me-2 img-fluid" width="50%" alt="logo">
                        </a>

                        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                            
                            <li>
                                <a href="dashboard.php" class="nav-link text-white">
                                     <p class="fas fa-home bi d-block p-2 mx-3 mb-0"></p> 
                                    <p class="mt-0"> Dashboard </p> 
                                </a>
                            </li>

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

                            <li>

                                <a href="addskill.php" class="nav-link text-white">
                                    <p class="fas fa-check bi d-block p-2 mx-4 mb-0"></p> 
                                    <p class="mt-0"> Category/skills </p> 
                                </a>

                            </li>

            
                        </ul>

                        
                        <div class="dropdown text-end">
                            <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="images/mal.png" alt="mdo" width="32" height="32" class="rounded-circle">
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

        </header>
