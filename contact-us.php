<?php
    if ($_POST["submit"]) {

        $result='<div class="alert alert-success">Form Submitted</div>';
    }

    if (!$_POST['name']){
        
        $error="<br />Please enter your name";
    }

    if (!$_POST['email']){
        
        $error.="<br />Please enter your email address";        
    }

    if (!$_POST['telno']){
        
        $error.="<br />Please enter your telephone number";
    }

    if (!$_POST['message']){
        
        $error.="<br />Please enter your query";        
    }
    
    if ($error){
        
        $result='<div class="alert alert-danger"><strong>All fields must be filled!</strong>'.$error.'</div>';
    }

    else {
        
        if (mail("sales@midlandgates.co.uk", "Comment from website!", "Name: ".$_POST['name']."
                      
        Email: ".$_POST['email']."
             
        Phone Number: ".$_POST['telno']."
    
        Message: ".$_POST['message'])){
            
        $result='<div class="alert alert-success"><strong>Thank You! We will get back to your as soon as we can!</strong></div>';
            
        }
        
        else {
            
            $result='<div class="alert alert-danger"><strong>Sorry there was an error sending your message. Please try again later.</strong></div>';
    }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Midland Gates - Contact Us</title>

    <!-- Links -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   
</head>
<body> 
    
    <!-- Nav-Bar Section  -->
    <section>  
        <nav>
            <div class="navbar navbar-inverse navbar-fixed-top">      
                <div class="container">   
                    <div class="navbar-header">          
                        <a href="index.html" class="navbar-brand">Midland Gates</a>        
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">            
                            <span class="sr-only">Toggle Navigation</span>            
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>            
                        </button>                
                    </div>
                    
                    <div class="collapse navbar-collapse">          
                        <ul class="nav navbar-nav">            
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="swan-neck-gates.html">Swan Neck Gates</a></li>
                                    <li><a href="bow-top-gates.html">Bow Top Gates</a></li>
                                    <li><a href="wooden-driveway-gates.html">Flat Top Gates</a></li>
                                    <li><a href="open-top-gates.html">Open Top Gates</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">Nav header</li>
                                    <li><a href="ironmongery.html">Ironmongery</a></li>
                                    <li><a href="installation.html">Installation Service</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="contact-us.php">Contact Us</a></li>              
                        </ul>  
                        <ul class="nav navbar-inverse navbar-right navbar-nav"><li><a style="color: white" href="tel:+441283223080">01283 223080</a></li></ul>
                    </div>        
                </div>           
            </div>    
        </nav>
    </section>
            
    
                
             <!--   <div class="row" id="headerRow"> -->
                    
  <div class="screenSize">
    <div class="container contentContainer" id="topRow">
    
        <div class="row">
      
        <div class="col-md-10 col-md-offset-1 center" id="">
        
        <h1>Midland Gates</h1>
        <h2>Contact Us</h2>
        <p class="lead">Wooden Driveway Gates Hand Made To Order In The Heart Of The National Forest.</p>
            
        <!-- Displays Result of form submit -->    
        <?php echo $result; ?> 
            
        <form method="post">  
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Enter your name:" value="<?php echo $_POST['name']; ?>">
                <br>
                <input type="email" name="email" class="form-control" placeholder="Enter your email:" value="<?php echo $_POST['email']; ?>">
                <br>
                <input type="tel" name="telno" class="form-control" placeholder="Contact number:" value="<?php echo $_POST['telno']; ?>">
                <br>
                <textarea type="text" name="message" <?php echo $_POST['message']; ?> class="form-control" placeholder="Enter your query:"></textarea>     
                <input type="submit" name="submit" class="btn btn-success btn-lg marginTop" value="Submit"/>  
            </div>
        </form>
      
      <h2>Alternativley call us on <a href="tel:01283 000000">01283 000000</a></h2>
      <h2>Or Email us at <a href="mailto:sales@midlandgates.co.uk">sales@midlandgates.co.uk</a></h2>
      <br>
    </div>
      
    </div>         
    </div>                     
                    
         
                
    </section>
        
  
    
    <!-- Footer Section -->
    <section>
        <div class="container whiteText footerCols">  
            <div class="col-md-8">
                <div class="col-md-6">
                    <h3 style="">Products/Services</h3>
                    <div class="col-md-6">
                        <ul>
                            <li><a href="swan-neck-gates.html">Swan Neck Gates</a></li>
                            <li><a href="bow-top-gates.html">Bow Top Gates</a></li>
                            <li><a href="open-top-gates.html">Open Top Gates</a></li>
                        </ul>    
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li><a href="wooden-driveway-gates.html">Flat Top Gates</a></li>
                            <li><a href="ironmongery.html">Ironmongery</a></li>
                            <li><a href="installation.html">Installation Service</a></li>
                        </ul>
                    </div>    
                </div>
                <div class="col-md-6" id="footerMidCol">
                    <h3>Mid Col Title</h3>
                    <ul>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="terms-and-conditions.html">Terms and Conditions</a></li>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4" id="rightFooterCol">
                <img style="padding-top: 10px" src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_SbyPP_mc_vs_ms_ae_UK.png">
            </div> 
        </div>
        <div class="seperator"></div>
        
        <div class="container bottomFooter">
        <!--      <p class="lead center bold"> <a href="">Terms and Conditions</a> | <a href="">Privacy Policy</a> | <a href="">Cookie Policy</a></p>-->
        <p>&copy; 2015 Midland Gates</p>
    </div>   
        </div>
    </section>
    
    <!-- Script Links --> 
    <section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>    
        <script src="js/homePageOnLoad.js"></script>
        <script src="js/linkscroll.js"></script>
        <script>$(".screenSize").css("min-height",$(window).height())</script>
    </section>

</body>
</html>