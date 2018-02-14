<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width,initial-scale=1" />

	<!-- search meta -->
	<title> Boomy Animal Crackers </title>
	<meta name="author" content="[]" />
	<meta name="description" content="[]" />
	<meta name="keywords" content="[]" />
	<meta name="robots" contents="[]" />

	<!-- social meta -->
	<meta property='og:title' content='[]' />
	<meta property='og:type' content='[]' />
	<meta property='og:description' content='[]' />
	<meta property='og:image' content='{{ asset('assets/img/share.jpg') }}' />
	<meta property='og:url' content='[]' />
	<meta property='og:site_name' content='[]' />
	<meta name='twitter:card' content='[]' />

	<!-- styles -->
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
	<script style="javascript" src="{{ asset('assets/js/vendor/jquery.js"></scr') }}"></script>
	<script style="javascript" src="{{ asset('assets/js/vendor/what-input.js"></scr') }}"></script>
	<script style="javascript" src="{{ asset('assets/js/vendor/foundation.js"></scr') }}"></script>
	<!-- icons -->
	<link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" />
	<link rel="apple-touch-icon-precomposed" href="{{ asset('assets/img/apple-touch-icon-precomposed.png') }}" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/img/apple-touch-icon-72x72-precomposed.png') }}" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/img/apple-touch-icon-114x114-precomposed.png') }}" />

	<!-- head scripts -->
    <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>
<body>
    @include('_layouts/components/nav')
	<main>
    	@yield('page-content')
	</main>
    @include('_layouts/components/footer')
</body>
</html>