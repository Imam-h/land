<?php include 'includes/headers.php';
$get_id = $_GET['id'];

ob_start();
        include 'includes/connect.php';
        // include 'session.php';
 ?>


<div id="container">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
<div class="hero-unit-table">   
       <?php 


                                $app = "SELECT * FROM `applicant` a INNER JOIN `address` ad ON a.appid=ad.aappid INNER JOIN ownership o ON a.appid = o.apid INNER JOIN plot p ON o.oid = p.poid where appid = '$get_id' ";
                                 $sql = mysqli_query($conn,$app) or die(mysqli_error($conn));
                                 $row = mysqli_fetch_array($sql);
                                 // personal Information
                                 $appid = $row['appid'];
                                 $title = $row['atitle'];
                                 $name = $row['fname']." ".$row['sname']." ".$row['mname'];
                                 $gender = $row['gender'];
                                 $dob = $row['dob'];
                                 $occ = $row['occ'];
                                 $lg = $row['lga'];
                                 $st = $row['state'];
                                 $p1 = $row['phone1'];
                                 $p2 = $row['phone2'];
                                 $p3 = $row['phone3'];
                                 $email = $row['email'];
                                 $tin = $row['tin'];
                                 // Address Information
                                 $hn = $row['houseno'];
                                 $sn = $row['streetname'];
                                 $d = $row['district'];
                                 $c = $row['city'];
                                 $as = $row['astate'];
                                 $country = $row['country'];
                                 $po = $row['pobox'];
                                 $co = $row['co'];
                                 $add = $row['additional'];
                                 // Ownership
                                 $fa = $row['4a'];
                                 $fb = $row['4b'];
                                 $fc = $row['4c'];
                                 $fd = $row['4d'];
                                 $aname = $row['4aname'];
                                 $bname = $row['4bname'];
                                 $cname = $row['4cname'];
                                 $adate = $row['4adate'];
                                 $bdate = $row['4bdate'];
                                 $cdate = $row['4cdate'];
                                 // Plot Information
                                 $plotid = $row['plotid'];
                                 $ffa = $row['5a'];
                                 $luse = $row['landuse'];
                                 $purpose = $row['purpose'];
                                 $plga = $row['plga'];
                                 $pdistrict = $row['pdistrict'];
                                 $paddress = $row['paddress'];
                                 $ffb = $row['5b'];
                                 $beacon = $row['beacon'];
                                 $size = $row['psize'];
                                 $lat = $row['lat'];
                                 $lon = $row['lon'];
                                 $poid = $row['poid'];


                                                                  ?>
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
    <input type="text" class="form-control" name="fn" value="<?php echo $row['fname'] ?>" required="" >
  </div>
   <div class="form-group">
    <label for="email">Surname Name:</label>
    <input type="text" class="form-control" name="sn" value="<?php echo $row['sname'] ?>" required="" >
  </div>
   <div class="form-group">
    <label for="email">Middle Name:</label>
    <input type="text" class="form-control" name="mn" value="<?php echo $row['mname'] ?>" >
  </div>
   <div class="form-group">
    <label for="email">Gender:</label>
    <select name="g" class="form-control">
      <option><?php echo $row['gender'] ?></option>
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>
    <div class="form-group">
    <label for="email">Date Of Birth:</label>
    <input type="date" class="form-control" name="dob" required="" value="<?php echo $dob ?>" >
  </div>
    <div class="form-group">
    <label for="email">Occupation:</label>
    <input type="text" class="form-control" name="occ" required="" value="<?php echo $occ ?>" >
  </div>
</div>
<div class="col-sm-1"></div>
<div class="col-sm-4">
    <div class="form-group">
    <label for="email">Nationality:</label>
    <input type="text" class="form-control" name="nat" value="Nigeriaa" required="" >
  </div>
    <div class="form-group">
    <label for="email">State:</label>
    <input type="text" class="form-control" name="st" value="<?php echo $st ?>" required="" >
  </div>
    <div class="form-group">
    <label for="email">Town / City:</label>
    <input type="text" class="form-control" name="tn" value="<?php echo $lg ?>" required="" >
  </div>
  <div class="form-group">
    <label for="Phone">Phone no:</label>
    <input type="text" class="form-control" name="pn" id="mobil" value="<?php echo $p1 ?>" required >
  </div>
  <div class="form-group">
    <label for="Phone">Phone no2:</label>
    <input type="text" class="form-control" name="pn2" id="mobil2" value="<?php echo $p2 ?>"  >
  </div>
  <div class="form-group">
    <label for="Phone">Phone no3:</label>
    <input type="text" class="form-control" name="pn3" value="<?php echo $p3 ?>" id="mobil3"  >
  </div>
  <div class="form-group">
    <label for="Phone">TIN:</label>
    <input type="text" class="form-control" name="tin" value="<?php echo $tin ?>" required >
  </div>
 <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="em" value="<?php echo $email ?>" required >
  </div>
  
</div>
<div class="col-sm-1"></div>
<div class="col-sm-1"></div>
<div class="col-sm-7">
 <div class = "modal-footer">
                       <button name = "add" id="submit" class="btn btn-success">Update</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
</div>
  </form>              
</div>
                         
 
                             <div class="col-sm-3">
                        
</div>

<?php      if (isset($_POST['add'])) {

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
                               
                              
                         
                                      
                                      
                                     
                                
                                       $d =mysqli_query($conn,"UPDATE 
applicant SET fname = '$fn'  , sname = '$sn', mname = '$mn',gender = '$g', dob = '$dob', occ = '$occ' ,lga = '$tn',state = '$st',phone1 = '$pn',phone2 = '$pn2',phone3 = '$pn3',email = '$em',tin = '$tin' WHERE appid = '$get_id'") or die(mysqli_error($conn));

                                               if ($d) {
                                                
                                                    echo "<script> alert('  Account was created successfully ...') </script>";
                                                 
                                                  
                                                     header('location:applicant.php');
                                            
                                        }else{
                                        echo "<script>alert('Warning : Duplicate phone number,email   are not allowed')</script>";

                                        }
                                      } 
                            
                            
                            ?>
