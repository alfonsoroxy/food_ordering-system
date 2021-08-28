<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title> -->

        <!-- Fonts -->
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->

        <!-- Styles -->
        <!-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> -->

        <!-- Scripts -->
        <!-- <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>EYBI SILOG</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset('frontend/images/favicon.png') }}" type="image/x-icon">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/access/css/bootstrap.min.css') }}">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/access/css/fontawesome-all.min.css') }}">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/access/font/flaticon.css') }}">
	<!-- Google Web Fonts -->
	<link href="{{ url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap') }}" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/access/style.css') }}">
  @livewireStyles
</head>

<body>
  <!-- *** Main Content Starts *** -->
  {{$slot}}
  <!-- *** Main Content Ends *** -->

	<!-- jquery-->
	<script src="{{ asset('frontend/access/js/jquery-3.5.0.min.js') }}"></script>
	<!-- Popper js -->
	<script src="{{ asset('frontend/access/js/popper.min.js') }}"></script>
	<!-- Bootstrap js -->
	<script src="{{ asset('frontend/access/js/bootstrap.min.js') }}"></script>
	<!-- Imagesloaded js -->
	<script src="{{ asset('frontend/access/js/imagesloaded.pkgd.min.js') }}"></script>
	<!-- Validator js -->
	<script src="{{ asset('frontend/access/js/validator.min.js') }}"></script>
	<!-- Custom Js -->
	<script src="{{ asset('frontend/access/js/main.js') }}"></script>
  @livewireScripts

</body>
</html>
