@extends('layouts.app')

@section('content')
<div id="register">
    <div class="container">
        <div class="row">
            <div class="card-panel" style="display:table; padding: 0; height: 100%;">
                <div class="col l6 offset-l1" style="padding: 24px;">
                    <h5 style="color: #424242;">Anggota 1</h5>
                    <div class="row">
                        <form class="col s12" style="display: table-cell;">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="nama_anggota1" type="text" class="validate">
                                    <label for="nama_anggota1">Nama:</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="nim_anggota1" type="text" class="validate">
                                    <label for="nim_anggota1">NIM:</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="prodi_anggota1" type="text" class="validate">
                                    <label for="prodi_anggota1">Prodi:</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="fakultas_anggota1" type="text" class="validate">
                                    <label for="fakultas_anggota1">Fakultas:</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="kontak_anggota1" type="number" class="validate">
                                    <label for="kontak_anggota1">Nomor HP:</label>
                                </div>
                            </div>
                             <div class="row">
                                <div class="file-field input-field">
                                    <div class="btn waves-effect waves-light amber lighten-2" style="border-radius: 0;">
                                        <span>Upload KTM</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row right">
                                <div class="col s12">
                                   <a href="" class="btn third-btn hoverable"><i class="zmdi zmdi-chevron-left"></i> selanjutnya</a>
                                    <a href="" class="btn secondary-btn hoverable"> selanjutnya <i class="zmdi zmdi-chevron-right"></i></a>
                                </div>
                            </div>
                            
                           

                        </form>
                    </div>
                </div>
                <div class="col l4 offset-l1" style="height: 100%; position: relative; box-shadow: -3px 0 10px 0 #efefef; display: table-cell; padding-bottom: 0px; vertical-align: middle; empty-cells: show;">
                    <div class="row center" style="padding: 24px;">
                        <div class="content light">
                            <div class="col l12">
                                <div class="step-pagination" style="padding-bottom: 20px; height: 25%;">
                                    <ul class="pagination">
                                        <li class="active"><a href="#!">1</a></li>
                                        <li class="waves-effect"><a href="#!">2</a></li>
                                        <li class="waves-effect"><a href="#!">3</a></li>
                                        <li class="waves-effect"><a href="#!">4</a></li>
                                        <li class="waves-effect"><a href="#!">5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col l12">
                                <div class="main-content" style="padding-bottom: 30px; padding-top: 30px; height: 50%;">
                                   <img src="img/logo-ccomp.png" style="width: 50%;" alt=""><br>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi consequuntur aliquid dolorum voluptas veniam,
                                    </p>
                                </div>
                            </div>
                            <div class="col l12">
                               <div class="footer-content" style="padding-top: 30px; height: 25%;">
                                   <p>Lorem isum dolor</p>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection