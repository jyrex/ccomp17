@extends('layouts.app')

@section('content')
{{ Auth::user()->lomba_diikuti }}
<!-- Main -->
<main>
    <div id="dashboard">
        <div class="container">

            <p class="title-card">Pengumuman</p>
            <ul class="collection">
            @foreach ($pengumuman as $list)
                <li class="collection-item">
                    <h5><strong>{{ $list->judul }}</strong></h5>
                    {{ $list->isi }}
                </li>
            @endforeach
            </ul>

            <p class="title-card">Timeline</p>
            <ul class="collection">
                <li class="collection-item">
                    <strong>Pendaftaran</strong>
                    <br>
                    <i class="zmdi zmdi-calendar"></i>
                    <span class="date-detail"></span>
                    <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </li>
                <li class="collection-item"><strong>Deadline proposal</strong>
                    <br>
                    <i class="zmdi zmdi-calendar"></i>
                    <span class="date-detail">23 April 2017</span>
                    <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </li>
                <li class="collection-item"><strong>Final</strong>
                    <br>
                    <i class="zmdi zmdi-calendar"></i>
                    <span class="date-detail">7 Mei 2017</span>
                    <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </li>
                <li class="collection-item"><strong>Penutupan OLC dan Pengumuman Pemenang</strong>
                    <br>
                    <i class="zmdi zmdi-calendar"></i>
                    <span class="date-detail"></span>
                    <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </li>
            </ul>

            <p class="title-card">Download</p>
            <div class="row z-depth-2">
                <div class="col l12">
                    @if (Auth::user()->lomba == 'CP')
                        <a href="{{ url('/files/Competitive_Programming.pdf') }}">
                            Competitive Programming
                        </a>
                    @elseif (Auth::user()->lomba == 'Software Dev')
                        <a href="{{ url('/files/Aplikasi.pdf') }}">
                            Software Dev
                        </a>
                    @elseif (Auth::user()->lomba == 'Line follower')
                        <a href="{{ url('') }}">
                            Line follower
                        </a>
                    @elseif (Auth::user()->lomba == 'Data Mining')
                        <a href="{{ url('') }}">
                            Data Mining
                        </a>
                    @elseif (Auth::user()->lomba == 'UI/UX')
                        <a href="{{ url('/files/UIUX_web.pdf') }}">
                            UI/UX
                        </a>
                    @elseif (Auth::user()->lomba == 'Embedded System')
                        <a href="{{ url('') }}">
                            Embedded System
                        </a>
                    @endif
                </div>
            </div>

            <p class="title-card">Kontak</p>
            <div class="row z-depth-2">
                <div class="col l6">
                    087777502622 (Jodis)
                </div>
                <div class="col l6">
                    085728658827 (Salma)
                </div>
            </div>
        </div>
    </div>

</main>
<!-- End of Main -->
@endsection