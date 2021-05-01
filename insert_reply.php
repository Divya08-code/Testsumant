<?php 
include 'dbcon.php';

if(isset($_POST['reply']))
{	
	$uid=$_POST['id'];
	$tid=$_POST['tid'];
	$r=$_POST['m_reply'];
	
	$data="INSERT INTO task_reply(uid,tid,m_reply)values('$uid','$tid','$r')";

	$query=mysqli_query($con,$data);

	if($query)
	{
		header('location:showtask.php');
	}
}