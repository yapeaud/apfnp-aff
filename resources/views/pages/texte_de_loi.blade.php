@extends('base')

@section('title')
Ressource texte de loi
@endsection

@section('content')
<div class="bg-white p-1 p-lg-2">
    <div class="container">
      <section class="mb-9 mb-lg-10 mb-xxl-11 text-center text-lg-start" id="">
        <h4 class="mb-x1 fs-8 fs-md-7 fs-xxl-6 text-success fw-bold pt-6 text-capitalize">lois et textes réglementaires </h4>
        <h1 class="fs-5 fs-lg-3 fs-xl-2 text-secondary text-capitalize fw-light mb-x1">ressource <span
            class="fw-bold">loi </span> <br> et <span class="fw-bold">texte
          </span>
        </h1>
        <article class="row mb-7 mb-lg-8 mb-xl-9 gap-3"> 
          <div class="col-12 col-lg">
            <a href="texte-de-loi-accords-internationaux"><button class="btn btn-gradient fs-8 mt-1 d-inline-flex"><span>Accords internationaux</span><span class="uil uil-arrow-right"></span></button></a>
          </div>
          <div class="col-12 col-lg">
            <a href="texte-de-loi-decrets"><button class="btn btn-gradient fs-8 mt-1 d-inline-flex"><span>Décrets</span><span class="uil uil-arrow-right"></span></button></a>
          </div>
        </article>
        <article class="row mb-7 mb-lg-8 mb-xl-9 gap-3"> 
          <div class="col-12 col-lg">
            <a href="texte-de-loi-accords-internationaux-ratifies"><button class="btn btn-gradient fs-8 mt-1 d-inline-flex"><span>Accords internationaux ratifiés</span><span class="uil uil-arrow-right"></span></button></a>
          </div>
          <div class="col-12 col-lg">
            <a href="texte-de-loi-arretes"><button class="btn btn-gradient fs-8 mt-1 d-inline-flex"><span>Arrêtés</span><span class="uil uil-arrow-right"></span></button></a>
            </div>
        </article>
        <article class="row mb-7 mb-lg-8 mb-xl-9 gap-3">
          <div class="col-12 col-lg">
            <a href="texte-de-loi-lois"><button class="btn btn-gradient fs-8 mt-1 d-inline-flex"><span>Lois</span><span class="uil uil-arrow-right"></span></button></a>
            </div>
            <div class="col-12 col-lg">
              <a href="texte-de-loi-decisions"><button class="btn btn-gradient fs-8 mt-1 d-inline-flex"><span>Décisions</span><span class="uil uil-arrow-right"></span></button></a>
             </div>
        </article>
      </section>
    </div>
</div>
@endsection