@extends('layouts.app')

@section('content')
<main>
    <div id="pengaturan">
        <div class="container">
           <p class="title-card">Ubah Password</p>
            <div class="row z-depth-2">
                <div class="col l12">
                    <form>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="password" id="current-password" class="validate" />
                                <label for="current-password">Password sekarang ini</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="password" id="new-password" class="validate" />
                                <label for="new-password">Password baru</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="password" id="new-password-confirm" class="validate" />
                                <label for="new-password-confirm">Konfirmasi password baru</label>
                            </div>
                        </div>
                        <div class="row center-align">
                            <button class="btn-large-blue waves-effect waves-light" type="submit" name="action">UBAH</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection