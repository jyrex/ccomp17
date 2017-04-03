@extends('layouts.app')

@section('content')
<main>
    <div id="pembayaran">
        <div class="container">
            <p class="title-card">Prosedur Pembayaran</p>
            <div class="row z-depth-2">
                <div class="col l12">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi ut iste eos rem ab eaque molestiae repudiandae sit nobis possimus, maxime esse, provident nam, cumque hic magni dicta, voluptas ducimus.
                </div>
            </div>

            <p class="title-card">Upload Bukti Pembayaran</p>
            <div class="row z-depth-2">
                <div class="col l12">
                    <form action="{{ url('/payment') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="file-field input-field">
                                <div class="btn btn-blue">
                                    <span>File</span>
                                    <input name="bukti" type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload bukti pembayaran">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <textarea name="keterangan" id="keterangan" class="materialize-textarea"></textarea>
                                <label for="keterangan">Keterangan Tambahan</label>
                            </div>
                        </div>

                        <div class="row center-align">
                            <button class="btn-large-blue waves-effect waves-light" type="submit" name="action">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection