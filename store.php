 <?php


if(isset($_POST['submit']))
{
    $user_name	=strip_tags($_REQUEST["user_name"]);
	$user_phone		=strip_tags($_REQUEST["user_phone"]);
    $user_locate	=strip_tags($_REQUEST["user_locate"]);	
    $user_items	=strip_tags($_REQUEST["user_items"]);
		
	if(empty($user_name)){						
        $errorMsg[]="An entry is invalid, All fields are required! Restart Application.";
	}
	else if(empty($user_phone)){
        $errorMsg[]="An entry is invalid, All fields are required! Restart Application.";
	}
	else if(empty($user_locate)){
        $errorMsg[]="An entry is invalid, All fields are required! Restart Application.";
        }
        
    
    else if(empty($user_items)){
        $errorMsg[]="An entry is invalid, All fields are required! Restart Application.";
    }
    
    else {

        $successMsg = '';
        $error = '';
        $mall = $_POST['mall'];
        $user_name = $_POST['user_name'];
        $user_phone = $_POST['user_phone'];
        $user_locate= $_POST['user_locate'];
        $message = $_POST['user_items'];
        $email_from = 'services@debuy.com.ng';
        $subject2 = "Your DEBUY Order Today:";
        $email_subject = "New DEBUY Order Today:";
        $email_body = "Content: \n $email_subject \n $user_name \n $user_phone \n $user_locate \n $mall \n $message";
        // $to = "busnessmail1@gmail.com, $user_email";
        $headers = "From: services@debuy.com.ng \r\n";
        $headers .= "Reply-To: services@debuy.com.ng \r\n";


if (empty($errorMsg))
{
mail($email_from,$email_subject,$email_body,$headers);
// mail($user_email,$subject2,$message,$headers);
    $successMsg = "ORDER SUCCESSFUL! A DEBUY Agent will contact you shortly. You may Close Application.";
}
else{
    $errorMsg = "Failed! Please try again";
}

function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($user_name))
{
    echo "Bad email value!";
    exit;
}
    }
}
?>



<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo000.png" type="image/x-icon">
  <meta name="description" content="">
  
<!-- Start of Async Callbell Code -->
<script>
  window.callbellSettings = {
    token: "XkSs97E1L1Kgy7gA4DHn2UL9"
  };
</script>
<script>
  (function(){var w=window;var ic=w.callbell;if(typeof ic==="function"){ic('reattach_activator');ic('update',callbellSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Callbell=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://dash.callbell.eu/include/'+window.callbellSettings.token+'.js';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()
</script>
<!-- End of Async Callbell Code -->
  
  <title>DEBUY - Orders</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/web/assets/gdpr-plugin/gdpr-styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
</head>
<body>
<section class="image-header">
    <ul class="topnav">
        <li><a href="index.php">Home</a></li>
        <li><a class="active" href="store.php">Shop Now</a></li>
        <li class="right"><a href="service.php">What we Do</a></li>

        <div class="" id="share1-3h"  tyle="background-color: rgb(0, 0, 0); ">
            <div class="container">
                <!-- <div class="media-container-row social1 cid-sJW92JjO1E" > -->
                    <div class="col-12"  tyle="background-color: rgb(0, 0, 0);">
                        <div>
                            <div class="mbr-social-likes align-center">
                                <span class="btn btn-social socicon-bg-facebook facebook m-2" title="Share link on Facebook">
                                    <i class="socicon socicon-facebook"></i>
                                </span>
                                <span class="btn btn-social twitter socicon-bg-twitter m-2" title="Share link on Twitter">
                                    <i class="socicon socicon-twitter"></i>
                                </span>
                                <span class="btn btn-social instagram socicon-bg-instagram m-2" title="Share link on Instagram">
                                    <i class="socicon socicon-instagram"></i>
                                </span>
                                <span class="btn btn-social linkedin socicon-bg-linkedin m-2" title="Share link on Linkedin">
                                    <i class="socicon socicon-linkedin"></i>
                                </span>
                                <span class="btn btn-social pinterest socicon-bg-pinterest m-2" title="Share link on Pinterest">
                                    <i class="socicon socicon-pinterest"></i>
                                </span>
                                <span class="btn btn-social mailru socicon-bg-mail m-2" title="Share link on Google">
                                    <i class="socicon socicon-google"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </ul>
   
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="info">
                    <div class="wrap">
                        <ul class="breadcrumbs">
                            <li><a href="index.php">Home</a>/</li>
                            <li>debuy smart shopping</li>
                        </ul>
                        <h1><strong>debuy smart shopping</strong></h1>
                    </div>
                </div>
            </div>	
        </div>
    </div>
</section>

                            <?php
                                if(isset($errorMsg))
                                {
                                    foreach($errorMsg as $errorMsg){
                                    ?>
                                            <div style="padding-top:5%; position:fixed; top:0; right:0; bottom:0; left:0; background-size:cover;background-color: #red opacity:0.22; z-index:4;">
                                                <div class="alert alert-danger"><strong><?php echo $errorMsg; ?></strong><br>
                                                    <a href="store.php">
                                                        <button type="button" class="btn btn-primary display-4" style="top:0; right:0; bottom:0; left:0;" >
                                                            Restart App
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                    <?php
                                    }
                                }
                                if(isset($successMsg))
                                {
                                ?>
                                            <div style="padding-top:5%; position:fixed; top:0; right:0; bottom:0; left:0; background-size:cover;background-color: #red opacity:0.22; z-index:4;">
                                                <div class="alert alert-success"><strong><?php echo $successMsg; ?></strong><br>
                                                    <a href="index.php">
                                                        <button type="button" class="btn btn-primary display-4" style="top:0; right:0; bottom:0; left:0;" >
                                                            Close App
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                <?php
                                }
                            ?>   

<section class="features1 cid-sJWy3TMCJD" id="features2-3j">
    <div class="mbr-overlay" style="opacity: 0.8; background-color: #fc0;">
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card-wrapper" onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer; 
                        /* background-color: #f88502; */
                        opacity: 0.9;
                        filter: alpha(opacity=60);">
                        <div class="card-box align-center">
                        <span><img src="assets/images/cart2.gif" alt=""></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7">
                            <strong>ORDER NOW</strong></h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card-wrapper" nclick="document.getElementById('id01').style.display='block'" style="cursor: pointer; 
                        /* background-color: #f88502; */
                        opacity: 0.9;
                        filter: alpha(opacity=60);">
                        <div class="card-box align-center">
                        <span><img src="assets/images/cart2.gif" alt=""></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7"><strong>ORDER BOOKING (Coming Soon)</strong></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card-wrapper" onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer; 
                        /* background-color: #f88502; */
                        opacity: 0.9;
                        filter: alpha(opacity=60);">
                        <div class="card-box align-center">
                        <span><img src="assets/images/cart2.gif" alt=""></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7">
                            <strong>O.C SUPER MARKET [Eket Road]</strong></h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card-wrapper" onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer; 
                        /* background-color: #f88502; */
                        opacity: 0.9;
                        filter: alpha(opacity=60);">
                        <div class="card-box align-center">
                        <span><img src="assets/images/cart2.gif" alt=""></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7"><strong>RIGHTWAY SUPER MARKET [Eket Road]</strong></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card-wrapper" onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer; 
                        /* background-color: #f88502; */
                        opacity: 0.9;
                        filter: alpha(opacity=60);">
                        <div class="card-box align-center">
                        <span><img src="assets/images/cart2.gif" alt=""></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7">
                            <strong>VERUZO SUPER MARKET [Ekim Junction]</strong></h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card-wrapper" onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer; 
                        /* background-color: #f88502; */
                        opacity: 0.9;
                        filter: alpha(opacity=60);">
                        <div class="card-box align-center">
                        <span><img src="assets/images/cart2.gif" alt=""></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7"><strong>AKSU Cafeteria</strong></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card-wrapper" onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer; 
                /* background-color: #e95858; */
                opacity: 0.9;
                filter: alpha(opacity=60);">
                    <div class="card-box align-center">
                    <span><img src="assets/images/cart2.gif" alt=""></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7">
                            <strong>Super Market [Opposite School-gate] </strong></h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card-wrapper" onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer; 
                        /* background-color: #f88502; */
                        opacity: 0.9;
                        filter: alpha(opacity=60);">
                        <div class="card-box align-center">
                        <span><img src="assets/images/cart2.gif" alt=""></span>
                            <h4 class="card-title align-center mbr-black mbr-fonts-style display-7">
                            <strong>AKPADEN MINI MARKET</strong></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card-wrapper" onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer; 
                /* background-color: #e95858; */
                opacity: 0.9;
                filter: alpha(opacity=60);">
                    <div class="card-box align-center">
                    <span><img src="assets/images/cart2.gif" alt=""></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7">
                            <strong>BUSH BAR [AKPADEN JUNCTION]</strong></h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card-wrapper" onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer; 
                        /* background-color: #f88502; */
                        opacity: 0.9;
                        filter: alpha(opacity=60);">
                        <div class="card-box align-center">
                            <span><img src="assets/images/cart2.gif" alt=""></span>
                            <h4 class="card-title align-center mbr-black mbr-fonts-style display-7">
                            <strong>BUSH BAR [IKOT OYORO]</strong></h4>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div id="id01" class="w3-modal" style="margin-top: 0.0%; border-radius: 6px;">
        <div class="w3-modal-content w3-animate-zoom">
                        <div class="image-header1">
                            <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn" id="myClick" style="font-color: white;">&times</span>
                            <div class="content-wrapper">
                                <div class="w3-container">
                                    <div class="container-scroller">
                                        <div class="col-md-6">
                                            <div class="info" style="cursor:pointer;">
                                                <div class="wrap">
                                                    <div class="dragArea row page-header">
                                                 <a href="https://wa.me/+2349045067499"> 
                                                        <img src="assets/images/com.whatsapp.png" alt="avater" style="padding-left:11px;"></a>
                                                        <span class="text-center float-none float-sm-center d-block mt-1 mt-sm-0" style="color:white; padding:10px;"><strong>WhatsApp Smart Orders</strong> </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>	
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                      <div class="row grid-margin">
                        <div class="col-lg-12">
                          <div class="card">
                            <div class="card-body">
                            <form action='<?php echo htmlentities($_SERVER['PHP_SELF']); ?>' method='post' name="myForm">
                                    </p>
                                    <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">
                                            <strong>SEND ORDER</strong>
                                    </p>
                                
                                    <div class="dragArea row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="name">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="mobi-mbri-user"></i></span>
                                            <input type="text" name="user_name" placeholder="Name(s)" data-form-field="Client Name" class="form-control" value="" id="name-form7-t" >
                                            </div>
                                        </div>
                                        
                                        <div data-for="phone" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="mobi-mbri-phone"></i></span>
                                                    <input type="tel" name="user_phone" placeholder="Phone: (+234-xxx-xxx-xxxx)" data-form-field="Phone Number:" class="form-control"  pattern="^\d{4}\d{3}\d{4}$" value="" id="phone-form7-t" >
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="user_locate">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="mobi-mbri-map-pin"></i></span>
                                                    <input type="text" name="user_locate" placeholder="Describe your precise Location" class="form-control" value="" id="email-form7-t" >
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="mall">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="mobi-mbri-map-pin"></i></span>
                                                    <select name="mall" placeholder="Mall Closest" class="form-control" value="" id="email-form7-t" >
                                                    <option value="Select" selected>Mall closest:</option>
                                                    <option value="DeChoice Mall, Uyo [5/7 Ikot Ekpene-Uyo Rd.]">
                                                    DeChoice Mall, Uyo @5/7 Ikot Ekpene - Uyo Road </option>
                                                    <option value="Udo Shopping Mall, [#1 Babangida way]">
                                                    Udo Shopping Mall @ #1 Babangida Way </option>
                                                    <option value="city center, Uyo, Akwa Ibom">
                                                    City Center @ Uyo, Akwa Ibom </option>
                                                    <option value="Shopping Mall - Uyo Plaza @260 Abak Rd">
                                                    Shopping Mall - Uyo Plaza @260 Abak Road </option>
                                                    <option value="Udo Shopping Mall @ #1 IBB Avenue ">
                                                    Udo Shopping Mall @ #1 IBB Avenue </option>
                                                    <option value="Apico Shopping Center @Plot 61 Akwaima Estate Rd 1">
                                                    Apico Shopping Center @Plot 61 Akwaima Estate Road 1 </option>
                                                    <option value="Jumia Shopping Center @TALENT CREATIONS, 205 Aka Rd. ">
                                                    Jumia Shopping Center @TALENT CREATIONS, 205 Aka Road </option>
                                                    <option value="Jane Juliet Shopping Mall @ #141 Ikot Ekpene - Uyo Rd.">
                                                    Jane Juliet Shopping Mall @ #141 Ikot Ekpene - Uyo Road </option>
                                                  <option value="Cico Shopping Center @#320 Oron Rd">
                                                  Cico Shopping Center @ #320 Oron Road </option>
                                                  <option value=" EniPaul Plaza @ #253 Oron Rd ">
                                                  EniPaul Plaza @ #253 Oron Road </option>
                                                  <option value="Fantasy plaza @Akpan Andem Market">
                                                  Fantasy Plaza @Akpan Andem Market </option>
                                                  <option value="Le Prym Stores @ #74 Udo Umana St.">
                                                  Le Prym Stores @ #74 Udo Umana Street </option>
                                                  <option value="Dominion Shopping Center @Osong Ama Estate Rd.">
                                                  Dominion Shopping Center @Osong Ama Estate Road </option>
                                                  <option value="Jumia Uyo @2W6C + W55">Jumia Uyo @2W6C + W55</option>
                                                  <option value="Nteps Mart">Nteps Mart</option>
                                                  <option value="Helene Shopping Center @17 Urua Ekpa Rd.">
                                                  Helene Shopping Center @17 Urua Ekpa Road</option>
                                                  <option value="The Choice @Plaza Keke Garage, Ikot Ekpene-UyoRd. Uyo">The Choice @Plaza Keke Garage, Ikot Ekpene-Uyo Road, Uyo </option>
                                                  <option value="Sunrise City Shopping Center @13 Aka Rd.">
                                                  Sunrise Cities Shopping Center @13 Aka Road </option>
                                                  <option value="Main Street Supermarket @2W33 + 9J2, Aka Rd.">
                                                  Main Street Supermarket @2W33 + 9J2, Aka Road </option> 
                                                  <option value="Shoppers Fair Shopping Center @Uyo, Akwa Ibom">
                                                 Shoppers Fair Shopping Center @Uyo </option>
                                                 <option value="Central Shopping Center @53 Abak Rd.">
                                                 Central Shopping Center @53 Abak Road </option>                                           
                                                    </select>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="textarea">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="mobi-mbri-cart-add"></i></span>
                                                    <textarea placeholder="Ex:Tin Milk(Peak, Full cream, 160g, 5x).. or Polo (Plain black, XXL, 2x).." class="form-control" name="user_items"></textarea>
                                            </div>
                                        </div>
                                       
                                        <footer class="footer" style="padding-left: auto; padding-right: auto; margin: auto; display:none; text-align: -webkit-center;" id="buttonreplacements">
                                        <span class="text-cente text-sm-lef d-block d-sm-inline-block">By clicking the confirmation button below, <a href="service.php" target="_blank">You confirm to have read and agreed</a> to Our Terms of Service</span>
                                        </div>
                                        </footer>
                                        
                                        <div id="formsubmitbutton" class="mbr-section-subtitle mbr-fonts-style mb-3 display-4">
                                            <input type="button" value="Send Order" onclick="ButtonClicked()" class="btn btn-primary display-4" style="padding-left: auto; padding-right: auto; margin: auto;" >
                                        </div>

                                        <div  style="padding-left: auto; padding-right: auto; margin: auto; display:none; text-align: -webkit-center;" id="buttonreplacement">
                                        <button type="submit" name="submit" value="Confirm Order.." class="btn btn-primary display-4" >
                                        Click to Confirm Order
                                            <i class="fa fa-spinner fa-spin">  </i>
                                        </button>
                                        </div>
                                    </div>     
                            </form>
                            </div>   
                            <footer class="footer">
                                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                  <div class="d-sm-flex justify-content-center justify-content-sm-between"><span class="float-none float-sm-center d-block mt-1 mt-sm-0 text-center"> <strong><b>Services Charge<br>(UYO ONLY)<br></b></strong><br>N500 - N5,000: N370<br>Uyo Metropolis: Negotiable<br>More: Negotiable</br> </span><br></div>
                                </div>
                                <span class="text-center float-none float-sm-center d-block mt-1 mt-sm-0 ">Copyright© 2022 <a href="index.php" target="_blank">Debuy.com.ng Team</a>. All rights reserved.</span>
                            </footer>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
</section>

<section class="features1 cid-sJWy3TMCJD" id="features2-3j">
    <div class="mbr-overlay"  style="opacity: ; background-color: rgb(0, 0, 0);;">
    </div>
    <div class="" id="share1-3h"  style="background-color: rgb(0, 0, 0);; ">
            <div class="container">
                <!-- <div class="media-container-row social1 cid-sJW92JjO1E" > -->
                    <div class="col-12"  style="background-color: rgb(0, 0, 0); background-size:cover;">
                        <div>
                            <div class="mbr-social-likes align-center">
                                <span class="btn btn-social socicon-bg-facebook facebook m-2" title="Share link on Facebook">
                                    <i class="socicon socicon-facebook"></i>
                                </span>
                                <span class="btn btn-social twitter socicon-bg-twitter m-2" title="Share link on Twitter">
                                    <i class="socicon socicon-twitter"></i>
                                </span>
                                <span class="btn btn-social instagram socicon-bg-instagram m-2" title="Share link on instagram">
                                    <i class="socicon socicon-instagram"></i>
                                </span>
                                <span class="btn btn-social linkedin socicon-bg-odnoklassniki m-2" title="Share link on linkedin">
                                    <i class="socicon socicon-linkedin"></i>
                                </span>
                                <span class="btn btn-social pinterest socicon-bg-pinterest m-2" title="Share link on Pinterest">
                                    <i class="socicon socicon-pinterest"></i>
                                </span>
                                <span class="btn btn-social mailru socicon-bg-mail m-2" title="Share link on Google">
                                    <i class="socicon socicon-google"></i>
                                </span>
                                <span class="text-center float-none float-sm-center d-block mt-1 mt-sm-0 footer">Copyright© 2022 <a href="index.php" target="_blank">Debuy.com.ng Team</a>. All rights reserved.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<script>
     function ButtonClicked(){
                                                    var n = document.forms["myForm"]["user_name"].value;
                                                    if (n == "") {
                                                        alert("A field is empty ! All fields are REQUIRED !");
                                                        return true;
                                                    }
                                                    var p = document.forms["myForm"]["user_phone"].value;
                                                    if (p == "") {
                                                        alert("A field is empty ! All fields are REQUIRED !");
                                                    return true;
                                                    }
                                                    var l = document.forms["myForm"]["user_locate"].value;
                                                    if (l == "") {alert("A field is empty ! All fields are REQUIRED !");
                                                    return true;
                                                    }
                                                    
                                                    var mall = document.forms["myForm"]["mall"].value;
                                                    if (mall == "") {alert(" A field is empty! All fields are REQUIRED! ");
                                                    return true;
                                                    }
                                                    
                                                    var list = document.forms["myForm"]["user_items"].value;
                                                    if (list == "") {alert("A field is empty ! All fields are REQUIRED !");
                                                    return true;
                                                    }
                                                    else{
                                                
                                                document.getElementById("formsubmitbutton").style.display = "none"; 
                                                document.getElementById("buttonreplacement").style.display = ""; 
                                                document.getElementById("buttonreplacements").style.display = ""; 
                                                return true;
                                                        }                                           
                                                    }
</script>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/sociallikes/social-likes.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="vendors/summernote/dist/summernote-bs4.css">
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/soccer.min.css">
  <link rel="stylesheet" href="css/preloader-default.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <script src="vendors/tinymce/tinymce.min.js"></script>
  <script src="vendors/tinymce/themes/modern/theme.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <link rel="stylesheet" href="assets/theme/js/mycss.css"></script>

</body>
</html>