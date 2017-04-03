@extends('layouts.app')

@section('content')
<main>
<!-- <div id="debugger">hehehehe</div> -->
    <div id="form-satu">
        <div class="container">
            <div class="row z-depth-2">
                <form method="post" action="{{ url('/team') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="col s12 m12 l12">
                        <div class="row">
                            <div class="input-field col s12"> <i class="material-icons prefix">perm_identity</i>
                                <input name="agg" type="text" id="agg" class="validate" />
                                <label for="agg">Nama</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12"> <i class="material-icons prefix">contacts</i>
                                <input name="nim_agg" type="text" id="nim_agg" class="validate" />
                                <label for="nim_agg">NIM</label>
                            </div>
                        </div>
                        <div class="row" style="">
                            <div class="input-field col s12"> <i class="material-icons prefix">dns</i>
                                <select id="fak_agg">
                                  <option value="" disabled selected>Fakultas</option>
                                  @foreach ($fakultas as $list_fak_agg)
                                    <option value="{{ $list_fak_agg->id_fak }}">{{ $list_fak_agg->fakultas }}</option>
                                  @endforeach
                                </select>
                                <label>Fakultas</label>
                            </div>
                        </div>
                        <div class="row" style="">
                            <div class="input-field col s12"> <i class="material-icons prefix">dns</i>
                                <select name="prodi_agg" id="prodi_agg">
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
                                    <input name="ktm_agg" type="file" multiple>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="KTM Anggota">
                                </div>
                            </div>
                        </div>
                        <div class="row center-align">
                            <button class="btn-large-blue waves-effect waves-light" type="submit" name="action">SIMPAN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection

@section('page-script')
<script src="{{ url('/js/getprodi.js') }}" type="text/javascript"></script>
@endsection