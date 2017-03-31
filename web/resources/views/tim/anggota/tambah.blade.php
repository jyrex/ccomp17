@extends('layouts.app')

@section('content')
<main>
    <div id="biodata">
        <!-- Isi form -->
        <div class="form-biodata">
            <div class="container ">
                <div class="row  z-depth-2">
                    <form method="post" action="{{ url('/team') }}" enctype="multipart/form-data">
                        <div class="col s12 m6 l6 kiri">
                            <div class="headform col s12 ">
                                <br>
                                <div class="headform col s12 ">
                                    <h6 class="judul"><b>KETUA KELOMPOK</b></h6>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12"> <i class="material-icons prefix">perm_identity</i>
                                        <input type="text" id="nama1" class="validate" />
                                        <label for="nama1">Nama Ketua</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12"> <i class="material-icons prefix">email</i>
                                        <input type="email" id="email1" class="validate" />
                                        <label for="email1">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12"> <i class="material-icons prefix">contacts</i>
                                        <input type="text" id="num1" class="validate" />
                                        <label for="num1">No.WA/LINE</label>
                                    </div>
                                </div>
                                <div class="row" style="">
                                    <div class="input-field col s12"> <i class="material-icons prefix">dns</i>
                                        <select>
                                          <option value="" disabled selected>Pilih Kelas Anda</option>
                                          <option value="1">Option 1</option>
                                          <option value="2">Option 2</option>
                                          <option value="3">Option 3</option>
                                        </select>
                                        <label>Kelas</label>
                                    </div>
                                </div>
                                <div class="headform col s12 ">
                                    <h6 class="judul"><b>ANGGOTA 2</b></h6>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12"> <i class="material-icons prefix">perm_identity</i>
                                        <input type="text" id="nama2" class="validate" />
                                        <label for="nama2">Nama</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12"> <i class="material-icons prefix">email</i>
                                        <input type="email" id="email2" class="validate" />
                                        <label for="email2">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12"> <i class="material-icons prefix">contacts</i>
                                        <input type="text" id="num2" class="validate" />
                                        <label for="num2">No.WA/LINE</label>
                                    </div>
                                </div>
                                <div class="row" style="">
                                    <div class="input-field col s12"> <i class="material-icons prefix">dns</i>
                                        <select>
                                          <option value="" disabled selected>Pilih Kelas Anda</option>
                                          <option value="1">Option 1</option>
                                          <option value="2">Option 2</option>
                                          <option value="3">Option 3</option>
                                        </select>
                                        <label>Kelas</label>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="col s12 m6 l6 kanan">
                            <div class="headform col s12 ">
                                <br>
                                <div class="headform col s12 ">
                                    <h6 class="judul"><b>ANGGOTA 3</b></h6>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12"> <i class="material-icons prefix">perm_identity</i>
                                        <input type="text" id="nama3" class="validate" />
                                        <label for="nama3">Nama</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12"> <i class="material-icons prefix">email</i>
                                        <input type="email" id="email3" class="validate" />
                                        <label for="email3">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12"> <i class="material-icons prefix">contacts</i>
                                        <input type="text" id="num3" class="validate" />
                                        <label for="num3">No.WA/LINE</label>
                                    </div>
                                </div>
                                <div class="row" style="">
                                    <div class="input-field col s12"> <i class="material-icons prefix">dns</i>
                                        <select>
                                          <option value="" disabled selected>Pilih Kelas Anda</option>
                                          <option value="1">Option 1</option>
                                          <option value="2">Option 2</option>
                                          <option value="3">Option 3</option>
                                        </select>
                                        <label>Kelas</label>
                                    </div>
                                </div>
                                <div class="headform col s12">
                                    <h6 class="judul"><b>ASAL SEKOLAH</b> </h6>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12"> <i class="material-icons prefix">room</i>
                                        <input type="text" id="sekolah" class="validate" />
                                        <label for="sekolah">Asal Sekolah</label>
                                    </div>
                                </div>
                                <div class="headform col s12">
                                    <h6 class="judul"><b>KARTU PELAJAR</b></h6>
                                </div>
                                <div class="row">
                                    <div class="file-field input-field">
                                        <div class="btn btn-blue">
                                            <span>File</span>
                                            <input type="file" multiple>
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
                                            <input type="file" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Anggota 1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="file-field input-field">
                                        <div class="btn btn-blue">
                                            <span>File</span>
                                            <input type="file" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Anggota 2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row center-align">
                                    <button class="btn-large-blue waves-effect waves-light" type="submit" name="action">SIMPAN</button>
                                </div>
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