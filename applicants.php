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
  <div class="mainbody">
    <section>
<div > <h3 style="margin-left: 110px;">Land Statement of <?php echo $name; ?></h3> </div>
    <div class="col-sm-11" style="height: 1200px; padding-left: 50px; margin-left: 50px; margin-right: -30px; margin-top:40x; border-radius: 0px; background: white; border: 1px solid black;" >
      
      <h4 style="background:#009933; ; padding:5px; margin-top: -0px; margin-left:  -50px; margin-right:-15px; color:white; border-top-right-radius: 5px; border-top-left-radius: 5px; border: none"> <strong>Land Information</strong></h4>
    
   


       <table cellpadding="5px"  >
    
     
        <table class="table" border="0px solid red" width="80%">
            
       <!-- STUDENT'S PERSOANAL INFORMATION -->

              <tr >           
               <center> <h1><small>Applicant Personal Information</small></h1> </center>  
                <td ><b> FULL NAME Of Applicant</b></td>
                 <td  ><?php echo $name ?></td>
                 <td></td>
              </tr>

  <tr >              
                <td><b>Gender </b> </td>
                 <td style="margin-left: -400px;"><?php echo $gender ?></td>

              </tr>
  <tr >              
                <td><b>Applicant Phone</b></td>
                 <td ><?php echo $p1 ?></td>

              </tr>
    </table>

       <table cellpadding="5px"  >
    
     
        <table class="table" border="0px solid red" width="80%">
            
       <!-- STUDENT'S PERSOANAL INFORMATION -->

              <tr >           
               <center> <h1><small>Address Of Applicant</small></h1> </center>  
                <td ><b> House Number</b></td>
                 <td  ><?php echo $hn ?></td>
                 <td></td>
              </tr>
  <tr >              
                <td><b>Street Number</b> </td>
                 <td style="margin-left: -400px;"><?php echo $sn ?></td>

              </tr>
  <tr >              
                <td><b>District</b></td>
                 <td ><?php echo $d ?></td>

              </tr>
     
               
              
     </table>


       <table cellpadding="5px"  >
    
     
        <table class="table" border="0px solid red" width="80%">
                
               <!-- STUDENT'S PERSOANAL INFORMATION -->

              <tr >           
               <center> <h1><small>Ownership Information</small></h1> </center>  
                <td ><b> 4A</b></td>
                 <td  ><?php echo $fa ?></td>
                 <td></td>
              </tr>
  <tr >              
                <td><b>Allotee Name</b> </td>
                 <td style="margin-left: -400px;"><?php echo $aname ?></td>

              </tr>
  <tr >              
                <td><b>Transaction Date</b></td>
                 <td ><?php echo $adate ?></td>

              </tr>
     </table>


       <table cellpadding="5px"  >
    
     
        <table class="table" border="0px solid red" width="80%">
                
               <!-- STUDENT'S PERSOANAL INFORMATION -->

              <tr >           
               <center> <h1><small>PLOT INFORMATION</small></h1> </center>  
                <td ><b> 5A</b></td>
                 <td  ><?php echo $ffa ?></td>
                 <td></td>
              </tr>
  <tr >              
                <td><b>Land Use</b> </td>
                 <td style="margin-left: -400px;"><?php echo $luse ?></td>

              </tr>
  <tr >              
                <td><b>Land Purpose</b></td>
                 <td ><?php echo $purpose ?></td>

              </tr>
 <tr >              
                <td><b>Plot LGA</b></td>
                 <td ><?php echo $plga ?></td>

              </tr>
 <tr >              
                <td><b>Plot District</b></td>
                 <td ><?php echo $pdistrict ?></td>

              </tr>
 <tr >              
                <td><b>5B</b></td>
                 <td ><?php echo $ffb ?></td>

              </tr>
               <tr >              
                <td><b> Do You Require  Beacons (Survey Fees Apply)</b></td>
                 <td ><?php echo $beacon ?></td>

              </tr>
               <tr >              
                <td><b>Plot Latitude</b></td>
                 <td ><?php echo $lat ?></td>

              </tr>
 <tr >              
                <td><b>Plot Longitude</b></td>
                 <td ><?php echo $lon ?></td>

              </tr>

 <tr >              
                <td></td>
                 <td>  <a href="viewmap.php<?php echo '?id=' . $appid.'&&lat='.$lat.'&&lon='.$lon ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;View Map</a><td>

              </tr>

     </table>

               
            
</div>

</table>
                       
</div>
</div>
</div>


    <script src="admin/admin/assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="admin/assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="admin/assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="admin/assets/js/custom-scripts.js"></script>
     <script src="admin/assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="admin/assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="admin/assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="admin/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="admin/assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="admin/assets/js/custom-scripts.js"></script>