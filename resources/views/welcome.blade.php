@extends('base')

@section('title')
APFNP | Association des Propriétaires de Forêts Naturelles et Plantations
@endsection
{{-- BANNER --}}
@section('partials.banner')
<div class="bg-white p-1 p-lg-2">
    <div class="container">
        <div class="d-flex justify-content-end align-items-center"><a class="ms-2 ms-md-3 submenu" href="#!"><span
                    class="uil uil-bill"></span><span class="ms-1 fs-10 fs-sm-9">sale</span></a><a
                class="ms-2 ms-md-3 submenu" href="#!"><span class="uil uil-file-heart"></span><span
                    class="ms-1 fs-10 fs-sm-9">wishlist</span></a><a class="ms-2 ms-md-3 submenu" href="#!"><span
                    class="uil uil-shopping-cart"></span><span class="ms-1 fs-10 fs-sm-9">cart</span></a><a
                class="ms-2 ms-md-3 submenu" href="#!"><span class="uil uil-user-circle"></span><span
                    class="ms-1 fs-10 fs-sm-9">log in/sign up</span></a>
        </div>
    </div>
</div>
@endsection

{{-- NAVBAR --}}
@section('partials.navbar')
<nav class="navbar navbar-expand-lg py-1" id="navbar-top" data-navbar-soft-on-scroll="data-navbar-soft-on-scroll">
    <div class="container"><a class="navbar-brand me-lg-auto cursor-pointer" href=""><img class="w-50 w-md-100 img-fluid" src="assets/img/logos/logo.png" alt="" /></a>
        <button class="navbar-toggler border-0 pe-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" data-navbar-collapse="data-navbar-collapse">
            <div class="container d-lg-flex justify-content-lg-end pe-lg-0 w-lg-100">
                <form class="form-inline position-relative w-lg-50 ms-lg-4 ms-xl-9 mt-3 mt-lg-0" onsubmit="return false;">
                    <input class="search fs-8 bg-transparent form-control" type="search" name="search" placeholder="search plants..." />
                    <div class="search-icon"> <span class="uil uil-search"></span></div>
                </form>
                <ul class="navbar-nav mt-2 mt-lg-1 ms-lg-4 ms-xl-8 ms-2xl-9 gap-lg-x1" data-navbar-nav="data-navbar-nav">
                    <li class="nav-item"> <a class="nav-link nav-bar-item px-0" href="#home" title="home">home</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link nav-bar-item px-0" href="#about" title="about">about</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link nav-bar-item px-0" href="#products" title="catalog">catalog</a></li>
                    <li class="nav-item"> <a class="nav-link nav-bar-item px-0" href="#review" title="reviews">reviews</a></li>
                    <li class="nav-item"> <a class="nav-link nav-bar-item px-0" href="#support" title="support">support</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

@endsection

{{-- CONTENT --}}
@section('partials.content')
<div class="container" data-bs-target="#navbar-top" data-bs-spy="scroll" tabindex="0">
    <section class="mb-9 mb-lg-10 mb-xxl-11 text-center text-lg-start mt-9" id="home">
        <div>
            <div class="row g-4 g-lg-6 g-xl-7 mb-6 mb-lg-7 mb-xl-10 align-items-center">
                <div class="col-12 col-lg-6"><img class="img-fluid w-50 w-lg-100"
                        src="assets/img/Hero/man_watering.png" alt="" /></div>
                <div class="col-12 col-lg-6">
                    <h1 class="fs-5 fs-md-3 fs-xxl-2 text-black fw-light mb-4">Be a <span
                            class="fw-bold">Plant Parent </span>today <br
                            class="d-sm-none d-md-block d-xxl-none" />with <span
                            class="text-gradient fw-bold">Aranyak</span></h1>
                    <p class="fs-8 fs-md-11 fs-xxl-7 text-primary mb-5 mb-lg-6 mb-xl-7 fw-light">
                        First timer or experienced, we have something for you.
                        Take a look at our vast collection of greenery & let us help you transform your
                        household and front/back
                        yard.
                    </p>
                    <button class="btn btn-gradient fs-8 mt-1 d-inline-flex"><span>explore
                            catalog</span><span class="uil uil-arrow-right"></span></button>
                </div>
            </div>
            <div class="row g-4 g-lg-6 g-xl-7 align-items-center">
                <div class="col-12 col-lg-6 order-1 order-lg-0">
                    <p class="fs-8 fs-md-7 fs-xxl-6 text-success fw-bold mb-x1 text-capitalize">we have
                        got you covered </p>
                    <h1 class="fs-5 fs-md-3 fs-xxl-2 text-secondary text-capitalize fw-light mb-4">
                        However Popular or <br class="d-none d-md-block d-lg-none" /><span
                            class="fw-bold">rare plant </span><br
                            class="d-none d-xl-block d-xxl-none" /><br class="d-sm-none" />it is</h1>
                    <p class="fs-8 fs-md-11 fs-xxl-7 text-primary mb-5 mb-lg-6 mb-xl-7 fw-light">
                        Our catalog of plants of fruits and flowers;
                        for indoors and outdoors; is expanding everyday.
                    </p>
                    <button class="btn btn-gradient fs-8 d-inline-flex"><span>explore
                            catalog</span><span class="uil uil-arrow-right"></span></button>
                </div>
                <div class="col-12 col-lg-6 order-0 order-lg-1"><img class="img-fluid w-50 w-lg-100"
                        src="assets/img/Hero/planting.png" alt="" /></div>
            </div>
        </div>
    </section>
    <section class="mb-9 mb-lg-10 mb-xxl-11">
        <div class="row g-4">
            <div class="col-12 col-lg-4 text-center"><img class="mb-3"
                    src="assets/img/icons/Counter_1.png" alt="" />
                <h1 class="text-secondary fs-4 fs-lg-3 fs-xl-2 counter-delivared"
                    data-countup='{"endValue":9124201,"autoIncreasing":true}'
                    style="font-variant-numeric: lining-nums proportional-nums;">0</h1>
                <p class="text-success fs-7 fs-xl-6 fw-bold mb-0">
                    Plants <br class="d-none d-xl-block d-xxl-none" />Delivered</p>
            </div>
            <div class="col-12 col-lg-4 text-center"><img class="mb-3"
                    src="assets/img/icons/Counter_2.png" alt="" />
                <h1 class="text-secondary fs-4 fs-lg-3 fs-xl-2" data-countup='{"endValue":36487}'
                    style="font-variant-numeric: lining-nums proportional-nums;"> 0</h1>
                <p class="text-success fs-7 fs-xl-6 fw-bold mb-0">
                    Happy <br class="d-none d-xl-block d-xxl-none" />customers </p>
            </div>
            <div class="col-12 col-lg-4 text-center"><img class="mb-3"
                    src="assets/img/icons/Counter_3.png" alt="" />
                <h1 class="text-secondary fs-4 fs-lg-3 fs-xl-2"
                    data-countup='{"endValue":400,"suffix":"+"}'
                    style="font-variant-numeric: lining-nums proportional-nums;"> 0</h1>
                <p class="text-success fs-7 fs-xl-6 fw-bold mb-0">
                    Growing <br class="d-none d-xl-block d-xxl-none" />Catalog </p>
            </div>
        </div>
    </section>
    <section class="mb-9 mb-lg-10 mb-xxl-11 text-center text-lg-start" id="about">
        <h4 class="mb-x1 fs-8 fs-md-7 fs-xxl-6 text-success fw-bold pt-6 text-capitalize">About us </h4>
        <h1 class="fs-5 fs-lg-3 fs-xl-2 text-secondary text-capitalize fw-light mb-x1">our <span
                class="fw-bold">Core </span>team<br />and their <span class="fw-bold">philosophy</span>
        </h1>
        <div class="row mb-7 mb-lg-8 mb-xl-9 gap-3">
            <div class="col-12 col-lg">
                <p class="text-black fs-10 fs-md-9 fs-xxl-8 lh-xl mb-0 line-clamp-5"> In Aranyak, we
                    have a great team to help you manage and maintain all your healthy plants
                    simultaneously. We help you to change your outlook on life with our huge collection
                    of greenery. Refer to our collection of plants for indoor and outdoor vegetation and
                    beautification.</p>
            </div>
            <div class="col-12 col-lg">
                <p class="text-black fs-10 fs-md-9 fs-xxl-8 lh-xl mb-0 line-clamp-5"> Our wide variety
                    of plants can help you get stimulated to creative works and help you maintain your
                    mental health while also uplifting your way of life. Aranyak avails an efficient
                    team of designers to help you plan your indoor and outdoor beautification works in
                    no time. Enjoy your journey with Aranyak!</p>
            </div>
        </div>
        <div
            class="d-flex flex-column flex-lg-row justify-content-center align-items-center mb-8 mb-lg-10">
            <img class="img-fluid badhon" src="assets/img/team/badhon.png" alt="" />
            <div class="about-card">
                <h1 class="fs-8 fs-md-7 fs-xxl-6 text-success fw-bold">Meet Badhon</h1>
                <p class="fs-10 fs-md-9 fs-xxl-8 text-primary mb-0 line-clamp-5">
                    Dhruba Badhon lives in Dhaka with her husband,
                    Raihan Nil, their daughter, Shimul and two cats,
                    Pantha and Sanji. She began her professional carrier
                    at a scam house named Hexit. At the summer of 2069,
                    she created a ...
                </p>
            </div>
        </div>
        <div>
            <p
                class="text-secondary text-capitalize fw-light mb-0 fs-5 fs-lg-4 text-center mb-7 mb-lg-8">
                meet the <span class="fw-bold">team</span></p>
            <div class="row mb-13 w-lg-75 mb-lg-5 mx-auto gy-2 gy-lg-5 h-100">
                <div class="col-12 col-md-6 col-lg-4 px-3 text-center mb-5 mb-lg-0">
                    <div class="position-relative w-75 w-md-100 mx-auto mb-2"><img
                            class="w-100 team-hero-image" src="assets/img/team/team/6.png" alt="" />
                        <div class="social-icons"><a href="#!"> <span
                                    class="uil uil-facebook"></span></a><a href="#!"> <span
                                    class="uil uil-instagram-alt"></span></a><a href="#!"> <span
                                    class="uil uil-linkedin"></span></a></div>
                    </div>
                    <h3 class="fs-9 fs-md-8 text-success fw-bold mb-1">James T. Kirk</h3>
                    <h5 class="text-black fs-10 fs-md-9 fw-medium text-capitalize mb-3">CFO</h5>
                    <p class="fs-10 fs-md-9 fs-xxl-8 text-primary lh-xl mb-0 line-clamp-2">We're trying
                        to teach you a technique here and how to use it.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 px-3 text-center mb-5 mb-lg-0">
                    <div class="position-relative w-75 w-md-100 mx-auto mb-2"><img
                            class="w-100 team-hero-image" src="assets/img/team/team/5.png" alt="" />
                        <div class="social-icons"><a href="#!"> <span
                                    class="uil uil-facebook"></span></a><a href="#!"> <span
                                    class="uil uil-instagram-alt"></span></a><a href="#!"> <span
                                    class="uil uil-linkedin"></span></a></div>
                    </div>
                    <h3 class="fs-9 fs-md-8 text-success fw-bold mb-1">Montgomery Scott</h3>
                    <h5 class="text-black fs-10 fs-md-9 fw-medium text-capitalize mb-3">Accounts</h5>
                    <p class="fs-10 fs-md-9 fs-xxl-8 text-primary lh-xl mb-0 line-clamp-2">Just make a
                        decision and let it go.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 px-3 text-center mb-5 mb-lg-0">
                    <div class="position-relative w-75 w-md-100 mx-auto mb-2"><img
                            class="w-100 team-hero-image" src="assets/img/team/team/4.png" alt="" />
                        <div class="social-icons"><a href="#!"> <span
                                    class="uil uil-facebook"></span></a><a href="#!"> <span
                                    class="uil uil-instagram-alt"></span></a><a href="#!"> <span
                                    class="uil uil-linkedin"></span></a></div>
                    </div>
                    <h3 class="fs-9 fs-md-8 text-success fw-bold mb-1">Nyota Uhura</h3>
                    <h5 class="text-black fs-10 fs-md-9 fw-medium text-capitalize mb-3">Marketing</h5>
                    <p class="fs-10 fs-md-9 fs-xxl-8 text-primary lh-xl mb-0 line-clamp-2">We'll throw
                        some old gray clouds in here just sneaking around...</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 px-3 text-center mb-5 mb-lg-0">
                    <div class="position-relative w-75 w-md-100 mx-auto mb-2"><img
                            class="w-100 team-hero-image" src="assets/img/team/team/3.png" alt="" />
                        <div class="social-icons"><a href="#!"> <span
                                    class="uil uil-facebook"></span></a><a href="#!"> <span
                                    class="uil uil-instagram-alt"></span></a><a href="#!"> <span
                                    class="uil uil-linkedin"></span></a></div>
                    </div>
                    <h3 class="fs-9 fs-md-8 text-success fw-bold mb-1">Hikaru Sulu</h3>
                    <h5 class="text-black fs-10 fs-md-9 fw-medium text-capitalize mb-3">CFO</h5>
                    <p class="fs-10 fs-md-9 fs-xxl-8 text-primary lh-xl mb-0 line-clamp-2">Everything's
                        not great in life, but we can still find beauty in it.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 px-3 text-center mb-5 mb-lg-0">
                    <div class="position-relative w-75 w-md-100 mx-auto mb-2"><img
                            class="w-100 team-hero-image" src="assets/img/team/team/2.png" alt="" />
                        <div class="social-icons"><a href="#!"> <span
                                    class="uil uil-facebook"></span></a><a href="#!"> <span
                                    class="uil uil-instagram-alt"></span></a><a href="#!"> <span
                                    class="uil uil-linkedin"></span></a></div>
                    </div>
                    <h3 class="fs-9 fs-md-8 text-success fw-bold mb-1">Pavel Chekov</h3>
                    <h5 class="text-black fs-10 fs-md-9 fw-medium text-capitalize mb-3">CTO</h5>
                    <p class="fs-10 fs-md-9 fs-xxl-8 text-primary lh-xl mb-0 line-clamp-2">That is when
                        you can experience true joy, when you have no fear.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 px-3 text-center mb-5 mb-lg-0">
                    <div class="position-relative w-75 w-md-100 mx-auto mb-2"><img
                            class="w-100 team-hero-image" src="assets/img/team/team/1.png" alt="" />
                        <div class="social-icons"><a href="#!"> <span
                                    class="uil uil-facebook"></span></a><a href="#!"> <span
                                    class="uil uil-instagram-alt"></span></a><a href="#!"> <span
                                    class="uil uil-linkedin"></span></a></div>
                    </div>
                    <h3 class="fs-9 fs-md-8 text-success fw-bold mb-1">Leonard McCoy</h3>
                    <h5 class="text-black fs-10 fs-md-9 fw-medium text-capitalize mb-3">Human resource
                    </h5>
                    <p class="fs-10 fs-md-9 fs-xxl-8 text-primary lh-xl mb-0 line-clamp-2">Let's make a
                        nice big leafy tree.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="mb-9 mb-lg-10 mb-xxl-11 text-center text-md-start" id="products">
        <h3 class="mb-x1 fs-8 fs-md-7 fs-xxl-6 text-success fw-bold pt-6">Our Products </h3>
        <div class="mb-6 mb-lg-7 mb-xl-10" id="slider-1">
            <h1 class="fs-5 fs-md-3 fs-xxl-2 text-secondary text-capitalize fw-light mb-13 mb-lg-7">
                <span class="fw-bold">New </span>Arrivals</h1>
            <div class="mb-4 mb-lg-0">
                <div class="swiper-theme-container position-relative">
                    <div class="swiper-container theme-slider"
                        data-swiper='{"spaceBetween":32,"loop":true,"loopedSlides":5,"breakpoints":{"0":{"slidesPerView":1},"768":{"slidesPerView":2},"1024":{"slidesPerView":3}}}'>
                        <div class="swiper-wrapper">
                            <div class="product-card swiper-slide">
                                <div class="product-card-top"
                                    style="background-image: url('assets/img/products/products/1.png')">
                                    <div class="add-section"><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                            href="#!"><span
                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                            to wishlist </a><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                            href="#!"><span
                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                            to cart</a></div>
                                </div>
                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                    <h3
                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                        Philodendron</h3>
                                    <p
                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                        The Philodendron White Princess has been around for some time in
                                        private collections. But they have hit the market now in full
                                        big potted plants.</p>
                                </div>
                            </div>
                            <div class="product-card swiper-slide">
                                <div class="product-card-top"
                                    style="background-image: url('assets/img/products/products/2.png')">
                                    <div class="add-section"><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                            href="#!"><span
                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                            to wishlist </a><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                            href="#!"><span
                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                            to cart</a></div>
                                </div>
                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                    <h3
                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                        Monstera Obliqua Peruvian</h3>
                                    <p
                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                        aS it is a small species, Monstera Obliqua is uncommon. Another
                                        reason for its scarcity is that it grows slowly and has short
                                        selling seasons</p>
                                </div>
                            </div>
                            <div class="product-card swiper-slide">
                                <div class="product-card-top"
                                    style="background-image: url('assets/img/products/products/3.png')">
                                    <div class="add-section"><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                            href="#!"><span
                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                            to wishlist </a><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                            href="#!"><span
                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                            to cart</a></div>
                                </div>
                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                    <h3
                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                        Norfolk Island Pine</h3>
                                    <p
                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                        Although a lively addition to your home all year round—the
                                        Norfolk Island Pine shines as a live holiday tree during the
                                        winter season</p>
                                </div>
                            </div>
                            <div class="product-card swiper-slide">
                                <div class="product-card-top"
                                    style="background-image: url('assets/img/products/products/5.png')">
                                    <div class="add-section"><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                            href="#!"><span
                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                            to wishlist </a><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                            href="#!"><span
                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                            to cart</a></div>
                                </div>
                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                    <h3
                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                        Bromeliad Aechmea Pink</h3>
                                    <p
                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                        Featuring colorful, long-lasting blooms, the Bromeliad Aechmea
                                        Pink is a unique flowering plant to add a touch of tropics With
                                        lasting blooms</p>
                                </div>
                            </div>
                            <div class="product-card swiper-slide">
                                <div class="product-card-top"
                                    style="background-image: url('assets/img/products/products/8.png')">
                                    <div class="add-section"><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                            href="#!"><span
                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                            to wishlist </a><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                            href="#!"><span
                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                            to cart</a></div>
                                </div>
                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                    <h3
                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                        Spider Plant</h3>
                                    <p
                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                        The fast-growing shoots produce little &quot;babies&quot; that
                                        you can re-pot for added greenery elsewhere. Just stick to
                                        well-lit spots, water weekly. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-nav">
                        <button class="btn prev-button" data-slider="slider-1"><span
                                class="uil uil-angle-left-b"></span></button>
                        <button class="btn next-button" data-slider="slider-1"><span
                                class="uil uil-angle-right-b"></span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-6 mb-lg-7 mb-xl-10" id="slider-2">
            <h1
                class="fs-5 fs-md-3 fs-xxl-2 text-secondary text-capitalize text-md-end fw-light mb-13 mb-lg-7">
                <span class="fw-bold">Popular</span><br class="d-sm-none" />little plants</h1>
            <div class="mb-4 mb-lg-0">
                <div class="swiper-theme-container position-relative">
                    <div class="swiper-container theme-sliderdiv"
                        data-swiper='{"spaceBetween":32,"loop":true,"loopedSlides":5,"breakpoints":{"0":{"slidesPerView":1},"768":{"slidesPerView":2},"1024":{"slidesPerView":3}}}'>
                        <div class="swiper-wrapper">
                            <div class="product-card swiper-slide">
                                <div class="product-card-top"
                                    style="background-image: url('assets/img/products/products/4.png')">
                                    <div class="add-section"><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                            href="#!"><span
                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                            to wishlist </a><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                            href="#!"><span
                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                            to cart</a></div>
                                </div>
                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                    <h3
                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                        Snake/Sansevieria</h3>
                                    <p
                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                        Sansevierias are succulent plants. they have strong, stiff,
                                        succulent leaves that store water. these plants release oxygen
                                        in the night</p>
                                </div>
                            </div>
                            <div class="product-card swiper-slide">
                                <div class="product-card-top"
                                    style="background-image: url('assets/img/products/products/5.png')">
                                    <div class="add-section"><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                            href="#!"><span
                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                            to wishlist </a><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                            href="#!"><span
                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                            to cart</a></div>
                                </div>
                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                    <h3
                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                        Bromeliad Aechmea Pink</h3>
                                    <p
                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                        Featuring colorful, long-lasting blooms, the Bromeliad Aechmea
                                        Pink is a unique flowering plant to add a touch of tropics With
                                        lasting blooms</p>
                                </div>
                            </div>
                            <div class="product-card swiper-slide">
                                <div class="product-card-top"
                                    style="background-image: url('assets/img/products/products/6.png')">
                                    <div class="add-section"><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                            href="#!"><span
                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                            to wishlist </a><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                            href="#!"><span
                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                            to cart</a></div>
                                </div>
                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                    <h3
                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                        Parlor Palm</h3>
                                    <p
                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                        The parlor palm (Chamaedorea elegans) has long been used as an
                                        indoor plant. NASA gave this plant a high purifying score.</p>
                                </div>
                            </div>
                            <div class="product-card swiper-slide">
                                <div class="product-card-top"
                                    style="background-image: url('assets/img/products/products/2.png')">
                                    <div class="add-section"><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                            href="#!"><span
                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                            to wishlist </a><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                            href="#!"><span
                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                            to cart</a></div>
                                </div>
                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                    <h3
                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                        Monstera Obliqua Peruvian</h3>
                                    <p
                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                        aS it is a small species, Monstera Obliqua is uncommon. Another
                                        reason for its scarcity is that it grows slowly and has short
                                        selling seasons</p>
                                </div>
                            </div>
                            <div class="product-card swiper-slide">
                                <div class="product-card-top"
                                    style="background-image: url('assets/img/products/products/1.png')">
                                    <div class="add-section"><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                            href="#!"><span
                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                            to wishlist </a><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                            href="#!"><span
                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                            to cart</a></div>
                                </div>
                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                    <h3
                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                        Monstera Obliqua Peruvian</h3>
                                    <p
                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                        aS it is a small species, Monstera Obliqua is uncommon. Another
                                        reason for its scarcity is that it grows slowly and has short
                                        selling seasons</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-nav">
                        <button class="btn prev-button" data-slider="slider-2"><span
                                class="uil uil-angle-left-b"></span></button>
                        <button class="btn next-button" data-slider="slider-2"><span
                                class="uil uil-angle-right-b"></span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-6 mb-lg-7 mb-xl-10" id="slider-3">
            <h1 class="fs-5 fs-md-3 fs-xxl-2 text-secondary text-capitalize fw-light mb-13 mb-lg-7">
                <span class="fw-bold">Easy </span>to <br class="d-sm-none" />care plants</h1>
            <div class="mb-4 mb-lg-0">
                <div class="swiper-theme-container position-relative">
                    <div class="swiper-container theme-slider"
                        data-swiper='{"spaceBetween":32,"loop":true,"loopedSlides":5,"breakpoints":{"0":{"slidesPerView":1},"768":{"slidesPerView":2},"1024":{"slidesPerView":3}}}'>
                        <div class="swiper-wrapper">
                            <div class="product-card swiper-slide">
                                <div class="product-card-top"
                                    style="background-image: url('assets/img/products/products/7.png')">
                                    <div class="add-section"><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                            href="#!"><span
                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                            to wishlist </a><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                            href="#!"><span
                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                            to cart</a></div>
                                </div>
                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                    <h3
                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                        Peace Lily</h3>
                                    <p
                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                        If you're prone to overwatering, try Spathiphyllum. With enough
                                        light, they'll also produce their spade-shaped flowers
                                        throughout the year.</p>
                                </div>
                            </div>
                            <div class="product-card swiper-slide">
                                <div class="product-card-top"
                                    style="background-image: url('assets/img/products/products/8.png')">
                                    <div class="add-section"><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                            href="#!"><span
                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                            to wishlist </a><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                            href="#!"><span
                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                            to cart</a></div>
                                </div>
                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                    <h3
                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                        Spider Plant</h3>
                                    <p
                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                        The fast-growing shoots produce little &quot;babies&quot; that
                                        you can re-pot for added greenery elsewhere. Just stick to
                                        well-lit spots, water weekly. </p>
                                </div>
                            </div>
                            <div class="product-card swiper-slide">
                                <div class="product-card-top"
                                    style="background-image: url('assets/img/products/products/9.png')">
                                    <div class="add-section"><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                            href="#!"><span
                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                            to wishlist </a><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                            href="#!"><span
                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                            to cart</a></div>
                                </div>
                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                    <h3
                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                        Kalanchoe</h3>
                                    <p
                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                        This water-retaining succulent grows colorful, bell-shaped
                                        flowers and withstands dry climates and terrible temperature
                                        swings.,</p>
                                </div>
                            </div>
                            <div class="product-card swiper-slide">
                                <div class="product-card-top"
                                    style="background-image: url('assets/img/products/products/1.png')">
                                    <div class="add-section"><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                            href="#!"><span
                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                            to wishlist </a><a
                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                            href="#!"><span
                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                            to cart</a></div>
                                </div>
                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                    <h3
                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                        Monstera Obliqua Peruvian</h3>
                                    <p
                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                        aS it is a small species, Monstera Obliqua is uncommon. Another
                                        reason for its scarcity is that it grows slowly and has short
                                        selling seasons</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-nav">
                        <button class="btn prev-button" data-slider="slider-3"><span
                                class="uil uil-angle-left-b"></span></button>
                        <button class="btn next-button" data-slider="slider-3"><span
                                class="uil uil-angle-right-b"></span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-gradient fs-8 d-inline-flex"><span>see full catalog</span><span
                    class="uil uil-arrow-right"></span></button>
        </div>
    </section>
    <section class="mb-9 mb-lg-10 mb-xxl-11" id="review">
        <h3
            class="mb-3 pt-6 fs-8 fs-md-7 fs-xxl-6 text-success fw-bold text-center text-lg-start text-capitalize">
            review </h3>
        <h1
            class="fs-5 fs-md-3 fs-xxl-2 text-secondary text-capitalize fw-light mb-6 mb-lg-8 text-center text-lg-start">
            Some words from <br />our <span class="fw-bold">Lovely customers</span></h1>
        <div class="row g-4 g-lg-6 g-xl-7 align-items-center">
            <div class="col-12 col-lg-6">
                <div class="review-card">
                    <div><img src="assets/img/review/1.png" alt="" /></div>
                    <div> <img class="me-1 mb-1" src="assets/img/icons/star.png" alt="" /><img
                            class="me-1 mb-1" src="assets/img/icons/star.png" alt="" /><img
                            class="me-1 mb-1" src="assets/img/icons/star.png" alt="" /><img
                            class="me-1 mb-1" src="assets/img/icons/star.png" alt="" /><img
                            class="me-1 mb-1" src="assets/img/icons/star.png" alt="" />
                        <p class="text-black fs-10 fs-md-9 fs-xxl-8 mb-3 line-clamp-2">I’m not really a
                            customer of this site, but their free gardening guide helped me a lot. Thank
                            you ...</p>
                        <h2 class="text-success fs-9 fs-md-8 fw-bold mb-0">Ahsoka Tano</h2>
                        <p class="text-black fs-10 fs-md-9 mb-0 mb-0">Firefighter</p>
                    </div>
                </div>
                <div class="review-card">
                    <div><img src="assets/img/review/2.png" alt="" /></div>
                    <div> <img class="me-1 mb-1" src="assets/img/icons/star.png" alt="" /><img
                            class="me-1 mb-1" src="assets/img/icons/star.png" alt="" /><img
                            class="me-1 mb-1" src="assets/img/icons/star.png" alt="" /><img
                            class="me-1 mb-1" src="assets/img/icons/star.png" alt="" /><img
                            class="me-1 mb-1" src="assets/img/icons/star.png" alt="" />
                        <p class="text-black fs-10 fs-md-9 fs-xxl-8 mb-3 line-clamp-2">Aranyak is the
                            perfect place for making yourself surrounded by lots and lots of plant with
                            a guide of extensive details of how to take care of them😘</p>
                        <h2 class="text-success fs-9 fs-md-8 fw-bold mb-0">Sabine Wren</h2>
                        <p class="text-black fs-10 fs-md-9 mb-0 mb-0">Influencer &amp; Plant lover</p>
                    </div>
                </div>
                <div class="review-card">
                    <div><img src="assets/img/review/3.png" alt="" /></div>
                    <div> <img class="me-1 mb-1" src="assets/img/icons/star.png" alt="" /><img
                            class="me-1 mb-1" src="assets/img/icons/star.png" alt="" /><img
                            class="me-1 mb-1" src="assets/img/icons/star.png" alt="" /><img
                            class="me-1 mb-1" src="assets/img/icons/star.png" alt="" /><img
                            class="me-1 mb-1" src="assets/img/icons/star.png" alt="" />
                        <p class="text-black fs-10 fs-md-9 fs-xxl-8 mb-3 line-clamp-2">I’ve brought
                            dozens of plants over the year from this site and not a penny wasted. All
                            arround good service and professionalism from Aranyak. keep it up guys. </p>
                        <h2 class="text-success fs-9 fs-md-8 fw-bold mb-0">Ezra Bridger</h2>
                        <p class="text-black fs-10 fs-md-9 mb-0 mb-0">Small-time thief</p>
                    </div>
                </div>
                <div class="mt-3 mt-md-5 mt-lg-6 mb-1 text-center">
                    <button class="btn btn-gradient fs-8 d-inline-flex"> <span>load more</span><span
                            class="uil uil-arrow-right"></span></button>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block text-center"><img class="img-fluid"
                    src="assets/img/illustrations/loveletter.png" alt="" /></div>
        </div>
    </section>
    <section class="mb-9 mb-lg-10 mb-xxl-11" id="blogs">
        <div class="row mb-6 mb-lg-7 mb-xl-10 pt-6">
            <h3
                class="mb-3 fs-8 fs-md-7 fs-xxl-6 text-success fw-bold text-center text-lg-start text-capitalize">
                aryanak blog </h3>
            <h1
                class="fs-5 fs-md-3 fs-xxl-2 text-secondary text-capitalize mb-7 mb-lg-7 text-center text-lg-start">
                To Bring more <span class="fw-bold">Green</span><br />into <span class="fw-bold">your
                    home</span></h1>
            <div class="col-12 col-lg-4 mb-5 mb-lg-0 px-lg-2 px-xxl-3">
                <div class="blog-card">
                    <div class="blog-card-top"
                        style="background-image: url('assets/img/blogs/blog_1.png')">
                        <div class="inner-div">
                            <p class="fw-semi-bold mb-0">indoor gardening</p>
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div class="px-3 px-xl-x1 pt-2"><span class="mb-0" style="color: #5C5C5C;">5
                                mins read</span>
                            <h2
                                class="text-success fw-semi-bold text-capitalize mb-lg-4 fs-8 fs-md-11 fs-xxl-7">
                                4 Ways to Level Up Your Indoor Gardening Game</h2>
                        </div>
                        <div class="px-3 px-xl-x1 pb-2 pt-1">
                            <p
                                class="text-cardText fs-10 fs-md-9 fs-xl-8 fw-light lh-xl mb-2 line-clamp-2">
                                Indoor gardening is not just about maintaining plants but also about
                                composition and arrangement in a ...</p><a
                                class="fw-bold fs-9 fs-md-8 mb-0 read-more" href="#!">read more...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-5 mb-lg-0 px-lg-2 px-xxl-3">
                <div class="blog-card">
                    <div class="blog-card-top"
                        style="background-image: url('assets/img/blogs/blog_3.png')">
                        <div class="inner-div">
                            <p class="fw-semi-bold mb-0">Fruit plant</p>
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div class="px-3 px-xl-x1 pt-2"><span class="mb-0" style="color: #5C5C5C;">2
                                mins read</span>
                            <h2
                                class="text-success fw-semi-bold text-capitalize mb-lg-4 fs-8 fs-md-11 fs-xxl-7">
                                6 reasons to reconsider where to plant your next fruit tree</h2>
                        </div>
                        <div class="px-3 px-xl-x1 pb-2 pt-1">
                            <p
                                class="text-cardText fs-10 fs-md-9 fs-xl-8 fw-light lh-xl mb-2 line-clamp-2">
                                Growing fruit trees indoors means you get to control everything from the
                                light to humidity, right down to ....</p><a
                                class="fw-bold fs-9 fs-md-8 mb-0 read-more" href="#!">read more...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-5 mb-lg-0 px-lg-2 px-xxl-3">
                <div class="blog-card">
                    <div class="blog-card-top"
                        style="background-image: url('assets/img/blogs/blog_2.png')">
                        <div class="inner-div">
                            <p class="fw-semi-bold mb-0">Cactus gardening</p>
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div class="px-3 px-xl-x1 pt-2"><span class="mb-0" style="color: #5C5C5C;">2
                                mins read</span>
                            <h2
                                class="text-success fw-semi-bold text-capitalize mb-lg-4 fs-8 fs-md-11 fs-xxl-7">
                                Cactus: Some Common Myths and Misconceptions</h2>
                        </div>
                        <div class="px-3 px-xl-x1 pb-2 pt-1">
                            <p
                                class="text-cardText fs-10 fs-md-9 fs-xl-8 fw-light lh-xl mb-2 line-clamp-2">
                                Cactus Plants symbolize endurance, persistence, &amp; toughness. Gifting
                                someone a cactus plant means ...</p><a
                                class="fw-bold fs-9 fs-md-8 mb-0 read-more" href="#!">read more...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-gradient fs-8 d-inline-flex"><span>see all posts</span><span
                    class="uil uil-arrow-right"></span></button>
        </div>
    </section>
    <section class="mb-9 mb-lg-10 mb-xxl-11 text-center text-lg-start mt-1" id="support">
        <div class="row g-4 g-lg-6 g-xl-7 pt-6">
            <div class="d-none d-lg-block col-lg-6 text-center"><img class="img-fluid"
                    src="assets/img/illustrations/women_watering.png" alt="" /></div>
            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center mt-0">
                <p class="fs-8 fs-md-7 fs-xxl-6 text-success fw-bold my-0 text-capitalize">join us </p>
                <h1 class="fs-5 fs-lg-4 fs-xl-3 text-secondary text-capitalize fw-light mt-3 mb-4">
                    Subscribe to <br />our <span class="fw-bold">Newsletter</span></h1>
                <p class="text-success fs-8 fs-lg-7 text-capitalize beginner-guide my-4">Get Our <span
                        class="fw-bold">Beginners Guide To Plant Parenthood </span><br
                        class="d-none d-xxl-block" />for free </p>
                <form method="POST" onsubmit="return false;">
                    <div class="input-group position-relative">
                        <input class="form-control email-input" type="email" name="email"
                            placeholder="your email address" />
                        <button class="btn shadow-none submit-button position-absolute end-0"
                            type="submit"><span class="uil uil-arrow-right"></span></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<button class="btn scroll-to-top" data-scroll-top="data-scroll-top"><span
        class="uil uil-angle-up text-white"></span></button>
@endsection

{{-- FOOTER --}}
@section('partials.footer')
<footer class="Footer" style="background-image: url('assets/img/illustrations/BOTTOM.png')">
    <div class="pb-x1 px-3 px-lg-0">
        <div class="container">
            <div class="row align-items-end g-4 g-sm-6">
                <div class="col-6 col-md-4">
                    <div class="mb-6 mb-md-8"><a class="cursor-pointer" href=""><img class="img-fluid"
                                src="assets/img/logos/Footer_logo.png" alt="" /></a></div>
                    <div>
                        <div class="mb-2"> <a class="links" href="#">home</a></div>
                        <div class="mb-2"> <a class="links" href="#about">about</a></div>
                        <div class="mb-2"> <a class="links" href="#products">catalog</a></div>
                        <div class="mb-2"> <a class="links" href="#review">
                                review
                            </a></div><a class="links" href="#support">
                            support
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="mb-3 mb-md-5">
                        <h3 class="fs-9 fs-md-8 fw-bold mb-0" style="color: #FFF0D3;">User Account</h3>
                    </div>
                    <div>
                        <div class="mb-2"> <a class="links" href="#!">sign up</a></div>
                        <div class="mb-2"> <a class="links" href="#!">log in </a></div>
                        <div class="mb-2"> <a class="links" href="#!">edit profile</a></div>
                        <div class="mb-2"> <a class="links" href="#!">
                                history
                            </a></div><a class="links" href="#!">
                            refund
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row g-4 g-sm-6 g-md-0">
                        <div class="col-6 col-md-12 mb-md-7">
                            <h3 class="fs-9 fs-md-8 fw-bold mb-3" style="color: #FFF0D3;">Follow Us At</h3>
                            <div class="d-flex align-items-center"> <a class="social-icon me-2" href="#!"><span
                                        class="uil uil-facebook fs-8"></span></a><a class="social-icon me-2"
                                    href="#!"><span class="uil uil-linkedin fs-8"></span></a><a
                                    class="social-icon me-2" href="#!"><span
                                        class="uil uil-youtube fs-8"></span></a><a class="social-icon"
                                    href="#!"><span class="uil uil-twitter fs-8"></span></a></div>
                        </div>
                        <div class="col-6 col-md-12">
                            <div class="mb-3">
                                <p class="fs-9 fs-md-8 fw-bold lh-nomal mb-0" style="color: #FFF0D3;"> Contact </p>
                            </div>
                            <div class="fs-10 fs-md-9">
                                <p class="mb-0 text-white opacity-70"> Obito Uchiha</p>
                                <p class="mb-0 text-white opacity-70"> Konoha, Leaf Village</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-success py-2 py-md-3 position-relative terms-condition">
        <div class="overley-background"></div>
        <div class="container py-12 text-div text-md-end"><a class="links ms-md-4" href="#!" title="F.A.Q"> F.A.Q
            </a><a class="links ms-3 ms-md-4" href="#!" title="Cookies Policy"> Cookies Policy</a><a
                class="links ms-3 ms-md-4" href="#!" title="Legal Terms"> Legal Terms </a><a
                class="links ms-3 ms-md-4" href="#!" title="Privacy Policy"> Privacy Policy</a></div>
    </div>
</footer>
@endsection
