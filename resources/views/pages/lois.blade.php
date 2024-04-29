@extends('base')

@section('title')
Lois et textes réglementaires
@endsection

@section('content')
<div class="bg-white p-1 p-lg-2">
    <div class="container">
      <section class="mb-9 mb-lg-10 mb-xxl-11 text-center text-lg-start" id="">
        <h4 class="mb-x1 fs-8 fs-md-7 fs-xxl-6 text-success fw-bold pt-6 text-capitalize">texte de loi </h4>
        <h1 class="fs-5 fs-lg-3 fs-xl-2 text-secondary text-capitalize fw-light mb-x1"> <span
            class="fw-bold">lois </span> 
        </h1>
          <article class="row mb-7 mb-lg-8 mb-xl-9 gap-3"> 
            <div class="col-12 col-lg">
              <a href="{{ asset('/assets/docs/lois/le_code_forestier.pdf') }}" download="le_code_forestier.pdf">
                <span>Le code forestier</span>
               <button class="btn btn-gradient fs-8 mt-1 d-inline-flex"><span>Télécharger</span></button>
             </a>
            </div>
            <div class="col-12 col-lg">
              <a href="{{ asset('assets/docs/lois/CODE DE L\'EAU_231211_161835.pdf') }}" download="CODE DE L'EAU_231211_161835.pdf">
                <span>Le code de l'eau</span>
                <button class="btn btn-gradient fs-8 mt-1 d-inline-flex"><span>Télécharger</span></button>
              </a>
              </div>
          </article>
          <article class="row mb-7 mb-lg-8 mb-xl-9 gap-3">
            <div class="col-12 col-lg">
              <a href="{{ asset('/assets/docs/lois/Code_de_l\'environnement_2023.pdf') }}" download="Code_de_l'environnement_2023.pdf">
                <span>Le code de l'environnement 2023</span>
                <button class="btn btn-gradient fs-8 mt-1 d-inline-flex"><span>Télécharger</span></button>
              </a>
            </div>
          </article>
      </section>
    </div>
</div>
@endsection
le_code_forestier.pdf