@extends('layouts.app')

@section('content')
{{ Auth::user()->lomba_diikuti }}
<!-- Main -->
<main>
    <div id="dashboard">
        <div class="container">

            <p class="title-card">Pengumuman</p>
            <div class="row z-depth-2">
                <div class="col l12">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non saepe dolorum sed labore sunt beatae. Ab assumenda, vel sed, sit voluptatem cupiditate nihil dicta ad quos quis fugit a ullam.
                </div>
            </div>

            <p class="title-card">Timeline</p>
            <div class="row z-depth-2">
                <div class="col l12">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi ut iste eos rem ab eaque molestiae repudiandae sit nobis possimus, maxime esse, provident nam, cumque hic magni dicta, voluptas ducimus.
                </div>
            </div>

            <p class="title-card">Download</p>
            <div class="row z-depth-2">
                <div class="col l12">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non saepe dolorum sed labore sunt beatae. Ab assumenda, vel sed, sit voluptatem cupiditate nihil dicta ad quos quis fugit a ullam.
                </div>
            </div>

            <p class="title-card">Kontak</p>
            <div class="row z-depth-2">
                <div class="col l6">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non saepe dolorum sed labore sunt beatae. Ab assumenda, vel sed, sit voluptatem cupiditate nihil dicta ad quos quis fugit a ullam.
                </div>
                <div class="col l6">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non saepe dolorum sed labore sunt beatae. Ab assumenda, vel sed, sit voluptatem cupiditate nihil dicta ad quos quis fugit a ullam.
                </div>
            </div>
        </div>
    </div>

</main>
<!-- End of Main -->
@endsection