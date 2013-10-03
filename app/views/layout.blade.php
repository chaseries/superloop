<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='css/normalize.css' />
<link rel='stylesheet' href='css/font-awesome.min.css' />
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Raleway:400,600,300,100'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel='stylesheet' href='css/global.css' />
<link rel="icon" type='image/ico' href='images/favicon.png'/>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src='js/story.js'></script>
	<title>
		@yield('title')
	</title>
</head>
<body onload="loadScroll()" onunload="saveScroll()">
	@include('header')
	@yield('content')
	<!-- @include('footer') -->
</body>
</html>