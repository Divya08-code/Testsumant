
<?php include 'session.php'?>
<?php include 'header.php'?>
<br><br>
<!---table-->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Assigned Task</h3>
              </div>
              <!-- /.card-header -->
              <div class="table-responsive">
  
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      
                      <th>serial.no</th>
                      <th>Task</th>
                      <th>Date</th>
                      <th>Assign_by</th>
                      
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include_once 'dbcon.php';
                    $a= "SELECT * from task where employee='".$_SESSION['id']."'";
                    $i=1;
                    $b=mysqli_query($con,$a);
                    while($result=mysqli_fetch_array($b)){

                    ?>

                    
                    <tr>
                      <td><?php echo $i++ ?></td>
                     <td><?php  echo $result['message']?></td>
                     <td><?php  echo $result['created_at']?></td>
                     <td><?php  echo $result['assign_by']?></td>
                     
                     
                    
                     <td>
        <a href="show-task.php?id=<?php echo $result['tid']?>" class="btn btn-secondary">Show</a>
      
                     </td>
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
</section>
              <!-- /.card-body -->
     <!---code end--->
</div> <!-- /.content-wrapper -->
<br><br><br><br><br>
<?php include 'footer.php'?>