<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title><?= $title?> next GDG Indonesia</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>media/css/style.css">
    <link href="<?= base_url();?>media/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One|Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


    <link rel="stylesheet" type="text/css" href="<?= base_url();?>media/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>media/css/slick-theme.css"/>

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>


<nav class="navbar navbar-default">
	<div class="warp">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#"><img src="<?= base_url();?>media/images/logonext.png"></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	        <li class="active"><a href="#">Home</a></li>
	        <li><a href="#">Bogor</a></li>
	        <li><a href="#">Depok</a></li>
	        <li><a href="#">Jakarta</a></li>
	        <li><a href="#">Semarang</a></li>
	        <li><a href="#">Surabaya</a></li>
	        <li><a href="#">Yogyakarta</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</div>
</nav>




<div class="<?= $body_type; ?>">
	<?php if(isset($main)){
		$this->load->view($main);
	} ?>
</div>


<div class="footers">
		<p>GDG DevFest 2016</p>
</div>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url();?>media/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?= base_url();?>media/js/bootstrap.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script>
jQuery(document).ready(function(){
 var endtime = "2017-03-25";
 var timeinterval = setInterval(function(){
	 var t = getTimeRemaining(endtime);
	 jQuery("#show-days").text(t.days);
	 jQuery("#show-hour").text(t.hours);
	 jQuery("#show-minute").text(t.minutes);
	 jQuery("#show-second").text(t.seconds);

	 if(t.total<=0){
		 clearInterval(timeinterval);
	 }
 },1000);
});

function getTimeRemaining(endtime){
var t = Date.parse(endtime) - Date.parse(new Date());
var seconds = Math.floor( (t/1000) % 60 );
var minutes = Math.floor( (t/1000/60) % 60 );
var hours = Math.floor( (t/(1000*60*60)) % 24 );
var days = Math.floor( t/(1000*60*60*24) );

return {
 'total': t,
 'days': days,
 'hours': hours,
 'minutes': minutes,
 'seconds': seconds
};

}
</script>

</body>
</html>
