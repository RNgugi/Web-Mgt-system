
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>KPMS &mdash; Register Inmates</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
            <link rel="icon" href="../img/core-img/favicon.png">


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
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Sections -->
        

        
        <link rel="stylesheet" href="css/style.css">
    <div class="main" style="background-color: white;background-image: none;">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Register Inmate</h2>
                        
                      <form action="writerpros.php" method="post" class="register-form" id="register-form">
            <div class="form-group ">
                  
                <input type="text" placeholder="Email" name="username" class="form-control" >
            </div>


            <div class="form-group ">
                <input type="text" placeholder="First Name" name="fname" class="form-control" >
            </div>


            <div class="form-group ">
                <input type="text" placeholder="Last Name" name="lname" class="form-control" >
            </div>    
            

            <div class="form-group ">
                <input type="text" placeholder="National ID" name="idnumber" class="form-control" >
            </div>


            <div class="form-group ">
                <input type="text" placeholder="Inmate ID" name="inmateid" class="form-control" >
            </div>


            <div class="form-group ">
                <input type="text" placeholder="Year of Birth" name="yob" class="form-control" >
            </div>


            <div class="form-group ">
                <select type="text" placeholder="Crime" name="crime" class="form-control" > 
                    <option value="" selected="selected" disabled="disabled">- Select Crime -</option>
                   <option value="Theft">Theft</option>
                  <option value="Murder">Murder</option>
                  <option value="Robery">Robery</option>
                  <option value="Assault">Assault</option>
                  <option value="Sexual Assault">Sexual Assault</option>
                  <option value="Illegal Drugs">Illegal Drugs</option>
                  <option value="Traffic">Traffic</option>

                </select>
            </div>


            <div class="form-group ">
                <input type="text" placeholder="Term Length (Months)" name="termlength" class="form-control">
            </div>


            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <input type="text" placeholder="Release Date (yyyy/mm/dd)" name="releasedate" class="form-control" >
            </div>


            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <select type="text" placeholder="Activities Assigned" name="activity" class="form-control" >
                    <option value="" selected="selected" disabled="disabled">- Assign Activity -</option>
                    <option value="Furniture">Furniture</option>
                    <option value="Masonry">Masonry</option>
                    <option value="Agriculture">Agricultrure</option>
                    <option value="Catering">Catering</option>
                    <option value="I.T">I.T</option>
                    <option value="Athletics">Athletics</option>
                </select>
            </div>





            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit" name="submit" style="margin-right: 25%;">

                <a href="../admin/index.php" class="btn btn-success" role="button">Back Home</a>

            </div>
            <div>
            </div>

        </form>

    </div>

                
				
            </div>
			<!--Footer-->
        
        </section>

        </body>
    </html> 

