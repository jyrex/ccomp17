@extends('layouts.app')

@section('addhead')<link rel="stylesheet" href="{{ url('/stylesheets/admin.css') }}">
@endsection

@section('content')
<main>
    <div id="admin-edit-peserta">
        <div class="container">
            <div class="row">
                @if (!isset($anggota) || $anggota->count() < 3)
                <div class="row center-align">
                    <a href="{{ url('/team/create') }}" class="btn-large-blue waves-effect waves-light">Tambah</a>
                </div>
                @endif
                @if (isset($anggota))
                    @foreach ($anggota as $card)
                        <div class="col l4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{ url('/uploads/ktm/'.$card->NIM) }}">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">{{ Auth::user()->tim }}</span>
                                    <ul>
                                        <li>{{ $card->peserta->nama_lengkap }}</li>
                                        <li>{{ $card->peserta->prodi->fakultas->fakultas }}</li>
                                        <li>{{ $card->peserta->prodi->program_studi }}</li>
                                    </ul>
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