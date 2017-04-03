@extends('layouts.app')

@section('content')
<main>
<!-- <div id="debugger">hehehehe</div> -->
    <div id="biodata">
        <!-- Isi form -->
        <div class="form-biodata">
            <div class="container ">
                <div class="row z-depth-2">
                    <form method="post" action="{{ url('/team') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="col s12">
                        <div class="headform col s12 ">
                            <br>
                            <div class="headform col s12 ">
                                <h6 class="judul"><b>KETUA TIM</b></h6>
                            </div>
                            <div class="row">
                                <div class="input-field col s12"> <i class="material-icons prefix">perm_identity</i>
                                    <input name="ketua" type="text" id="ketua" class="validate" />
                                    <label for="ketua">Nama</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12"> <i class="material-icons prefix">contacts</i>
                                    <input name="nim_ketua" type="text" id="nim_ketua" class="validate" />
                                    <label for="nim_ketua">NIM</label>
                                </div>
                            </div>
                            <div class="row" style="">
                                <div class="input-field col s12"> <i class="material-icons prefix">dns</i>
                                    <select id="fak_ketua">
                                      <option value="" disabled selected>Fakultas</option>
                                      @foreach ($fakultas as $list_fak_ketua)
                                        <option value="{{ $list_fak_ketua->id_fak }}">{{ $list_fak_ketua->fakultas }}</option>
                                      @endforeach
                                    </select>
                                    <label>Fakultas</label>
                                </div>
                            </div>
                            <div class="row" style="">
                                <div class="input-field col s12"> <i class="material-icons prefix">dns</i>
                                    <select name="prodi_ketua" id="prodi_ketua">
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
                            <div class="row center-align">
                                <button class="btn-large-blue waves-effect waves-light" type="submit" name="action">SIMPAN</button>
                            </div>
                            <br>
                            </div>
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