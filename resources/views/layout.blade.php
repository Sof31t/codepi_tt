<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>
		{!! Html::style('../resources/assets/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
		{!! Html::style('../resources/assets/bower_components/bootstrap/dist/css/bootstrap-theme.min.css') !!}
		<!--[if lt IE 9]>
			{{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
			{{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
		<![endif]-->
		<style> textarea { resize: none; } </style>
	</head>
	<body>
		@yield('header')
		@yield('content')
		@yield('footer')
		{!! Html::script('../resources/assets/bower_components/jquery/dist/jquery.min.js') !!}
		{!! Html::script('../resources/assets/js/filtre.js') !!}
	</body>
</html>