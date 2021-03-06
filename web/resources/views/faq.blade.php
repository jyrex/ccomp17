@extends('layouts.app')

@section('addhead')
<link href="{{ url('/css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection" />
@endsection

@section('content')
<div id="FAQ">
    <div class="container">
        <div class="faq">
            <div class="row">
                <div class="col l6 s12">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header">
                                <strong><span>Q</span> : Kak, apakah ada pembagian kategori di lomba menggambar Crayon 9?</strong>
                                <i class="zmdi zmdi-plus"></i>
                                <i class="zmdi zmdi-minus"></i>
                            </div>
                            <div class="collapsible-body">
                                <p>Ada. lomba menggambar dibagi menjadi 2 kategori, kategori A untuk peserta kelas 1-3 SD, dan kategori B untuk kelas 4-6 SD.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col l6 s12">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header">
                                <strong><span>Q</span> : Kak, Crayon 9 cuma lomba menggambar aja ya?</strong>
                                <i class="zmdi zmdi-plus"></i>
                                <i class="zmdi zmdi-minus"></i>
                            </div>
                            <div class="collapsible-body">
                                <p>Acara utama Crayon 9 memang lomba menggambar menggunakan komputer. Namun, Crayon 9 memiliki beberapa acara sampingan, seperti: Lomba Mengetik (Tux Type), Lomba Menghitung (Tux Math), Virtual Reality: Oculus Rift, dsb. Acara sampingan ini juga dilombakan lho. Jadi ada hadiah berupa souvenir. Ikutan ya.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="faq">
            <div class="row">
                <div class="col l6 s12">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header">
                                <strong><span>Q</span> : Kak, apakah komputer untuk menggambar sudah disediakan panitia, dan apakah boleh membawa komputer/perangkat sendiri?</strong>
                                <i class="zmdi zmdi-plus"></i>
                                <i class="zmdi zmdi-minus"></i>
                            </div>
                            <div class="collapsible-body">
                                <p>Komputer sudah disediakan panitia. Perangkat lain yang boleh dibawa sendiri hanya mouse.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col l6 s12">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header">
                                <strong><span>Q</span> : Kak, dari biaya pendaftaran sebesar Rp 40.000 itu, kita dapat apa aja?</strong>
                                <i class="zmdi zmdi-plus"></i>
                                <i class="zmdi zmdi-minus"></i>
                            </div>
                            <div class="collapsible-body">
                                <p>Fasilitas yang nantinya didapatkan peserta dari biaya pendaftaran antara lain snack box, makan siang (McDonald), CD aplikasi (Tux Paint, Tux Type, dan Tux math), sertifikat, dan goodie bag (250 pendaftar pertama).</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="faq">
            <div class="row">
                <div class="col l6 s12">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header">
                                <strong><span>Q</span> : Kak, pemenangnya dapat hadiah apa ya?</strong>
                                <i class="zmdi zmdi-plus"></i>
                                <i class="zmdi zmdi-minus"></i>
                            </div>
                            <div class="collapsible-body">
                                <p>Untuk masing-masing kategori, 3 terbaik akan mendapatkan sertifikat, souvenir, dan uang pembinaan sebesar: Juara 1 Rp 600.000, Juara 2 Rp 400.000, dan Juara 3 Rp 200.000.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col l6 s12">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header">
                                <strong><span>Q</span> : Kak, apakah pendaftaran bisa melalui ibu/bapak guru?</strong>
                                <i class="zmdi zmdi-plus"></i>
                                <i class="zmdi zmdi-minus"></i>
                            </div>
                            <div class="collapsible-body">
                                <p>Bisa. Kakak-kakak panitia nantinya akan membagikan poster beserta formulir pendaftaran bersama, untuk setiap sekolah di area Yogyakarta. Apabila sekolah adik belum mendapatkan formulir, bisa menghubungi kontak yang telah tersedia agar kakak-kakak panitia tahu dan membantu sekolah adik-adik.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="faq" style="margin-bottom: 100px;">
            <div class="row">
                <div class="col l6 offset-l3 s12">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header">
                                <strong><span>Q</span> : Kak, jika ingin mendaftar langsung, h</strong>
                                <i class="zmdi zmdi-plus"></i>
                                <i class="zmdi zmdi-minus"></i>
                            </div>
                            <div class="collapsible-body">
                                <p> Untuk pendaftaran langsung di selasar gedung S1 FMIPA UGM, hanya perlu membawa biaya pendaftaran saja.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-script')
<script src="{{ asset('js/faq.js') }}"></script>
@endsection