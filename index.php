<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Wood Festival v0.1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/landingpage.css" rel="stylesheet">
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
</head>
<body>
    <div id=""></div>
    <div class="container">
	<div class="row clearfix" id="divprops" style="margin-top: 50px;">
		<div class="col-md-12 column">
			<div class="jumbotron">
                <p id="text_festivaltitle">R.J. Wood Festival</p>
                <div id="youtubevid"><iframe width="672" height="378" src="https://www.youtube.com/embed/BR_DFMUzX4E?showinfo=0&iv_load_policy=3&controls=0&autoplay=1" frameborder="0" allowfullscreen></iframe></div>
                <!--<p id="text_daysleft">Days left until RJ Festival</p>-->
                <div id="countdown"></div>
				<p>  
					<a href="home.php#buytickets" class="btn btn-lg btn-danger" id="btn_buynow"><span class="glyphicon glyphicon-log-out"></span> Buy Tickets Now!</a>
				</p>
                <a href="home.php" class="btn btn-default btn-success" id="btn_skip"><span class="glyphicon glyphicon-music"></span> Skip intro</a>
                
			</div>
			
		</div>
	</div>
    </div>
    
</body>
</html>