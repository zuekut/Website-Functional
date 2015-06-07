<?php
session_start();
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
    <link href="css/bootstrap-datepicker.min.css" rel="stylesheet">

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
    <script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>

    

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
							<a href="homemembers.php">Home</a>
						</li>
						<li class="active">
							<a href="homemembers.php#buytickets">BUY Tickets</a>
						</li>
                        <li>
                            <a href="lineupmembers.php">Line-Up</a>
						</li>
                        <li>
                            <a href="eventinfomembers.php">Event Info</a>
						</li>
                        <li>
                            <a href="greenisbettermembers.php">Green is Better</a>
						</li>
                        <li>
                            <a href="aboutusmembers.php">About Us</a>
						</li>
                        <li><a href="logout.php" style="color: red">Log Out</a></li>  
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
        <div class="page-header">
            <h1>
                Buy tickets <small></small>
            </h1>
        </div>
        <div class="col-md-12 column">
            <div class="alert alert-success" role="alert">Please proceed with paypal payment!</div>
        </div>
        
        <form action="#" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-12">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            
                        </div>
                    </div>
                </form>
        
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="rj.festival.2015@gmail.com">
<input type="hidden" name="lc" value="CA">
<input type="hidden" name="item_name" value="<?php  echo $_SESSION['TicketName'] ?>">
<input type="hidden" name="amount" value="<?php echo $_SESSION['TicketPrice'] ?>">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
<input type="hidden" name="return" value="http://localhost/Website-remco/buyticketsprocess.php">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>



<!--            <div class="col-md-2" id="orderStatus">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center;">My Order</h3>
                    </div>
                    <div class="panel-body">
                            Type: <i>One Day (Friday)</i>
                            <br>Quantity: <i>x2</i>
                    </div>
                    <div class="panel-footer">Total: <i>&euro; 100</i></div>
                </div>
            </div>-->
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
   <script> 
       $('#visitorDateOfBirth input').datepicker({
           format: "dd/mm/yyyy",
           startDate: "01/01/1900",
           endDate: "24/06/1996",
           startView: 1,
           autoclose: true
       });
    </script>
</body>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="loginModalLabel">Login</h4>
      </div>
      <div class="modal-body">
        <form action="checklogin.php" method="post">
          <div class="form-group">
            <label for="username" class="control-label">Username:</label>
            <input type="text"  class="form-control" name="username">
          </div>
          <div class="form-group">
            <label for="password" class="control-label">Password:</label>
            <input type="password" class="form-control" name="password">
          </div>
                  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" name ="submit" value ="Login" class="btn btn-primary">
      </div>
        </form>
      </div>

    </div>
  </div>
</div>
   
    
</html>
