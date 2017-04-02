<!-- Footer -->
@if ( in_array(url()->current(), [url('/'), url('/embedded'), url('/cp'), url('/uiux'). url('/linefollower'), url('/datamining'), url('/aplikasi')], true ))
<footer>
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <p class="copyright" style="color: #e6e6e6">© 2017 C-Compiler UGM</p>
            </div>
            <div class="col l6  s12 right-align">
                <div class="social-media">
                    <div class="social-wrapper">
                        <a class="fa fa-facebook" href="#" style="color: #e6e6e6"></a>
                    </div>
                    <div class="social-wrapper">
                        <a class="fa fa-twitter" href="#" style="color: #e6e6e6"></a>
                    </div>
                    <div class="social-wrapper">
                        <a class="fa fa-instagram" href="#" style="color: #e6e6e6"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
@elseif ( in_array(url()->current(), [url('/login'), url('/register')], true ))
@else
<footer>
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <p class="copyright">© 2017 C-Compiler UGM</p>
            </div>
            <div class="col l6  s12 right-align">
                <div class="social-media">
                    <div class="social-wrapper">
                        <a class="fa fa-facebook" href="#"></a>
                    </div>
                    <div class="social-wrapper">
                        <a class="fa fa-twitter" href="#"></a>
                    </div>
                    <div class="social-wrapper">
                        <a class="fa fa-instagram" href="#"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
@endif
<!-- End of Footer  -->