
<?php 
 include 'includes/headers.php';
 include 'includes/functions.php';
include 'connect.php';
ob_start();
$aid = $_GET['id'];
 
?>
  <br><br><div class="alert alert-success"><strong><center>BOX2 Address Information   </center></strong></div>
                                <hr>
                                <div class="col-sm-1"></div>

                                     
                            <form  method="post" enctype="multipart/form-data">
                  <form  method="post" enctype="multipart/form-data">
         <div class="col-sm-3">
                         
                              
<h3></h3>
                
                                <div class="form-group">

    <label for="e">House No:</label>
    <input type="text" class="form-control" name="hn"  required>
  </div>
  <div class="form-group">
    <label for="email">Street Name:</label>
    <input type="text" class="form-control" name="sn" required="" >
  </div>
   <div class="form-group">
    <label for="email">District:</label>
    <input type="text" class="form-control" name="dt" required="" >
  </div>
   <div class="form-group">
    <label for="email">City / Town:</label>
    <input type="text" class="form-control" name="tn" required="" >
  </div>
    <div class="form-group">
    <label for="email">State:</label>
    <input type="text" class="form-control" name="st" required="" >
  </div></div>
  <div class="col-sm-1"> </div>
  <div class="col-sm-4">
      <div class="form-group">
    <label for="email">Country:</label>
    <input type="text" class="form-control" name="cr" required="" >
  </div>
    <div class="form-group">
    <label for="email">PO BOX/ PMB:</label>
    <input type="text" class="form-control" name="po"  >
  </div>
    <div class="form-group">
    <label for="email">Certificate of Occupancy:</label>
    <input type="text" class="form-control" name="co"  >
  </div>
  <div class="form-group">
    <label for="Phone">Additional Address Information:</label>
    <input type="text" class="form-control" name="addr">
  </div>
<div class = "modal-footer">
                       <button name = "add" id="submit" class="btn btn-success">Next</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
</div>
  </form> 
  </div>



<?php
 
                            if (isset($_POST['add'])) {

                              $hn = $_POST['hn'];
                              $sn = $_POST['sn'];
                              $dt = $_POST['dt'];
                              $st = $_POST['st'];
                              $cr = $_POST['cr'];
                              $po = $_POST['po'];
                              $co = $_POST['co'];
                              $ad = $_POST['addr'];
                              $tn = $_POST['tn'];
                               
                              
                                   $d =mysqli_query($conn,"INSERT INTO 
                                                    address (houseno, streetname,district, city,astate,country,pobox,co,additional,aappid)
                                                 values ('$hn','$sn','$dt', '$tn','$st','$cr','$po','$co','$ad','$aid')") or die(mysqli_error($conn));

                                               if ($d) {
                                                
                                                    echo "<script> alert('  Account was created successfully ...') </script>";
                                                 
                                                  
                                                     header('location:representative.php?aid='.$aid);
                                                  
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

