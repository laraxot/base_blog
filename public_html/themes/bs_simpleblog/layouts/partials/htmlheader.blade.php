<head>
	<title>Weblog a Blogging Category Bootstrap responsive WebTemplate | Home :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Weblog a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	@php
		Theme::add('theme/pub/css/bootstrap.css');
		Theme::add('theme/pub/css/jquery.desoslide.css');
		Theme::add('theme/pub/css/style.css');
		Theme::add('theme/pub/css/fontawesome-all.css');
		Theme::addStyle('//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"');
	@endphp
	{!!  Theme::showStyles(false) !!}
</head>