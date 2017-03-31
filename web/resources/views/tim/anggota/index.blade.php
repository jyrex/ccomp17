@extends('layouts.app')

@section('addhead')<link rel="stylesheet" href="{{ url('/stylesheets/admin.css') }}">
@endsection

@section('content')
<main>
    <div id="admin-edit-peserta">
        <div class="container">
            <div class="row">
                <div class="row center-align">
                    <button class="btn-large-blue waves-effect waves-light" name="action"><a href="{{ url('/team/create') }}">Tambah</a></button>
                </div>
                <div class="col l4">
                    <div class="card">
                        <div class="card-image">
                            <img src="http://materializecss.com/images/sample-1.jpg">
                            <span class="date">10 juni 2017</span>
                        </div>
                        <div class="card-content">
                            <span class="card-title">Card Title</span>
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Edit"><i class="zmdi zmdi-edit blue-text text-lighten-3"></i></a>
                            <a href="" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Hapus"><i class="zmdi zmdi-delete red-text text-lighten-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col l4">
                    <div class="card">
                        <div class="card-image">
                            <img src="http://materializecss.com/images/sample-1.jpg">
                            <span class="date">10 juni 2017</span>
                        </div>
                        <div class="card-content">
                            <span class="card-title">Card Title</span>
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Edit"><i class="zmdi zmdi-edit blue-text text-lighten-3"></i></a>
                            <a href="" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Hapus"><i class="zmdi zmdi-delete red-text text-lighten-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col l4">
                    <div class="card">
                        <div class="card-image">
                            <img src="http://materializecss.com/images/sample-1.jpg">
                            <span class="date">10 juni 2017</span>
                        </div>
                        <div class="card-content">
                            <span class="card-title">Card Title</span>
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Edit"><i class="zmdi zmdi-edit blue-text text-lighten-3"></i></a>
                            <a href="" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Hapus"><i class="zmdi zmdi-delete red-text text-lighten-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <a href="" class="black-text">
                    <p><i class="zmdi zmdi-arrow-left"></i> Kembali </p>
                </a>
            </div>
        </div>
    </div>
</main>
@endsection