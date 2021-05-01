<?php 
session_start();
?>
<?php include 'header.php'?>
<br><br>
<!---table-->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Assigned Leaves</h3>
              </div>
              <!-- /.card-header -->
              <div class="table-responsive">
  
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      
                      <th>serial.no</th>
                      <th>Valid From</th>
                      <th>Valid To</th>
                      <th>Earning Leave</th>
                        <th>Casual Leave</th>
                          <th>Medical Leave</th>
                          <th>Assign By</th>
                      
                    
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include_once 'dbcon.php';
                    $a= "SELECT * from leave_ass where employee='".$_SESSION['id']."'";
                    $i=1;
                    $b=mysqli_query($con,$a);
                    while($result=mysqli_fetch_array($b)){

                    ?>

                    
                    <tr>
                      <td><?php echo $i++ ?></td>
                     <td><?php  echo $result['valid_from']?></td>
                     <td><?php  echo $result['valid_to']?></td>
                     <td><?php  echo $result['earning_leave']?></td>
                      <td><?php  echo $result['casual_leave']?></td>
                       <td><?php  echo $result['medical_leave']?></td>
                        <td><?php  echo $result['assign_by']?></td>
                     
                     
                    
                     
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
</div>

<br><br>
<h1 style="color: #67666f; text-align: center;"><b><u>Ask for leave</u></h1><br>
<div class="container">
  <div class="row">
    <div class="col-md-4">
    </div>
<div class="col-md-5 "  >
  <form method="post">
  <input type="hidden" name="id" value="<?php echo $_SESSION['id']?>">
    
      <div class="form-group" >
        <label>Leave From </label>
        <input type="date" name="leave_from" class="form-control" placeholder="Enter Date ">
      </div>
      <div class="form-group">
        <label>Leave To </label>
        <input type="date" name="leave_to" class="form-control" placeholder="Enter Date ">
      </div>
      <div class="form-group">
        <label>Earning Leave </label>
        <input type="text" name="earning_leave" class="form-control" placeholder="Enter Leave ">
      </div>
      <div class="form-group">
        <label>Medical Leave </label>
        <input type="text" name="medical_leave" class="form-control" placeholder="Enter Leave ">
      </div>

      <div class="form-group">
        <label>Casual Leave </label>
        <input type="text" name="casual_leave" class="form-control" placeholder="Enter Leave ">
      </div>
      <button  type="submit" class="btn btn-secondary" name="Assign" value="Assign">Assign</button>
<a <button  type="submit" class="btn btn-secondary"  href="allleaves.php">AllAssign</a></button>

    </form>
  </div>

<div class="col-md-3">
  </div>
</div>
              <!-- /.card-body -->
     <!---code end--->
</div> <!-- /.content-wrapper -->
</section>
<br> <br>


<?php
include 'dbcon.php';
if(isset($_POST['Assign'])){
  
$a=$_POST['id'];
$b=$_POST['leave_from'];
 $c=$_POST['leave_to'];
  $d=$_POST['earning_leave'];
  $e=$_POST['medical_leave'];
  $f=$_POST['casual_leave'];
  $s="pending";


  $data="INSERT into applyleave(leave_from,leave_to,earning_leave,medical_leave,casual_leave,status,applyby)values('$b','$c','$d','$e','$f','$s','$a')"; 
  $query=mysqli_query($con,$data);
  if($query){
          echo"<script>alert('successfull')</script>";  
              }
          else{
            echo" <script>alert('not submitted')</script>";
          }
}



?>


<?php include 'footer.php'?>