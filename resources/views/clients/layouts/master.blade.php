<!DOCTYPE html>
<html lang="en">

<head>
	<title>@yield('title', 'Home')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	@include('clients.layouts.partials.css')

</head>

<body>

	<div class="site-wrap">
		<header class="site-navbar" role="banner">
            @include('clients.layouts.partials.header-top')
			
            @include('clients.layouts.partials.header-nav')
		</header>

		@yield('content')

		<footer class="site-footer border-top">

            @include('clients.layouts.partials.footer')

		</footer>
	</div>

    @include('clients.layouts.partials.js')

</body>

</html>