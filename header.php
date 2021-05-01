<!DOCTYPE html>
<html>
<head>
	<title>employee management system</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="icon" type="" href="../image/fi.png" />

<!-- JS, Popper.js, and jQuery -->
 <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="stylesheet"  href="css/first.css">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
<style >

.navbar{
	
	width: 100%;
	background: linear-gradient(#b3b6b9,#1e1e23);
}
@media(min-width: 700px){
	.navbar{
		height: 150px;
	
	}
}
.mob-logo{
	display: none;
}
 @media(max-width: 700px)
   {
       .mob-logo
       {
        display: block;
       }
       .web-logo
       {
        display: none;
       }
       
   
   }

   .navbar-nav{
   	text-align: center;
  

   }
</style>
</head>
<body>
<section>
        <nav class="navbar navbar-expand-md ">
  
 <a href="" class="navbar-brand" >
   <img class="web-logo" src="../image/fi.png" width="150px" >
     <img  class="mob-logo" src="../image/fi.png" width="80px;">

 </a>
<button class="navbar-toggler" data-toggle="collapse" data-target="#a">

         <i class="fa fa-bars"></i>
         <span class="navbar-toggler icon"></span>
   
 </button>

<div class="collapse navbar-collapse"  id="a" >
  
 <ul class="navbar-nav ml-auto  ">

      
      <li>
        <a href="task.php" class="nav-link" style="color: white;">TASK</a>
      </li>
      <li>
        <a href="leave.php" class="nav-link" style="color: white;">LEAVE</a>
      </li>

     
       <li>
        <a href="../logout.php" class="nav-link" style="color: white;">LOGOUT</a>
      </li>
      
 </ul> 
</div>
</nav>
</section>
</body>
</html>