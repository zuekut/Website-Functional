<?php include("conn.php");?>


<?php
//PHP for checking whether user has selected tickets and camping correctly.

//define variables
$form_dayErr = $form_amountErr = $form_campingErr = "";
$form_day = $form_amount = $form_camping = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST['form_amount'])) {
        $form_amountErr = '<div id="alert-notickets" class="alert alert-dismissable alert-danger">
				<h4>
					Processing Error!
				</h4> <br><strong>Warning!</strong> There was an error processing your order. Please try again! <br><br><small><strong><i>Error 101</i></strong>: You have not selected any tickets. See <a href="#ticket_faq" class="alert-link" data-toggle="modal">FAQ</a>. If error persists please contact the server administrator</small>
                </div>';
    } else {
        
        if (empty($_POST['form_camping'])){
        echo "<script type='text/javascript'>window.onload=function(){ $('#campingModal').modal('show')}; </script>";
    } else {
        echo "<h1>PHP Test complete</h1>";
    }
    }
    
    
}

?>

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
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.js"></script>
    <!--<script type="text/javascript" src="js/ui-bootstrap-tpls-0.12.1.min.js"></script>-->

    

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
						<li class="active">
							<a href="home.php">Home</a>
						</li>
						<li>
							<a href="#buytickets">BUY Tickets</a>
						</li>
                        <li>
							<a href="lineup.php">Line-Up</a>
						</li>
                        <li>
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
    <div id="wrapper"> <!--just content wrapper-->
	<div class="row clearfix" id="divprops">
		<div class="col-md-12 column">
			<div class="jumbotron">
                
                <p id="text_daysleft">Days left until <strong>Wood Festival</strong></p>
                <div id="countdown"></div>
                <p style="font-size: 20px; text-align:center;">24 - 26 July 2015</p>
				<p>
                    
					<a href="#buytickets" class="btn btn-lg btn-danger" id="btn_buynow"><span class="glyphicon glyphicon-log-out"></span> Buy Tickets Now!</a>
                    
				</p>
                
			</div>
			
		</div>
	</div>
	<div class="row clearfix" id="divprops">
		<div class="col-md-2 column">
			<img alt="140x140" src="img/artists/hardwell.jpg" class="img-thumbnail" style=""><span class="text-content"><span>Hardwell</span></span>
		</div>
		<div class="col-md-2 column">
			<img alt="140x140" src="img/artists/martingarrix.jpeg" class="img-thumbnail" style=""><span class="text-content"><span>Martin Garrix</span></span>
		</div>
		<div class="col-md-2 column">
			<img alt="140x140" src="img/artists/afrojack.jpg" class="img-thumbnail" style=""><span class="text-content"><span>Afrojack</span></span>
		</div>
		<div class="col-md-2 column">
			<img alt="140x140" src="img/artists/arminvanbuuren.jpg" class="img-thumbnail"><span class="text-content"><span>Armin van Buuren</span></span>
		</div>
		<div class="col-md-2 column">
			<img alt="140x140" src="img/artists/davidguetta.png" class="img-thumbnail"><span class="text-content"><span>David Guetta</span></span>
		</div>
		<div class="col-md-2 column">
			<img alt="140x140" src="img/artists/steveaoki.jpg" class="img-thumbnail"><span class="text-content"><span>Steve Aoki</span></span>
		</div>
        <a href="lineup.php" class="btn btn-default" id="btn_moreartists"><span class="glyphicon glyphicon-music"></span> And many more!...</a>
	</div>
	<div class="row clearfix" id="divprops">
		<div class="col-md-12 column" >
			<div class="page-header">
				<h1>
					Unforgettable Experience <small>The Future is Here</small>
				</h1>
			</div>
			<p style="font-size: 18px;">
				<strong><i>New 2015!!!</i></strong> Automatic Payment System with own ID-cards <br><br><strong>Wood Festival</strong> is one of the most exuberant events in the Netherlands. The festival welcomes <strong>25,000 people</strong> and hosts one of the most famous artists. Apart from everything the visitors could expect from a decent festival camping, there are several <strong>unique features</strong>. Features such as excellent service desk with an option on lending many essential and practical items and high quality food stands.
			</p>
            
		</div>
	</div>
	<div class="row clearfix" id="divprops">
		<div class="col-md-12 column">
			<div class="page-header" id="buytickets">
				<h1>
					Tickets <small>Choose your ticket</small>
				</h1>
			</div>
			<p style="font-size: 15px;">
                Below you will find various ticket types for Wood Festival! Whether you want to go One-Day or go full out with a Three-Day ticket + Camping, we got it all for you. The only restriction is that you order the same ticket for you and your friends. You can keep track of the amount of tickets there are left for each ticket type through the real-time tracker on the bottom. Keep in mind that tickets will be sold out fast! <br><br><em>For full ticket restrictions and any other questions, please refer to our <a href="#ticket_faq" data-toggle="modal">FAQ</a></em>
			</p>
			<span class="error"><?php echo $form_amountErr; ?></span>
            <span class="error"><?php echo $form_campingErr; ?></span>
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="100x200" src="img/1Leaf.jpg" style="width: 350px; height: 200px;">
						<div class="caption">
							<h3>
								One-Day <br><strong>€50</strong>
							</h3>
							<p>
								The one-day ticket will allow you to visit the festival for one whole day. You can choose the day you wish to enter, but will have to leave at the end of the day. No camping possible. <br><a href="#ticket_moreinfo" data-toggle="modal"><b>More Info</b></a>
							</p>
                            
                            <div class="home_ticketform">
                                <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form-amount" style="width:100%;">
                                <div class="form-group">
                                    <label for="form_day">Choose your Day:</label>
                                    <select class="form-control" name="form_day">
                                        <option>Friday</option>
                                        <option>Saturday</option>
                                        <option>Sunday</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="form_amount">Amount of tickets (max 10):</label>
                                    <select class="form-control" id="amount_tickets" name="form_amount">
                                        <option></option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </div>
                                    <button id="submit" name="submit" type="submit" value="Send" class="btn btn-block btn-sm btn-success">Checkout <span class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
                                <div class="form-clear"></div>
                                </div>
                            <div class="progress progress-striped active">
                                <div class="progress-bar <?php echo ($progressbar_type1) ?>" role="progressbar" aria-valuenow="<?php echo ($type1_available_count) ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($type1_percent) ?>%;">
                                    <?php echo ($type1_available_count) ?> left!
                                </div>
			</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
                        
						<img alt="100x200" src="img/2Leaves.jpg" style="width: 350px; height: 200px;">
						<div class="caption">
							<h3>
								Two-Day <br><strong>€90 (+€50 camping p/g)</strong>
							</h3>
							<p>
								The two-day experience will allow you to visit the festival on 2 <em>consecutive</em> days (Friday/Saturday or Saturday/Sunday). You can also purchase an area at the camping for up to 6 people. <br><a href="#ticket_moreinfo" data-toggle="modal"><b>More Info</b></a>
							</p>
                            <div class="home_ticketform">
                                <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form-inline">
                                <div class="form-group" style="width: 100%;">
                                    <label for="form_day">Choose your Days:</label>
                                    <select class="form-control" name="form_day">
                                        <option>Friday/Saturday</option>
                                        <option>Saturday/Sunday</option>
                                    </select>
                                </div>
                                    <div class="form-clear"></div>
                                <div class="form-group" style="width: 70%;">
                                    <label for="form_amount">Amount of tickets (max 6):</label>
                                    <select class="form-control" id="amount_tickets" name="form_amount">
                                        <option></option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                </div>
                                    <div class="checkbox">
                                        <label for="form_camping" style="font-weight: bold;">
                                            <input type="checkbox" name="form_camping"> Camping
                                        </label>
                                        
                                </div>
                                    <div class="form-clear"></div>
                                    <div class="form-clear"></div>
                                    <button id="submit" name="submit" type="submit" value="Send" class="btn btn-block btn-sm btn-success">Checkout <span class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
                                <div class="form-clear"></div>
                                </div>
                            <div class="progress progress-striped active">
                                <div class="progress-bar <?php echo ($progressbar_type2) ?>" role="progressbar" aria-valuenow="<?php echo ($type2_available_count) ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($type2_percent) ?>%;"> <?php echo ($type2_available_count) ?> left!</div>
			</div>
							
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
                            <img alt="100x200" src="img/3Leaves.jpg" style="width: 350px; height: 200px;">
                            <div class="caption">
							<h3>
								Three-Day <br><strong>€130 (+€100 camping p/g)</strong>
							</h3>
							<p>
								This three day camping experience will allow you to see all artists and enjoy the whole festival (Friday-Saturday-Sunday). If you wish to include camping you can do so for a group upto 6 people. <br><a href="#ticket_moreinfo" data-toggle="modal"><b>More Info</b></a>
							</p>
                            <div class="home_ticketform">       
                                <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form">
                                    <div class="checkbox">
                                        <label for="form_camping" style="font-weight: bold;">
                                            <input type="checkbox" name="form_camping"> Camping
                                        </label>
                                </div>
                                    <div style="height: 70px;"></div>
                                <div class="form-group" style="">
                                    <label class="" for="form_amount">Amount of tickets (max 6):</label>
                                    <select class="form-control" name="form_amount" id="amount_tickets">
                                        <option></option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                </div>
                                    <div style="height: 3px;"></div>

                                    <button id="submit" name="submit" type="submit" value="Send" class="btn btn-block btn-sm btn-success">Checkout <span class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
                                <div class="form-clear"></div>
                                </div>
                            <div class="progress progress-striped active">
                                <div class="progress-bar <?php echo ($progressbar_type3) ?>"aria-valuenow="<?php echo ($type3_available_count) ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($type3_percent) ?>%;"> <?php echo ($type3_available_count) ?> left</div>
			</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix" id="divprops">
		<div class="col-md-4 column">
			 <address> <strong>DARS International, ltd.</strong><br> Rachelsmolen 1<br> 5612 MA Eindhoven<br> <abbr title="Phone">P:</abbr> (06) 1234-5678</address>
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
</div>
<!--BEGINNING OF MODALS-->
   <div class="modal" id="ticket_faq" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Ticket FAQ</h4>
                </div>
                <div class="modal-body">
                    <p>FAQ Shit goes here</p>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
   <div class="modal" id="ticket_moreinfo" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Ticket Information</h4>
                </div>
                <div class="modal-body">
                    <p>More information about tickets goes here</p>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-example-modal-sm" id="campingModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">Are you sure?</div>
                <div class="modal-body"><p>You have not selected camping. Are you sure you <strong>do not</strong> want camping?</p></div>
                <div class="modal-footer"> <a class="btn btn-default btn-success" href="">Yes</a><a class="btn btn-default btn-danger" href="#buytickets" data-dismiss="modal">Go back</a></div>
            </div>
        </div>
</div>
<!--BACK TO TOP WRAPPER-->
<div class="scroll-top-wrapper ">
	<span class="scroll-top-inner">
		<i class="fa fa-2x fa-arrow-circle-o-up"></i>
	</span>
</div>
 
</body>
    
   
    
</html>
