@extends('layouts.app')

@section('title')
Daftar C-Compiler 2017
@endsection

@section('addhead')
<link href="{{ url('/css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection" />
@endsection

@section('content')
<div id="main-register">
    <div class="main-content">
        <center>
            <a href="#" class="brand-logo"><img src="{{ url('img/logowhite.png') }}" alt="" class="logo"></a>
            <div class="card">
                <!--title-->
                <div class="card-content black-text"> <span class="card-title flow-text">REGISTER</span>
                </div>
                <!--end of title-->
                <div class="garis"></div>
                <!--form login-->
                <form method="POST" action="{{ url('/register') }}" class="kanantext">
                {{ csrf_field() }}
                    <div class="row">
                        <div class="col l6">
                            <div class="row">
                                <div class="input-field col s12">Nama TIM
                                    <input name="tim" id="tim" type="text" class="validate">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">Email
                                    <input name="email" id="email" type="email" class="validate">
                                </div>
                            </div>
                            <!-- kategori lomba -->
                            <div class="row">
                                <div class="input-field col s12">
                                    <select name="lomba_diikuti" id="lomba">
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="CP">Competitive Programming</option>
                                        <option value="Data Mining">Data Mining</option>
                                        <option value="Software Dev">Software Development</option>
                                        <option value="UI/UX">UI/UX</option>
                                        <option value="Embedded System">Embedded System</option>
                                        <option value="Line Follower">Line Follower</option>
                                    </select>
                                    <label>Kategori Lomba</label>
                                </div>
                                <!-- end of kategori lomba -->
                            </div>
                        </div>
                        <div class="col l6">
                            <div class="row">
                                <div class="input-field col s12">No HP
                                    <input name="hp" id="hp" type="text" class="validate">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">Password
                                    <input name="password" id="password" type="password" class="validate">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">Confirm Password
                                    <input name="password_confirmation" id="password-confirm" type="password" class="validate">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row center">
                        <button class="btn-large-blue waves-effect waves-light" type="submit" style="width: 60%;">Daftar</button>
                    </div>
                </form>
                <!--end of form login-->
                <!--card action and button-->
                <div class="card-action center">
                    <span>Sudah punya akun? <a href="{{ url('/login') }}">Login</a>! / kembali ke <br> 
                    <a href="{{ url('/') }}"> halaman utama</a>?</span>

                    <!-- <a href="" class="indigo-text">Login</a> -->
                </div>
                <!--end of card action and button-->
            </div>
        </center>
    </div>
</div>
@endsection

@section('page-script')
<script type="text/javascript">
 $(document).ready(function() {
    $('#lomba').material_select();
    $('#lomba').change(function() {
        $(this).val();
        $(this).material_select();
    });
  });
</script>
@endsection