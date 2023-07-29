<?php 
 include 'includes/headers.php';
 include 'includes/functions.php';
include 'connect.php';
ob_start();
?>
  <br><br><div class="alert alert-success"><strong><center>Application For Grant / Re Grant of Right OF occupancy </center></strong></div>
                                <hr>
                                    <div class="col-sm-1"></div>

                                         
                                <form  method="post" enctype="multipart/form-data">
                                  
                       <div class="col-sm-5">
                                    <div class="form-group">
    <h3>BOX1 Applicant  Information</h3>
        <label for="e">Title:</label>
        <input type="text" class="form-control" name="staff_id" id="staffid" required>
      </div>
      <div class="form-group">
        <label for="email">First Name:</label>
        <input type="text" class="form-control" name="fn" required="" >
      </div>
       <div class="form-group">
        <label for="email">Surname Name:</label>
        <input type="text" class="form-control" name="sn" required="" >
      </div>
       <div class="form-group">
        <label for="email">Middle Name:</label>
        <input type="text" class="form-control" name="mn"  >
      </div>
       <div class="form-group">
        <label for="email">Gender:</label>
        <select name="g" class="form-control">
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>
        <div class="form-group">
        <label for="email">Date Of Birth:</label>
        <input type="date" class="form-control" name="dob" required="" >
      </div>
        <div class="form-group">
        <label for="email">Occupation:</label>
        <input type="text" class="form-control" name="occ" required="" >
      </div>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-4">
        <div class="form-group">
        <label for="email">Nationality:</label>
        <input type="text" class="form-control" name="nat" value="Nigeria" required="" >
      </div>
        <div class="form-group">
        <label for="email">State:</label>
        <input type="text" class="form-control" name="st" value="Zamfara" required="" >
      </div>
        <div class="form-group">
        <label for="email">Town / City:</label>
        <input type="text" class="form-control" name="tn" value="Gusau" required="" >
      </div>
      <div class="form-group">
        <label for="Phone">Phone no:</label>
        <input type="text" class="form-control" name="pn" id="mobil" required >
      </div>
      <div class="form-group">
        <label for="Phone">Phone no2:</label>
        <input type="text" class="form-control" name="pn2" id="mobil2"  >
      </div>
      <div class="form-group">
        <label for="Phone">Phone no3:</label>
        <input type="text" class="form-control" name="pn3" id="mobil3"  >
      </div>
      <div class="form-group">  
        <label for="Phone">TIN:</label>
        <input type="text" class="form-control" name="tin" required >
      </div>
     <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email" name="em" required >
      </div>
      
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-1"></div>    
    <div class="col-sm-7">
     <div class = "modal-footer">
                           <button name = "add" id="submit" class="btn btn-success">Create Account</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
    </div>
      </form>              
    </div>
                             
     
                                 <div class="col-sm-3">
                            
    </div>

<?php
 
                            if (isset($_POST['add'])) {

                              $fn = $_POST['fn'];
                              $sn = $_POST['sn'];
                              $mn = $_POST['mn'];
                              $g = $_POST['g'];
                              $dob = $_POST['dob'];
                              $occ = $_POST['occ'];
                              $st = $_POST['st'];
                              $tn = $_POST['tn'];
                              $pn = $_POST['pn'];
                              $pn2 = $_POST['pn2'];
                              $pn3 = $_POST['pn3'];
                              $tin = $_POST['tin'];
                              $em = $_POST['em'];
                               
                              
                         
                                        $sql = "SELECT * FROM applicant  WHERE phone1 = '".$pn."' OR phone2 = '".$pn2."' OR email = '".$em."' ";
                                        $check = mysqli_query($conn, $sql ) or die(mysqli_error($conn));
                                        $ch = mysqli_num_rows($check);
                                      // first appointement
                                        
                                     
                                        
                                      
                                        if ($ch==0){
                                          $passs = sha1($pass);
                                                  $d =mysqli_query($conn,"INSERT INTO 
                                                    applicant ( fname  , sname, mname,gender, dob,occ,lga,state,phone1,phone2,phone3,email,tin)
                                                 values ('$fn','$sn','$mn', '$g','$dob','$occ','$tn','$st','$pn','$pn2','$pn3','$em','$tin')") or die(mysqli_error($conn));


                                               if ($d) {
                                                $id = mysqli_insert_id($conn) or die(mysqli_error($conn));
                                                    echo "<script> alert('  Account was created successfully ...') </script>";
                                                 
                                                  
                                                     header('location:address.php?id='.$id);
                                                                                               }
                                                  
                                             

                                        }else{
                                        echo "<script>alert('Warning : Duplicate phone number,email   are not allowed')</script>";

                                        }
                                      } 
                            
                            
                            ?>
                                      
              

             <script src="admin/js/jquery.min.js" type="text/javascript"></script>
        <script src="admin/js/jquery.maskedinput.js" type="text/javascript"></script>
        <script>
        jQuery(function($){
        $("#nic").mask("99999-9999999-9");
      
        $("#sess").mask("9999/9999");
        $("#ext").mask("(999) 999-9999? Ext.99999");
        $("#mobil").mask("2349999999999");
        $("#mobil3").mask("+2349999999999");
        $("#mobil2").mask("+2349999999999");
        $("#admn").mask("9999999999");

        $("#apno").mask("99999999999");
        $("#hno").mask("99");
        $("#percent").mask("99%");
        $("#productkey").mask("a*-999-a999");
        $("#orderno").mask("PO: aaa-999-***");
        $("#date2").mask("99/99/9999", { autoclear: false });
        $("#date3").mask("99/99/9999", { autoclear: false, completed:function(){alert("Completed!");} });
        $("#mobile2").mask("+1 999 999 999");
        });
      </script>

