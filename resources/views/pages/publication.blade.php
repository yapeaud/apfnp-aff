@extends('base')

@section('title')
Publication
@endsection

@section('content')
<div class="bg-white p-1 p-lg-2">
    <div class="container">
        <section class="mb-9 mb-lg-10 mb-xxl-11 text-center text-lg-start" id="">
            <h4 class="mb-x1 fs-8 fs-md-7 fs-xxl-6 text-success fw-bold pt-6 text-capitalize">projet </h4>
            <h1 class="fs-5 fs-lg-3 fs-xl-2 text-secondary text-capitalize fw-light mb-x1">nos <span class="fw-bold"></span> <span class="fw-bold">publications
                </span></h1>
            <article class="row mb-7 mb-lg-8 mb-xl-9 gap-3">
                <div class="col-12 col-lg">
                  <img class="w-25 team-hero-image" src="assets/docs/rapports/Page_de_garde.png" alt="" />
                    <a href="{{ asset('/assets/docs/rapports/Rapport final d\'OI sciage à façon Alépé avec  avis du MINEF.pdf') }}" download="Rapport final d'OI sciage à façon Alépé avec  avis du MINEF.pdf">
                        <button class="btn btn-gradient fs-8 mt-1 d-inline-flex"><span>Télécharger</span></button>
                    </a>
                </div>
                <span class="px-5">Rapport final d'OI sciage à façon<br> Alépé avec avis du MINEF</span>
            </article>
        </section>
    </div>
</div>
@endsection
