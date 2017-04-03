@extends('layouts.app')

@section('title')
Login C-Compiler 2017
@endsection

@section('addhead')
<link href="{{ url('/stylesheets/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection" />
<style type="text/css">
    .navbar-fixed {
        display: none;
    }
</style>
@endsection

@section('content')
<div class="main">
    <div class="main-content">
        <center>
            <a href="{{ url('/') }}" class="brand-logo"><img src="{{ url('img/logowhite.png') }}" alt="" class="logo"></a>
            <div class="card">
                <!--title-->
                <div class="card-content black-text"> <span class="card-title flow-text">LOGIN</span>
                    <p class="fow-text">Have An Account?</p>
                </div>
                <!--end of title-->
                <div class="garis"></div>
                <!--form login-->
                <form action="{{ url('/login') }}" method="POST" class="kanantext">
                {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12">Nama Tim
                            <input name="tim" id="tim" type="text" class="validate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">Password
                            <input name="password" id="password" type="password" class="validate">
                        </div>
                    </div>
                    <div class="row center">
                            <button class="btn-large-blue waves-effect waves-light" type="submit" style="width: 90%;">Login</button>
                        </div>
                </form>
                <!--end of form login-->
                <!--card action and button-->
                <div class="card-action center">
                    <!-- <span>Lupa password? <a href="{{ url('/password/reset') }}">Klik disini</a>! <br>  -->
                    Belum punya akun? <a href="{{ url('register') }}">Register</a>! / kembali ke <br> 
                    <a href="{{ url('/') }}"> halaman utama</a>?</span>
                   <!--  <a href="makeaccount.html" class="indigo-text">Sign Up</a>
                    <a href="" class="indigo-text">Login</a> -->
                </div>
                <!--end of card action and button-->
            </div>
        </center>
    </div>
</div>
@endsection