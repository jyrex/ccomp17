@extends('layouts.app')

@section('addhead')
<link href="{{ url('/css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection" />
@endsection

@section('content')
<!-- homepage -->
<div class="homepage">
    <!-- homepage content--> 
        <div class="homepage-text cf"> 
            <div class="section no-pad-bot" id="index-banner"> 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col l12 s12"> 
                            <h3 class="header center">C-Compiler UGM 2017</h3> 
                        </div> 
                        <div class="col l12 s12 center"> 
                            <div class="header-text"> 
                                <h5 class="light">Competition of Computer Science and Electronics Student</h5> 
                                <p class="light"><i>Beyond the future</i></p> 

                                <a href="#kompetisi" class="btn waves-effect waves-light amber lighten-2">Daftar</a> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 
<!-- end of homepage content --> 
</div>
<!-- end of homepage-->

<!-- organisasi -->
<div class="organisasi">
    <div class="container">
        <div class="section">
            <div class="row center">
                <div class="col l4 m4 s4">
                    <a href="http://himakom.ugm.ac.id/"><img src="img/logobaru/himakom.png" alt="" class="logo-organisasi responsive-img">
                    </a>
                </div>
                <div class="col l4 m4 s4">
                    <a href="http://omahti.web.id/">
                        <img src="img/logobaru/oti.png" alt="" class="logo-organisasi responsive-img">
                    </a>
                </div>
                <a href="https://www.instagram.com/hmeiugm/">
                    <div class="col l4 m4 s4">
                        <img src="img/logobaru/hmei.png" alt="" class="logo-organisasi responsive-img">
                </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of organisasi -->

<!-- about -->
<div class="about">
    <div class="container">
        <div class="section">
            <div class="row center">
                <!--                    <h6 class="title">ABOUT</h6>-->
                <h5 class="caption light">About</h5>
                <div class="separator">
                    <img src="img/hr.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col l6 s12 light">
                    <!--                        <strong><p class="text-blue">Lorem Ipsum</p></strong>-->
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque atque in beatae voluptates consequatur deserunt alias ullam assumenda, iusto quia impedit eius deleniti, cupiditate ab harum quibusdam. Nemo, quod, deleniti?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque atque in beatae voluptates consequatur deserunt alias ullam assumenda, iusto quia impedit eius deleniti,
                    </p>
                </div>
                <div class="col l6 s12">
                    <div class="video-container">
                        <iframe width="853" height="480" src="https://www.youtube.com/embed/OJTj3K5a6Uw" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of about -->

<!-- kompetisi -->
<div id="kompetisi" class="kompetisi">
    <div class="container">
        <div class="section">
            <div class="row center">
                <!--                    <h6 class="title">KOMPETISI</h6>-->
                <h5 class="caption light">Kompetisi</h5>
                <div class="separator">
                    <img src="img/hr.png" alt="">
                </div>
            </div>
            <!-- Icon Section with Modal Trigger -->
            <div class="row">
               <a class="modal-trigger" href="#modal1">
                    <div class="col s12 m4">
                        <div class="card-panel hoverable">
                            <div class="icon-block center">
                                <img src="img/kompetisi/5.png" alt="">
                                <h5 class="light">Embedded<br>System</h5>
                            </div>
                        </div>
                    </div>
                </a>
               <a class="modal-trigger" href="#modal2">
                    <div class="col s12 m4">
                        <div class="card-panel hoverable">
                            <div class="icon-block center">
                                <img src="img/kompetisi/3.png" alt="">
                                <h5 class="light">Competitive <br> Programming</h5>
                            </div>
                        </div>
                    </div>
                </a>
               <a class="modal-trigger" href="#modal3">
                    <div class="col s12 m4">
                        <div class="card-panel hoverable">
                            <div class="icon-block center">
                                <img src="img/kompetisi/6.png" alt="">
                                <h5 class="light">UI/UX <br> Design</h5>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="modal-trigger" href="#modal4">
                    <div class="col s12 m4">
                        <div class="card-panel hoverable">
                            <div class="icon-block center">
                                <img src="img/kompetisi/1.png" alt="">
                                <h5 class="light">Line <br> Follower</h5>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="modal-trigger" href="#modal5">
                    <div class="col s12 m4">
                        <div class="card-panel hoverable">
                            <div class="icon-block center">
                                <img src="img/kompetisi/4.png" alt="">
                                <h5 class="light">Data <br> Mining</h5>
                            </div>
                        </div>
                    </div>
                </a>
               <a class="modal-trigger" href="#modal6">
                    <div class="col s12 m4">
                        <div class="card-panel hoverable">
                            <div class="icon-block center">
                                <img src="img/kompetisi/2.png" alt="">
                                <h5 class="light">Software <br> Development</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <br>
    <br>
</div>
<!-- end of kompetisi -->

<!-- timeline -->
<div class="timeline">
    <div class="container">
        <div class="section">
            <div class="row center">
                <h5 class="caption light">Timeline</h5>
                <div class="separator">
                    <img src="img/hr.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col offset-s1 s10 ">
                    <ul class="tabs z-depth-1" style="background-color: #f4fafa;">
                        <li class="tab col s2"><a class="active" href="#test1">Embedded</a></li>
                        <li class="tab col s2"><a href="#test2">CP</a></li>
                        <li class="tab col s2"><a href="#test3">UI/UX</a></li>
                        <li class="tab col s2"><a href="#test4">Line Follower</a></li>
                        <li class="tab col s2"><a href="#test5">Data Mining</a></li>
                        <li class="tab col s2"><a href="#test6">Software Dev</a></li>
                    </ul>
                </div>
                <div id="test1" class="col s12">
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
                </div>
                <div id="test2" class="col s12">
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
                </div>
                <div id="test3" class="col s12">
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
                    </ul>
                </div>
                <div id="test4" class="col s12">
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
                </div>
                <div id="test5" class="col s12">
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
                </div>
                <div id="test6" class="col s12">
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of timeline -->

<!-- last -->
<div class="last">
    <div class="container">
        <div class="row center">
            <div class="col l12">
                <div class="row"> 
                    <div class="col l12 s12"> 
                        <h4 class="light">C-Compiler UGM 2017</h4> 
                    </div> 
                    <div class="col l12 s12 center"> 
                        <div class="header-text"> 
                            <h5 class="light">Competition of Computer Science and Electronics Student</h5> 
                            <p class="light"><i>Beyond the future</i></p> 

                            <a href="{{ url('/register') }}" class="btn waves-effect waves-light amber lighten-2">Daftar</a> 
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of last -->

<!-- Modal Structure -->

<!-- Modal 1 -->
<div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>Embedded System</h4>
        <p>Piranti cerdas (smart device) adalah sebuah hasil karya teknologi yang bekerja secara interaktif dan otomatis 
        serta mampu memberikan suatu solusi bagi permasalahan sehari-hari.</p>
        <p>Sementara itu Embedded system adalah sebua piranti keras (hardware) 
        yang bekerja berdasarkan perintah dari piranti lunak (software) dan didesain memiliki tujuan dan fungsi yang spesifik.</p> 
        <p>Dengan menggabungkan konsep piranti cerdas dan embedded system, maka diharapkan dapat terciptanya sebuah sistem kompleks memiliki kualitas yang baik. Dilengkapi dengan antarmuka yang baik dan penggunaan sensor sebagai input dari keadaan lingkungan, piranti cerdas dapat bekerja secara efisien dan memberikan manfaat yang besar bagi lingkungan dan masyarakat.</p>
    </div>
    <div class="modal-footer">
        <a href="{{ url('/register') }}" class="modal-action modal-close waves-effect waves-green btn-flat ">Daftar</a>
        <a href="{{ url('/embedded') }}" class="modal-action modal-close waves-effect waves-green btn-flat ">Selengkapnya</a>
    </div>
</div>
<!-- end of Modal 1 -->

<!-- Modal 2 -->
<div id="modal2" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>Competitive Programming</h4>
        <p>A bunch of text Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex ipsam odio placeat, voluptatem laboriosam totam, sint tenetur blanditiis ad libero sequi quis alias consequatur nobis corporis repellat autem beatae, vitae.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat doloribus cumque quisquam impedit similique consectetur alias a, distinctio laudantium. Saepe illo quod, cum aliquam corporis ea qui accusamus recusandae nemo.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil nobis incidunt totam accusamus veniam illum enim eveniet ipsum nam, adipisci inventore repudiandae doloribus, natus suscipit commodi eum corrupti tempora, obcaecati.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium soluta ipsa eveniet ipsam quibusdam autem ex ea quidem reprehenderit eum. Sint, sed labore iure ea cupiditate, sapiente veritatis velit ipsum!</p>
    </div>
    <div class="modal-footer">
        <a href="{{ url('/register') }}" class="modal-action modal-close waves-effect waves-green btn-flat ">Daftar</a>
        <a href="{{ url('/cp') }}" class="modal-action modal-close waves-effect waves-green btn-flat ">Selengkapnya</a>
    </div>
</div>
<!-- end of Modal 2 -->

<!-- Modal 3 -->
<div id="modal3" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>UI/UX</h4>
        <p>Lomba desain User Interface dan User Experience (UI/UX) adalah lomba desain sistem/produk bertujuan kearah kenyamanan dan kemudahan user dalam menggunakan sistem/produk tersebut.</p>
        <p>Para peserta lomba dituntut mendesain suatu tampilan dan experience antarmuka bagi user yang baik sehingga didapat kualitas hasil sistem/produk yang memiliki nilai UI UX yg baik.</p>
        <p>Tingginya persaingan di bidang e-commerce menginspirasi tema yang akan diangkat untuk lomba ini yaitu “Simple and Fun Online Shopping”</p>
    </div>
    <div class="modal-footer">
        <a href="{{ url('/register') }}" class="modal-action modal-close waves-effect waves-green btn-flat ">Daftar</a>
        <a href="{{ url('/uiux') }}" class="modal-action modal-close waves-effect waves-green btn-flat ">Selengkapnya</a>
    </div>
</div>
<!-- end of Modal 3 -->

<!-- Modal 4 -->
<div id="modal4" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>Line Follower</h4>
        <p>Lomba Robot Line Follower kali ini yaitu lomba dimana robot mengikuti garis yang sudah disiapkan pada sebuah track dengan rintangan tertentu dengan tujuan akhir memadamkan api pada lilin.!</p>
    </div>
    <div class="modal-footer">
        <a href="{{ url('/register') }}" class="modal-action modal-close waves-effect waves-green btn-flat ">Daftar</a>
        <a href="{{ url('/linefollower') }}" class="modal-action modal-close waves-effect waves-green btn-flat ">Selengkapnya</a>
    </div>
</div>
<!-- Modal 4 -->

<!-- Modal 5 -->
<div id="modal5" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>Data Mining</h4>
        <p>Data mining adalah proses untuk mencari pola dari suatu data set besar yang melibatkan metode yang merupakan bagian dari artificial inteligence, machine learning, statistics, dan database system.</p>
        <p>Tujuan utama dari data mining adalah untuk mengambil informasi dari data set dan merubahnya ke struktur yang bisa dimengerti.</p>
        <p>Di era modern ini tersedia banyak sekali data baik yang confidental maupun yang widely available. Data data tersebut menunggu ahli data mining untuk memanfaatkannya</p>
    </div>
    <div class="modal-footer">
        <a href="{{ url('/register') }}" class="modal-action modal-close waves-effect waves-green btn-flat ">Daftar</a>
        <a href="{{ url('/datamining') }}" class="modal-action modal-close waves-effect waves-green btn-flat ">Selengkapnya</a>
    </div>
</div>
<!-- end of Modal 5 -->

<!-- Modal 6 -->
<div id="modal6" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>Software Development</h4>
        <p>Lomba pengembangan aplikasi merupakan lomba yang menguji kemampuan mahasiswa dalam mengembangkan ide, kreativitas, dan solusi dalam menyelesaikan berbagai permasalahan di Indonesia.</p>
        <p>Peserta diharapkan mengembangkan aplikasi yang memiliki dampak positif masyarakat. Dampak tersebut harus ditunjukkan tidak saja dalam bentuk argumentasi untuk ide, tetapi ditunjang dengan data. Artinya, perangkat lunak yang dikembangkan harus sudah dioperasikan sampai level tertentu, sehingga dampaknya dapat diukur.</p>
        <p>Domain problem yang diselesaikan antara lain, tetapi tidak terbatas pada, pendidikan, kesehatan, sosial budaya, pertanian dan kelautan, kepariwisataan, sumber daya alam</p>
    </div>
    <div class="modal-footer">
        <a href="{{ url('/register') }}" class="modal-action modal-close waves-effect waves-green btn-flat ">Daftar</a>
        <a href="{{ url('/aplikasi') }}" class="modal-action modal-close waves-effect waves-green btn-flat ">Selengkapnya</a>
    </div>
</div>
<!-- end of Modal 6 -->

<!-- end of Modal -->

<!-- landing popup -->
<div id="modal-pengumuman" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>Pengumuman</h4>
        @foreach ($pengumuman as $list)
        <p>{{ $list->judul }}</p>
        <p>{{ $list->isi }}</p>
        @endforeach
    </div>
    <div class="modal-footer">
        <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat ">Tutup</a>
    </div>
</div>
@endsection

@section('page-script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#modal-pengumuman').modal('open');
    });
</script>
@endsection