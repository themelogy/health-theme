<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
<head>
	@yield('title')
	@include('partials/metadata')
	<meta name="csrf_token" content="{{ csrf_token() }}" />
</head>

<body>

@include('appointment::widgets.form')

<div class="layout-theme animated-css" data-header="sticky" data-header-top="200">

    @include('partials/header')

    @yield('content')

    @stack('footer-top')

    @include('partials/footer')
</div>
<!-- end layout-theme -->

<span class="scroll-top bg-color_second"> <i class="fa fa-angle-up"> </i></span>


@include('partials/scripts')

</body>
</html>
