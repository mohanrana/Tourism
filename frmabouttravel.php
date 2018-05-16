<?php
session_start();
?>
<!DOCTYPE html>

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
                                    <li ><a href="frmsrctrp.php">Search Trip</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li class="active"><a href="frmabouttravel.php">About Travel</a></li>
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

		
		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>About Travel</h3>
                                                <p>
                                                   Travel is the movement of people between relatively distant geographical locations, and can involve travel by foot, bicycle, automobile, train, boat, bus, airplane, or other means, with or without luggage, and can be one way or round trip.[1][2] Travel can also include relatively short stays between successive movements. 
                                                    
                                                </p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Etymology</h3>
                                                <p>
                                                The origin of the word "travel" is most likely lost to history. The term "travel" may originate from the Old French word travail, which means 'work'.[3] According to the Merriam Webster dictionary, the first known use of the word travel was in the 14th century. It also states that the word comes from Middle English travailen, travelen (which means to torment, labor, strive, journey) and earlier from Old French travailler (which means to work strenuously, toil). In English we still occasionally use the words "travail", which means struggle. According to Simon Winchester in his book The Best Travelers' Tales (2004), the words "travel" and "travail" both share an even more ancient root: a Roman instrument of torture called the tripalium (in Latin it means "three stakes", as in to impale). This link may reflect the extreme difficulty of travel in ancient times. Today, travel may or may not be much easier depending upon the destination you choose (e.g. Mt. Everest, the Amazon rainforest), how you plan to get there (tour bus, cruise ship, or oxcart), and whether you decide to "rough it" (see extreme tourism and adventure travel). "There's a big difference between simply being a tourist and being a true world traveler", notes travel writer Michael Kasum. This is, however, a contested distinction as academic work on the cultures and sociology of travel has noted.[4]    
                                                </p>
                                        </div>				
				</div>
                            <div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Purpose and motivation</h3>
                                                <p>
                                               Reasons for traveling include recreation,[5] tourism[5] or vacationing,[5] research travel[5] the gathering of information, visiting people, volunteer travel for charity, migration to begin life somewhere else, religious pilgrimages[5] and mission trips, business travel,[5] trade,[5] commuting, and other reasons, such as to obtain health care[5] or waging or fleeing war or for the enjoyment of traveling. Travellers may use human-powered transport such as walking or bicycling; or vehicles, such as public transport, automobiles, trains and airplanes.
                                                </p>
                                        </div>				
				</div>
                            <div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Geographic types</h3>
                                                <p>
                                            Travel may be local, regional, national (domestic) or international. In some countries, non-local internal travel may require an internal passport, while international travel typically requires a passport and visa. A trip may also be part of a round-trip, which is a particular type of travel whereby a person moves from one location to another and returns.[7]
                                                </p>
                                        </div>				
				</div>
                              <div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>History of travel</h3>
                                                <p>
                                           Travel dates back to antiquity where wealthy Greeks and Romans would travel for leisure to their summer homes and villas in cities such as Pompeii and Baiae.[8] While early travel tended to be slower, more dangerous, and more dominated by trade and migration, cultural and technological advances over many years have tended to mean that travel has become easier and more accessible.[9] Mankind has come a long way in transportation since Christopher Columbus sailed to the new world from Spain in 1492, an expedition which took over 10 weeks to arrive at the final destination; to the 21st century where aircraft allow travel from Spain to the United States overnight.
                                                </p>
                                                <p>
                                                    Travel in the Middle Ages offered hardships and challenges, however, it was important to the economy and to society. The wholesale sector depended (for example) on merchants dealing with/through caravans or sea-voyagers, end-user retailing often demanded the services of many itinerant peddlers wandering from village to hamlet, gyrovagues (Wandering Monks) and wandering friars brought theology and pastoral support to neglected areas, travelling minstrels practiced the never-ending tour, and armies ranged far and wide in various crusades and in sundry other wars.[8] Pilgrimages were common in both the European and Islamic world and involved streams of travellers both locally (Canterbury Tales-style) and internationally.[10]
                                                </p>
                                                <p>
                                                    In the late 16th century it became fashionable for young European aristocrats and wealthy upper class men to travel to significant European cities as part of their education in the arts and literature. This was known as the Grand Tour, it included cities such as London, Paris, Venice, Florence and Rome. However, The French revolution brought with it the end of the Grand Tour.[8]
                                                </p>
                                                <p>
                                                    Travel by water often provided more comfort and speed than land-travel, at least until the advent of a network of railways in the 19th century. Travel for the purpose of tourism is reported to have started around this time when people began to travel for fun as travel was no longer a hard and challenging task. This was capitalised on by people like Thomas Cook selling tourism packages where trains and hotels were booked together.[11] Airships and airplanes took over much of the role of long-distance surface travel in the 20th century, notably after the second World War where there was a surplus of both aircraft and pilots.[8]
                                                </p>
                                        </div>				
				</div>
                            <div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Travel safety</h3>
                                                <p>
                                           Authorities emphasize the importance of taking precautions to ensure travel safety.[12] When traveling abroad, the odds favor a safe and incident-free trip, however, travelers can be subject to difficulties, crime and violence.[13] Some safety considerations include being aware of one's surroundings,[12] avoiding being the target of a crime,[12] leaving copies of one's passport and itinerary information with trusted people,[12] obtaining medical insurance valid in the country being visited[12] and registering with one's national embassy when arriving in a foreign country.[12] Many countries do not recognize drivers' licenses from other countries; however most countries accept international driving permits.[14] Automobile insurance policies issued in one's own country are often invalid in foreign countries, and it is often a requirement to obtain temporary auto insurance valid in the country being visited.[14] It is also advisable to become oriented with the driving-rules and -regulations of destination countries.[14] Wearing a seat belt is highly advisable for safety reasons; many countries have penalties for violating seatbelt laws.[14]
                                                </p>
                                                <p>
                                                    There are three main statistics which may be used to compare the safety of various forms of travel (based on a DETR survey in October 2000):[15]
                                                </p>
                                        </div>				
				</div>
			</div>
		</div>

		<!-- fh5co-blog-section -->
		<div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Happy Clients</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
						</blockquote>
						<p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
						</blockquote>
						<p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
					</div>
					
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
						</blockquote>
						<p class="author">John Doe, Founder <a href="#">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
					</div>
					
				</div>
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

