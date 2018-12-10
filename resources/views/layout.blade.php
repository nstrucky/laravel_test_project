</!DOCTYPE html>
<html>
<head>

	<title>@yield('title')</title>
	{{-- <link href="https://fonts.googleapis.com/css?family=Karla|Lato" rel="stylesheet"> --}}
	{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.4/css/bulma.min.css"> --}}

	<link rel="stylesheet" href="/css/normalize.css">

	 {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --}}
      <!--Import materialize.css-->
      {{-- <link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/> --}}

      <!--Let browser know website is optimized for mobile-->
      {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"/> --}}
	<meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="/css/bulma.css">
    	<link rel="stylesheet" href="/css/app.css">
</head>
<body>

	<header>
		<div class="container">
			<div class="header-top">
				<h1 class="title">School Admin Site</h1>
				<a href="#">Sign In</a>
			</div>

			<nav class="hero-buttons">

				<a href="/">Home Page</a>
				<a href="/about">About Us</a>
				<a href="/contacts">Contact</a>
				<a href="/students">Students</a>
			</nav>
		</div>


	</header>


	@yield('content')
{{-- <script type="text/javascript" src="/js/materialize.min.js"></script> --}}
</body>
</html>