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
  <link rel="shortcut icon" href="img/favicon.png">
  
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
							<a href="home.html">Home</a>
						</li>
						<li class="active">
							<a href="home.html#buytickets">BUY Tickets</a>
						</li>
                        <li>
							<a href="lineup.html">Line-Up</a>
						</li>
                        <li>
							<a href="eventinfo.html">Event Info</a>
						</li>
                        <li>
							<a href="greenisbetter.html">Green is Better</a>
						</li>
                        <li>
							<a href="login_members.html">Login/Members</a>
						</li>
                        <li>
							<a href="aboutus.html">About Us</a>
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
        <div class="page-header">
            <h1>
                One step away! <small>Some details before you pay</small>
            </h1>
        </div>
        <div class="col-md-12 column">
            <h3>Thank you, for selecting your tickets! Please enter all details below for each ticketholder.</h3>
        </div>
        <div class="row">
            <div class="col-md-9 column">
                <p style="font-size:18px;">Placeholder Visitor1</p>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="visitorFirstName1" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="visitorFirstName1" placeholder="i.e. Robert">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="visitorLastName1" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="visitorLastName1" placeholder="i.e. Johnson">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="visitorDateOfBirth1" class="col-sm-2 control-label">Date of Birth</label>
                        <div class="col-sm-10" id="visitorDateOfBirth">
                            <input type="text" class="form-control" placeholder="dd/mm/yyyy">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="visitorSex1" class="col-sm-2 control-label">Sex</label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                <input type="radio" name="visitorSexOptions" id="inlineRadio1" value="option1"> <abbr title="Male">M</abbr>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="visitorSexOptions" id="inlineRadio2" value="option2"> <abbr title="Female">F</abbr>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="visitorEmail1" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="visitorEmail1" placeholder="i.e. woodfestival@gmail.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> I agree to the <strong><a href="#">Terms of Service</a></strong>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Proceed to payment</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-2" id="orderStatus">
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
    
   
    
</html>
