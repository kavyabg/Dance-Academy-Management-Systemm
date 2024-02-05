<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Online Dance Management System || About Us</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<!---//End-css-style-switecher----->
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
	   <script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

			});
		</script>

</head>
<body>
<!---->
<?php include_once('includes/header.php');?>
<div class="about content">
	 <div class="container"> 		 
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">About</li>	  
		 </ol>
		 <?php
$sql="SELECT * from tblpage where PageType='aboutus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
		 <h2><?php  echo htmlentities($row->PageTitle);?></h2>
		 <div class="about-main">
			 <div class="col-md-6 abt-pic">
				 <img src="images/hiphop.jpg" class="img-responsive" alt=""/>
			 </div>
			 <div class="col-md-6 abt-pic-info">
				 
				 <p style="color:#fff"><?php  echo $row->PageDescription;?>.</p>
				
			 </div>
			 <?php $cnt=$cnt+1;}} ?>
			 <div class="clearfix"></div>
		 </div>
	
		 <div class="latest">
			 <h3>LATEST PHOTOS</h3>		
			 <div class="pic start">
				 <a class="fancybox" href="images/Bharata1.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/Bharata1.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">Batathanatyam</a></h4>
				 <p>Bharatanatyam is the oldest classical dance tradition in India.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/ballet.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/ballet.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">Ballet</a></h4>
				 <p>Ballet originated in Italy in the fifteenth century. The dance is performed on classical music.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/Kathakali2.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/Kathakali2.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">Kathakali</a></h4>
				 <p>Kathakali is a blend of music and acting and dramatizes stories.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/kuchipudi1.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/kuchipudi1.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">Kuchipudi</a></h4>
				 <p>Kuchipudi is the classical dance from the state of Andhra Pradesh.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/iris.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/iris.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">Iris</a></h4>
				 <p>Irish dance is a group of traditional dance forms originating from Ireland.</p>
			 </div>
			 <div class="clearfix"></div>
		 </div>
		<?php include_once('includes/footer.php');?>
	 </div>
</div>
<!---->

<!---->
</body>
</html>