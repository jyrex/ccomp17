@extends('layouts.app')

@section('addhead')<link rel="stylesheet" href="{{ url('/stylesheets/admin.css') }}">
@endsection

@section('content')
<main>
    <div id="admin-edit-peserta">
        <div class="container">
            <div class="row">
                @if (!isset($anggota))
                <div class="row center-align">
                    <a href="{{ url('/team/create') }}" class="btn-large-blue waves-effect waves-light">Tambah</a>
                </div>
                @endif
                @if (isset($anggota))
                    @foreach ($anggota as $card)
                        <div class="col l4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="http://materializecss.com/images/sample-1.jpg">
                                    <span class="date">10 juni 2017</span>
                                </div>
                                <div class="card-content">
                                    <span class="card-title">{{ $card->NIM }}</span>
                                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                                </div>
                                @if (Auth::user()->role == "admin")
                                <div class="card-action">
                                    <a href="" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Edit"><i class="zmdi zmdi-edit blue-text text-lighten-3"></i></a>
                                    <a href="" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Hapus"><i class="zmdi zmdi-delete red-text text-lighten-1"></i></a>
                                </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</main>
@endsection