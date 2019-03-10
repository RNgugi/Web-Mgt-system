

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>KPMS - Messages</title>
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
<!-- tables -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
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
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Messages</li>
                <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
            </ol>
<div class="agile-grids" >	
				<!-- tables -->
				
				

				  <h3>Messages</h3>
				 <table id="table-max-height" class="max-height" >
					<thead>
					  <tr>
					  	<th>Inmate</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Relationship</th>
						<th>Message</th>
						
						
					  </tr>
					</thead>
					<tbody >
					 
					  	<?php
					  	$conn = mysqli_connect('localhost','root','','writers') or die(mysql_error());
					  	

                  $query = mysqli_query($conn,"SELECT * FROM contact  ") or die(mysqli_error($conn));



                  while ($row=mysqli_fetch_assoc($query)) {

                  	  $id = $row['id'];
                  	  //$idd = $row['idd'];
                      $username = $row['username'];
                      $email = $row['email'];
                      //$description = $row['description'];
                      $phone = $row['phone'];
                      $relationship = $row['relationship'];
                      $message = $row['message'];
                     

                      
                ?> <tr>
						<td><?php echo "$username";?></td>
						<td><?php echo "$email";?></td>
						<td><?php echo "$phone";?></td>
						<td><?php echo "$relationship";?></td>
						<td><?php echo "$message";?></td>
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

				  
				</div>
								  
				<!-- //tables -->
			</div>
			<div style="margin-top: 2%">
				<?php
					  	$conn = mysqli_connect('localhost','root','','writers') or die(mysql_error());
					  	

                  $s = "SELECT * FROM contact";
                  $result =$conn->query($s);
                  $count = $result->num_rows;
                  echo $count. " Messages";


                  ?>
			</div>
			<div style="margin-top: 3%">
				<a href="index.php" class="btn btn-success" style="margin-bottom: 1.35%">Home</a>
			</div>
			

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

<!--COPY rights end here-->
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

</body>
</html>