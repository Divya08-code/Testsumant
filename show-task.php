
<?php include 'session.php'?>
    <style>
.box
	{

		border:4   px;
		box-shadow: 0 5px 20px;	
	}
	</style>
<?php
session_start();
include"header.php";


include"dbcon.php";

$id=$_GET['id'];

$s="SELECT*FROM task where tid=$id";
$query=mysqli_query($con,$s);
while($r=mysqli_fetch_array($query))
{
?>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-6">
		<div class="card box" style="width: 300px; background: #c5c5b8;">
			<div class="card-body">
			
			<h3 style="text-align: center; color: #615e57;"> Task Details</h3>
			<br><br>
			<label>Employee's Name:&nbsp;&nbsp;&nbsp;<?php echo $r['employee']; ?></label><br><br>
			Assigning Date:&nbsp;&nbsp;&nbsp;<?php echo $r['created_at']; ?><br><br>
			Assigned by:&nbsp;&nbsp;&nbsp;<?php echo $r['assign_by']; ?><br><br>
		</div>
	</div>
</div>

		<div class="col-md-6">
			<h3 style="text-align: center; color: #615e57;">Assigned Task<textarea cols="6" rows="6" name="message" class="form-control" readonly="readonly" style="background: #c5c5b8;"><?php echo $r['message']; ?></textarea><br><br></h3>
		
	<?php
}
?>	

		<form method="post">
			
			<input type="hidden" name="uid" value="<?php echo $_SESSION['id']?>">
			<input type="hidden" name="tid" value="<?php echo $id;?>">

			<h3 style="text-align: center; color: #615e57;"> Reply<textarea cols="8" rows="8" name="m_reply"class="form-control">Leave Your Reply here!</textarea><br></h3>
				
			<button type="submit" name='submitreply' class="btn btn-secondary">Submit reply</button>
		</form>
		<?php 
		include 'dbcon.php'; 
		$id=$_GET['id'];

$s="SELECT*FROM task_reply where tid=$id";
$query=mysqli_query($con,$s);
while($r=mysqli_fetch_array($query))
{
?>
<h3 class="alert alert-secondary"><?php echo $r['m_reply'];?></h3>
<?php
}
?>

		</div>

	</div>
</div>

<?php 
include 'dbcon.php';

if(isset($_POST['submitreply']))
{	
	echo $uid=$_POST['uid'];
	echo $tid=$_POST['tid'];
	echo $r=$_POST['m_reply'];
	
	$i="INSERT INTO task_reply(uid,tid,m_reply)values('$uid','$tid','$r')";

	$q=mysqli_query($con,$i);	
}
?>

<?php  include 'footer.php'?>