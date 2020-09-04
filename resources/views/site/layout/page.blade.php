@extends('site.layout.master')

@section('body')
    <div id="fh5co-container">
        <div id="fh5co-home" class="js-fullheight" data-section="home">
            <div class="flexslider">
                <div class="fh5co-overlay"></div>
                <div class="fh5co-text">
                    <div class="container">
                        <div class="row">
                            <h1 class="to-animate">
                                VINMOTA
                                <h2>
                                    Restaurante Churrasqueira & Sushi
                                </h2>
                            </h1>
                        </div>
                    </div>
                </div>
                <ul class="slides">
                    <li style="background-image: url({{ asset('images/12.jpg') }});"
                        data-stellar-background-ratio="0.5"></li>
                </ul>
            </div>
        </div>

        <div class="js-sticky">
            <div class="fh5co-main-nav">
                <div class="container-fluid">
                    <div class="fh5co-menu-1">
                        <a href="#" data-nav-section="home">Home</a>
                        <a href="#" data-nav-section="about">Sobre</a>
                        <a href="#" data-nav-section="features">Destaque</a>
                    </div>
                    <div class="fh5co-logo">
                        <a href="">VINMOTA</a>
                    </div>
                    <div class="fh5co-menu-2">
                        <a href="#" data-nav-section="menu">Menu</a>
                        <a href="#" data-nav-section="events">Eventos</a>
                        <a href="#" data-nav-section="reservation">Reserva</a>
                    </div>
                </div>

            </div>
        </div>

        <div id="fh5co-about" data-section="about">
            <div class="fh5co-2col fh5co-bg to-animate-2"
                 style="background-image: url({{ asset('images/res_img_1.jpg') }})"></div>
            <div class="fh5co-2col fh5co-text">
                <h2 class="heading to-animate">Sobre nos</h2>
                <p class="to-animate"><span class="firstcharacter">F</span>ar far away, behind the word mountains, far from
                    the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                    right at the coast of the Semantics, a large language ocean. Far far away, behind the word mountains,
                    far from the countries Vokalia and Consonantia, there live the blind texts. A small river named Duden
                    flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in
                    which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control
                    about the blind texts it is an almost unorthographic life.</p>
                <p class="text-center to-animate"><a href="#" class="btn btn-primary btn-outline">Get in touch</a></p>
            </div>
        </div>

        <div id="fh5co-sayings">
            <div class="container">
                <div class="row to-animate">
                    <div class="flexslider">
                        <ul class="slides">
                            @forelse($frases as $frase)
                                <li>
                                    <blockquote>
                                        <p>&ldquo;{{ $frase['frase'] }}&rdquo;</p>
                                        <p class="quote-author">&mdash; {{ $frase['autor'] }}</p>
                                    </blockquote>
                                </li>
                            @empty

                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        @yield('features')
        <div id="fh5co-type" style="background-image: url({{ asset('images/slide_3.jpg') }});"
             data-stellar-background-ratio="0.5">
            <div class="fh5co-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 to-animate">
                        <div class="fh5co-type">
                            <h3 class="with-icon icon-1">Frutas</h3>
                            <p>Integer sagittis rutrum magna a cursus. Curabitur sit amet luctus ligula, sit amet ultrices
                                nunc.
                                Aliquam in enim ipsum. Nulla placerat vulputate ipsum, sed finibus erat consectetur ac.</p>
                        </div>
                    </div>
                    <div class="col-md-3 to-animate">
                        <div class="fh5co-type">
                            <h3 class="with-icon icon-2">Frutos do mar</h3>
                            <p>Integer sagittis rutrum magna a cursus. Curabitur sit amet luctus ligula, sit amet ultrices
                                nunc.
                                Aliquam in enim ipsum. Nulla placerat vulputate ipsum, sed finibus erat consectetur ac.</p>
                        </div>
                    </div>
                    <div class="col-md-3 to-animate">
                        <div class="fh5co-type">
                            <h3 class="with-icon icon-3">Legumes</h3>
                            <p>Integer sagittis rutrum magna a cursus. Curabitur sit amet luctus ligula, sit amet ultrices
                                nunc.
                                Aliquam in enim ipsum. Nulla placerat vulputate ipsum, sed finibus erat consectetur ac.</p>
                        </div>
                    </div>
                    <div class="col-md-3 to-animate">
                        <div class="fh5co-type">
                            <h3 class="with-icon icon-4">Carne</h3>
                            <p>Integer sagittis rutrum magna a cursus. Curabitur sit amet luctus ligula, sit amet ultrices
                                nunc.
                                Aliquam in enim ipsum. Nulla placerat vulputate ipsum, sed finibus erat consectetur ac.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('menu')
        @yield('events')
        @yield('formreserva')
    </div>
@stop
