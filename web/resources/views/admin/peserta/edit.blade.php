@extends('layouts.app')

@section('content')
<main>
    <div id="admin-form-list">
        <div class="container">
            <div class="row">
                <form method="post" action="{{ url('/team') }}" class="col s12">
                {{ csrf_field() }}
                	<div class="row">
                        <div class="input-field col s12">
                            <select name="lomba" id="lomba">
                                <option value="" disabled selected>Choose your option</option>
                                <option value="CP">Competitive Programming</option>
                                <option value="Data Mining">Data Mining</option>
                                <option value="Software Dev">Software Development</option>
                                <option value="UI/UX">UI/UX</option>
                                <option value="Embedded System">Embedded System</option>
                                <option value="Line Follower">Line Follower</option>
                            </select>
                            <label>Kategori Lomba</label>
                        </div>
                        <!-- end of kategori lomba -->
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="judul" id="judul" type="text" class="validate">
                            <label for="judul">Judul</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="isi" id="isi" type="text" class="validate">
                            <label for="isi">Isi</label>
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