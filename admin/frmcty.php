<?php
session_start();
include_once '../buslogic.php';
if(isset($_POST["btnupd"]))
{
    $obj=new clscty();
    $obj->ctycod=$_SESSION["cod"];
    $obj->ctynam=$_POST["txtctynam"];
    $obj->update_rec();
    unset($_SESSION["cod"]);
}
if(isset($_POST["btnsub"]))
{
    $obj=new clscty();
    $obj->ctynam=$_POST["txtctynam"];
    $obj->save_rec();
}
if(isset($_REQUEST["ccod"]))
{
    if($_REQUEST["mode"]=='D')
    {
        $obj=new clscty();
        $obj->ctycod=$_REQUEST["ccod"];
        $obj->delete_rec();
    }
    if($_REQUEST["mode"]=='E')
    {
        $obj=new clscty();
        $obj->find_rec($_REQUEST["ccod"]);
        $cnam=$obj->ctynam;
        $_SESSION["cod"]=$obj->ctycod;
    }
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
        <link rel="stylesheet" href="../Hcss/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../Hcss/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../Hcss/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="../Hcss/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../Hcss/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="../Hcss/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="../Hcss/cs-select.css">
	<link rel="stylesheet" href="../Hcss/cs-skin-border.css">
	
	<link rel="stylesheet" href="../Hcss/style.css">


	<!-- Modernizr JS -->
	<script src="../Hjs/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
      <link href="../css/sebastian-carousel.css" rel="stylesheet" type="text/css"/>
       
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
    </style>
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
                                                    <li class="active"><a href="frmcty.php">Add City</a></li>
							
                                                    <li><a href="frmloc.php">Add location</a></li>
                                                    <li><a href="frmAddbus.php">Add Bus</a></li>
                                                    <li ><a href="frmhotel.php">Add Hotels</a></li>
                                                    <li><a href="frmhotelroom.php">Add Rooms</a></li>
                                                       
                                                    <li><a href="../index.php?out=out">Log-Out</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->
	
			<section class="fullwidth">
        
        <div id="home-carousel" data-sc data-sc-theme="fullwidth" data-sc-autostart="true">
            <div>
                <img src="../SliderImg/1-1.jpg" height="570px" >
            </div>
            <div>
                <img src="../SliderImg/Hotel-Srikhand-Sarahan.jpg" height="570px" >
            </div>
            <div>
                <img src="../SliderImg/maxresdefault (1).jpg" height="570px" >
            </div>
            <div>
                <img src="../SliderImg/maxresdefault.jpg" height="570px" >
            </div>
            
        </div>
    </section>
    <script src="../js/sebastian-carousel.js" type="text/javascript"></script>


<section class="services">
<div class="container">
    <hr class="hr">
    <form name="frmcty"  method="Post" action="frmcty.php">
        <div class="dd1">  Cities</div>
       
        <table width="50%" class="t1">
            <tr>
                <td>
                    City Name
                </td>
                <td>
                    <input type="text" name="txtctynam" required=""
         value="<?php if(isset($cnam)) echo $cnam; ?>"/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
    <?php    
    if(isset($_SESSION["cod"]))
   echo "<input type=Submit name=btnupd value=Update />"; 
    else
   echo "<input type=Submit name=btnsub value=Submit />";
           ?>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input type="Reset" name="btncan" value="Cancel" />
                </td>
            </tr>
        </table>
        <?php
        $obj=new clscty();
        $arr=$obj->disp_rec();
        if(count($arr)>0)
            echo "<table width=50% class=t1><tr><th>City</th></tr>";
        for($i=0;$i<count($arr);$i++)
        {
            echo "<tr><td>".$arr[$i][1]."</td>";
 echo "<td><a class=anc href=frmcty.php?ccod=".$arr[$i][0]."&mode=E >Edit</a>";
 echo "&nbsp;&nbsp;&nbsp;&nbsp;";
 echo "<a class=anc href=frmcty.php?ccod=".$arr[$i][0]."&mode=D >Delete</a>";
            echo "</td></tr>";
            echo "<tr><td colspan=2><hr /></td></tr>";
        }
        echo "</table>";
        ?>
    </form>
</div>
</section>

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


	<script src="../Hjs/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../Hjs/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../Hjs/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../Hjs/jquery.waypoints.min.js"></script>
	<script src="../Hjs/sticky.js"></script>

	<!-- Stellar -->
	<script src="../Hjs/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="../Hjs/hoverIntent.js"></script>
	<script src="../Hjs/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="../Hjs/jquery.magnific-popup.min.js"></script>
	<script src="../Hjs/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="../Hjs/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="../Hjs/classie.js"></script>
	<script src="../Hjs/selectFx.js"></script>
	
	<!-- Main JS -->
	<script src="../Hjs/main.js"></script>

	</body>
</html>



  
