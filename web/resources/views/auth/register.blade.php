@extends('layouts.app')

@section('content')
<div id="register">
    <div class="container">
        <div class="card-panel">
            <div class="row">
                <div class="col l10 offset-l1 ">
                    <h5 style="color: #73d6e7;"><strong>Pendaftaran C-Compiler UGM 2017</strong></h5>
                </div>
                <div class="col l5 offset-l1 s12">
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="col s12">
                                    <p><strong>Tim</strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="nam_tim" type="text" class="validate">
                                    <label for="nam_tim">Nama Tim</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <select>
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                        <option value="6">Option 6</option>
                                    </select>
                                    <label>Kategori Lomba</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="email" class="validate">
                                    <label for="email">Alamat Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" type="password" class="validate">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col l5">
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="col s12">
                                    <p><strong>Ketua Tim</strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="nama_ketua" type="text" class="validate">
                                    <label for="nama_ketua">Nama Ketua</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="nim_ketua" type="text" class="validate">
                                    <label for="nim_ketua">NIM</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="prodi_ketua" type="text" class="validate">
                                    <label for="prodi_ketua">Prodi</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="fakultas_ketua" type="text" class="validate">
                                    <label for="fakultas_ketua">Fakultas</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="kontak" type="number" class="validate">
                                    <label for="kontak">Nomor HP</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="file-field input-field">
                                    <div class="btn waves-effect waves-light amber lighten-2">
                                        <span>File</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </div>
                            <a class="btn waves-effect waves-light secondary-btn right" href="register1.html">Next</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
