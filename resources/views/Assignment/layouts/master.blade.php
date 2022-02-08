<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}">
    @yield('css')
    
</head>
<body>
    @include('Assignment/layouts/header')

	<div class="container">
        @yield('container')
	</div>

    @include('Assignment/layouts/footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    @yield('js')
</body>
</html>