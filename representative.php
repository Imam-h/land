 <?php 
 include 'includes/headers.php';
 include 'includes/functions.php';
include 'connect.php';
ob_start();
$aid = $_GET['aid'];
?>
  <br><br><div class="alert alert-success"><strong><center>Application For Grant / Re Grant of Right OF occupancy </center></strong></div>
                                <hr>

                                <div class="col-sm-1"></div>
                              
<form method="post">
   <div class="col-sm-4">
  <div class="form-group">
    <label for="Phone">First Name:</label>
    <input type="text" class="form-control" name = "fn"  required >
  </div>
  <div class="form-group">
    <label for="Phone">Surname:</label>
    <input type="text" class="form-control" name="sn"  required >
  </div>
   <div class="form-group">
    <label for="Phone">Middle Name:</label>
    <input type="text" class="form-control" name="mn"  required >
  </div>
  <div class="form-group">
    <label for="Phone">Phone1:</label>
    <input type="text" class="form-control" name="pn1" id="mobil" required >
  </div>
   <div class="form-group">
    <label for="Phone">Phone 2:</label>
    <input type="text" class="form-control" name="pn2" id="mobil2"  >
  </div>
</div>
<div class="col-sm-1"></div>
<div class="col-sm-4">
  <div class="form-group">
    <label for="Phone">Phone3:</label>
    <input type="text" class="form-control" name="pn3" id="mobil3"  >
  </div>
  <div class="form-group">
    <label for="Phone">TIN:</label>
    <input type="text" class="form-control" name="tin"  required >
  </div>
 <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="em" required >
  </div>
   <div class="form-group">
    <label for="email">Identification:</label>
    <input type="file" class="form-control" id="email" name="file" required >
  </div>
  <div class = "modal-footer">
                       <button name = "add" class="btn btn-success">Next</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</form>
</div>              


<?php
 
                            if (isset($_POST['add'])) {

                              $fn = $_POST['fn'];
                              $sn = $_POST['sn'];
                              $mn = $_POST['mn'];
                              $pn1 = $_POST['pn1'];
                              $pn2 = $_POST['pn2'];
                              $pn3= $_POST['pn3'];
                              $tin = $_POST['tin'];
                              $em = $_POST['em'];
                               
                              
                                   $d =mysqli_query($conn,"INSERT INTO 
                                                    representative (rfname, rmname,rsname, rphone1, rphone2,rphone3,remail,rtin,raid)
                                                 values ('$fn','$mn','$sn', '$pn1','$pn2','$pn3','$em','$tin','$aid')") or die(mysqli_error($conn));

                                               if ($d) {
                                                
                                                    echo "<script> alert('  Account was created successfully ...') </script>";
                                                 
                                                  
                                                     header('location:ownership.php?aid='.$aid);
                                                  
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

