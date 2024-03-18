@extends('base')

@section('title')
APFNP | Association des Propriétaires de Forêts Naturelles et Plantations
@endsection
{{-- CONTENT --}}
@section('content')
<div class="container" data-bs-target="#navbar-top" data-bs-spy="scroll" tabindex="0">
    <section class="mb-9 mb-lg-10 mb-xxl-11 text-center text-lg-start mt-9" id="home">
        <div>
            <article class="row g-4 g-lg-6 g-xl-7 mb-6 mb-lg-7 mb-xl-10 align-items-center">
                <div class="col-12 col-lg-6"><img class="img-fluid w-50 w-lg-100"
                        src="assets/img/Hero/man_watering.png" alt="" /></div>
                <div class="col-12 col-lg-6">
                    <h1 class="fs-5 fs-md-3 fs-xxl-2 text-black fw-light mb-4"> <span
                            class="text-gradient fw-bold center">APFNP</span></h1>
                    <p class="fs-8 fs-md-11 fs-xxl-7 text-primary mb-5 mb-lg-6 mb-xl-7 fw-light">
                        L’Association des Propriétaires de Forêts Naturelles et Plantations <br>
                        <span class="slogan">Ensemble, agissons maintenant pour demain!</span>
                    </p>
                    
                    <a href="qui-sommes-nous"><button class="btn btn-gradient fs-8 mt-1 d-inline-flex"><span>Qui sommes-nous ?</span><span class="uil uil-arrow-right"></span></button></a>
                </div>
            </article>
            <article class="row g-4 g-lg-6 g-xl-7 align-items-center">
                <div class="col-12 col-lg-6 order-1 order-lg-0">
                    <p class="fs-8 fs-md-7 fs-xxl-6 text-success fw-bold mb-x1 text-capitalize">Protéger nos Forêts pour un Avenir Durable</p>
                    {{-- <h1 class="fs-5 fs-md-3 fs-xxl-2 text-secondary text-capitalize fw-light mb-4">
                        However Popular or <br class="d-none d-md-block d-lg-none" /><span
                            class="fw-bold">rare plant </span><br
                            class="d-none d-xl-block d-xxl-none" /><br class="d-sm-none" />it is</h1> --}}
                    <p class="fs-8 fs-md-11 fs-xxl-7 text-primary mb-5 mb-lg-6 mb-xl-7 fw-light">
                        L'Association des Propriétaires de Forêts Naturelles et Plantations (APFNP) est née de l'engagement d'un groupe de jeunes passionnés par la préservation des ressources forestières.
                    </p>
                    <button class="btn btn-gradient fs-8 d-inline-flex"><span>En savoir plus</span><span class="uil uil-arrow-right"></span></button>
                </div>
                <div class="col-12 col-lg-6 order-0 order-lg-1"><img class="img-fluid w-50 w-lg-100"
                        src="assets/img/Hero/planting.png" alt="" /></div>
            </article>
        </div>
    </section>
</div>
<button class="btn scroll-to-top" data-scroll-top="data-scroll-top"><span
        class="uil uil-angle-up text-white"></span></button>
@endsection