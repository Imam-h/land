<?php include 'includes/headers.php';
ob_start();
        include 'includes/connect.php';
      
 ?>


<div id="container">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
<div class="hero-unit-table">   
                             <table class="table table-striped table-bordered table-hover table-condensed" id="dataTables-example">
                                <div class="alert alert-success">
                                    <center><strong><i class="icon-user icon-large"></i>&nbsp;Applicants</strong></center>
                                </div>
                               
                                <?php 


                                $appl = "SELECT * FROM  `applicant` ";
                                 ?>
								   
                                <thead>
                                    
                                    <tr>
                                        <th>S/N</th>
                                        <th>Full Name</th>
                                        <th>Gender </th>
                                        <th>email</th>
                                        <th>Phone</th>
                                        <th>Occupation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php 
                                    $appl_table = mysqli_query($conn, $appl) or die(mysqli_error($conn));
                                    
                                    $x=1; ?>
                                    <form method="POST" action="" >
                                    	
                                   
                                   <?php while ($app_row = mysqli_fetch_array($appl_table)) {
                                        
                                        
                                        $appid = $app_row['appid'];
                                        $phone = $app_row['phone1'];
                                        $name = $app_row['fname'] ." ". $app_row['sname']." ".$app_row['mname'];
                                        $gen = $app_row['gender'];
                                        $email = $app_row['email'];
                                        $occ = $app_row['occ'];
                                       
                                       ?>

                                        <tr>
                                           
                                            <td><?php echo $x; ?></td>
                                            <td><?php echo $name; ?></td>
                                            <td><?php echo $gen; ?></td>
                                            <td><?php echo $email; ?></td>
                                            <td><?php echo $phone; ?></td>
                                            <td><?php echo $occ; ?></td>
                                           
                                                <td>   <a href="applicants.php<?php echo '?id=' . $appid; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;View More</a> <a href="editapp.php<?php echo '?id=' . $appid; ?>" class="btn btn-primary"><i class="icon-pencil icon-large"></i>&nbsp;Edit</a> 
                                                     <a href="delete.php<?php echo '?id=' . $appid; ?>" class="btn btn-danger"><i class="icon-pencil icon-large"></i>&nbsp;Delete</a>
                                                </td>
                                            

                                        <?php $x++; }
                                      
                                      ?>
                                	
                                </tbody>
                          
                        </div>
                        </div>
                        </div>


    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
     <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>