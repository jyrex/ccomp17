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
            @if (Auth::user()->lomba == 'CP')
                <ul class="collection">
                    <li class="collection-item">
                        <strong>Sesi Pemanasan</strong>
                        <br>
                        <i class="zmdi zmdi-calendar"></i>
                        <span class="date-detail">28 April 2017</span>
                    </li>
                    <li class="collection-item"><strong>Sesi Kualifikasi</strong>
                        <br>
                        <i class="zmdi zmdi-calendar"></i>
                        <span class="date-detail">29 April 2017</span>
                    </li>
                    <li class="collection-item">
                        <strong>Sesi Final</strong>
                        <br>
                        <i class="zmdi zmdi-calendar"></i>
                        <span class="date-detail">5 Mei 2017</span>
                    </li>
                </ul>
            @elseif (Auth::user()->lomba == 'Software Dev')
                <ul class="collection">
                    <li class="collection-item">
                        <strong>Deadline proposal</strong>
                        <br>
                        <i class="zmdi zmdi-calendar"></i>
                        <span class="date-detail">23 April 2017</span>
                    </li>
                    <li class="collection-item">
                        <strong>Pengumuman Finalis</strong>
                        <br>
                        <i class="zmdi zmdi-calendar"></i>
                        <span class="date-detail">29 April 2017</span>
                    </li>
                    <li class="collection-item">
                        <strong>Pengumpulan Video</strong>
                        <br>
                        <i class="zmdi zmdi-calendar"></i>
                        <span class="date-detail">11 Mei 2017 </span>
                    </li>
                    <li class="collection-item">
                        <strong>Sesi Final</strong>
                        <br>
                        <i class="zmdi zmdi-calendar"></i>
                        <span class="date-detail">13 Mei 2017</span>
                    </li>
                </ul>
            @elseif (Auth::user()->lomba == 'Line follower')
                <ul class="collection">
                    <li class="collection-item">
                        <strong>TM Lomba</strong>
                        <br>
                        <i class="zmdi zmdi-calendar"></i>
                        <span class="date-detail">5 Mei 2017</span>
                    </li>
                    <li class="collection-item">
                        <strong>Sesi final</strong>
                        <br>
                        <i class="zmdi zmdi-calendar"></i>
                        <span class="date-detail">1 Februari 2017 - 15 Maret 2017</span>
                    </li>
                </ul>
            @elseif (Auth::user()->lomba == 'Data Mining')
                <ul class="collection">
                    <li class="collection-item">
                        <strong>Submit jawaban dan seleksi</strong>
                        <br>
                        <i class="zmdi zmdi-calendar"></i>
                        <span class="date-detail">28 April 2017</span>
                    </li>
                    <li class="collection-item">
                        <strong>Pengumuman finalis</strong>
                        <br>
                        <i class="zmdi zmdi-calendar"></i>
                        <span class="date-detail">4 Mei 2017</span>
                    </li>
                    <li class="collection-item">
                        <strong>Sesi Final</strong>
                        <br>
                        <i class="zmdi zmdi-calendar"></i>
                        <span class="date-detail">13 Mei 2017</span>
                    </li>
                </ul>
            @elseif (Auth::user()->lomba == 'UI/UX')
                <ul class="collection">
                    <li class="collection-item">
                        <strong>Deadline Pengumpulan Design</strong>
                        <br>
                        <i class="zmdi zmdi-calendar"></i>
                        <span class="date-detail">30 April 2017</span>
                    </li>
                    <li class="collection-item"><strong>Deadline sourcecode, Pengumuman finalis</strong>
                        <br>
                        <i class="zmdi zmdi-calendar"></i>
                        <span class="date-detail">8 Mei 2017</span>
                    </li>
                    <li class="collection-item"><strong>Sesi Final</strong>
                        <br>
                        <i class="zmdi zmdi-calendar"></i>
                        <span class="date-detail">  13 Mei 2017 </span>
                    </li>
                    <li class="collection-item"><strong>Penutupan C-Compiler dan Pengumuman Pemenang</strong>
                </ul>
            @elseif (Auth::user()->lomba == 'Embedded System')
                <ul class="collection">
                    <li class="collection-item"><strong>Deadline proposal</strong>
                        <br>
                        <i class="zmdi zmdi-calendar"></i>
                        <span class="date-detail">23 April 2017</span>
                    </li>
                    <li class="collection-item"><strong>Final</strong>
                        <br>
                        <i class="zmdi zmdi-calendar"></i>
                        <span class="date-detail">7 Mei 2017</span>
                    </li>
                </ul>
            @endif

            <p class="title-card">Download</p>
            <div class="row z-depth-2">
                <div class="col l12">
                    @if (Auth::user()->lomba == 'CP')
                        <a href="{{ url('/files/cp.pdf') }}">
                            Competitive Programming
                        </a>
                    @elseif (Auth::user()->lomba == 'Software Dev')
                        <a href="{{ url('/files/aplikasi.pdf') }}">
                            Software Dev
                        </a>
                    @elseif (Auth::user()->lomba == 'Line follower')
                        <a href="{{ url('/files/linefollower.docx') }}">
                            Line follower
                        </a>
                    @elseif (Auth::user()->lomba == 'Data Mining')
                        <a href="{{ url('/files/datamining.docx') }}">
                            Data Mining
                        </a>
                    @elseif (Auth::user()->lomba == 'UI/UX')
                        <a href="{{ url('/files/uiux.pdf') }}">
                            UI/UX
                        </a>
                    @elseif (Auth::user()->lomba == 'Embedded System')
                        <a href="{{ url('embedded.txt') }}">
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