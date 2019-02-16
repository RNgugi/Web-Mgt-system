<?php
session_start();
$user = $_SESSION["username"];

$conn = mysqli_connect('localhost','root','','writers') or die(mysql_error());
$query = mysqli_query($conn,"SELECT staffid FROM accowners WHERE username = '".$user."'") or die(mysqli_error($conn));
while ($row=mysqli_fetch_assoc($query)) {
     $staffid = $row["staffid"];
}
if ($staffid == "") {
    echo "<script>alert('Please complete your registration');</script>";
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
        <title>KPMS - Warden Profile</title>
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
    

<body style="color: black; font-size: 10px;" >

    
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Sections -->
        

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
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                     
                       <a href="../index.php" class="btn btn-success">Home</a>
  <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
    <a href="index.php" class="btn btn-warning">Update Your Details</a>

  <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
<!--   <a href="../postjob/index.php?iduser=<?php echo($user); ?>" class="btn btn-lg btn-success pull-right" >View Schedule</a>-->  

  <a href="#" class="btn btn-lg btn-success pull-right" >View Schedule</a>

 
  </b></h4>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
		

<hr>
<div  class="container bootstrap snippet"    >
  

  <h4 >Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h4>

  
    <div class="row">
  	    	
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        
      </div></hr><br>

               <?php
                  $user = $_SESSION["username"];
                  $conn = mysqli_connect('localhost','root','','writers') or die(mysql_error());
                  $query = mysqli_query($conn,"SELECT * FROM accowners WHERE username = '".$user."'") or die(mysqli_error($conn));
                  while ($row=mysqli_fetch_assoc($query)) {
                      $fname = $row['fname'];
                      $lname = $row['lname'];
                      $idnumber = $row['idnumber'];
                      $staffid = $row['staffid'];
                      $yob = $row['yob'];
                      $gender = $row['gender'];
                      $rank = $row['rank'];
                      


                      
                  }
                ?>
          
          
          
          
          
               
          
          
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

                              <input type="text" class="form-control" name="fname" id="fname" disabled value="<?php echo $fname; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" disabled class="form-control" name="last_name" id="last_name" value="<?php echo $lname; ?>">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="idnumber"><h4>ID Number</h4></label>
                              <input type="text" disabled class="form-control" name="idnumber" id="idnumber" value="<?php echo $idnumber; ?>">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="location"><h4>Staff ID</h4></label>
                              <input type="text" disabled class="form-control" name="location" id="location" value="<?php echo $staffid; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="birthday"><h4>Year of Birth</h4></label>
                              <input type="text" disabled class="form-control" name="birthday" id="birthday" value="<?php echo $yob; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="gender"><h4>Gender</h4></label>
                              <input type="text" disabled class="form-control" id="gender" value="<?php echo $gender; ?>"> 
                          </div>
                      </div>
                     
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="phone"><h4>Gender</h4></label>
                              <input type="text" disabled class="form-control" name="phone" id="phone" value="<?php echo $gender; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="accname"><h4>Rank</h4></label>
                              <input type="text" disabled class="form-control" name="accname" id="accname" value="<?php echo $rank; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                

                                
                                <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
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
      <br><br><br><br><br>  <br><br><br><br><br>
  </body>
</html>
                                                      