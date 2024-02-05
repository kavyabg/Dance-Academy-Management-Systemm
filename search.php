<!DOCTYPE html>
<html>
<head>
<title>Online Dance Management System || Dance Services</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,100,200' rel='stylesheet' type='text/css'>
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
<?php include_once('includes/header.php');?>
<div class="event content">
	 <div class="container">  
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Search</li>	  
		 </ol>
		 <h2>Search</h2>
		 <div class="event-main">

<!--<form  method="post">

<input type="text"  name="string">
<input type="submit"  name="submit">
</form>-->

<form id="basic-form" method="post">
                                <div class="form-group">
                                    <label>Search by DanceName</label> <br>
                                    <input id="searchdata" type="text" name="searchdata" required="true" placeholder="Dance Name"></div>                                                            
                                <button type="submit" class="btn btn-primary" name="search" id="submit">Search</button>
                            </form>



<?php
include('includes/dbconnection.php');
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  ?>
  <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4> <br> <br>
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>                                       
                                        <th class="d-none d-sm-table-cell">DanceName</th>
                                        <th class="d-none d-sm-table-cell">DanceDescription</th>
                                        <th class="d-none d-sm-table-cell">DancePrice</th>
                                
                                        <!--<th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>-->
                                       </tr>
                                </thead>
                                <tbody>
                                    <?php
									
$sql="SELECT * from tblservice where ServiceName='$sdata'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                                    <tr>
									<th class="text-center"></th>
                                        <td class="font-w600"><?php  echo htmlentities($row->ServiceName);?></td>
                                        <td class="font-w600"><?php  echo htmlentities($row->SerDes);?></td>
                                        <td class="font-w600"><?php  echo htmlentities($row->ServicePrice);?></td>                                                                                                                                                                
                                    </tr>                                                                                                                               
                                </tbody>
                                <?php 
$cnt=$cnt+1;
} } else { ?>
  <tr>
    <td colspan="8"> No record found against this search</td>

  </tr>
  <?php } }?>
                         
						    </table>



							</div>		 
		
		<?php include_once('includes/footer.php');?>	
	</div>
</div>
<!---->

<!---->
</body>
</html>




