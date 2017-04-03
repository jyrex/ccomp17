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
                    <a href="{{ url('/team/create') }}" class="btn-large-blue waves-effect waves-light">Masukkan data ketua</a>
                </div>
                @elseif ($anggota->count() < 3)
                <div class="row center-align">
                    <a href="{{ url('/tambah') }}" class="btn-large-blue waves-effect waves-light">Tambah anggota</a>
                </div>
                @endif
                @if (isset($anggota))
                    @foreach ($anggota as $card)
                        <div class="col l4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{ url('/'.$card->peserta->ktm) }}" alt="Anda telah mengubah NIM anda, silahkan lapor admin">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">{{ Auth::user()->tim }}</span>
                                    <ul>
                                        <li>{{ $card->peserta->NIM }}</li>
                                        <li>{{ $card->peserta->nama_lengkap }}</li>
                                        <li>{{ $card->peserta->prodi->fakultas->fakultas }}</li>
                                        <li>{{ $card->peserta->prodi->program_studi }}</li>
                                    </ul>
                                </div>
                                @if (Auth::user()->role == "admin")
                                <div class="card-action">
                                    <a href="{{ url('/team/'.$card->peserta->id.'/nama') }}" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Edit"><i class="zmdi zmdi-edit blue-text text-lighten-3"></i></a>
                                    <form action="{{ url('team/'.$card->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" id="delete-task-{{ $card->id }}" class=" btn tooltipped" data-position="top" data-delay="50" data-tooltip="Hapus">
                                            <i class="zmdi zmdi-delete zmdi-hc-2x red-text text-lighten-1"></i>
                                        </button>
                                    </form>
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