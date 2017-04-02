@extends('layouts.app')

@section('content')
<main>
<!-- <div id="debugger">hehehehe</div> -->
    <div id="biodata">
        <!-- Isi form -->
        <div class="form-biodata">
            <div class="container ">
                <div class="row  z-depth-2">
                    <form method="post" action="{{ url('/team') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="col s12 m6 l6 kiri">
                            <div class="headform col s12 ">
                                <br>
                                <div class="headform col s12 ">
                                    <h6 class="judul"><b>ANGGOTA 1</b></h6>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12"> <i class="material-icons prefix">perm_identity</i>
                                        <input name="agg1" type="text" id="agg1" class="validate" />
                                        <label for="agg1">Nama</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12"> <i class="material-icons prefix">contacts</i>
                                        <input name="nim_agg1" type="text" id="nim_agg1" class="validate" />
                                        <label for="nim_agg1">NIM</label>
                                    </div>
                                </div>
                                <div class="row" style="">
                                    <div class="input-field col s12"> <i class="material-icons prefix">dns</i>
                                        <select id="fak_agg1">
                                          <option value="" disabled selected>Fakultas</option>
                                          @foreach ($fakultas as $list_fak_agg1)
                                            <option value="{{ $list_fak_agg1->id_fak }}">{{ $list_fak_agg1->fakultas }}</option>
                                          @endforeach
                                        </select>
                                        <label>Fakultas</label>
                                    </div>
                                </div>
                                <div class="row" style="">
                                    <div class="input-field col s12"> <i class="material-icons prefix">dns</i>
                                        <select name="prodi_agg1" id="prodi_agg1">
                                          <option value="" disabled selected>Program Studi</option>
                                        </select>
                                        <label>Program Studi</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="file-field input-field">
                                        <div class="btn btn-blue">
                                            <span>File</span>
                                            <input name="ktm_agg1" type="file" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Anggota 1">
                                        </div>
                                    </div>
                                </div>                                
                                <br>
                            </div>
                        </div>
                        <div class="col s12 m6 l6 kanan">
                            <div class="headform col s12 ">
                                <br>
                                <div class="headform col s12 ">
                                    <h6 class="judul"><b>ANGGOTA 2</b></h6>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12"> <i class="material-icons prefix">perm_identity</i>
                                        <input name="agg2" type="text" id="agg2" class="validate" />
                                        <label for="agg2">Nama</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12"> <i class="material-icons prefix">contacts</i>
                                        <input name="nim_agg2" type="text" id="nim_agg2" class="validate" />
                                        <label for="nim_agg2">NIM</label>
                                    </div>
                                </div>
                                <div class="row" style="">
                                    <div class="input-field col s12"> <i class="material-icons prefix">dns</i>
                                        <select id="fak_agg2">
                                          <option value="" disabled selected>Fakultas</option>
                                          @foreach ($fakultas as $list_fak_agg2)
                                            <option value="{{ $list_fak_agg2->id_fak }}">{{ $list_fak_agg2->fakultas }}</option>
                                          @endforeach
                                        </select>
                                        <label>Fakultas</label>
                                    </div>
                                </div>
                                <div class="row" style="">
                                    <div class="input-field col s12"> <i class="material-icons prefix">dns</i>
                                        <select name="prodi_agg2" id="prodi_agg2">
                                          <option value="" disabled selected>Program Studi</option>
                                        </select>
                                        <label>Program Studi</label>
                                    </div>
                                </div>
                                <div class="headform col s12">
                                    <h6 class="judul"><b>KARTU TANDA MAHASISWA</b></h6>
                                </div>
                                <div class="headform col s12"><br></div>
                                <div class="row">
                                    <div class="file-field input-field">
                                        <div class="btn btn-blue">
                                            <span>File</span>
                                            <input name="ktm_ketua" type="file" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="KTM Ketua Tim">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="file-field input-field">
                                        <div class="btn btn-blue">
                                            <span>File</span>
                                            <input name="ktm_agg2" type="file" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Anggota 2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row center-align">
                            <button class="btn-large-blue waves-effect waves-light" type="submit" name="action">SIMPAN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End of Isi Form -->
    </div>
</main>
@endsection

@section('page-script')
<script src="{{ url('/js/getprodi.js') }}" type="text/javascript"></script>
@endsection