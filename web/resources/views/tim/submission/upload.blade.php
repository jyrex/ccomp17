@extends('layouts.app')

@section('content')
<main>
    <div id="submission">
        <div class="container">
            <p class="title-card">Form Submisi</p>
            <div class="row z-depth-2">
                <div class="col l12">
                    <form method="post" action="{{ url('/submission/'.Auth::user()->id) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                        <div class="row">
                            <div class="file-field input-field">
                                <div class="btn btn-blue">
                                    <span>File</span>
                                    <input name="submission" type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload">
                                </div>
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