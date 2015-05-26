<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>RJ Festival v0.1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <link href="css/jquery.countdown.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="css/bootstrap-social.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/festivalwood_logo.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.js"></script>

    

</head>

<body>
   

 
<div class="container">
	<div class="row clearfix">
		<div class="col-md-2 column">
			<img alt="140x140" src="img/festivalwood_logo.png" class="img-rounded" style="width: 140px; height: 140px;">
		</div>
		<div class="col-md-10 column rjnavigation">
			<div id="rjnavbar">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="home.php">Home</a>
						</li>
						<li>
							<a href="home.php#buytickets">BUY Tickets</a>
						</li>
                        <li>
							<a href="lineup.php">Line-Up</a>
						</li>
                        <li class="active">
							<a href="eventinfo.php">Event Info</a>
						</li>
                        <li>
							<a href="greenisbetter.php">Green is Better</a>
						</li>
                        <li>
							<a href="login_members.php">Login/Members</a>
						</li>
                        <li>
							<a href="aboutus.php">About Us</a>
						</li>
                        
					</ul>
				</div>
				
			</nav>
                </div>
            <div id="socialmedia">
                
                <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/rjfestival2015" target="_blank">
                    <i class="fa fa-twitter"></i>
                </a>
                <a class="btn btn-social-icon btn-sm btn-facebook">
                    <i class="fa fa-facebook"></i>
                </a>
                <a class="btn btn-social-icon btn-sm btn-instagram">
                    <i class="fa fa-instagram"></i>
                </a>
                <a class="btn btn-social-icon btn-sm btn-pinterest">
                    <i class="fa fa-youtube"></i>
                </a>
            </div>
		</div>
		
	</div>
    <div class="row clearfix" id="divprops">
        <div class="col-md-12 column" >
            <div class="page-header">
                <h1>
                    Event Information<small></small>
                </h1>
            </div>
            <div>
                <h2>
                    Opening Hours
                </h2>
                <div style="width:50%;">
                    <address><strong>Streetname 1 <br> 1234 AB Cityname<br> Netherlands</strong></address>

                    <strong>Weekend</strong>
                    <br>
                    <p style="text-indent: 50px;">
                        Friday 24 July 2015 12h00 - 23h30</p>
                    <p style="text-indent: 50px;">Saturday 25 July 2015 12h00 - 23h30</p>
                    <p style="text-indent: 50px;">Sunday 26 July 2015 12h00 - 23h30</p>

                    <p>
                        Checkout the full lineup and timetable <a href="lineup.php"><b>here</b></a>
                        <br><br>On Friday & Saturday - It will be possible to check-in until 22h00. After this time access will be denied.
                        <br>On Sunday - It will be possible to check in until 21h00. After this time access will be denied.
                        <br><br>Access to the festival is only possible if  you have a Wood Festival Bracelet registrered at name.
                    </p>
                </div>
                <img src="img/EventMap.png" style="right: 0; position: absolute; top: 100px; width: 45%;">
            </div>
        </div>
        <div class="container" style="width: 100%">
            <div id="content">
                <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                    <li role="presentation" class="active"><a href="#access" data-toggle="tab"><strong>Access to Wood Festival</strong></a></li>
                    <li role="presentation"><a href="#route" data-toggle="tab"><strong>How to get there?</strong></a></li>
                    <li role="presentation"><a href="#atfestivalsite" data-toggle="tab"><strong>At the festival site</strong></a></li>
                    <li role="presentation"><a href="#rules" data-toggle="tab"><strong>Rules & Regulations</strong></a></li>
                    <li role="presentation"><a href="#disability" data-toggle="tab"><strong>People with disability</strong></a></li>
                </ul>
                <div id="my-tab-content" class="tab-content">
                    <div class="tab-pane fade in active" id="access">
                        <h1>Access to Wood Festival</h1>
                        <p>Minimum age, you need a ticket biatch. Get it now here and so on</p>
                    </div>
                    <div class="tab-pane fade" id="route">
                        <h1>How to get there?</h1>
                        <h3><strong>Eindhoven Airport (EIN)</strong></h3>
                        <p> The distance between the airport and the event is 229km <br>
                            It would take approximately 2h 12mins to reach it by car.<br>
                            Luchthavenweg 25,<br>
                            5657 EA Eindhoven<br>
                            <a href="http://www.eindhovenairport.com/en/home/" ><strong>Eindhoven Airport Website</strong></a>
                        </p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1243.3915725205968!2d5.476387552592471!3d51.44377629127187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x47c6d91b5579c39f%3A0xf39ad2648164b998!2sEindhoven!3m2!1d51.441641999999995!2d5.4697225!4m5!1s0x47b7e010cfe19b33%3A0xe1bd06427483d7af!2sKuierpad%2C+Oranjekanaal+Noordzijde%2C+Wezuperbrug!3m2!1d52.841608!2d6.727811!5e0!3m2!1sbg!2snl!4v1432415267633" width="600" height="450" frameborder="0" style="border:0"></iframe>
                        <h3><strong>Amsterdam Airport Schiphol (AMS)</strong></h3>
                        <p> The distance between the airport and the event is 197km <br>
                            It would take approximately 1h 56mins to reach it by car.<br>
                            Evert van de Beekstraat 202,<br>
                            1118 CP Schiphol<br>
                            <a href="http://www.schiphol.nl/" ><strong>Amsterdam Airport Schiphol Website</strong></a>
                        </p>

                    </div>
                    <div class="tab-pane fade" id="atfestivalsite">
                        <h1>At the festival site</h1>
                        <h2>SAFETY & MEDICAL</h2>
                        <p><strong>STAY HYDRATED</strong><br>Drinking plenty of water throughout the weekend is vital to your health and safety. Drink water at regular intervals, and be sure to stay hydrated on the days leading up to the show. While you’re here, fill up on H20 at any of our <strong>FREE hydration stations</strong>, or purchase water at various concession stands around the venue. <br><br>
                            <strong>FASHION & FUNCTION</strong><br>Come prepared for all types of weather, and definitely dress for comfort. Wear clothes that are lightweight and breathable and, above all, make you feel good. If you choose to wear heavy fabrics and faux furs, remember to stay hydrated. Comfortable sneakers are the best way to go, especially if you’re planning to tear up the dancefloor. Sandals and flip-flops can make for sore feet. <br><br>
                            <strong>USE THE BUDDY SYSTEM</strong><br>It’s easy to get separated at a festival. Know where your friends are, set up meeting points, and stick together—two or three brains are better than one! If you think a new or old friend needs help, ask our friendly staff to assist; and always leave the show with everyone in your crew.<br><br>
                            <strong>MEDICAL STATIONS</strong><br>In the first aid tents located throughout the festival, you’ll find teams of medical practitioners ready to care for your every need—free of charge! If you’re lightheaded or nauseated or have too many blisters from dancing the night away, please visit our friendly medical staff, or ask a Wood Festival team member for assistance.<br><br>
                            <strong>ROAMING MEDICAL TEAMS</strong><br>If you happen to see Wood Festival Health & Safety Team officers roaming through the venue, give them a high-five! These heroic people stay on their feet for the entirety of every event to keep a watchful, caring eye on you! And if either you or a friend has a medical concern, flag one of those friendly folks down.<br><br>
                            <strong>GROUND CONTROL</strong>
                            Ground Control is a family of team members who are dedicated to helping Headliners stay happy, healthy and hydrated at the events! You can spot their signature green shirts and fanny packs as they make their way through all areas of the festival. Please approach any of them if you want assistance or simply need a friend! We strongly believe in the beauty and power of helping others, and we’ll do everything we can to make sure you have a safe, memorable experience.
                        </p>
                        <br><h2>FOOD & BEVERAGES</h2>
                        <p>The Wood Festival has several food stands called ‘Branches’. They have a wide variety of food and snacks available conveniently located all around the amphitheatre. There are vegetarian options as well as the standard fare.
                            <br>Drinks are available for purchase at the concession stands and on-site stores. Beer and sprits may be purchased at the same ‘Branches’ only by adults displaying valid age-ID. No beverages may be brought from the outside into the event’s grounds except one 20oz factory sealed bottle of water. Free water refill stations will be available all over the Wood Festival grounds.
                        </p>
                        <h2>PAYING</h2>
                        <p>At the festival there is a new innovative way to pay for your drinks and food. At entering the festival you will receive an <strong>RFID band</strong> that will be your way of paying. The RFID card is connected to your name and you will be able to top up the balance at one of our top up stations or on our website prior to visiting the festival. You can not only pay for consumables with your card, you will also have the opportunity to rent various electronic devices to enhance your experience.</p>
                    </div>
                    <div class="tab-pane fade" id="rules">
                        <h1>Rules & Regulations</h1>
                        <p>
                            <strong>Not Allowed Objects</strong>
                            <br>It is not allowed to enter the festival with the following objects:
                            <br>Alcohol, Marijuana, Any beverages other than one 0.5l factory sealed bottle of water, glass bottles or cans, zoom lens cameras, coolers, large purses backpacks or bags (anything over 30cm x 30cm), illegal substances, drug paraphernalia, laser pointers, LED gloves or micro lights (unless part of clothing), animals (except service animals), recorders (audio or video), firearms knives or weapons (any sharp objects), pepper spray/mace, fireworks, glow sticks, massagers (including massage gloves), aftershave, pacifiers or dust masks, masks with mentholated products, markers pens or spray paint, large chains or spiked jewellery, stickers flyers banners or posters, balloons balls or frisbees, large umbrellas, oversize blankets or tarps (small blankets permitted), stuffed animals or dolls, open packs of cigarettes or unsealed tampons (upon entry), e-cigs, video cameras (including Go Pros), squirt guns, non-prescription medications (Aspirin/Tylenol/ibuprofen will be available inside the venue), liquid makeup.
                            <br><br>Please understand that any and all rules for Wood Festival have been instituted with the safety of all of our guests in mind. These rules have been collectively agreed upon by Law Enforcement/Security Company/Venue Staff to ensure a safe and enjoyable time is afforded to all attendees. We understand that you might not get why certain things are and are not permitted, but we can assure you that all rules are in the best interest of all who are attending!<br></p>


                        <p>
                            <strong>Zero Tolerance Policy</strong>
                            <br>The use or possession of any illegal drugs or marijuana will not be tolerated anywhere inside or outside the venue. Narcotics officers will be working both areas and enforcing all drug related laws. The violators will be prosecuted to the fullest extent of the law. If you are found intoxicated at the door security will not allow you to enter the venue. Event staff reserves the right to refuse entry to anyone. Please come with a smile and be prepared to enjoy a day and night of music, dancing, and the transformed environment of Wood Festival.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="disability">
                        <h1>People with disability</h1>
                        <p>
                            Wood Festival puts in a great effort to make the festival accessible to people with disability. So we have paid a lot of attention to the accessibility of the festival site and its surroundings:
                        </p>
                        <ul>
                            <li>A shuttle for the physically challenged will transport patrons from the main entrance to and from a drop off point near each stage accessible area.</li>
                            <li>Guidance dogs are allowed on the festival grounds. Make sure they are easy recognizable.</li>
                            <li>Adapted toilets are situated in locations all over the festival site and at the Camping</li>
                            <li>The accessibility on the festivalgrounds is guaranteed thanks to the wooden floors.</li>
                        </ul>
                        <p>Should you wish to make use of the aforementioned facilities? Have you got a handicap and are you facing any problems to which you can’t find a solution? Would you just like some more information about this issue? Please send an e-mail to:<a href="mailto: woodfestival@wood.com">woodfestival@wood.com</a></p>

                    </div>
                </div>
            </div>
        </div>

    </div>
	<div class="row clearfix" id="divprops">
		<div class="col-md-4 column">
			 <address> <strong>DARS International, ltd.</strong><br> Rachelsmolen 1<br> 5612 MA Eindhoven<br> <abbr title="Phone">P:</abbr> (06) 8191-3644</address>
		</div>
		<div class="col-md-4 column" id="footer_socialmedia">
			<div>
                <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/rjfestival2015" target="_blank">
                    <i class="fa fa-twitter"></i>
                </a>
                <a class="btn btn-social-icon btn-sm btn-facebook">
                    <i class="fa fa-facebook"></i>
                </a>
                <a class="btn btn-social-icon btn-sm btn-instagram">
                    <i class="fa fa-instagram"></i>
                </a>
                <a class="btn btn-social-icon btn-sm btn-pinterest">
                    <i class="fa fa-youtube"></i>
                </a>
            </div>
		</div>
		<div class="col-md-4 column" id="footer_copyright">
			
				<p>
					.
				</p> <small>Copyright 2015 <cite>RJ Johnson</cite></small>
			
		</div>
	</div>


</div>
    
<div class="scroll-top-wrapper ">
	<span class="scroll-top-inner">
		<i class="fa fa-2x fa-arrow-circle-o-up"></i>
	</span>
</div>   
</body>
    
   
    
</html>
