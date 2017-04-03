@extends('layouts.app')

@section('addhead')<link href="{{ url('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection" />
@endsection

@section('content')
<div class="bg-kategori"></div>
<div id="aplikasi" class="detail-kategori">
    <div class="container">
        <div class="row">
            <div class="isi-kategori">
                <div class="col l12 s12 center">
                    <!-- Dropdown Trigger -->
                    <div>
                        <h5>
                            <a class='dropdown-button' href='#' data-activates='dropdown1'>Data Mining <i class="zmdi zmdi-chevron-down"></i></a>
                        </h5>
                    </div>
                    <div class="separator">
                        <img src="img/hr.png" alt="">
                    </div>
                </div>
                <div class="col l12 s12">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header active "><strong>Deskripsi Lomba</strong></div>
                            <div class="collapsible-body">
                                <p>
                                    Lomba pengembangan aplikasi merupakan lomba yang menguji kemampuan mahasiswa dalam mengembangkan ide, kreativitas, dan solusi dalam menyelesaikan berbagai permasalahan di Indonesia. Tim peserta diharapkan mengembangkan aplikasi yang memiliki dampak positif masyarakat. Dampak tersebut harus ditunjukkan tidak saja dalam bentuk argumentasi untuk ide, tetapi ditunjang dengan data. Artinya, perangkat lunak yang dikembangkan harus sudah dioperasikan sampai level tertentu, sehingga dampaknya dapat diukur.
                                </p>
                                <p>
                                    Domain problem yang diselesaikan antara lain, tetapi tidak terbatas pada, pendidikan, kesehatan, sosial budaya, pertanian dan kelautan, kepariwisataan, sumber daya alam.
                                </p>
                                </span>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><strong>Kriteria Penilaian</strong></div>
                            <div class="collapsible-body">
                                <span>
                                <ol>
                                    <li>Kesesuaian dengan temba lomba: “Redefine Life Through Digital Applications”</li>
                                    <li>Originalitas</li>
                                    <li>Relevansi dengan masalah yang ada</li>
                                    <li>Dampak yang diberikan kepada masyarakat</li>
                                    <li>Fungsionalitas</li>
                                    <li>Sustainability implementasi aplikasi</li>
                                    <li>Kualitas rancangan dan implementasi</li>
                                    <li>Kemampuan presentasi dan menjawab pertanyaan juri</li>
                                </ol>
                            </span>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><strong>Persyaratan Peserta</strong></div>
                            <div class="collapsible-body">
                                <span>
                            <ol>
                                <li>Peserta adalah mahasiswa program diploma atau sarjana di Universitas Gadjah Mada masih berstatus resmi sebagai mahasiswa angkatan 2014, 2015 dan 2016.</li>
                                <li>Peserta berkelompok/tim, terdiri atas maksimum 3 orang mahasiswa dan dipimpin oleh seorang ketua tim.</li>
                                <li>Seorang peserta diperbolehkan menjadi bagian dari beberapa tim, tetapi hanya boleh menjadi ketua di salah satu tim dalam seluruh kegiatan perlombaan C-Compiler 2017. (Tidak boleh menjabat sebagai ketua di lebih dari satu tim).</li>
                                <li>Pendaftaran peserta dan keikutsertaan peserta tidak dikenakan biaya.</li>
                                <li>Peserta yang tidak memenuhi syarat dinyatakan gugur tanpa pemberitahuan.</li>
                            </ol>    
                        </span>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><strong>Persyaratan Karya</strong></div>
                            <div class="collapsible-body">
                                <span>
                            <ol>
                                <li>Karya perangkat lunak dapat dikembangkan di atas platform mobile, desktop maupun web.</li>
                                <li>Karya dan ide yang dikembangkan adalah asli dari peserta, dan dapat dibuktikan saat presentasi final.</li>
                                <li>Karya perangkat lunak yang disertakan belum pernah memenangkan kejuaraan (baik juara 1, 2, 3 ataupun harapan) pada lomba lain, baik di tingkat universitas, nasional maupun internasional.</li>
                            </ol>    
                        </span>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><strong>Tahapan Lomba</strong></div>
                            <div class="collapsible-body">
                                <span>
                            <ol>
                                <li>Tahap Pendaftaran dan pengiriman proposal (23 April 2017)</li>
                                    <ol class="second-list">
                                        <li>Peserta mendaftarkan timnya melalui c-compiler.mipa.ugm.ac.id dengan mengisikan nama tim, data anggota tim, dan data ketua tim, dan softcopy hasil scan kartu mahasiswa.</li>
                                        <li>Peserta yang berhasil mendaftar akan mendapatkan account untuk login ke online submission system (sistem pengiriman deliverable lomba secara online)</li>
                                        <li>Peserta mengirimkan proposal Pengembangan Aplikasi melalui online submission system (sistem pengiriman deliverable lomba secara online, yang dapat diakses melalui http://c-compiler.mipa.ugm.ac.id.</li>
                                        <li>Format penulisan proposal bebas, namun panitia memberikan guidelines sebagai berikut : lembar judul, abstraksi, daftar isi, latar belakang, tujuan dan manfaat, target pengguna, deskripsi teknologi yang digunakan (platform pengembangan, library eksternal yang digunakan, sistem operasi, dan sebagainya), keterkaitan dengan tema, analisis dan desain, screenshot mockup, dokumentasi penggunaan.</li>
                                        <li>Naskah proposal dapat ditulis semenarik mungkin, maksimum 30 halaman. Lembar halaman menggunakan lembar A4.</li>
                                    </ol>
                                <li>Pengumuman proposal yang lolos (29 April 2017)</li>
                                <li>Pengiriman source code dan prototype aplikasi (1 Mei 2017)</li>
                                    <ol class="second-list">
                                        <li>Peserta harus mengirimkan source code, aplikasi yang telah tercompile, serta screenshot aplikasi dari aplikasi yang dibuat kepada panitia.</li>
                                        <li>Prototype aplikasi yang dibuat minimal mencakup 80% dari fitur – fitur yang dimuat dalam proposal.</li>
                                        <li>Peserta harus mengirimkan langkah-langkah instalasi hingga aplikasidapat running.</li>
                                    </ol>
                                <li>Pengumuman Finalis (8 April 2017)</li>
                                    <ol class="second-list">
                                        <li>Tim terbaik akan dipilih untuk mengikuti babak final.</li>
                                        <li>Tim yang lolos ke babak final diharapkan dapat menyempurnakan prototype aplikasinya menjadi aplikasi yang sudah jadi dan siap digunakan.</li>
                                        <li>Wajib: Tim yang lolos ke final wajib mengirimkan video aplikasi yang telah jadi kepada panitia melalui Youtube. Durasi video maksimal 10 menit. Video harus menyajikan mengapa perangkat lunak tersebut harus Link video dikirim ke panitia paling lambat tanggal [tgl] [bln] 2017 pada pukul 23.59 WIB. Tata cara pengumpulan link video akan diberitahukan panitia kepada masing-masing finalis. Bagi tim yang tidak berhasil mengumpulkan video akan didiskualifikasi.</li>
                                    </ol>
                                <li>Babak Final (13 April 2017)</li>
                                <li>Mekanisme Babak Final C-Compiler bidang Aplikasi</li>
                                    <ol class="second-list">
                                            <li>Urutan presentasi peserta ditentukan oleh panitia secara acak. Jika pada saat giliran dipanggil, peserta yang bersangkutan belum hadir, maka akan dipindah ke urutan akhir. Jika peserta gagal hadir, maka nilai presentasi dari peserta tersebut 0.</li>
                                            <li>Laptop yang digunakan untuk menampilkan presentasi merupakan laptop pribadi peserta.</li>
                                            <li>Format presentasi bebas, boleh dalam bentuk slideshow, video, ataupun yang lainnya.</li>
                                            <li>Tiap peserta diberi waktu maksimal 20 menit, yang terdiri dari persiapan dan pergantian kelompok selanjutnya 5 menit, presentasi 10 menit, beserta sesi tanya jawab juri 5 menit.</li>
                                            <li>Tiap peserta diberi waktu maksimal 20 menit, yang terdiri dari persiapan dan pergantian kelompok selanjutnya 5 menit, presentasi 10 menit, beserta sesi tanya jawab juri 5 menit.</li>
                                    </ol>
                                <li>Adapun kriteria penilaian peserta antara lain</li>
                                <ol class="second-list">    
                                    <li>Keaslian ide</li>
                                    <li>Inovasi dan kreativitas</li>
                                    <li>Kemanfaatan dan future development</li>
                                    <li>Kualitas implementasi dan sustainability-nya</li>
                                    <li>Kesesuaian dengan temba lomba: “Redefine Life Through Digital Applications”</li>              
                                    <li>Relevansi dengan masalah yang ada</li>
                                    <li>Dampak yang diberikan kepada masyarakat</li>
                                    <li>Kemampuan presentasi dan menjawab pertanyaan juri</li>
                                </ol>
                            </ol>    
                        </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection