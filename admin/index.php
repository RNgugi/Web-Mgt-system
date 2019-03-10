<?php
// INIT
//session_start();
//require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "config.php";

 //HTML
//require PATH_LIB . "page-top.php"; 

session_start();
$user = $_SESSION["username"];
//$conn = mysqli_connect('localhost','root','','writers') or die(mysql_error());
//$query = mysqli_query($conn,"SELECT accname FROM accowners WHERE username = '".$user."'") or die(mysqli_error($conn));
//while ($row=mysqli_fetch_assoc($query)) {
  //  $accname = $row['accname'];
//}
//if ($accname == "") {
  //  echo "<script>alert('Please update your Account');</script>";
    //header("refresh:0.1 url=index.php");
    //exit;
//}
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
//mysqli_close($conn);
?>


<html>
<head>
<title>King'ong'o Prison Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link rel="icon" href="../img/core-img/favicon.png">

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">


		<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a> <i class="fa fa-angle-right"></i></li>
                <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
            </ol>


<!--four-grids here-->
		<div class="four-grids">
					<div class="col-md-3 four-grid">
						<div class="four-agileits" >
							<div class="icon">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Sentence Inmates</h3>
                                <h4> 6 </h4>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-agileinfo">
							<div class="icon">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Remand Inmates</h3>
                                <h4>4</h4>

							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-w3ls">
							<div class="icon">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Total Inmates</h3>
                                <h4><?php
					  	$conn = mysqli_connect('localhost','root','','writers') or die(mysql_error());
					  	

                  $s = "SELECT * FROM writers";
                  $result =$conn->query($s);
                  $count = $result->num_rows;
                  echo $count. " ";


                  ?></h4>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-wthree">
							<div class="icon">
								<i class="glyphicon glyphicon-tower" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Wardens</h3>
                                <h4><?php
					  	$conn = mysqli_connect('localhost','root','','writers') or die(mysql_error());
					  	

                  $s = "SELECT * FROM accowners";
                  $result =$conn->query($s);
                  $count = $result->num_rows;
                  echo $count. " ";


                  ?></h4>
								
							</div>
							
						</div>
					</div>
					<div class="clearfix"></div>
				</div> 
<!--//four-grids here-->
<!--photoday-section--> 
            
                        
                        <div class="col-sm-4 wthree-crd" style="width: 80%; margin-bottom: 5%; overflow-y: auto; height:350px; margin-top: 2%">
                            <div class="card">
                                <div class="card-body" style="margin-bottom: 10%">
                                    <div class="widget widget-report-table">
                                        <header class="widget-header m-b-15">
                                        </header>
                                        
                                        <div class="row m-0 md-bg-grey-100 p-l-20 p-r-20">
                                            <div class="col-md-6 col-sm-6 col-xs-6 w3layouts-aug">
                                                <h3>19/02/2019</h3>
                                                <p>Wardens Schedule</p>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="widget-body p-15">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Staff ID</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Duty</th>
                                                    </tr>
                                                </thead>


                                                <tbody>
                                                	<?php
					  								$conn = mysqli_connect('localhost','root','','writers') or die(mysql_error());
					  	

                 	 						$query = mysqli_query($conn,"SELECT * FROM accowners WHERE status= 'active' ") or die(mysqli_error($conn));



                  							while ($row=mysqli_fetch_assoc($query)) {

						                  	  $staffid = $row['staffid'];
						                  	  //$idd = $row['idd'];
						                      $fname = $row['fname'];
						                      $lname = $row['lname'];
						                      //$description = $row['description'];
						                      $duty = $row['duty'];
						                      // $inmateid = $row['inmateid'];
						                      // $yob = $row['yob'];
						                      // $crime = $row['crime'];
						                      // $termlength = $row['termlength'];
						                      // $activity = $row['activity'];

						                      
						                





                                                    ?> <tr>
                                                        <td><?php echo "$staffid";?></td>
                                                        <td><?php echo "$fname";?></td>
                                                        <td><?php echo "$lname";?></td>
                                                        <td><?php echo "$duty";?></td>
                                                    </tr>
                                                    <?php } 

					if (isset($_GET['jobid']))
                  	{
                  		 $getid=$_GET['jobid'];
                  		 $getid2=$_GET['id2'];

                  		  $query = mysqli_query($conn,"UPDATE bids SET status='Assigned' WHERE idd='$getid' ") or die(mysqli_error($conn));

                  		  $query = mysqli_query($conn,"UPDATE jobs SET status='Assigned' WHERE id='$getid' ") or die(mysqli_error($conn));


                   		   $to = "$getid2";
						   $subject = "My subject";
						   $txt = "Hello world!";
						   $headers = "From: webmaster@example.com";
						   mail($to,$subject,$txt,$headers);



                  		  echo '<META HTTP-EQUIV="refresh" content="0;URL=jobs.php">';
 
                  		 //echo "$idd";
                  		  
}
					?>                                                    
                                                </tbody>

                                            </table>
                                            <div style="margin-top: 3%">
				<a href="#" class="btn btn-success">Assign Duties</a>
			</div>    
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                
                        
                        <div class="clearfix"></div>
                      <!--//photoday-section-->   
	
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->

</div>
</div>
  <!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >

										<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
										
										
										 
									
									
									 
									
									<li><a href="inmates.php"><i class="fa fa-table"></i>  <span>Inmates</span><div class="clearfix"></div></a></li>
									<li><a href="messages.php"><i class="fa fa-envelope"></i>  <span>Messages</span><div class="clearfix"></div></a></li>
									
							        
										 
									 
									
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2014 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2014 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2014 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2014 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2015 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2015 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2015 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2015 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2016 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
				{period: '2016 Q2', iphone: 8442, ipad: 5723, itouch: 1801}
			],
			lineColors:['#ff4a43','#a2d200','#22beef'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
</body>
</html>

<?php require PATH_LIB . "page-bottom.php"; ?>