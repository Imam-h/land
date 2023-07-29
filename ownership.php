 <?php 
 include 'includes/headers.php';
 include 'includes/functions.php';
include 'connect.php';
ob_start();
$id = $_GET['aid'];
?>
  <br><br><div class="alert alert-success"><strong><center>Application For Grant / Re Grant of Right OF occupancy </center></strong></div>
                                <hr>

                                <div class="col-sm-1"></div>
                              
<form method="post" enctype="multipart/form-data" >
   <div class="col-sm-4">
<div class="form-group">
    <label for="e">Allotee Name:</label>
    <input type="text" class="form-control" name="an"  >
  </div>
  <div class="form-group">
    <label for="email">Offer Commence Date:</label>
    <input type="date" class="form-control" name="od"  >
  </div>
   <div class="form-group">
    <label for="email">4A:</label>
   <select class="form-control" name="4a">
      <option> </option>
     <option>statutory C Of O</option>
     <option>Offer Letter</option>
     <option>Customary C Of O</option>
   </select>
  </div>
   <div class="form-group">
    <label for="email">ROFO Number(ZAM):</label>
    <input type="text" class="form-control" name="ro"  >
  </div>
  <div class="form-group">
    <label for="email">4B:</label>
   <select class="form-control" name="4b">
      <option> </option>
     <option>Sales Agreement</option>
     <option>Inheritance</option>
     <option>Gift</option>
      <option>Letter Of Administration</option>
     <option>Affidavit</option>
     <option>Court Judgement</option>
     <option>Federal Offer</option>
     <option>State Offer</option>
   </select>
  </div>
    <div class="form-group">
    <label for="email">Name Of Former Owner:</label>
    <input type="text" class="form-control" name="nf"  >
  </div>
   
</div>
  <div class="col-sm-1"></div>
  <div class="col-sm-4">
     <div class="form-group">
    <label for="email">Transaction Date:</label>
    <input type="date" class="form-control" name="btd"  >
  </div>
  <div class="form-group">
    <label for="email">4C:</label>
   <select class="form-control" name="4c">
      <option>Deed Of Asseignment </option>
      <option>Deed Of Gift </option>
      <option>Deed Of  Devaluation</option>
      <option>Deed Of  Release</option>
     
   </select>
  </div>
   <div class="form-group">
    <label for="email">Name Of Former Owner:</label>
    <input type="text" class="form-control" name="nff"  >
  </div>
    <div class="form-group">
    <label for="email">Transaction Date:</label>
    <input type="date" class="form-control" name="ctd"  >
  </div>
   <div class="form-group">
    <label for="email">4D:</label>
   <select class="form-control" name="4d">
      <option>Deed Of Asseignment </option>
      <option>Deed Of Gift </option>
      <option>Deed Of  Devaluation</option>
      <option>Deed Of  Release</option>
     
   </select>
  </div>
<div class = "modal-footer">
                       <button name = "add" class="btn btn-success">Next</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</form>
</div>


   

<?php
 
                            if (isset($_POST['add'])) {

                              $an = $_POST['an'];
                              $od = $_POST['od'];
                              $a = $_POST['4a'];
                              $ro = $_POST['ro'];
                              $b = $_POST['4b'];
                              $nf = $_POST['nf'];
                              $ctd = $_POST['ctd'];
                              $c = $_POST['4c'];
                              $nff = $_POST['nff'];
                              $btd = $_POST['btd'];
                              $d = $_POST['4d'];
                               
                              
                                   $ins =mysqli_query($conn,"INSERT INTO 
                                                    ownership (4a, 4b,4c, 4d, apid,4aname,4adate,4bname,4bdate,4cname,4cdate)
                                                 values ('$a','$b','$c', '$d','$id','$an','$od','$nf','$btd','$nff','$ctd')") or die(mysqli_error($conn));

                                               if ($d) {
                                                
                                                    echo "<script> alert('  Account was created successfully ...') </script>";
                                                 
                                                  $id = mysqli_insert_id($conn);
                                                     header('location:plot.php?id='.$id);
                                                  
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

