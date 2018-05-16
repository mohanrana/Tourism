<?php
session_start();
include_once 'buslogic.php';
$link=  mysqli_connect("localhost","root","", "d");
if(isset($_REQUEST["selCty"]))
{
    $_SESSION["selCty"]=$_REQUEST["selCty"];
}
if(isset($_REQUEST["selloc"]))
{
    $_SESSION["selloc"]=$_REQUEST["selloc"];
}
if(isset($_REQUEST["selhot"]))
{
    $_SESSION["selhot"]=$_REQUEST["selhot"];
}
if(isset($_REQUEST["selroom"]))
{
    $_SESSION["selroom"]=$_REQUEST["selroom"];
}



?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travel &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

 
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
        <link rel="stylesheet" href="Hcss/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="Hcss/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="Hcss/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="Hcss/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="Hcss/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="Hcss/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="Hcss/cs-select.css">
	<link rel="stylesheet" href="Hcss/cs-skin-border.css">
	
	<link rel="stylesheet" href="Hcss/style.css">


	<!-- Modernizr JS -->
	<script src="Hjs/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
      <link href="css/sebastian-carousel.css" rel="stylesheet" type="text/css"/>
       
            <style>
         
        html, body {
            margin: 0;
            padding: 0;
        }
        html * {
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
        }
        header h1 {
            text-align: center;
        }
        article {
            width: 100%;
        }
        section {
            width: 100%;
            max-width: 1110px;
            
            margin-left: auto;
            margin-right: auto;
            overflow: hidden;
        }
        section.fullwidth {
            max-width: 100%;
            padding-left: 0;
            padding-right: 0;
        }
        @media screen and (max-width: 767px){
            section {
                padding-left: 0;
                padding-right: 0;
            }
        }
        .form-controll {
    
    width: 100%;
    height: 42px;
    padding: 10px 20px;
    font-size: 14px;
    line-height: 1.42857;
    color: #555555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
   
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    
    transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}
                    .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
.p1{
    color: rgba(0, 0, 0, 0.5);
    padding: 0.75em 1em !important;
    font-weight: normal;
    border-left: none;
    border-top: none;
    border-top: none;
    text-decoration: none;
    zoom: 1;
    font-size: 16px;
    border-bottom: none !important;
    font-weight: bold;
    
}
    </style>
    <script>
   function selectCty(cty)
   {
       window.location="frmbookBus.php?selCty="+cty;     
   }
   function selectLocation(loc)
   {
        window.location="frmbookBus.php?selloc="+loc; 
   }
   function selectHotel(hot)
   {
        window.location="frmbookBus.php?selhot="+hot; 
   }
   function selectRoom(rom)
   {
        window.location="frmbookBus.php?selroom="+rom; 
   }
   
    </script>
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html"><i class="icon-airplane"></i>Travel</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							  <li ><a href="index.php">Home</a></li>
							<li>
                                        <div class="dropdown">
                                            <p  class="p1">Search Your Trip</p>
                                            <div class="dropdown-content">
                                                <a href="frmbookBus.php" class="p1">Book Bus</a>
                                                <a href="frmbookhotel" class="p1">Hotel Book</a>

                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="frmsrctrp.php">Search Trip</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="frmabouttravel.php">About Travel</a></li>
<?php
if (isset($_SESSION["cod"])) {
    echo "<li><a href=frmtrp.php >Add New Trip</a></li>";
    echo "<li><a href=frmmytrp.php >My Trips</a></li>";
    echo "<li><a href=index.php?out=out >Logout</a></li>";
} else {
    echo "<li><a href='frmreg.php'>Register</a></li>";
    echo "<li><a href='frmlog.php'>Login</a></li>";
}
?>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->
	
			<section class="fullwidth">
        
        <div id="home-carousel" data-sc data-sc-theme="fullwidth" data-sc-autostart="true">
            <div>
                <img src="SliderImg/1-1.jpg" height="570px" >
            </div>
            <div>
                <img src="SliderImg/Hotel-Srikhand-Sarahan.jpg" height="570px" >
            </div>
            <div>
                <img src="SliderImg/maxresdefault (1).jpg" height="570px" >
            </div>
            <div>
                <img src="SliderImg/maxresdefault.jpg" height="570px" >
            </div>
            
        </div>
    </section>
    <script src="js/sebastian-carousel.js" type="text/javascript"></script>

		




<div class="mid-container">

<!-- <div class="full">
           
            <video loop="" muted="" id="bgvedio" class="fulll" autoplay="" >
                <source src="Vedios/a1.mp4" type="video/mp4" id="bgimg">
                    Your browser does not support the <code>video</code> tag.
                </video>
            
         
        </div> -->
    <div class="cboth-padd" >
    
        <div class="price-section app-sec" style="background: none;">
        
            <div class="Contact" style="    width: 456px;
    /* margin-left: 50%; */
    display: block;padding-bottom:  37px;
    margin-left: 448px;    padding-top: 37px;">
       
                <h1 style="text-align: center;color: orange;">Register Here</h1>
                <form class="form-signin" name="frmreg" method="Post" action="frmbookBus.php">
    <div class="input-form">
      <!--  <label class="" for="inputEmail">Email address</label>-->
      <select name="selctCity" style="margin-bottom: 12px;" class="form-control" onchange="selectCty(this.value)">
          <option value="-1" >Select City</option>
          <?php
          $qry="select * from tbcty";
          $res= mysqli_query($link,$qry);
          while ($r=  mysqli_fetch_row($res))
          {
              if(isset($_SESSION["selCty"]) && $_SESSION["selCty"]==$r[0])
              {
              echo '<option value="'.$r[0].'" selected>'.$r[1].' </option>';
              }else
              {
                  echo '<option value="'.$r[0].'" >'.$r[1].' </option>';
              }
          }
          ?>
      </select>
      <select name="selctlocation" style="margin-bottom: 12px;" class="form-control" onchange="selectLocation(this.value)">
          <option value="-1" >Select Location</option>
          <?php
          if(isset($_SESSION["selCty"]))
          {
          $qry="select * from tbloc where locctycod=".$_SESSION["selCty"];
          $res= mysqli_query($link,$qry);
          while ($r=  mysqli_fetch_row($res))
          {
              
             if(isset($_SESSION["selloc"]) && $_SESSION["selloc"]==$r[0])
              {
              echo '<option value="'.$r[0].'" selected>'.$r[1].' </option>';
              }else
              {
                  echo '<option value="'.$r[0].'" >'.$r[1].' </option>';
              }
          }
          }
          ?>
      </select>
      <select name="selcthotel" style="margin-bottom: 12px;" class="form-control" onchange="selectHotel(this.value)">
          <option value="-1" >Select Hotel</option>
          <?php
          if(isset($_SESSION["selloc"]))
          {
          $qry="select * from tbhotel where hotelloccod=".$_SESSION["selloc"];
          $res= mysqli_query($link,$qry);
          while ($r=  mysqli_fetch_row($res))
          {
              if(isset($_SESSION["selhot"]) && $_SESSION["selhot"]==$r[0])
              {
              echo '<option value="'.$r[0].'" selected>'.$r[1].' </option>';
              $_SESSION["prc"]=$r[3];
              }else
              {
                  echo '<option value="'.$r[0].'" >'.$r[1].' </option>';
              }
          }
          }
          ?>
      </select>
      <select name="selctroom" style="margin-bottom: 12px;" class="form-control" onchange="selectRoom(this.value)">
          <option value="-1" >Select Room</option>
          <?php
          if(isset($_SESSION["selhot"]))
          {
          $qry="select * from tbbookroom where roomHotelID=".$_SESSION["selhot"];
          $res= mysqli_query($link,$qry);
          while ($r=  mysqli_fetch_row($res))
          {
              if(isset($_SESSION["selroom"]) && $_SESSION["selroom"]==$r[0])
              {
              echo '<option value="'.$r[0].'" selected>'.$r[1].' </option>';
             $a="Ac Room";
             $b="Non AC Room";
             if($r[1]==$a)
          {
              $prcbar= '<h5>You Select AC Room Price : '.$_SESSION["prc"].'</h5>';
          }else if($r[1]==$b)
          {
              $amt=$_SESSION["prc"] - 200;
              $prcbar= '<h5>You Select Non AC Room Price : '. $amt .'</h5>';
          }else
          {
              $amt=$_SESSION["prc"] - 500;
              $prcbar= '<h5>You Select Normal Room Price : '.$amt .'</h5>';
          }
              }else
              {
                  echo '<option value="'.$r[0].'" >'.$r[1].' </option>';
              }
          }
          }
          ?> 
      </select>
      
      
      <div>
          <?php
                   if(isset($prcbar))
                   {
                       echo $prcbar;
                   }
                   //echo $_SESSION["Rname"];
          ?>
      </div>
      
            <div class="input-form">
                  <table style="width: 100%;">
                      <tr>
                          <td style="padding-right: 26px;">
     
       <select name="selroomcnt" class="form-control">
           <option value="-1">Select Rooms</option>
           <option value="1">1</option>
           <option value="2">2</option>                 
       </select>                       
                          </td>
                          <td>
       
       <select name="selroomper" class="form-control">
           <option value="-1">Select Persons</option>
           <option value="1">1</option>
           <option value="2">2</option>                 
       </select>                                  
                          </td>
                      </tr>
                  </table>
       
           </div> 
    </div>
                    
              <div class="input-form" >
                  <table style="width: 100%;margin-top: 11px;">
                      <tr>
                          <td style="padding-right: 26px;">
<!--       <label class="" for="inputEmail">From</label>-->
      <input type="date" id="selectFromDate" name="selectFromDate" style="margin-bottom: 12px;" class="form-control" placeholder=""  required="" >
                             
                          </td>
                          <td>
<!--       <label class="" for="inputEmail">To</label>-->
      <input type="date" id="selectToDate" name="selectToDate" style="margin-bottom: 12px;" class="form-control" placeholder=""  required="" >
                              
                          </td>
                      </tr>
                  </table>
       
           </div>     
                  
      <div class="input-form">
      <!--  <label class="" for="inputEmail">Email address</label>-->
        <input type="password" id="txtpwd" name="txtpwd" style="margin-bottom: 12px;" class="form-control" placeholder="Password" required="" autofocus=""></div>
         
       <div class="input-form">
      <!--  <label class="" for="inputEmail">Email address</label>-->
        <input type="password" id="txtconpwd" name="txtconpwd" style="margin-bottom: 12px;" class="form-control" placeholder="Confirm Password" required="" autofocus=""></div>
        
   <input class="btn btn-lg btn-block" type="submit" name="btnsub" value="Submit"  />
        
   
      </form>
      
      
      
      
    </div>
  
  </div>
   
</div>


	<footer>
			<div id="footer">
				<div class="container">
					<div class="row row-bottom-padded-md">
                                            <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link" style="width: 551px;">
							<h3>About Travel</h3>
                                                        <p>
                                                            
                                                            Travel is the movement of people between relatively distant geographical locations, and can involve travel by foot, bicycle, automobile, train, boat, bus, airplane, or other means, with or without luggage, and can be one way or round trip.[1][2] Travel can also include relatively short stays between successive movements.
                                                        </p>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Top Flights Routes</h3>
							<ul>
								<li><a href="#">Manila flights</a></li>
								<li><a href="#">Dubai flights</a></li>
								<li><a href="#">Bangkok flights</a></li>
								<li><a href="#">Tokyo Flight</a></li>
								<li><a href="#">New York Flights</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Top Hotels</h3>
							<ul>
                                                            <li><a href="frmholeldetail.php">Hotel Sun Park Manali</a></li>
								<li><a href="frmholeldetail.php">Grand View Hotel Dalhousie </a></li>
								<li><a href="frmholeldetail.php">Mongas Hotel</a></li>
								<li><a href="frmholeldetail.php">Out Town</a></li>
                                                                <li><a href="frmholeldetail.php">Kapil Hotel</a></li>
							</ul>
						</div>
						
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Best Places</h3>
							<ul>
                                                            <li><a href="frmlocdetail.php">Kullu-Manali</a></li>
								<li><a href="frmlocdetail.php">Shimla</a></li>
								<li><a href="frmlocdetail.php">Dharamsala</a></li>
								<li><a href="frmlocdetail.php">Kasauli</a></li>
                                                                <li><a href="frmlocdetail.php">Bir Billing</a></li>
							</ul>
						</div>
						
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2016 Free Html5 <a href="#">Module</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>

	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="Hjs/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="Hjs/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="Hjs/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="Hjs/jquery.waypoints.min.js"></script>
	<script src="Hjs/sticky.js"></script>

	<!-- Stellar -->
	<script src="Hjs/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="Hjs/hoverIntent.js"></script>
	<script src="Hjs/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="Hjs/jquery.magnific-popup.min.js"></script>
	<script src="Hjs/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="Hjs/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="Hjs/classie.js"></script>
	<script src="Hjs/selectFx.js"></script>
	
	<!-- Main JS -->
	<script src="Hjs/main.js"></script>

	</body>
</html>



  
