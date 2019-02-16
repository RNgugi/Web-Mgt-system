<?php
session_start();
$user = $_SESSION["username"];

$conn = mysqli_connect('localhost','root','','writers') or die(mysql_error());
$query = mysqli_query($conn,"SELECT activity FROM writers WHERE username = '".$user."'") or die(mysqli_error($conn));
while ($row=mysqli_fetch_assoc($query)) {
    $activity = $row['activity'];
}
if ($activity == "") {
    echo "<script>alert('Please update your Account');</script>";
    header("refresh:0.1 url=index.php");
    exit;
}
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
mysqli_close($conn);
?>

<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>WritersPad &mdash; Sign Up</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="../assets/css/plugins.css" />
        <link rel="stylesheet" href="../assets/css/roboto-webfont.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="../assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="../assets/css/responsive.css" />

        <script src="../assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>


<body style="color: red; font-size: 10px;" >

    
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Sections -->
        <section id="social" class="social" >
            <div class="container" style="background-color: black">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="social-wrapper">
                        <div class="col-md-6">
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="social-contact">
                                <a href="#"><i class="fa fa-phone"></i>+254 740147010</a>
                                <a href="mailto:contact@writerspad.com"><i class="fa fa-envelope"></i>contact@writerspad.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /container -->       
        </section>

        <nav class="navbar navbar-default" >
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="../assets/images/logo.png" alt="Logo" /></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                     
                       <a href="../index.php" class="btn btn-success">Home</a>
  <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
  <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
  <a href="../jobs/jobs.php?id=<?php echo $user; ?>" class="btn btn-success">View Jobs</a>
  
  </b></h4>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>



<hr>
<div class="container bootstrap snippet" >
  <h4 >Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h4>

    <div class="row">
  		<div class="col-sm-10"><br></div>
    	
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        
      </div></hr><br>

               
          <?php
                  $user = $_SESSION["username"];
                  $conn = mysqli_connect('localhost','root','','writers') or die(mysql_error());
                  $query = mysqli_query($conn,"SELECT * FROM writers WHERE username = '".$user."'") or die(mysqli_error($conn));
                  while ($row=mysqli_fetch_assoc($query)) {
                      $fname = $row['fname'];
                      $lname = $row['lname'];
                      $idnumber = $row['idnumber'];
                      $location = $row['location'];
                      $birthday = $row['birthday'];
                      $gender = $row['gender'];
                      $phone = $row['phone'];
                      $specialty = $row['specialty'];
                      $comporders = $row['comporders'];
                      $comppages = $row['comppages'];
                      $monthorders = $row['monthorders'];
                      $monthpages = $row['monthpages'];
                      $corrections = $row['corrections'];
                      $cancelled = $row['cancelled'];
                      $paymentdue = $row['paymentdue'];
                  }
                ?>
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Completed Orders</strong></span> <?php echo $comporders; ?>
          </li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Completed Pages</strong></span><?php echo $comppages; ?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Orders(Last one month)</strong></span> <?php echo $monthorders; ?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Pages(Last one month)</strong></span> <?php echo $monthpages; ?> </li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Corrections</strong></span> <?php echo $corrections; ?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Cancelled Orders</strong></span> <?php echo $cancelled; ?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Payment Due</strong></span> Ksh <?php echo $paymentdue; ?></li>

          </ul> 
               
          
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              
                              <li><?php echo $username; ?></li>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" disabled  value="<?php echo $lname; ?>">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="idnumber"><h4>ID Number</h4></label>
                              <input type="text" class="form-control" name="idnumber" id="idnumber" disabled  value="<?php echo $idnumber; ?>">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="location"><h4>Location</h4></label>
                              <input type="text" class="form-control" name="location" id="location" disabled  value="<?php echo $location; ?>"> 
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="birthday"><h4>Birthday</h4></label>
                              <input type="text" class="form-control" name="birthday" id="birthday" disabled  value="<?php echo $birthday; ?>"> 
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="gender"><h4>Gender</h4></label>
                              <input type="text" class="form-control" id="gender" disabled  value="<?php echo $gender; ?>">
                          </div>
                      </div>
                      
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="phone"><h4>Phone Number</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" disabled  value="<?php echo $phone; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="specialty"><h4>Specialty</h4></label>
                              <input type="text" class="form-control" name="specialty" id="specialty" disabled  value="<?php echo $specialty; ?>">
                          </div>
                      </div>
                      
              	</form>
              
              <hr>
              
              	</form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
    <br><br><br><br><br>
  </body>
</html>
                                                      