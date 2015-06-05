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
                        <li class="active">
							<a href="lineup.php">Line-Up</a>
						</li>
                        <li>
							<a href="eventinfo.php">Event Info</a>
						</li>
                        <li>
							<a href="greenisbetter.php">Green is Better</a>
						</li>
                        <li>
							<a href="#loginModal" data-toggle="modal">Login/Members</a>
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
    <div id="wrapper">
        <div class="row content-standard" id="divprops" style="padding-top: 30px;">
			<div class="page-header" style="margin-left:15px; margin-right:15px;">
				<h1>
					Line-Up <small>& Timetables</small>
				</h1>
			</div>
            <div style="margin-left:15px; margin-right:15px;">
            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                <a class="btn btn-primary btn-success" role="button" href="#dl_dayOne" data-toggle="modal"><b>Day One</b></a>
                <a class="btn btn-primary btn-success" role="button" href="#dl_dayTwo" data-toggle="modal"><b>Day Two</b></a>
                <a class="btn btn-primary btn-success" role="button" href="#dl_dayThree" data-toggle="modal"><b>Day Three</b></a>
            </div>
            </div>
            <div id="artists">
            <div class="col-l-6 col-md-2">
                <a href="#dl_afrojack" class="thumbnail" data-toggle="modal"><img src="img/artists/afrojack.jpg"><span class="text-content"><span>Afrojack</span></span></a>
            
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_dimitrivegas" class="thumbnail" data-toggle="modal"><img src="img/artists/dimitrivegas.jpg"><span class="text-content"><span>Dimitri Vegas & Like Mike</span></span></a>
            
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_davidguetta" class="thumbnail" data-toggle="modal"><img src="img/artists/davidguetta.png"><span class="text-content"><span>David Guetta</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_hardwell" class="thumbnail" data-toggle="modal"><img src="img/artists/hardwell.jpg"><span class="text-content"><span>Hardwell</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_dyro" class="thumbnail" data-toggle="modal"><img src="img/artists/dyro.jpg" ><span class="text-content"><span>Dyro</span></span></a>
            
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_diplo" class="thumbnail" data-toggle="modal"><img src="img/artists/Diplo.jpg"><span class="text-content"><span>Diplo</span></span></a>
            
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_nervo" class="thumbnail" data-toggle="modal"><img src="img/artists/Nervo.jpg"><span class="text-content"><span>Nervo</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_steveaoki" class="thumbnail" data-toggle="modal"><img src="img/artists/steveaoki.jpg"><span class="text-content"><span>Steve Aoki</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_tiesto" class="thumbnail" data-toggle="modal"><img src="img/artists/Tiesto.jpg" style="height: 150px;"><span class="text-content"><span>Tiësto</span></span></a>
            
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_arminvanbuuren" class="thumbnail" data-toggle="modal"><img src="img/artists/arminvanbuuren.jpg"><span class="text-content"><span>Armin van Buuren</span></span></a>
            
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_martingarrix" class="thumbnail" data-toggle="modal"><img src="img/artists/martingarrix.jpeg"><span class="text-content"><span>Martin Garrix</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_avicii" class="thumbnail" data-toggle="modal"><img src="img/artists/avicii.jpg"><span class="text-content"><span>Avicii</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_nickyromero" class="thumbnail" data-toggle="modal"><img src="img/artists/nickyromero.jpg"><span class="text-content"><span>Nicky Romero</span></span></a>
            
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_skrillex" class="thumbnail" data-toggle="modal"><img src="img/artists/skrillex.jpg"><span class="text-content"><span>Skrillex</span></span></a>
            
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_calvinharris" class="thumbnail" data-toggle="modal"><img src="img/artists/calvinharris.jpg"><span class="text-content"><span>Calvin Harris</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_alesso" class="thumbnail" data-toggle="modal"><img src="img/artists/alesso.jpg"><span class="text-content"><span>Alesso</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_showtek" class="thumbnail" data-toggle="modal"><img src="img/artists/showtek.jpg"><span class="text-content"><span>Showtek</span></span></a>
            
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_dvbbs" class="thumbnail" data-toggle="modal"><img src="img/artists/dvbbs.jpg"><span class="text-content"><span>DVBBS</span></span></a>
            
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_zedd" class="thumbnail" data-toggle="modal"><img src="img/artists/zedd.jpg"><span class="text-content"><span>Zedd</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_r3hab" class="thumbnail" data-toggle="modal"><img src="img/artists/R3hab.jpg"><span class="text-content"><span>R3hab</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_steveangello" class="thumbnail" data-toggle="modal"><img src="img/artists/steveangello.jpeg"><span class="text-content"><span>Steve Angello</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_axwellingrosso" class="thumbnail" data-toggle="modal"><img src="img/artists/axwell_ingrosso.jpg"><span class="text-content"><span>Axwell /\ Sebastian Ingrosso</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_oliverheldens" class="thumbnail" data-toggle="modal"><img src="img/artists/oliverheldens.jpeg"><span class="text-content"><span>Oliver Heldens</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_feddelegrand" class="thumbnail" data-toggle="modal"><img src="img/artists/feddelegrand.png"><span class="text-content"><span>Fedde Le Grand</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_vicetone" class="thumbnail" data-toggle="modal"><img src="img/artists/vicetone.jpg"><span class="text-content"><span>Vicetone</span></span></a>
            
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_paulvandyk" class="thumbnail" data-toggle="modal"><img src="img/artists/paulvandyk.jpg"><span class="text-content"><span>Paul van Dyk</span></span></a>
            
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_headhunterz" class="thumbnail" data-toggle="modal"><img src="img/artists/headhunterz.jpg"><span class="text-content"><span>Headhunterz</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_borgore" class="thumbnail" data-toggle="modal"><img src="img/artists/borgore.jpg"><span class="text-content"><span>Borgore</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_kura" class="thumbnail" data-toggle="modal"><img src="img/artists/kura.jpeg"><span class="text-content"><span>Kura</span></span></a>
            
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_markusschulz" class="thumbnail" data-toggle="modal"><img src="img/artists/markusschulz.jpg"><span class="text-content"><span>Markus Schulz</span></span></a>
            
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_laidbackluke" class="thumbnail" data-toggle="modal"><img src="img/artists/laidbackluke.jpeg"><span class="text-content"><span>Laidback Luke</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_sandervandoorn" class="thumbnail" data-toggle="modal"><img src="img/artists/sandervandoorn.jpg"><span class="text-content"><span>Sander van Doorn</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_firebeatz" class="thumbnail" data-toggle="modal"><img src="img/artists/firebeatz.jpg"><span class="text-content"><span>Firebeatz</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_porterrobinson" class="thumbnail" data-toggle="modal"><img src="img/artists/porterrobinson.jpg"><span class="text-content"><span>Porter Robinson</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_vinai" class="thumbnail" data-toggle="modal"><img src="img/artists/vinai.jpg"><span class="text-content"><span>VINAI</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_noisecontrollers" class="thumbnail" data-toggle="modal"><img src="img/artists/noisecontrollers.jpg"><span class="text-content"><span>Noisecontrollers</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_carnage" class="thumbnail" data-toggle="modal"><img src="img/artists/carnage.jpg"><span class="text-content"><span>DJ Carnage</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_dondiablo" class="thumbnail" data-toggle="modal"><img src="img/artists/dondiablo.jpg"><span class="text-content"><span>Don Diablo</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_quintino" class="thumbnail" data-toggle="modal"><img src="img/artists/quintino.jpg"><span class="text-content"><span>Quintino</span></span></a>
            </div>
            <div class="col-l-6 col-md-2">
                <a href="#dl_yellowclaw" class="thumbnail" data-toggle="modal"><img src="img/artists/yellowclaw.jpg"><span class="text-content"><span>Yellow Claw</span></span></a>
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
<!--BEGIN MODAL DIALOGS-->
    <!--TIMETABLE DIALOGS-->
    <div class="modal fade" id="dl_dayOne" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Timetable - <b>Day One</b></h4>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Tree Stage (1)</th>
                                <th>Root Stage (2)</th>
                                <th>Branch Stage (3)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><b>12:00 - 13:30</b></td>
                                <td>Diplo</td>
                                <td>Kura</td>
                                <td>Firebeatz</td>
                            </tr>
                            <tr>
                                <td><b>13:30 - 15:00</b></td>
                                <td>Steve Angello</td>
                                <td>Sander van Doorn</td>
                                <td>Noisecontrollers</td>
                            </tr>
                            <tr>
                                <td><b>15:00 - 17:00</b></td>
                                <td>Nervo</td>
                                <td>Zedd</td>
                                <td>Skrillex</td>
                            </tr>
                            <tr>
                                <td><b>17:00 - 19:00</b></td>
                                <td>Steve Aoki</td>
                                <td>Oliver Heldens</td>
                                <td>Laidback Luke</td>
                            </tr>
                            <tr>
                                <td><b>19:00 - 21:00</b></td>
                                <td>Vicetone</td>
                                <td>VINAI</td>
                                <td>Afrojack</td>
                            </tr>
                            <tr>
                                <td><b>21:00 - 23:30</b></td>
                                <td>Hardwell</td>
                                <td>Dimitri Vegas & Like Mike</td>
                                <td>Armin van Buuren</td>
                            </tr>
                        </tbody>    
                    </table>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default btn-danger" href="img/Timetable.jpg" download>Download Full Timetable</a>
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="dl_dayTwo" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Timetable - <b>Day Two</b></h4>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Tree Stage (1)</th>
                                <th>Root Stage (2)</th>
                                <th>Branch Stage (3)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><b>12:00 - 13:30</b></td>
                                <td>Dyro</td>
                                <td>Laidback Luke</td>
                                <td>DVBBS</td>
                            </tr>
                            <tr>
                                <td><b>13:30 - 15:00</b></td>
                                <td>Borgore</td>
                                <td>Paul van Dyk</td>
                                <td>Markus Schulz</td>
                            </tr>
                            <tr>
                                <td><b>15:00 - 17:00</b></td>
                                <td>Headhunterz</td>
                                <td>Nicky Romero</td>
                                <td>Oliver Heldens</td>
                            </tr>
                            <tr>
                                <td><b>17:00 - 19:00</b></td>
                                <td>Porter Robinson</td>
                                <td>Calvin Harris</td>
                                <td>R3hab</td>
                            </tr>
                            <tr>
                                <td><b>19:00 - 21:00</b></td>
                                <td>Alesso</td>
                                <td>Showtek</td>
                                <td>David Guetta</td>
                            </tr>
                            <tr>
                                <td><b>21:00 - 23:30</b></td>
                                <td>Martin Garrix</td>
                                <td>Tiësto</td>
                                <td>Avicii</td>
                            </tr>
                        </tbody>    
                    </table>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default btn-danger" href="img/Timetable.jpg" download>Download Full Timetable</a>
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="dl_dayThree" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Timetable - <b>Day Three</b></h4>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Tree Stage (1)</th>
                                <th>Root Stage (2)</th>
                                <th>Branch Stage (3)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><b>12:00 - 13:30</b></td>
                                <td>Markus Schulz</td>
                                <td>Noisecontrollers</td>
                                <td>Headhunterz</td>
                            </tr>
                            <tr>
                                <td><b>13:30 - 15:00</b></td>
                                <td>Oliver Heldens</td>
                                <td>R3hab</td>
                                <td>Zedd</td>
                            </tr>
                            <tr>
                                <td><b>15:00 - 17:00</b></td>
                                <td>Showtek</td>
                                <td>Sander van Doorn</td>
                                <td>Hardwell</td>
                            </tr>
                            <tr>
                                <td><b>17:00 - 19:00</b></td>
                                <td>Axwell /\ Ingrosso</td>
                                <td>Martin Garrix</td>
                                <td>Afrojack</td>
                            </tr>
                            <tr>
                                <td><b>19:00 - 21:00</b></td>
                                <td>Yellow Claw</td>
                                <td>Avicii</td>
                                <td>Nervo</td>
                            </tr>
                            <tr>
                                <td><b>21:00 - 23:30</b></td>
                                <td>Calvin Harris</td>
                                <td>Steve Aoki</td>
                                <td>RJ Johnson</td>
                            </tr>
                        </tbody>    
                    </table>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default btn-danger" href="img/Timetable.jpg" download>Download Full Timetable</a>
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div> <!--END OF TIMETABLE DIALOGS-->
    <div class="modal fade" id="dl_afrojack" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Afrojack</b>
                    <div style="float:right;">
                        <a class="btn btn-social-icon btn-sm btn-reddit" href="http://afrojack.com" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/djafrojack" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/djafrojack" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/afrojack" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/AFROJACKTV" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body" id="test_modal">
                    <p><b>Nick van de Wall</b> (born 9 September 1987), commonly known by his stage name <b>Afrojack</b>, is a Dutch music producer and DJ. In 2014 he released his debut album Forget the World. <br><br>Afrojack regularly features in top 10 of DJ Mag Top 100 DJ's. His 2010 entry into the poll at number 19 was the highest new entry of that year's list. January 2012 Afrojack received a European Border Breakers Award. Afrojack's newest single The Spark featuring Spree Wilson has so far hit number 3 in Australia and New Zealand, and top 10 in over 7 more countries. <br><br>Afrojack runs his own label, Wall Recordings, which represents Dutch DJs including R3hab, Sidney Samson and Mayaadh. Afrojack co-produced music with many artists including David Guetta, Mike Brown and Madonna.</p>
                    <iframe width="533" height="300" src="https://www.youtube.com/embed/bltr_Dsk5EY?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="dl_hardwell" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Hardwell</b>
                    <div style="float:right;">
                        <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.djhardwell.com" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/hardwell" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/djhardwell" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/hardwell" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/robberthardwell" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Robbert van de Corput</b> (born 7 January 1988 in Breda, Netherlands), better known by his stage name <b>Hardwell</b>, is a Dutch big room house and electro house DJ and music producer. He was voted the <b>World's No. 1 DJ</b> on DJ Magazine's annual Top 100 DJs poll in 2013, and again in 2014. Hardwell is widely known for his live sets at major music festivals such as Tomorrowland and Ultra. The video streams of his performances on his personal YouTube channel have collectively garnered more than 100 million views.</p>
                    <iframe width="533" height="300" src="https://www.youtube.com/embed/EoYOCxP6yIA?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="dl_dimitrivegas" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Dimitri Vegas & Like Mike</b>
                    <div style="float:right;">
                        <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.dimitrivegasandlikemike.com" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/dimitrivega" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/dimitrivegasandlikemike" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/dimitrivegasandlikemike" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/dimitrivegasonline" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Dimitri Vegas & Like Mike</b> are a Greek/Belgian electronic DJ duo, living in Belgium, composed of brothers <b>Dimitri Thivaios</b> and <b>Michael Thivaios</b>. They currently hold the 2nd spot on DJ Magazine's annual Top 100 DJs poll. </p>
                    <br><iframe width="533" height="300" src="https://www.youtube.com/embed/_o-XIryB2gg?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="dl_arminvanbuuren" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Armin van Buuren</b>
                    <div style="float:right;">
                        <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.arminvanbuuren.com" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/arminvanbuuren" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/arminvanbuuren" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/arminvanbuurenofficial" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/arminvanbuuren" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Armin van Buuren</b> born 25 December 1976 is a Dutch trance music producer, DJ and radio personality. Since 2001, Van Buuren has hosted a weekly radio show called A State of Trance, which has 20 million weekly listeners in 26 countries (excluding online listeners).This radio show propelled him to superstardom and garnered an intense following of trance fans around the world. <br><br>Van Buuren has won a number of accolades. He has been ranked the <b>World No. 1 DJ</b> by DJ Magazine in their annual Top 100 DJs fan poll a record of five times, <b>4 years in a row</b>. He is currently ranked World No. 3 on DJ Magazine's list for 2014. <br><br>In 2014, he was nominated for a Grammy Award for Best Dance Recording for his single "This Is What It Feels Like", which makes him the fourth trance artist ever to receive a Grammy nomination. In the United States, he holds the record for most entries (21) on the Billboard Dance/Electronic Albums chart. His 2008 studio album, Imagine, entered the Dutch album chart at No. 1, a first for a dance music artist in Dutch music history.</p>
                    <iframe width="533" height="300" src="https://www.youtube.com/embed/BR_DFMUzX4E?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="dl_alesso" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Alesso</b>
                    <div style="float:right;">
                        <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.alessoworld.com" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/alesso" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/AlessoOfficial" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/alesso" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/AlessoOfficial" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Alessandro Lindblad</b> (born July 7, 1991), commonly known by his stage name <b>Alesso</b>, is a Swedish DJ and electronic dance music producer. He has worked with numerous EDM (and other) artists, including Avicii, OneRepublic, Calvin Harris, Usher, David Guetta, and Sebastian Ingrosso. <br><br>He has also performed at numerous music festivals, including Coachella, Electric Daisy Carnival, and Tomorrowland. In 2012, MTV named Alesso one of the <b>"EDM Rookies to Watch,"</b> and Madonna, who invited him to open select dates on her MDNA Tour, called Alesso "the next big thing in dance music." As of 2014, he ranks <b></b>15th on DJ Magazine's list</b> of the top 100 DJs. His debut full-length album FOREVER is set to be released by May 22, 2015 by Def Jam Recordings.</p>
                    <iframe width="533" height="300" src="https://www.youtube.com/embed/a7SouU3ECpU?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="dl_martingarrix" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Martin Garrix</b>
                    <div style="float:right;">
                        <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.martingarrix.com" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/martingarrix" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/martin.garrix" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/martingarrix/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/MartinGarrix" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Martijn Garritsen</b> (born 14 May 1996), commonly known by his stage name <b>Martin Garrix</b>, is a Dutch DJ and producer who is signed to Spinnin' Records. He is best known for the track "Animals", which was a Top 10 hit in more than 10 countries; the song has also peaked at number 1 in Belgium and the United Kingdom, and number 3 in Ireland. <br><br>His single "Wizard", produced with Jay Hardway, was also successful in numerous countries in 2014. Debuting at number 40 of DJ Magazine's Top 100 DJs, he is currently ranked number 4.</p>
                    <iframe width="533" height="300" src="https://www.youtube.com/embed/gCYcHz2k5x0?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="dl_tiesto" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Tiësto</b>
                    <div style="float:right;">
                        <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.tiesto.com" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/tiesto" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/tiesto" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/tiesto" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/officialtiesto" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Tijs Michiel Verwest</b> (born 17 January 1969), better known by his stage name Tiësto is a Dutch DJ and record producer. Formerly known as <b>DJ Tiësto</b>, he is now known simply as "Tiësto", an artist name which is a twist of his childhood nickname. <br><br>His 2000 remix of Delerium's "Silence" featuring Sarah McLachlan exposed him to more mainstream audiences. In 2001, he released his first solo album, In My Memory. The title track is a remix of an original song written by and featuring Nicola Hitchcock. This album gave him several major hits that launched his career. He was voted World No 1 DJ by DJ Magazine in its annual Top 100 DJs readership poll consecutively for three years from 2002 to 2004. <br><br>Just after releasing his second studio album Just Be he performed live at the 2004 Summer Olympics opening ceremony in Athens, the first DJ to play <b>live on stage at an Olympics</b>. He won the Grammy Award for Best Remixed Recording, Non-Classical for his remixed version of John Legend's Top 40 Hit All Of Me at the 57th Annual Grammy Awards.</p>
                    <iframe width="533" height="300" src="https://www.youtube.com/embed/CFF0mV24WCY?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="dl_avicii" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Avicii</b>
                    <div style="float:right;">
                        <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.avicii.com" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/Avicii" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/avicii" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/avicii" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/AviciiOfficialVEVO" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Tim Bergling</b> (born 8 September 1989), better known by his stage name <b>Avicii (stylized as ɅVICII)</b> is a Swedish EDM DJ, remixer, and a country and electro house record producer. <br><br>Avicii ranked <b>3rd on DJ Magazine 's annual Top 100 DJs</b> in 2012 and 2013 and has been nominated twice for a Grammy Award, once for his work on "Sunshine" with David Guetta in 2012 and once for his song "Levels" in 2013. Some of his most famous songs are "I Could Be the One" with Nicky Romero, "Wake Me Up", "You Make Me", "X You", "Hey Brother", "Addicted to You" and "Seek Bromance".</p>
                    <iframe width="533" height="300" src="https://www.youtube.com/embed/IcrbM1l_BoI?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="dl_davidguetta" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>David Guetta</b>
                    <div style="float:right;">
                        <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.davidguetta.com" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/davidguetta" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/DavidGuetta" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/davidguetta" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/davidguettavevo" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Pierre David Guetta</b> (born 7 November 1967) is a French disc jockey and record producer. Guetta achieved mainstream success with his 2009 album One Love which included the hit singles "When Love Takes Over", "Gettin' Over You", and "Sexy Bitch", all three of which <b>reached #1 in the United Kingdom</b>, and "Memories". The 2011 follow-up album, Nothing but the Beat, continued this success, containing the hit singles "Where Them Girls At", "Little Bad Girl", "Without You", "Titanium" and "Turn Me On". <br><br>Guetta has sold over <b>nine million albums and 30 million singles worldwide</b>. In 2011 Guetta was voted as the #1 DJ in the 'DJ Mag Top 100 DJs' fan poll. In 2013, Billboard crowned "When Love Takes Over" as the number one dance-pop collaboration of all time.</p>
                    <iframe width="533" height="300" src="https://www.youtube.com/embed/JRfuAukYTKg?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="dl_nickyromero" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Nicky Romero</b>
                    <div style="float:right;">
                        <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.nickyromero.com" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/nickyromero" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/djnickyromero" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/nickyromero" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/nickyromerotv" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Nick Rotteveel</b> (born 6 January 1989), better known by his stage name Nicky Romero, is a Dutch DJ and music producer. He has worked with, and received support from DJs, such as Tiësto, Fedde le Grand, Sander van Doorn, David Guetta, Calvin Harris, Armand Van Helden, Avicii and Hardwell.<br><br> He currently ranks <b>No. 8</b> on DJ Magazine's annual Top 100 DJs poll. He is known for his viral hit song "Toulouse", as well as for having a number one hit single in the UK with "I Could Be the One" with Avicii.</p>
                    <iframe width="533" height="300" src="https://www.youtube.com/embed/KrVC5dm5fFc?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="dl_skrillex" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Skrillex</b>
                    <div style="float:right;">
                        <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.skrillex.com" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/skrillex" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/skrillex" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/skrillex" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/TheOfficialSkrillex" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Sonny Moore</b> (born January 15, 1988), better known by his stage name Skrillex, is an American electronic dance music producer, DJ, singer and songwriter. On November 30, 2011, he was nominated for a total of <b>five Grammy Awards at the 54th Grammy Awards</b>, including Best New Artist and won three: "Best Dance/Electronica Album", "Best Dance Recording", and "Best Remixed Recording, Non-Classical". On December 5, 2011, the BBC announced that he had been nominated for their Sound of 2012 poll. On December 12, 2011, he was also named MTV's Electronic Dance Music Artist of the Year.<br><br>Skrillex has won a total of <b>six Grammy Awards</b>. Skrillex has collaborated with Diplo to form the group Jack Ü.</p>
                    <iframe width="533" height="300" src="https://www.youtube.com/embed/YJVmu6yttiw?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="dl_steveaoki" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Steve Aoki</b>
                    <div style="float:right;">
                        <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.steveaoki.com" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/steveaoki" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/Steve.Aoki" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/steveaoki" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/steveaoki" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Steven Hiroyuki "Steve" Aoki</b> (born November 30, 1977) is an American electro house musician, record producer, and music executive. Known for energetic live shows, in 2012 Pollstar designated Aoki as the highest grossing dance artist in North America from tours. <br><br>He has collaborated with producers and vocalists such as will.i.am, Afrojack, LMFAO, Iggy Azalea, Lil Jon, and Laidback Luke, and is known for his remixes of artists such as Kid Cudi. Aoki has released several <b>Billboard-charting studio albums</b> as well, notably Wonderland, which was nominated for Grammy Award for Best Dance/Electronica Album in 2013. <br><br>He is currently releasing his two-part album series Neon Future. The first part was released on September 30, 2014. He is the founder of the <b>Steve Aoki Charitable Fund</b>, which raises money for global humanitarian relief organizations.</p>
                    <iframe width="533" height="300" src="https://www.youtube.com/embed/gl2p4G3CUrI?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="dl_calvinharris" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Calvin Harris</b>
                    <div style="float:right;">
                        <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.calvinharris.co.uk/gb/home" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/CalvinHarris" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/calvinharris" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/calvinharris" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/CalvinHarrisVEVO" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Adam Richard Wiles</b> (born 17 January 1984), better known by his stage name <b>Calvin Harris</b>, is a Scottish singer, songwriter, record producer and DJ. <br><br>His <b>gold-selling debut album</b>, I Created Disco, was released in 2007 and contained the top-ten singles "Acceptable in the 80s" and "The Girls". His second studio album, Ready for the Weekend (2009), reached number one on the UK Albums Chart and includes "I'm Not Alone", which debuted at number one on the UK Singles Chart, the top-five hit "Ready for the Weekend", and the singles "Flashback" and "You Used to Hold Me". In October 2012, Harris released his third studio album, 18 Months, which contained the singles, "Bounce", "Feel So Close", "Let's Go", "We'll Be Coming Back", "Sweet Nothing", "Drinking from the Bottle", "I Need Your Love", and "Thinking About You". All of these singles reached the <b>UK top 10</b>. <br><br>Harris has also written and produced tracks for other recording artists, including Kylie Minogue, Sophie Ellis-Bextor, Dizzee Rascal, Cheryl Cole, Rita Ora, Example, and <b></b>Rihanna's internationally successful single, "We Found Love"</b>, which gave him his first US number-one single on the Billboard Hot 100. Harris released his fourth studio album, Motion, on 3 November 2014. <br><br>Harris holds the record for the <b>most top ten hits</b> from one studio album on the UK Singles Chart with nine hits, surpassing Michael Jackson. In October 2014, he became the first artist to place three songs simultaneously on Billboard's Dance/Electronic Songs chart. According to Forbes, Harris was the <b>highest-paid DJ</b> of 2013 and 2014.</p>
                    <iframe width="533" height="300" src="https://www.youtube.com/embed/ebXbLfLACGM?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="dl_dyro" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Dyro</b>
                    <div style="float:right;">
                        <a class="btn btn-social-icon btn-sm btn-reddit" href="http://dyro.nl/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/dyro" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/officialdyro" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="http://instagram.com/dyro" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/Dyromusic" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Jordy van Egmond</b> also know by his stage name <b>Dyro</b> emerged in 2013 as one of the scene’s hottest new stars.	Debuting at <b>#30 in the DJ Mag Top 100 poll</b>, he became the youngest ‘Highest New Entry’ artist to ever appear in the definitive DJ poll. <br></br>Known for driving bass lines, enchanting melodies and highly charged drops he has seamlessly made the transition from bedroom musician to renowned international DJ/Producer. Having snatched the highest new entry accolade in the 2013 poll Dyro has surpassed all expectations with his rapid ascent into the upper reaches of the dance scene. <br></br>Previously tipped by the likes of World #1 DJ Hardwell, Laidback Luke, and Dada Life as their ‘Breakthrough Artist of 2012’, the 21 year old star has lived up to the praise bestowed upon him and cemented his standing with seminal releases like his <b>first Beatport # 1 record</b> alongside <b>Hardwell</b> for ‘Never Say Goodbye’, as well as an extended streak of visibility on the global clubbing circuit.</p>
					<iframe width="533" height="300" src="https://www.youtube.com/embed/TtNiBFo4fH8?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="dl_diplo" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Diplo</b>
                    <div style="float:right;">
                        <a class="btn btn-social-icon btn-sm btn-reddit" href="http://diplo.com/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/diplo" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/diplo" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="http://instagram.com/diplo" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/channel/UCXAX3AtRPPdesKYSS8FKayg" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Thomas Wesley Pentz</b> (born November 10, 1978), better known by his stage name <b>Diplo</b>, is an American DJ, music producer, rapper and songwriter based in Los Angeles, California. He founded and manages record company Mad Decent, as well as co-founding the non-profit organization Heaps Decent. Among other jobs, he has worked as a school teacher in Philadelphia. He is also the co-creator and lead member of the electronic dancehall music project, Major Lazer. His 2013 EP Revolution debuted at <b>number 68 on the US Billboard 200</b>. During his rise to fame, Diplo worked with British musician M.I.A., an artist who is credited with giving him exposure in his early career. Later, he and fellow M.I.A. producer Switch created a Jamaican dancehall project and cartoon series titled Major Lazer. Since then, Diplo has worked on production and mixtape projects with many other notable pop artists, such as Britney Spears, Beyoncé, No Doubt, Justin Bieber, Usher, Snoop Dogg, CL and G-Dragon. His alias, short for Diplodocus, derives from his childhood fascination with dinosaurs.He is the co-producer of several tracks on Madonna's 2015 album Rebel Heart (2015) and he collaborated with <b>Skrillex</b> to create <b>the duo Jack Ü.</b>
</p>
					<iframe width="533" height="300" src="https://www.youtube.com/embed/5nT0g887ShE?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
<div class="modal fade" id="dl_nervo" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Nervo</b>
                    <div style="float:right;">
                        <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.nervomusic.com/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/NERVOMUSIC" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/NERVOmusic" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="http://instagram.com/nervomusic" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/NERVOSONGS" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
<p><b>Miriam Nervo and Olivia Nervo</b> (born February 18, 1987) are Australian DJs, musicians and songwriters, better known by their stage name <b>NERVO</b>. After signing with Sony/ATV Music Publishing at 18 years of age, the twins pursued careers as songwriting partners and in 2008 they signed with Fredrik Olsson (Music Executive) and his Swedish music publishing company Razor Boy Music Publishing, which led to co-writing the <b>Grammy Award-winning single</b>, "When Love Takes Over", performed by David Guetta and Kelly Rowland.
</p>
					<iframe width="533" height="300" src="https://www.youtube.com/embed/TWwIztjs29Y?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="dl_showtek" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Showtek</b>
                    <div style="float:right;">
                        <a class="btn btn-social-icon btn-sm btn-reddit" href="http://showtek.nl/#!/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/showtekmusic" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/showtekofficial" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/showtekmusic/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-pinterest" href=" https://www.youtube.com/user/showteknl" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Showtek</b> is a Dutch electronic dance music act consisting of two brothers, ,<b>Sjoerd Janssen</b> (born 1984) and <b>Wouter Janssen</b> (born 1982), who began producing music in 2001. Starting out with techno and subsequently moving to hardstyle, they eventually worked in other EDM styles including progressive/electro house. Showtek co-produced the upcoming single of Chris Brown – Nobody's Perfect which is produced by Lukas Hilbert and co-produced by Showtek and David Jost.<br></br>     The Showtek brothers also have their own podcast, available through their website and iTunes. In December 2013, they founded their <b>own label Skink Records</b>, which is a sub-label of Spinnin' Records. The song "We Like To Party" by Showtek was the first title to be released under the new label, Bouncer with Ookay and a Showtek Edit of MAKJ & M35 - Go followed.<br></br> On June 9, 2014, a new album was announced, returning them to their hardstyle roots. This turned out to be a rumor created by a rave news publisher, and Showtek announced on their official Facebook page that the album was not in production, as well as emphasising the duo would not be returning to hardstyle.
				</p>
                    <iframe width="533" height="300" src="https://www.youtube.com/embed/QLoUH6LN9lk?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
					</div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
<div class="modal fade" id="dl_dvbbs" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>DVBBS</b>
                    <div style="float:right;">
                       <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.universalmusic.ca/artists/dvbbs/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/dvbbs" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/dvbbs?fref=ts" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/dvbbs/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/dvbbs" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>DVBBS</b> (pronounced “dubz”) are a Canadian dance music duo formed in 2012, composed of brothers <b>Chris Andre</b> (b. Christopher van den Hoef, January 1, 1990) and <b>Alex Andre</b> (b. Alexandre van den Hoef, October 17, 1991).<br></br> They are most famous for their joint international hit with Borgeous titled <b>"Tsunami"</b>. The vocal remix of "Tsunami" entitled "Tsunami (Jump)", featuring Tinie Tempah, reached <b>number 1 on the UK, Scotland charts and 10 other countries</b>.
				</p>
				<iframe width="533" height="300" src="https://www.youtube.com/embed/I41CX0RdmPQ?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="dl_zedd" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Zedd</b>
                    <div style="float:right;">
                       <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.zedd.net/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/zedd" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/Zedd" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href=" https://instagram.com/zedd/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/zeddvevo?feature=watch" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Anton Zaslavski</b> (born 2 September 1989), better known by his stage name <b>Zedd</b>, is a Russian-German musician, music producer and DJ. He primarily produces in the electro house genre, but has branched out, drawing influences from progressive house, dubstep, and classical music. Zedd grew up and began his career in Kaiserslautern, Germany. <br></br>Zedd's best-known productions to date are the songs <b>"Clarity"</b> featuring Foxes which charted at <b>number 8 on the Billboard Hot 100</b> and at <b>number one of the US Hot Dance Club Songs</b>; and "Break Free", a song which has peaked at <b>number 4 on the Billboard Hot 100</b> and <b>number 1 on the Hot Dance/Electronic Songs</b>, becoming his first song to do so. He also <b>won a Grammy award for Best Dance Recording at the 56th Grammy Awards for "Clarity"</b>.
				</p>
				<iframe width="533" height="300" src="https://www.youtube.com/embed/IxxstCcJlsc?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="dl_r3hab" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>R3hab</b>
                    <div style="float:right;">
                       <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.djr3hab.com/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/r3hab" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/r3hab?fref=ts" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/r3hab/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/R3HABTUBE" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Fadil El Ghoul</b> (born 2 April 1986), better known by his stage name <b>R3hab</b>, is a Dutch DJ and record producer of Moroccan origin. Alongside Afrojack and Chuckie, R3hab is one of the proponents of the modern "Dutch house" subgenre, although his style and sound at the time were usually darker, somewhat reminiscent of early psytrance or gabber compositions. During the 2012 WMC in Miami, USA, R3hab <b>won the IDMA Best Breakthrough Artist Award</b>. 
				</p>
				<iframe width="533" height="300" src="https://www.youtube.com/embed/zSguPHYRi9M?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="dl_steveangello" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Steve Angello</b>
                    <div style="float:right;">
                       <a class="btn btn-social-icon btn-sm btn-reddit" href="http://steveangello.com/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/steveangello" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/steveangello" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/steveangello" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/steveangello" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Steve Angello</b> (born Steven Angello Josefsson Fragogiannis; 22 November 1982) is a Greek-Swedish disc jockey, record producer and record label owner. Angello was a member of <b>Swedish House Mafia</b>, together with Axwell and Sebastian Ingrosso.
				</p>
				<iframe width="533" height="300" src="https://www.youtube.com/embed/Rvphz5BD5go?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="dl_axwellingrosso" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Axwell /\ Sebastian Ingrosso</b>
                    <div style="float:right;">
                       <a class="btn btn-social-icon btn-sm btn-reddit" href=" http://www.axwellingrosso.tv/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/axwell " target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
						<a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/ingrosso" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/axwellingrosso?_rdr" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/axwell/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
						<a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/ingrosso/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/axwellingrosso" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Axwell and Ingrosso</b> (stylised as Axwell Ʌ Ingrosso) is a Swedish musical duo signed under Def Jam Recordings consisting of former <b>Swedish House Mafia</b> members Axwell and Sebastian Ingrosso. They made their performance debut at the 2014 Governors Ball Music Festival in New York City in June.
				</p>
				<iframe width="533" height="300" src="https://www.youtube.com/embed/eCH9gClZprM?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="dl_oliverheldens" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Oliver Helndens</b>
                    <div style="float:right;">
                       <a class="btn btn-social-icon btn-sm btn-reddit" href="http://oliverheldens.tumblr.com/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/OliverHeldens" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/OliverHeldens" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/oliverheldens/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/oliverheldens" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Oliver Heldens</b> (born February 1, 1995) is a Dutch music producer from Rotterdam in the Netherlands. Heldens also has a weekly podcast titled Heldeep Radio. Heldens began his professional music career when he signed to Spinnin' Records in 2013. The single <b>"Gecko"</b> was released in the same month on DJ Tiesto's Musical Freedom record. In January 2014, Heldens launched his Heldeep Mixtape on his official SoundCloud page, creating extended mixes which incorporate different genres of electronic dance music including different types of deep house and tech house.<br></br> The first mixtape included his remix of label mate, Martin Garrix's <b>"Animals"</b> which was largely well received by the press who described the new version as, "leaving us with a completely new anthem with a notable melody left intact. July 2014 sees Heldens release his new single <b>Koala</b>, followed by a vocal version in October with singer KStewart titled Last All Night (Koala). <b>Last All Night (Koala)</b> entered the British Singles Chart on the week ending December 20, 2014 at <b>number 5</b>, making it Heldens' <b>2nd top-five single in the UK</b>. <br></br> Meanwhile, Oliver Heldens enters the DJ Mag Top 100, making his debut at <b>number 34</b>. He receives praise from British radio <b>DJ Pete Tong</b>, who calls him 'one of the producers of the year' and invites him to play an Essential Mix in his show. Music recognition app Shazam already saw 'Koala' grow out to one of the most popular searched dance records; the company predicted Heldens will probably make it to the next level of DJ stardom in 2015.
				</p>
				<iframe width="533" height="300" src="https://www.youtube.com/embed/y5tMw-dgLkI?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="dl_feddelegrand" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Fedde Le Grand</b>
                    <div style="float:right;">
                       <a class="btn btn-social-icon btn-sm btn-reddit" href="http://feddelegrand.com/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/feddelegrand" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/feddelegrand" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href=" https://instagram.com/feddelegrand/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/FeddeLeGrand" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Fedde le Grand</b> (Utrecht, 7 September 1977) is a Dutch house DJ and producer best known for his 2006 track <b>"Put Your Hands Up 4 Detroit"</b>. Fedde le Grand is seen as a "defining figure in house music"; noted not only for his ability to create "huge mainstream" hits, but to "move seamlessly" between these and "edgier, underground sounds". <br></br>Le Grand is a frequent headliner at mainstream EDM events like UMF and TomorrowLand, more unconventional EDM festivals such as Sensation and Coachella, popular club venues such as Pacha Ibiza, Green Valley, and Marquee LV, as well as home country events like ADE, Amsterdam Music Festival, and the annual <b>DJMag Top 100 DJs Awards</b>. Le Grand is also known for his remixes of popular artists such as Coldplay, Michael Jackson, Shakira & Rihanna, Mariah Carey, Timeflies, and Martin Solveig.
				</p>
				<iframe width="533" height="300" src="https://www.youtube.com/embed/3TudwTngOUQ?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="dl_vicetone" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Vicetone</b>
                    <div style="float:right;">
                       <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.vicetone.com/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/vicetone" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/VicetoneOfficial" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/vicetone/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/vicetoneofficial?feature=watch" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Vicetone</b> are a DJ and production duo formed by <b>Ruben Den Boer</b> (born January 22, 1992) and <b>Victor Pool</b> (born July 9, 1992), from the Dutch city of Groningen. In 2013, they were voted into the DJ Mag Top 100 DJs list for the first time at <b>#60 as a new entry</b>. Later in 2014, they went up 24 places on the list, coming <b>36th</b>.<br></br> To date, they total over 50 million listens on their Soundcloud page, as well as over half a million likes on their Facebook page. In 2014, Vicetone opened the year with releases on <b>Spinnin' Records</b>, including their tracks "Lowdown" and "Ensemble". They also had other high profile releases on <b>Nicky Romero's Protocol Recordings</b> and <b>Hardwell's Revealed Recordings</b>. They also performed at the 2014 edition of the Ultra Music Festival. Their major breakthrough that year, however, came with the release of their first <b>Beatport #1 overall charting track "Let Me Feel"</b>, that was a collaboration with Nicky Romero. Later that year, they performed at the TomorrowWorld festival in Atlanta. Vicetone also announced that they had also composed <b>the single "United We Dance" as the soundtrack for the 2014 Ultra Music Festival aftermovie</b>, which they then released on Ultra Records.<br></br>  For their final track of 2014, Vicetone released their track "What I've Waited For" through Monstercat. To start off 2015, Vicetone released their vocal progressive track <b>"No Way Out"</b>, a collaboration with vocalist Kat Nestel, which marked the third track they released through the Spinnin' Records main imprint, after "Lowdown" and their remix of Cash Cash's "Overtime".<br></br>  Following the success of their Ultra Music Festival aftermovie anthem, they released <b>the festival's 2015 anthem "Follow Me"</b> featuring JHart on February 17th 2015.
				</p>
				<iframe width="533" height="300" src="https://www.youtube.com/embed/Q--nWCmM-3g?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
	
	<div class="modal fade" id="dl_paulvandyk" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Paul van Dyk</b>
                    <div style="float:right;">
                       <a class="btn btn-social-icon btn-sm btn-reddit" href="https://www.paulvandyk.com/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/paulvandyk" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/PVD" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/paulvandyk" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
					                           
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Matthias Paul</b> better known by his stage name <b>Paul van Dyk</b> (born 16 December 1971 in Eisenhüttenstadt, East Germany) is a German <b>Grammy Award-winning electronic dance music DJ</b>, musician and record producer. One of the <b>first true superstar DJs</b>, Paul van Dyk was the <b>first artist to receive a Grammy nomination in the newly added category of Best Dance/Electronic album</b> for his 2003 release Reflections. <br></br>He was named <b>the World's No. 1 DJ</b> in both 2005 and 2006, something less than a handful of DJs have ever achieved. He was the first ever DJ to be named No. 1 by Mixmag in 2005. By 2008, he had sold over 3 million albums worldwide. A trance producer starting in the early 1990s, Paul quickly achieved popularity with his remix of "Love Stimulation" by Humate on the record label MFS in 1993 and with his hit single "For an Angel" but, in recent times, he no longer likes to describe his music as trance, but rather simply as electronic music.
				</p>
				<iframe width="533" height="300" src="https://www.youtube.com/embed/QMt2hw62374?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
	
	<div class="modal fade" id="dl_headhunterz" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Headhunterz</b>
                    <div style="float:right;">
                       <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.headhunterz.com/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/djheadhunterz" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/djheadhunterz" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/djheadhunterz" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/headhunterz" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Willem Rebergen</b>, better known by his stage name <b>Headhunterz</b>, is a Dutch hardstyle DJ and music producer. Beginning his career with duo partner Bobby van Putten under the alias, Nasty D-Tuners, Rebergen and van Putten renamed their act to Headhunterz when they signed for Dutch hardstyle label Scantraxx in 2005. Van Putten left shortly after their first release on Scantraxx and Willem Rebergen took over the Headhunterz alias as a solo act. <br></br>Headhunterz was one of the biggest names in hardstyle music and has been a major contribution to its growing popularity. He has also been a key figure in the development and musical direction of hardstyle with a large section of his musical releases placing emphasis on trance influenced melodies and distorted, pitched kicks. He has performed at every major hardstyle event including <b>Qlimax, Defqon.1, Q-Base, inQontrol, Decibel and Hard Bass</b> and has performed at popular electronic music festivals Electric Daisy Carnival and Tomorrowland. Headhunterz was <b>the first Hardstyle artist to feature in the DJ Mag Top 100</b> and has featured every year since 2010, with a personal peak of 11th in 2012.
				</p>
				<iframe width="533" height="300" src="https://www.youtube.com/embed/9uaGgWKwMCg?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="dl_borgore" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Borgore</b>
                    <div style="float:right;">
                       <a class="btn btn-social-icon btn-sm btn-reddit" href="http://therealborgore.com/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/borgore" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/Borgore" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/borgore/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/Borgore/" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Asaf Borger</b> (born October 20, 1987), known professionally as <b>Borgore</b>, is an Israeli electronic dance music producer and DJ. Borgore comes from Tel Aviv, Israel. He is the founder of <b>Buygore Records</b> and former drummer of Israeli deathcore band Shabira. He is also part of the dubstep duo <b>Alphamale Primates</b>, which consists of him and Tomba.<br></br> Self-described as <b>"Gorestep"</b>, his music incorporates triplet drum patterns with heavy metal influences. Some songs have been compared to horror movies, farm animals, and sex. Sometimes he performs under the nicknames: Borgina, Isabelle or Estrella. He has released tracks under Dim Mak Records, Spinnin' Records, Sumerian Records and also his own label Buygore. In 2012 he released the single <b>"Decisions"</b>, with back-up vocals provided by Miley Cyrus. His label Buygore records has brought to fame artists such as Document One and even Rusko has released on the label. Current Buygore signers include Bad Royale, Dead Audio, Ookay, Kennedy Jones, Bare and At Dawn We Rage among others. Borgore has been credited (slightly jokingly) even by his close friend and fellow producer DJ Carnage for the change in musical style and attitude of Miley Cyrus. His debut album called #NEWGOREORDER will be released on Buygore Records under exclusive license with Dim Mak Records. <br></br><b> In November 2014, Borgore partnered with Electronic Music lifestyle brand Electric Family to produce a collaboration bracelet for which 100% of the proceeds are donated to Keep a Breast Foundation. Keep a Breast Foundation is working to help eradicate breast cancer by supporting young people & educating them on prevention, early detection, & cancer-causing toxins.</b>
				</p>
				<iframe width="533" height="300" src="https://www.youtube.com/embed/i8nYBqPRNKw?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="dl_kura" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>DJ KURA</b>
                    <div style="float:right;">
                       <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.djkura.com/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/kura_live" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/KURADJ" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/kuradj/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/channel/UCdcF12vUa4rTqr84qPGS7qg" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Ruben de Almeida</b> better known as <b>DJ Kura or just Kura</b> (born in 1987) is a Portuguese electro house music DJ and producer. Kura has released tracks through labels such as <b>Hardwell's Revealed Recordings</b>, Ferry Corsten's Flashover Recordings, MYNC’s Cr2 Records, Tiger Records, among others. He’s 27 years old and is already the <b>42nd most popular DJ in the world according to DJ Mag’s Top100 2014</b>.<br></br> KURA has under his belt several releases for labels such as Hardwell’s Revealed Recordings, Ferry Corsten’s Flashover Recordings, MYNC’s Cr2 Records, Robbie Rivera’s Juicy Music, Nicky Romero’s Protocol Recordings, and Armin Van Buuren’s Trice/Armada Music, as well as Ultra Music, among others, and lots more are on the way. Add to this his remarkable charisma and talents on a DJ booth and you have the key ingredients to make it in today’s competitive and worldwide electronic scene.
				</p>
				<iframe width="533" height="300" src="https://www.youtube.com/embed/yVHgcXjrRRU?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="dl_markusschulz" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Markus Schulz</b>
                    <div style="float:right;">
                       <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.markusschulz.com/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/markusschulz" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/markusschulz" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/markusschulz" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/markusschulz" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Markus Schulz</b> (born 3 February 1975), is a German-American DJ and music producer. He lives in Miami, Florida. He is best known for his weekly radio show titled <b>Global DJ Broadcast that airs on Digitally Imported radio</b>, After Hours FM and other online stations. He is also the founder of the label <b>Coldharbour Recordings and Schulz Music Group (SMG)</b>, an artist management company which manages rising stars in the industry such as KhoMha, Mr. Pit, Grube & Hovsepian and Adina Butar. After several spontaneous back to back performances in early 2013, Markus Schulz and Ferry Corsten announced they would be producing and touring together as the new EDM group New World Punx. Their debut arena show was held at Madison Square Garden, with global tour dates ongoing in the future.
				</p>
				<iframe width="533" height="300" src="https://www.youtube.com/embed/zmpAbWH6AlY?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
<div class="modal fade" id="dl_laidbackluke" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Laidback Luke</b>
                    <div style="float:right;">
                       <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.laidbackluke.com/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/laidbackluke" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/OfficialLaidbackluke" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/laidbackluke/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/laidbackluke" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Lucas Cornelis van Scheppingen</b> (born 22 October 1976), better known under his stage name <b>Laidback Luke</b>, is a Filipino-Dutch DJ and producer. He was voted <b>#46 on DJ Mag's Top 100 DJslist in 2008, before jumping to #27 in 2009 and jumping up 10 places in 2010</b>. Laidback Luke grew up in the Netherlands and made his name as a graffiti artist before turning to making music. He has worked with artists such as David Guetta, Steve Angello, the percussionist Nebat Drums, Sebastian Ingrosso, Axwell, Example and Junior Sanchez and played throughout Europe and North America as well as shows in Japan and Ibiza. He has released two studio albums: <b>Psyched Up (1998) and Electronic Satisfaction (2002)</b> as well as a successful mix album, <b>Windmill Skill (2003)</b>.<br></br> In 2003, van Scheppingen did a remix of the Daft Punk song "Crescendolls" for the duo's remix album Daft Club. Luke has also released his own mix album, titled Ibiza Closing Party, as a free covermount CD in the October 2008 issue of Mixmag. He released his new album in July 2011, titled Cream Ibiza Super You & Me. In 2012, Laidback Luke <b>was nominated for the best European DJ award from the 27th Dance Music Awards</b>. Luke is one half of Nouveau Yorican, a musical side project with his wife Gina Turner.
				</p>
				<iframe width="533" height="300" src="https://www.youtube.com/embed/RDBkFyd_0s0?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
	
	<div class="modal fade" id="dl_sandervandoorn" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Sander van Doorn</b>
                    <div style="float:right;">
                       <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.sandervandoorn.com/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/sandervandoorn" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/SandervanDoorn" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/sandervandoornofficial/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/sandervandoorntv" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Sander van Doorn</b> (born Sander Ketelaars on 28 February 1979) is a Dutch electronic dance music producer and DJ. He is listed at DJMag's top 100 djs list, debuting at #32 in 2006, then moving up to #13 in 2008, being <b>#10</b> in 2009, up to #12 in 2010, and as of 2012, is listed as #18 DJ in the world. But moved down to #39 at 2013, and down to #51 at 2014. <br></br> In March 2012 Sander performed at Ultra in Miami, where he introduced his new single 'Nothing Inside' (Mayaeni/Justin Parker) Featuring Mayaeni. The song hit <b>#1 on Beatport as well as the playlists and charts in numerous countries</b>. In August 2012 it was announced that Sander van Doorn and various notable electronic music producers would be featured on the Halo 4 remix album. 2013 has been another successful year for Sander van Doorn. He started his own monthly internet radio show called <b>"Identity" on Digitally Imported radio</b>. He also released some hit releases like "Joyenegizer", "Neon", "Project T" (with Dimitri Vegas & Like Mike) and "Direct Dizko" (with Yves). Next to that he started his own record label named <b>DOORN Records together with Spinnin' Records</b>. 2014 started off with his release "Right Here Right Now" and his collaboration with Martin Garrix and DVBBS "Gold Skies".
				</p>
				<iframe width="533" height="300" src="https://www.youtube.com/embed/UwsY_foobEw?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="dl_firebeatz" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Firebeatz</b>
                    <div style="float:right;">
                       <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.firebeatz.com/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/firebeatz" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/Firebeatz" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/firebeatz/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/Firebeatztube" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Firebeatz</b> is a Dutch music producing duo made up of <b>Tim Benjamin Smulders and Jurre van Doeselaar</b> that formed in Amsterdam in 2008. They have gained fame through their dance floor hits like "Dear New York", "Here We F*cking Go" and "Helicopter" on the EDM scene working alongside well-known acts like Calvin Harris, Tiësto and Martin Garrix. Tim and Jurre met at the School of Arts in Tilburg, The Netherlands, and discovered a similar interest in music. The chemistry worked prompting them to form Firebeatz in 2008. Releases like "Funky Shit", "Where's Your Head At", "Miniman", "Dear New York" and "Here We F*cking Go" got into the higher ranks on the Beatport dance charts.<br></br> They also successfully managed to diversify and cross over to other genres by collaborating with artists like Pitbull, James Blunt, Ian Carey, Snoop Dogg, Freestylers, Flo Rida, Timbaland, Fatman Scoop, Alex Gaudino, Wynter Gordon, Bingo Players and Sean Paul. <b>The latter two reaching Beatport's Main Top 15</b>. "Max Ammo", released December 2013, has reached the Beatport <b>top 20</b>. Their release together with Martin Garrix "Helicopter" got to <b>No. 1 in Beatport</b>. They released "Guitar Track" with Sander van Doorn in March 2014 after it was initially previewed with their identities hidden.  In November 2014, Firebeatz worked alongside Calvin Harris to release "It Was You", featured on Harris's fourth studio album Motion.
				</p>
				<iframe width="533" height="300" src="https://www.youtube.com/embed/dYa6KLLrWoU?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="dl_porterrobinson" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Porter Robinson</b>
                    <div style="float:right;">
                       <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.porterrobinson.com/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/porterrobinson" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/porterrobinsonmusic" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/porterrobinson/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/channel/UCKKKYE55BVswHgKihx5YXew" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Porter Weston Robinson</b> (born July 15, 1992) is an American electronic music producer and DJ from Chapel Hill, North Carolina. Robinson has registered multiple number one singles across different electronic genres. His debut album, Worlds, was released on August 12, 2014. On March 20, 2015, he was named <b>MTVu Artist of the Year</b>. A self-taught producer, Robinson originally released a variety of original singles on Glamara Records and Big Fish Recordings. In the summer of 2011 he signed a one-EP deal with <b>OWSLA</b>, a new label operated by <b>Skrillex</b>, to release the eleven-track Spitfire. As the first release on OWSLA, it reached <b>number one on the iTunes Dance chart as well as number one on Beatport's overall chart, crashing Beatport's servers upon release</b>.<br></br> Robinson next released a single, "Language", on April 10, 2012 through Big Beat Records in North America, and Ministry of Sound everywhere else. The song quickly shot to the <b>>#1 overall chart position on Beatport as well as the iTunes Dance chart</b>. The single was premiered initially via a live BBC Radio 1 Essential Mix on January 27. The music video, directed by Jodeb, was released via Ministry of Sound's YouTube channel on August 1, 2012. <br></br>He <b>co-wrote Zedd's US Top 10 hit "Clarity"</b>, and also sang backing vocals on this song. On December 17, 2012, a collaborative single with Mat Zo entitled "Easy" was pre-released exclusively on Beatport by Ministry of Sound, and spent two entire weeks as the #1 overall song on the Beatport Top 100 chart. The full official release occurred in spring 2013, and was accompanied by an animated music video. Robinson has been commissioned for official remixes by artists including Avicii and Lady Gaga. Porter's debut studio album Worlds was released through Astralwerks and Virgin EMI on August 12, 2014. He made his official <b>vocal debut</b> on the single <b>"Sad Machine".</b>
				</p>
				<iframe width="533" height="300" src="https://www.youtube.com/embed/hgKDu5pp_fU?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
<div class="modal fade" id="dl_vinai" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>VINAI</b>
                    <div style="float:right;">
                       <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.vinaiofficial.com/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/vinaiofficial" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/vinai.official" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/vinaiofficial/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/channel/UCQTiCJddISPD9BwAq4wWrsw" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
				<p><b>VINAI</b> is an electronic music group formed by Italian producers <b>Andrea and Alessandro Vinai.</b> As a duo they have produced EDM songs such as <b>"Louder" or "How We Party".</b> DJ Mag called them "hardstyle," though they are known for producing what is called <b>Melbourne bounce.</b> In 2014 VINAI has also entered DJ Mags Top 100 DJs list at <b>No. 62.</b> In 2014 VINAI joined <b>Spinnin' Records</b> and together with Canadian duo DVBBS they released the track ‘Raveology’. Raveology was given radio play by DJs including Hardwell, David Guetta, Dimitri Vegas & Like Mike, Diplo, Afrojack, Showtek, W&W, Martin Garrix, Sander Van Doorn, R3hab, NERVO, and Ummet Ozcan, among others. After the full version of "Raveology" was premiered on Billboard, the track reached <b>#1 on the Beatport chart.</b><br></br> VINAI then released together with TJR the anthem “Bounce Generation”. It was the most played track during WMC and Ultra Music Festival 2014 and after 5 days from the release date they reached <b>the #1 spot on Beatport,</b> keeping that spot for 14 days in a row. <b>“How We Party”</b> is their last anthem done together with the R3HAB. The track was premiered live during Tomorrowland 2014 when VINAI joined R3HAB on the mainstage. “How We Party” also reached <b>the #1 position on Beatport.</b>
				</p>
				<iframe width="533" height="300" src="https://www.youtube.com/embed/oPVTuCt2NF0?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="dl_noisecontrollers" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Noicecontrollers</b>
                    <div style="float:right;">
                       <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.noisecontrollers.com/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/Noisecontroller" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/Noisecontrollers" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/noisecontrollers/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/noisecontrollers" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Noisecontrollers</b> consists of 2 fulltime producers: <b>Bas Oskam and Arjan Terpstra.</b> Founded in 2005 both with a totally different musical background but with a great preference for Hardstyle (in every shape that is). Their First release was on DJS-Records called “Wanna Freak You” and their second release “Creatures” already on the big Fusion Records. 2010 Has been a very successful year. Having a huge hit with the new talented australian guys ‘Toneshifterz’ with the tracks <b>“Jaydee” and “Empire Of The Sun”. Also released an amazing second collaboration vinyl with DJ Zany and to top it all they made this Years Decibel Anthem</b> and just released the new EP “Faster N Futher, Macabre, Darkside of Emotions and ofcourse “Yellow Minute” remix done by wildstylez!<br></br> Futhermore there are some new collaboration’s on their doorstep with “Headhunterz” and “Psycho Punkz”, but the biggest step is probably their collaboration with Wildstylez. In November 2010, both Noisecontrollers and Wildstylez announced that they will leave their respective labels, Fusion & Scantraxx, to start their <b>own label</b> with the name <b>Digital Age.</b> The first result of this collaboration are the tracks <b>“A different story” and “Stardust”.</b> Together, they intend to reach even higher levels! <br></br>In 2014, Noisecontrollers <b>announced they were splitting.</b> Bas Oskam is to continue producing under the alias ‘Noisecontrollers’, whereas Arjan is said to be leaving the hard dance genre entirely.
				</p>
				<iframe width="533" height="300" src="https://www.youtube.com/embed/NxwsS4ZqQT8?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="dl_carnage" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>DJ Carnage</b>
                    <div style="float:right;">
                       <a class="btn btn-social-icon btn-sm btn-reddit" href="" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/djcarnage" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/djcarnageofficial" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/djcarnage/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/channel/UCuKGmUju3nMiCWQnLvXPNcg" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
				<p>Born as <b>Diamante Blackmon</b> back in 1991, <b>DJ Carnage</b> 0is actually making a name for himself in the dance music world. After scaling the dance music ladder apparently instantaneously, the renaissance man musician has great reason to be thrilled. With creation credit on RiFF Raff’s lead single, the arrival of an approaching SiriusXM radio show, an enormous EDC Vegas performance and (to top it all away) Chipotle offering the DJ free burritos (“burrito bowls when I am feeling fat”) for life are just a few of the motives why Carn – as his boss calls him – is prepared to fend off his “#Chipotlegang” followers and rock to Laidback Luke as though he were a lover, and not your own friend of his. The audacious producer burst after his remix of Hardwell’s “Spaceman” a just ten months past and adamant on making music history. His coming hardstyle-esque single with Tony Junior, “Michael Jordan,” is a graphic painting of Carnage’s fearless tenacity: “It is simply a mythical record, everything I make is celebrated. I’m like a robot,” he says matter-of-factly on why he called the track after basketball’s best. The guy is feeling like he’s #23 and he desires everything. The tour is named ‘6 Rings’ because “[Jordan] won six rings. This tour is all about winning the title. Every show is a game and I’m going undefeated.” Let’s trust Carn never gets traded to the Wizards.
				</p>
				<iframe width="533" height="300" src="https://www.youtube.com/embed/i8nYBqPRNKw?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="dl_dondiablo" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Don Diablo</b>
                    <div style="float:right;">
                       <a class="btn btn-social-icon btn-sm btn-reddit" href="http://www.dondiablo.com/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/dondiablo" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/OfficialDonDiablo" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/officialdondiablo/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/DonDiablo" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Don Pepijn Schipper</b> was born in Coevorden, Netherlands in February 27, 1980. He started early with music signing his first record deal at age fifteen. At the end of 2005, Don Diablo founded his own record label and event brand, <b>Sellout Sessions,</b> raising his profile in his native country, the Netherlands. Success followed soon after with underground hits like "Blow", "Who's Your Daddy", "Pain Is Temporary, "Pride Is Forever", "Hooligans" and "Animale". <b>"Blow" was the first single to create a big buzz</b> on international club scenes getting licensed to over ten countries. He also completed his studies obtaining a Bachelor's degree in journalism. Don Diablo discovered and licensed <b>the UK top 3 chart hit "Exceeder"</b> by Mason. The record was originally signed to Middle of the Road, a record label set up by Don Diablo and well-known Amsterdam-based club promoter Roy Avni (Electro Nation). <br></br>In 2013 Diablo released his new songs on labels such as Axwell's Axtone, Nicky Romero's Protocol Recordings, Steve Angello's Size X imprint and several tracks on the Spinnin' Records label. Warner Brothers had also asked Don to create <b>the official theme song for the 2013 video game Batman: Arkham Origins.</b> His club anthem "Starlight (Could You Be Mine)" with UK DJ/producer Matt Nash was debuted during the last Swedish House Mafia concert, after Axwell signed it to his label. The song became a <b>Beatport Top 5 hit</b> after gaining support from various major artists, such as Tiësto, Avicii, Martin Solveig and Tommy Trash. This led to several of his other releases reaching the Beatport Top 10. The music video, directed by Kyle Padilla, was published on February 7, 2014, around seven months after its release. <br></br>During the year, Pete Tong debuted on six of Don's releases in his BBC Radio 1 show. He had residency at Las Vegas' night club "Light", played the Departures Ibiza closing party alongside Axwell and Sebastian Ingrosso, toured UK with Nicky Romero, a and had a sold out solo tour in Asia and the USA, closing it with a gig in New York City on Pier94 with Alesso. In 2014, Don is premiering with his brand new visual concept "The Hexagon" with Los Angeles-based visual company <b>"VSquared Labs",</b> the creative brains behind the visual shows of Amon Tobin and Skrillex. He has now moved from Netherlands to London to work on his album due for release later this year. In October of 2014, Don Diablo made a new entry at <b>#82 in DJ Mag's Top 100 DJs.</b>
				</p>
				<iframe width="533" height="300" src="https://www.youtube.com/embed/W46raxKFk2Y?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="dl_quintino" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Quintino</b>
                    <div style="float:right;">
                       <a class="btn btn-social-icon btn-sm btn-reddit" href="http://quintino.nl/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/quintinoo" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/djquintino" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/quintinoo/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/channel/UCGI2Kf89GZr2RlSBxezAFmA" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Quintino</b> is one of the true DJ’s with a lifelong passion for dance music and on the verge of becoming one of the leading forces in the global music scene today. His high profile work with the likes of Tiësto and Afrojack has made him a household name and his excellent DJ sets across the globe have made his position a highly respected name in the scene. Discovered by Laidback Luke at the age of 18, Quintino started to take his stature as a DJ and producer beyond the normal club scene, playing landmark gigs and high profile festivals. Highlights include performing at <b>Mansion and LIV in Miami, Pacha in New York, XS in Las Vegas</b> and multiple tours in Europe and Asia. A life-changing break came in 2009 when he released <b>a remix of Cidinho & Doca’s ‘Rap Das Armas’, which became a worldwide summer anthem and notched over 10 million YouTube views</b>. <br></br>That same year Quintino released the singles ‘Heaven’ and ‘You Can’t Deny’ and made clear he will be around to stay as an artist as well. When Afrojack initiated a team of aspiring DJs and producers for his imprint <b>Wall Recordings</b> in 2011, it didn’t take long for him to approach his long-time DJ friend Quintino for a musical collaboration. Afrojack and Quintino live up to their reputation as creators of crowd pleasing records with their first collaborative release; ‘Selecta’. Quickly followed by the second single, ‘Raider’ – both on Wall Recordings.<br></br> In the summer of 2011, Quintino decided to join forces with Sandro Silva and continued his ascent into the Dutch Dance Music elite with the release of <b>‘Epic’</b> on Tiësto’s ‘Musical Freedom’ label. The single <b>topped DMC’s Buzzchart, entered the top five of the Beatport Top 100 and hit the #1 position of the Dutch charts.</b> Smashing clubs, ‘Epic’ was quickly added to the record cases of Tiësto and the Swedish House Mafia. The following months, ‘Epic’ remained at the top of the charts, selling enough copies to gain platinum status in the Netherlands. Quintino demonstrated that he thinks big in everything he delivers. He kept up the pace after the massive success of ‘Epic’ and returned on Musical Freedom and Wall Recordings. <br></br>In January 2012 Tiësto presented ‘We Gonna Rock’ on his label as Quintino’s follow up for ‘Epic’. ‘The One and Only’ appeared on Afrojack’s imprint as well as a new collaboration with MOTI, called ‘Circuits’. In between producing and releasing songs, Quintino keeps performing worldwide with <b>an estimate of 250 gigs a year</b> reaffirming many future successes for him.
				</p>
				<iframe width="533" height="300" src="https://www.youtube.com/embed/-fxMThzEqlg?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
<div class="modal fade" id="dl_yellowclaw" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DJ Biography - <b>Yellow Claw</b>
                    <div style="float:right;">
                       <a class="btn btn-social-icon btn-sm btn-reddit" href="http://yellowclaw.com/" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>                       
                        <a class="btn btn-social-icon btn-sm btn-twitter" href="https://twitter.com/YellowClaw" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/yellowclaw" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-sm btn-instagram" href="https://instagram.com/yellowclaw/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
					    <a class="btn btn-social-icon btn-sm btn-pinterest" href="https://www.youtube.com/user/TheYellowclaw" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                       
                    </div>
                    </h4>
                </div>
                <div class="modal-body">
                    <p><b>Yellow Claw</b> is a DJ trio from Amsterdam, Netherlands. The group consists of <b>Bizzey (Leo Roelandschap), Jim Aasgier (Jim Taihuttu) and Nizzle (Nils Rondhuis).</b> Their music is a mix of wide range of genres and often incorporates elements from trap music, hip hop, dubstep, hardstyle and moombahton. Yellow Claw first gained popularity in the middle of 2010, after founding and hosting <b>the Yellow Claw Thursday night party</b> at one of Amsterdam's most famous night clubs, <b>the Jimmy Woo.</b><br></br> During 2012 and 2013, they released a number of successful singles, which charted on the Dutch and Belgian national charts: <b>"Krokobil", "Nooit meer slapen", "Thunder" and "Last Night Ever".</b> The videos for the singles became viral, each gaining over <b>four million views on YouTube.</b> During that time, Yellow Claw performed at many Dutch festivals, such as DirtyDutch Festival, Sneakerz Festival, Latin Village Festival and Solar Festival.<br></br> In 2013, Yellow Claw signed to Diplo's label <b>Mad Decent.</b> On March 7, 2013, they released their first international <b>EP Amsterdam Trap Music.</b> In June, they performed at Diplo and Friends on BBC Radio 1, and in July - at the 2013 Tomorrowland Festival. On September 26, 2013, they put out their second EP, <b>titled Amsterdam Twerk Music.</b> On November 1, 2013, after signing to <b>Spinnin' Records,</b> the group released their first international single <b>"Shotgun"</b>, featuring vocals from Dutch singer <b>Rochelle.</b> The single peaked at <b>number 10 in the Netherlands and number 20 in Belgium.</b> On November 8, 2013, Yellow Claw released a collaboration single with Flosstradamus, titled "Pillz", under Fool's Gold and Ultra Records.
				</p>
				<iframe width="533" height="300" src="https://www.youtube.com/embed/oIwFJNguQgY?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>	
<div class="scroll-top-wrapper ">
	<span class="scroll-top-inner">
		<i class="fa fa-2x fa-arrow-circle-o-up"></i>
	</span>
</div>
    <!--Login Modal-->
<div class="modal fade bs-modal-sm" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <br>
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
              <li class=""><a href="#signup" data-toggle="tab">Register</a></li>
              <li class=""><a href="#why" data-toggle="tab">Why?</a></li>
            </ul>
        </div>
      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in" id="why">
        <p>We need this information so that you can receive access to the page where you will be able to buy your ticket. Rest assured your information will not be sold, traded, or given to anyone.</p>
        <p></p><br> <a href="aboutus.php" class="alert-link" style="font-size: 15px;">Click here if you have any other inquiries!</a></p>
        </div>
        <div class="tab-pane fade active in" id="signin">
            <form action="checklogin.php" class="form-horizontal" method="post">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="username">Username:</label>
              <div class="controls">
                <input required="" id="userid" name="username" type="text" class="form-control" placeholder="Enter your username here" class="input-medium" required="">
              </div>
            </div>

            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="password">Password:</label>
              <div class="controls">
                <input required="" id="password" name="password" class="form-control" type="password" placeholder="********" class="input-medium">
              </div>
            </div>

            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                <input type="submit" name ="submit" value ="Sign in" class="btn btn-primary">
              </div>
            </div>
            </fieldset>
            </form>
        </div>
        <div class="tab-pane fade" id="signup">
            <form class="form-horizontal" action="register.php" method="post">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="Email">Email:</label>
              <div class="controls">
                <input id="Email" name="Email" class="form-control" type="text" placeholder="youremail@****.com" class="input-large" required="">
              </div>
            </div>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Username:</label>
              <div class="controls">
                <input id="username" name="username" class="form-control" type="text" placeholder="Enter your username" class="input-large" required="">
              </div>
            </div>
            
            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="password">Password:</label>
              <div class="controls">
                <input id="password" name="password" class="form-control" type="password" placeholder="********" class="input-large" required="">
                <em>1-8 Characters</em>
              </div>
            </div> 
            
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
               <input class="btn btn-success" type="submit" name="register" value="Register">
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div>
      <div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </center>
      </div>
    </div>
  </div>
</div> 
</body>
<!--Loading Scripts-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<!--Loading Completed-->
    
</html>
