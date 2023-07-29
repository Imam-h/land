 <?php 
 include 'includes/header.inc.php';
 include 'includes/functions.php';
include 'connect.php';
$oid = $_GET['id'];
ob_start();
?>
  <br><br><div class="alert alert-success"><strong><center>Application For Grant / Re Grant of Right OF occupancy </center></strong></div>
                                <hr>

                                <div class="col-sm-2"></div>
                              
<form method="post">
   <div class="col-sm-4">
     <div class="form-group">
    <label for="email">5A:</label>
   <select class="form-control" name="a">
      <option>Survey Data / COORDINATES </option>
      <option>Survey Report </option>
      <option>Site Plan</option>
      <option>TDP</option>
     
   </select>
  </div>
  <div class="form-group">
    <label for="Phone">Land Use:</label>
    <input type="text" class="form-control" name="l"  required >
  </div>
 <div class="form-group">
    <label for="email">Purpose:</label>
    <input type="text" class="form-control"  name="p" required >
  </div>
   <div class="form-group">
    <label for="email">LGA:</label>
    <input type="text" class="form-control"  name="lg" value="Gusau" required >
  </div>
   <div class="form-group">
    <label for="Phone">District:</label>
    <input type="text" class="form-control" name="d" value="T/Wada" required >
  </div>
 <div class="form-group">
    <label for="email">Plot Address:</label>
    <input type="text" class="form-control"  name="pa" required >
  </div>
</div>
<div class="col-sm-4">
     <div class="form-group">
    <label for="Phone">Latitude:</label>
    <input type="text" class="form-control" name="lat"  required >
  </div>
   <div class="form-group">
    <label for="Phone">Longitude:</label>
    <input type="text" class="form-control" name="lon"  required >
  </div>
   <div class="form-group">
    <label for="Phone">Plot SIZE:</label>
    <input type="text" class="form-control" name="ps"  required >
  </div>
 
      <div class="form-group">
    <label for="email">5B:</label>
   <select class="form-control" name="b">
      <option>Change of LAND / Purpose </option>
      <option>Extension </option>
      <option>Merger</option>
      <option>Subdivision</option>
     
   </select>
  </div>
    <div class="form-group">

    <label for="email">Did You Require Beacons?:</label>
   <select class="form-control" name="q">
      <option>YES </option>
      <option>NO </option>
     
   </select>
  </div>

   <div class = "modal-footer">
                       <button name = "add" class="btn btn-success">Next</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
<div class="col-sm-2"></div>
</form>




<?php
 
                            if (isset($_POST['add'])) {

                              $a = $_POST['a'];
                              $b = $_POST['b'];
                              $q = $_POST['q'];
                              $l = $_POST['l'];
                              $p = $_POST['p'];
                              $lg = $_POST['lg'];
                              $d = $_POST['d'];
                              $pa = $_POST['pa'];
                              $lat = $_POST['lat'];
                              $lon = $_POST['lon'];
                              $ps = $_POST['ps'];
                               
                              
                                   $ins =mysqli_query($conn,"INSERT INTO 
                                                    plot (5a, landuse,purpose,plga,pdistrict,paddress,5b,beacon,psize,lat,lon,poid)
                                                 values ('$a','$l','$p', '$lg','$d','$pa','$b','$q','$ps','$lat','$lon','$oid')") or die(mysqli_error($conn));

                                               if ($ins) {
                                                
                                                    echo "<script> alert('  Account was created successfully ...') </script>";
                                                 
                                                  
                                                     header('location:applicant.php');
                                                  
                                                  }else{
                                                    echo "<script> alert('  couldnot add address ...') </script>";

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
        $("#mobil").mask("+2349999999999");
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

