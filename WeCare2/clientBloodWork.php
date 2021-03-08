<!DOCTYPE html>
<html lang="en">
<head>
    <style>
	
	/* Side bar stuff */
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #F5F5F5;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #2E86C1;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #F5F5F5;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}

</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div class="sidebar">
<a class="active" href="index.php">Home</a>
<a href="#SchedulePickup">Schedule Pickup</a>
<a href="repeatMedication.php">Repeat Medication</a>
<a href="#BloodWork">Blood Work</a>
</div>

<div class="row border border-default">
	
		<div class="bg-primary text-center p-2 col-md-12">
			<p class="lead text-white">Blood Work Results</p>
		</div>


		<div class="py-2 col-3 text-center d-none d-sm-block gateway">
		    <i class="fa fa-file-o" style="font-size:48px;color:black"></i>
			<p>11 Oct 2021</p>
		</div>
		<div class="py-2 col-3 text-center d-none d-sm-block gateway">
		    <i class="fa fa-file-o" style="font-size:48px;color:black"></i>
			<p>19 Feb 2022</p>
		</div>
		<div class="py-2 col-3 text-center d-none d-sm-block gateway">
		    <i class="fa fa-file-o" style="font-size:48px;color:black"></i>
			<p>1 May 2021</p>
		</div>
		<div class="py-2 col-3 text-center d-none d-sm-block gateway">
		    <i class="fa fa-file-o" style="font-size:48px;color:black"></i>
			<p>16 August 2021</p>
		</div>
		<div class="py-2 col-3 text-center d-none d-sm-block gateway">
		    <i class="fa fa-file-o" style="font-size:48px;color:black"></i>
			<p>5 July 2021</p>
		</div>

	

		<div class="py-2 col-3 text-center d-none d-sm-block gateway">
		    <i class="fa fa-file-o" style="font-size:48px;color:black"></i>
			<p>15 Nov 2020</p>
		</div>
			<div class="py-2 col-3 text-center d-none d-sm-block gateway">
		    <i class="fa fa-file-o" style="font-size:48px;color:black"></i>
			<p>13 Dec 2010</p>
		</div>
	
	
		<div class="py-2 col-3 text-center d-none d-sm-block gateway">
		    <i class="fa fa-file-o" style="font-size:48px;color:black"></i>
			<p>25 Dec 2010</p>
		</div>
		<div class="py-2 col-3 text-center d-none d-sm-block gateway">
		    <i class="fa fa-file-o" style="font-size:48px;color:black"></i>
			<p>11 Sep 2008</p>
		</div>
		<div class="py-2 col-3 text-center d-none d-sm-block gateway">
		    <i class="fa fa-file-o" style="font-size:48px;color:black"></i>
			<p>2 April 1998</p>
		</div>
		<div class="py-2 col-3 text-center d-none d-sm-block gateway">
		    <i class="fa fa-file-o" style="font-size:48px;color:black"></i>
			<p>25 Dec 2010</p>
		</div>

</div>

