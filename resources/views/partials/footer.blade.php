    <!-- FOOTEER -->
    <footer class="bg-dark py-4">
        <div class="container">
            <div class="row py-2">
                <div class="col-lg-4 text-center text-lg-left mb-2 mb-lg-0">
                    <p class="small text-muted text-uppercase mb-0">&copy; copyright 2020 - all rights reserved</p>
                </div>
                <div class="col-lg-4 text-center mb-2 mb-lg-0">
                    <ul class="list-inline text-white small mb-0">
                        <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-youtube"></i></a></li>
                        <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-vimeo-v"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-4 text-center text-lg-right">
                    <p class="small text-muted text-uppercase mb-0">Template designed by <a href="https://bootstraptemple.com/p/bootstrap-travel">Bootstrap Temple</a>. </p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- JavaScript files-->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/owl.carousel2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/front.js') }}"></script>

    <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite - 
        //   see more here 
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {

            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
                var div = document.createElement("div");
                div.className = 'd-none';
                div.innerHTML = ajax.responseText;
                document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot 
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
