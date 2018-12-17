</!DOCTYPE html>
<html>
<head>

	<title>@yield('title')</title>
	<link rel="stylesheet" href="/css/normalize.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
				<a href="/assignments">All Assignments</a>
			</nav>
		</div>


	</header>


	@yield('content')
{{-- <script type="text/javascript" src="/js/materialize.min.js"></script> --}}
</body>
</html>