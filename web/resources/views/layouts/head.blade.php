<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />

<title>
	@hasSection ('title')
        @yield('title')
    @else
        C-Compiler 2017
    @endif
</title>

<!-- CSS  -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="{{ url('/css/materialize.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection" />
<link rel="stylesheet" href="{{ url('/stylesheets/dashboard.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

@if(Auth::check() && Auth::user()->role == 'admin')
@include('layouts.admin')
@endif

@yield('addhead')