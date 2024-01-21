<?php require_once("../partials/head.php"); ?>

       <!-- Page Heading -->
       <div class="d-sm-flex align-items-center justify-content-center mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-center text-success mt-4">Create A Job</h1>
                        <!-- <a href=" {{ Route('business.index') }} " class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> View List</a> -->
        </div>
                    <!-- Page Heading -->
        <div class="container">
        <?php 
                if (isset($_SESSION['errmsg'])) {

                    echo "<div class='alert alert-danger text-center text-light'>". $_SESSION['errmsg']. "</div>";
                    unset($_SESSION['errmsg']);
                                                
                }
            ?>

                                
            <?php 
                if (isset($_SESSION['success'])) {

                    echo "<div class='alert alert-success text-center text-light'>". $_SESSION['success']. "</div>";
                    unset($_SESSION['success']);
                                                
                }
            ?>

            <div class="row justify-content-center">

                <div class="col-md-10">
                   

                    <form action="../process/process_jobs.php" method="post" id="myform">

                        <p> <i id="error"></i> </p>
                                
                        <div class="mb-3">
                            <label for="name" class="form-label">Job Name</label>
                            <input type="text" class="form-control" id="name" name="jname">
                        </div>
                    
                        <div class="mb-3">
                            <label for="slogan" class="form-label">Job Description</label>
                            <textarea name="jdescription" class="form-control" id="desc" cols="3" rows="3"></textarea>
                        </div>
                    
                        <div class="mb-3">
                            <label for="level" class="text-secondary mb-1">Job Complexity</label>
                            <select name="complexity" class="form-select form-control" id="level">
                                <option value="">Please Select an answer</option>
                                <option value="Junior" class="text-info">Junior</option>
                                <option value="Intermediate" class="text-warning">Intermediate</option>
                                <option value="Senior" class="text-success">Senior</option>
                            </select>
                        </div>
                    
                        <div class="mb-3">
                            <label for="type" class="text-secondary mb-1">Job Type</label>
                            <select name="jtype" class="form-select form-control" id="type">
                                <option value="">Please Select a job type</option>
                                <option value="one_off" class="text-info">One Off</option>
                                <option value="part_time" class="text-warning">Part time</option>
                                <option value="full_time" class="text-success">Full time</option>
                            </select>
                        </div>
                    
                        <div class="mb-3">
                            <label for="show_cat" class="text-secondary">Job Category</label>
                            <select name="cate" id="show_cat" class="form-select mb-3 form-control">
                                <option value=""> <small> please select a category </small> </option>
                                    <?php
                                        foreach ($categor as $display) { 
                                    ?>
                                <option value=" <?php echo $display['category_id']; ?> "> <?php echo $display['category_name']; ?> </option>
                                    <?php
                                        }
                                    ?>
                            </select>
                        </div>
                    
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="jduration" id="floatingdur" placeholder="Job Name">
                            <label for="floatingdur" class="text-secondary"> <i> Job Duration (eg. 2weeks or 1-month) </i> </label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="payment" id="pay"  placeholder="Amount">
                            <label for="pay" class="text-secondary"> <i> Payment </i> </label>
                        </div>
                    
                                        <input type="hidden" name="client_id" value=" <?php echo $idd;  ?> ">
                        <button type="submit" name="btn_sub" class="btn btn-primary">Create Job</button>
                        
                    </form>

                </div>


            </div>
        </div>
                    

            <footer class="footer py-4  ">
                <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        © <script>
                        document.write(new Date().getFullYear())
                        </script>,
                        Z-work Technologies
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                        <!-- <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a> -->
                        </li>
                        <li class="nav-item">
                        <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                        <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                        <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
            </footer>
        </div>
    </main>


    <script src="../../asset/query.js"></script>
    <script>
        $(document).ready(function(){
            $("#myform").submit(function(event){
                var jname = $("#floatingname").val();
                var jdesc = $("#desc").val();
                var com = $("#level").val();
                var type = $("#type").val();
                var cat = $("#show_cat").val();
                var dur = $("#floatingdur").val();
                var pay = $("#pay").val();

                if (jname == "" || jdesc == "" || com == "" || type == "" || cat == "" || dur == "" || pay == "") {
                    $("#error").html( "<small>" + "<div class='alert alert-danger text-center text-light'>"+ "Please complete the form"+"</div>"+ "</small>");
                    event.preventDefault();
                } else {
                    $("#myform").unbind("submit");
                }
            })

            $("#pay").change(function(){
                
                var number = "number="+ $(this).val();
                
                
                $.ajax({
                    url: "../process/numb_format.php",
                    type: "post",
                    data: number,
                    dataType: "text",
                    success:function(rsp){
    
                        $("#pay").val("# " + rsp);
    
                    }
                })

            })
        })
    </script>
</body>
</html>