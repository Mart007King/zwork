<?php
session_start();
require_once("admin_guard.php");
require_once("partials/header.php");
require_once("classes/Admin.php");
require_once("classes/Work.php");

$ad = new Admin();
$admin_id = $_SESSION['admin_online'];
$data = $ad->fetch_admin($admin_id);
if (isset($_SESSION['cat_id'])) {
    $cat_idd = $_SESSION['cat_id'];
}


$wk = new Work();
$categor = $wk->get_cate();
?>


    <div class="my-3">
            <div class="p-5 text-center bg-body-tertiary">
                <div class="container py-5">
                    <h1 class="text-body-emphasis"> <i class="text-success">  <?php echo $data['admin_name']; ?> </i> You can add Job categories and skills</h1>
                    <p class="col-lg-8 mx-auto lead">
                        Here, You can add Job categories and skills for the users to choose from when update their profiles to enable get jobs relating to their skills. Please ensure that skills you add are suitable in thee repective category you specify.
                    </p>
                </div>
            </div>
    </div>

    <div class="b-example-divider"></div>

    <main>
        <div class="container-fluid px-4" id="category">
                        <h1 class="mt-4">All Job Categories 
                            <span>
                             <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Add Category
                                </button> 
                            </span> </h1>  
                        <ol class="breadcrumb mb-4">  
                            <li class="breadcrumb-item active">Categories</li>
                            <li class="breadcrumb-item"><a href="#skill">All skills</a></li>
                        </ol>

                        
                        <?php 
                                    if (isset($_SESSION['errors'])) {

                                      echo "<div class='alert alert-danger'>". $_SESSION['errors']. "</div>";
                                      unset($_SESSION['errors']);
                                                
                                     }
                        ?>

                                
                                <?php 
                                    if (isset($_SESSION['success'])) {

                                      echo "<div class='alert alert-success'>". $_SESSION['success']. "</div>";
                                      unset($_SESSION['success']);
                                                
                                     }
                                ?>


                        <div class="card mb-4 col-lg-9">
                            <div class="card-body">
                            Categories embodies particular set of skills into one. It defines different part of a particular job. It gives the freelancer a particular field where his/her skill belongs. 
                               &nbsp;&nbsp; <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Add Category
                                </button> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 mx-auto">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                    Categories Created
                                    </div>
                                    <div class="card-body ">
                                        <table class="table table-dark table-bordered">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Category Name</th>
                                            
                                                <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <?php
                                                    $sn=1;
                                                    $sc=1;
                                                
                                                    foreach ($categor as $category) {
                                                ?>
                                                
                                                <tr>
                                                <th scope="row" id="cont"> <?php echo $sn++; ?> </th>
                                                <td  data-value=" <?php echo $category['category_id']; ?> "> <?php echo $category['category_name']; ?>
                                            
                                                          <!-- Modal content to edit category-->
                                                          <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel3" aria-hidden="true">
                                                                                <div class="modal-dialog">

                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h1 class="modal-title fs-5 text-dark" id="staticBackdropLabel3"> <i class="small"> Edit Category Name below </i> </h1>
                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                        </div>

                                                                                        <form action="process/process_cat.php" method="post" id="myform">
                                                                                            <div class="modal-body">  

                                                                                                <p> <i id="error"></i> </p>
                                                                                            
                                                                                                    <div class="mb-3 col form-floating">

                                                                                                        
                                                                                                        <input type="text" class="form-control" placeholder="Category Name" id="floatingCat" value=" " name="catname">
                                                                                                        <label for="floatingCat">Category Name</label>

                                                                                                    </div>

                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                                                                <button type="submit" class="btn btn-success" name="btn_cat" id="btn_cate">Add Category Name</button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>

                                                                                </div>

                                                        </div>
                                            
                                                </td>                                   
                                                <td> <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-sm btn-primary edit" data-bs-toggle="modal" data-bs-target="#staticBackdrop3" id="edit">
                                                        Edit
                                                    </button> 

                                                     
                                                    
                                                    &nbsp; &nbsp;
                                                     <a href="" class="btn btn-sm btn-danger">Delete</a>
                                                </td>
                                                </tr>

                                                <?php
                                                     }
                                                
                                                ?>
                                                    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
        </div>

    <div class="b-example-divider"></div>

        <div class="container-fluid px-4">

                        <div class="d-flex justify-content-end" id="skill">
                            <h1 class="mt-4">
                                <span>
                                <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                        Add Skills
                                    </button> 
                                </span> 
                                Add skills to a Category 
                            </h1>
                        </div>
                         
                        <div class="d-flex justify-content-end">
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active">All Skills</li>
                                <li class="breadcrumb-item"><a href="#category">Categories</a></li>
                            </ol>
                        </div>
                        
                        <div class="d-flex justify-content-center">

                            <div class="card mb-4 col-lg-9">

                                    <div class="card-body text-end ">
                                        Skills under a category provides more clarity to the user/freelancer about their skill-set and 
                                        how well they can utilize the platform. 
                                        &nbsp;&nbsp; <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                            Add Skills
                                        </button> 
                                        Clients on the other hand can find them easily. 
                                    </div>
                                       
                            </div>

                        </div>
                        
                        <div class="row">
                            <div class="col-lg-5 mx-auto">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        Skills Created
                                    </div>
                                    <div class="card-body ">

                                                <div class="bg-secondary mb-3">
                                                    <select name="cate" id="show_cat" class="form-select mb-3 form-control">
                                                        <option value="">please select a category</option>
                                                        <?php
                                                            foreach ($categor as $display) { 
                                                        ?>
                                                        <option value=" <?php echo $display['category_id']; ?> "> <?php echo $display['category_name']; ?> </option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select>                      
                                                </div>
                                                
                                        <table class="table table-dark table-bordered">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Skill Name</th>
                                               
                                            
                                                <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="bodyt">
                                              
                                                    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
        </div>
    </main>

        <!-- Modal content -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">

                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel"> <i class="small"> Type a Category Name below </i> </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <form action="process/process_cat.php" method="post" id="myform">
                                            <div class="modal-body">  

                                                <p> <i id="error"></i> </p>
                                            
                                                    <div class="mb-3 col form-floating">

                                                        <input type="text" class="form-control" placeholder="Category Name" id="floatingCat" name="catname">
                                                        <label for="floatingCat">Category Name</label>

                                                    </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success" name="btn_cat" id="btn_cate">Add Category Name</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>

        </div>

       

        <!-- Modal content to add skills -->
        <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
                                <div class="modal-dialog">

                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel2"> <i class="small"> Select a category and enter a Skill Name below </i> </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <form action="process/process_skills.php" method="post" id="myform2">
                                      
                                            <div class="modal-body">  

                                                <p> <i id="error2"></i> </p>

                                                    <select name="cate" id="cats" class="form-select mb-3 form-control">
                                                        <option value="">please select a category</option>
                                                        <?php
                                                            foreach ($categor as $display) { 
                                                        ?>
                                                        <option value=" <?php echo $display['category_id']; ?> "> <?php echo $display['category_name']; ?> </option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select>

                                                    <div class="mb-3 col form-floating">

                                                        <input type="text" class="form-control" placeholder="Skill Name" id="floatingSkil" name="skillname">
                                                        <label for="floatingSkil">Skill Name</label>

                                                    </div>

                                                

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success" id="btn_skill">Add Skill</button>
                                            </div>

                                        </form>
                                    </div>

                                </div>

        </div>

     <!-- FOOTER -->
            <footer class="container-fluid" style="height:100px; line-height:100px;">
        
            <p>&copy; <?php echo date("Y"); ?> Z-work Technologies</p>
            </footer>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>     
     <script src="assets/query.js"></script>

     <script>
        $(document).ready(function() {

            $("#btn_cate").click(function(event) {

                var data = $("#floatingCat").val();

                if (data == "") {
                    
                    $("#error").load("process/error.php");
                   event.preventDefault(); 
                } else {
                    $("#btn_cate").unbind('submit'); 
                }
            })

            $("#btn_skill").click(function() {

                var data = $("#floatingSkil").val();
                var data_two = $("#cats").val();

                if (data == "" || data_two == "") {
                    
                    $("#error2").load("process/error2.php");
                 
                }else {
                    var all = $("#myform2").serialize();

                    $.ajax({
                        url: "process/process_skills.php",
                        data: all,
                        type: "post",
                        datatype: "text",
                        success:function(rsp) {
                            $("#error2").html(rsp);
                            $("#floatingSkil").val("");
                             $("#cats").val("");
                        },
                        complete:function() {
                            $("#cats").click(function() {
                                $("#error2").html("");
                            })
                        }
                    })
                }
            })

            $("#show_cat").change(function() {
                var data = "category_id="+$(this).val();

                    $.ajax({
                        url: "process/skill_pro.php",
                        data: data,
                        type: "post",
                        datatype: "text",
                        success:function(rsp) {
                            $("#bodyt").html(rsp);
                           
                        },
                        complete:function() {
                           
                        }
                    })
            })

    
        })
     </script>
</body>

</html>

