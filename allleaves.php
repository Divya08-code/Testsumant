
<?php include 'session.php'?>
<?php include"header.php"; 
session_start();
?>
<style type="text/css">
  .box
  {
    margin:20px 0px; 
    height: 600px;
    width: 600px;
    border:2px;
    box-shadow: 0 5px 20px; 
  }

</style>
  
          <div class="content-wrapper" >
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr class="bg-secondary text-light">
                      <th>Sr No.</th>
                      <th>Leave From</th>
                      <th>Leave To</th>
                      <th>Earning leave</th>
                      <th>Medical leave</th>
                      <th>Casual leave</th>
                      <th>Apply leave</th>
                      <th>Status</th>
                      <th>Comment</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include "dbcon.php";
                    $i=1;
                    $id=$_SESSION['id'];
                    $v="SELECT * FROM applyleave where applyby='$id'";
                    $q=mysqli_query($con,$v);
                    while($res=mysqli_fetch_array($q))
                    {
                    ?>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $res['leave_from'] ?></td>
                      <td><?php echo $res['leave_to'] ?></td>
                      <td><?php echo $res['earning_leave'] ?></td>
                      <td><?php echo $res['medical_leave'] ?></td>
                      <td><?php echo $res['casual_leave'] ?></td>
                      <td><?php echo $res['applyby'] ?></td>
                      <td> 
                       <button class="btn btn-danger"><?php echo $res['status'] ?></button></a>
                      </td>
                      <td>
                        <form method="post">
                          <textarea name="comment" class="form-control"><?php echo $res['comment'] ?></textarea>     
                      </td>              
                        </form>   
                    </tr>
                  <?php  } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>