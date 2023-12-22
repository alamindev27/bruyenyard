<footer class="footer-area">
    <div class="container">
        <div class="row">
            {{-- <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-list mt-30">
                    <h4 class="title">Menu</h4>
                    <ul>
                        <li><a href="#">Blockchain</a></li>
                        <li><a href="#">Ecosystem</a></li>
                        <li><a href="#">Presale</a></li>
                        <li><a href="#">Roadmap</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div> --}}
            <div class="col-lg-4">
                <div class="footer-list mt-30">
                    <h4 class="title">PAPERS</h4>
                    <ul>
                        <li><a href="{{ route('user.whitePaper') }}">White Paper</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-list mt-30">
                    <h4 class="title">legal</h4>
                    <ul>
                        <li><a href="{{ route('user.privacyPolicy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('user.termsCondition') }}">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-list mt-30">
                    <h4 class="title">Newsletter</h4>
                    <form action="#">
                        <div class="input-box">
                            <input type="text" placeholder="Email Address">
                            <button><i class="fal fa-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-lg-12">
                <div class="footer-copyright d-flex justify-content-between align-items-center">
                    <p class="order-2 order-sm-1 text-uppercase">© {{ setting()->site_name}}</p>
                    <ul class="order-1 order-sm-2">
                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div> --}}
    </div>
    <div class="banefits-color-2">
        <img src="{{ asset('assets') }}/frontend/images/shape/color-bg-4.png" alt="">
    </div>
</footer>

<!--====== FOOTER PART ENDS ======-->

<!--====== scroll_up PART START ======-->

<a id="scroll_up"><i class="far fa-angle-up"></i></a>

<!--====== scroll_up PART ENDS ======-->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
      <div class="modal-content" style="border-radius: 15px; background:radial-gradient(circle at 77%, #1A767E, #0F212F 65%, #0F212F 100%)">
        <div class="d-flex justify-content-between align-items-center p-3">
            <h5 class="text-white">Connect Wallet</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="p-2 d-flex justify-content-between align-items-center mb-2 rounded" style="background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%)">
                <p class="text-white">Metamask</p>
                <img src="{{ asset('assets/default/modal-1.svg') }}" alt="">
            </div>
            <div class="p-2 d-flex justify-content-between align-items-center mb-2 rounded" style="background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%)">
                <p class="text-white">Crypto.com Defi Wallet</p>
                <img src="{{ asset('assets/default/modal-2.png') }}" alt="" width="30">
            </div>
            <div class="p-2 d-flex justify-content-between align-items-center mb-2 rounded" style="background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%)">
                <p class="text-white">Trust Wallet</p>
                <img src="{{ asset('assets/default/trust-wallet-token.png') }}" alt="" width="30">
            </div>
        </div>
      </div>
    </div>
  </div>




<!--====== jquery js ======-->
<script src="{{ asset('assets/frontend/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>

<!--====== Bootstrap js ======-->
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>

<!--====== Slick js ======-->
<script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>

<!--====== Swiper js ======-->
<script src="{{ asset('assets/frontend/js/swiper.min.js') }}"></script>

<!--====== nice select js ======-->
<script src="{{ asset('assets/frontend/js/jquery.nice-select.min.js') }}"></script>

<!--====== circle progress js ======-->
<script src="{{ asset('assets/frontend/js/circle-progress.min.js') }}"></script>

<!--====== Images Loaded js ======-->
<script src="{{ asset('assets/frontend/js/jquery.syotimer.min.js') }}"></script>

<!--====== Main js ======-->
<script src="{{ asset('assets/frontend/js/main.js') }}"></script>
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
@yield('scripts')
</body>


</html>
