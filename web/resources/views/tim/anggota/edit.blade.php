@extends('layouts.app')

@section('content')
<main>
    <div id="admin-form-list">
        <div class="container">
            <div class="row">
                <form method="post" action="{{ url('/team/'.$peserta->NIM) }}" class="col s12">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="nama" id="nama" type="text" class="validate"">
                            <label for="nama">Nama Lengkap</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="NIM" id="NIM" type="text" class="validate">
                            <label for="NIM">Isi</label>
                        </div>
                    </div>
                    <div class="row" style="">
                        <div class="input-field col s12"> <i class="material-icons prefix">dns</i>
                            <select id="fak_agg1">
                              <option value="" disabled selected>Fakultas</option>
                              @foreach ($fakultas as $list_fak)
                                <option value="{{ $list_fak->id_fak }}">{{ $list_fak->fakultas }}</option>
                              @endforeach
                            </select>
                            <label>Fakultas</label>
                        </div>
                    </div>
                    <div class="row" style="">
                        <div class="input-field col s12"> <i class="material-icons prefix">dns</i>
                            <select name="prodi" id="prodi_agg1">
                              <option value="" disabled selected>Program Studi</option>
                            </select>
                            <label>Program Studi</label>
                        </div>
                    </div>
                    <div class="row center-align">
                        <button class="btn-large-blue waves-effect waves-light" type="submit" name="action">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection

@section('page-script')
<script type="text/javascript" src="{{ asset('js/getprodi.js') }}"></script>
@endsection