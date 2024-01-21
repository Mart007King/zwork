
<?php
session_start();

?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <script src="assets/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Z-work Admin Login">
   
   
    <title>Signin Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="assets/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/sign-in.css" rel="stylesheet">
  </head>

  <body class="d-flex align-items-center py-4" data-bs-theme-value="dark">
  
    
      <main class="form-signin w-100 m-auto">

        <form action="process/login_process.php" method="post">
          
          <div class="d-flex justify-content-center">
             <img class="mb-4" src="images/logo.png" alt="Logo" width="30%">
          </div>
          
          <h1 class="h3 mb-3 fw-normal text-center">Admin Login</h1>

             <!-- Dislaying error essage when the form is not filled -->
             <?php 
             if (isset($_SESSION['errormessage'])) {

              echo "<div class='alert alert-danger'>". $_SESSION['errormessage']. "</div>";
              unset($_SESSION['errormessage']);
                                                
              }
            ?>

          <div class="form-floating">
            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>

          <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Remember me
            </label>
          </div>
          <button class="btn btn-primary w-100 py-2" name="login_btn" type="submit">Sign in</button>
          <p class="mt-5 mb-3 text-body-secondary">&copy; <?php echo date("Y"); ?> Z-work Technologies </p>

        </form>

      </main>

      <script src="assets/assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
