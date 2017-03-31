<!DOCTYPE html>
<html lang="en">
<head>
   
@include('layouts.head')

</head>
<body>
@if (Auth::check())
	@include('layouts.dashboard')
@else
	@include('layouts.navbar')
@endif

@yield('content')

@include('layouts.footer')

@include('layouts.scripts')

</body>
</html>
