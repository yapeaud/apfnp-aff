@extends('base')

@section('title')
Arrêtés
@endsection

@section('content')
<div class="bg-white p-1 p-lg-2">
    <div class="container">
      <section class="mb-9 mb-lg-10 mb-xxl-11 text-center text-lg-start" id="">
        <h4 class="mb-x1 fs-8 fs-md-7 fs-xxl-6 text-success fw-bold pt-6 text-capitalize">texte de loi </h4>
        <h1 class="fs-5 fs-lg-3 fs-xl-2 text-secondary text-capitalize fw-light mb-x1"> <span
            class="fw-bold">arrêtés </span> 
        </h1>
          <article class="row mb-7 mb-lg-8 mb-xl-9 gap-3"> 
            <div class="col-12 col-lg">
                <a href="{{ asset('/assets/docs/arretes/ARRETE 861 Modalités Elaborat° mise oeuvre Plans Angts F et Agro F.pdf') }}" download="ARRETE 861 Modalités Elaborat° mise oeuvre Plans Angts F et Agro F.pdf">
                  <span>ARRETE 861 Modalités Elaborat° mise oeuvre Plans Angts F et Agro F</span> 
                  <button class="btn btn-gradient fs-8 mt-1 d-inline-flex"><span>Télécharger</span></button>
                </a>
            </div>
            <div class="col-12 col-lg">
              <a href="{{ asset('/assets/docs/arretes/ARRETE CREATION COMMISSION GESTION  FORETS.pdf') }}" download="ARRETE CREATION COMMISSION GESTION  FORETS.pdf">
                <span class="text-capitalize">ARRETE CREATION COMMISSION GESTION  FORETS</span>
                <button class="btn btn-gradient fs-8 mt-1 d-inline-flex"><span>Télécharger</span></button>
              </a>
            </div>
          </article>
          <article class="row mb-7 mb-lg-8 mb-xl-9 gap-3">
            <div class="col-12 col-lg">
              <a href="{{ asset('/assets/docs/arretes/ARRETE N°007 DU 06 JAN 2021 CDT MODALITES ENREGISTREMENTS FORETS.pdf') }}" download="ARRETE N°007 DU 06 JAN 2021 CDT MODALITES ENREGISTREMENTS FORETS.pdf">
                <span>ARRETE N°007 DU 06 JAN 2021 CDT MODALITES ENREGISTREMENTS FORETS</span><br>
                <button class="btn btn-gradient fs-8 mt-1 d-inline-flex"><span>Télécharger</span></button>
              </a>
            </div>
            <div class="col-12 col-lg">
              <a href="{{ asset('/assets/docs/arretes/ARRÊTE N°00578_2020 CRETA° COMMISS° GEST° FORETS.pdf') }}" download="ARRÊTE N°00578_2020 CRETA° COMMISS° GEST° FORETS.pdf">
                <span>ARRÊTE N°00578_2020 CRETA° COMMISS° GEST° FORETS</span>
                <button class="btn btn-gradient fs-8 mt-1 d-inline-flex"><span>Télécharger</span></button>
              </a>
            </div>
          </article>
          <article class="row mb-7 mb-lg-8 mb-xl-9 gap-3">
            <div class="col-12 col-lg">
              <a href="{{ asset('/assets/docs/arretes/ARRETE N°861 DU 13 DEC 2019 MODALITES ELABORAT° ET MISE EN OEUVRE PLANS AMENAGEMENTS FORETS AGRO FORETS.pdf') }}" download="ARRETE N°861 DU 13 DEC 2019 MODALITES ELABORAT° ET MISE EN OEUVRE PLANS AMENAGEMENTS FORETS AGRO FORETS.pdf">
                <span>ARRETE N°861 DU 13 DEC 2019 MODALITES ELABORAT° ET MISE EN OEUVRE PLANS AMENAGEMENTS FORETS AGRO FORETS</span>
                <button class="btn btn-gradient fs-8 mt-1 d-inline-flex"><span>Télécharger</span></button>
              </a>
            </div>
            <div class="col-12 col-lg">
              <a href="{{ asset('/assets/docs/arretes/ARRETE N°1136 DU 08 DEC 2020 PIECES CONSTITUTIVES DOSSIER CONCESS°.pdf') }}" download="ARRETE N°1136 DU 08 DEC 2020 PIECES CONSTITUTIVES DOSSIER CONCESS°.pdf">
                <span>ARRETE N°1136 DU 08 DEC 2020 PIECES CONSTITUTIVES DOSSIER CONCESS°</span><br>
                <button class="btn btn-gradient fs-8 mt-1 d-inline-flex"><span>Télécharger</span></button>
              </a>
            </div>
          </article>
          <article class="row mb-7 mb-lg-8 mb-xl-9 gap-3">
            <div class="col-12 col-lg">
              <a href="{{ asset('/assets/docs/arretes/Arreté transitoire.pdf') }}" download="Arreté transitoire.pdf">
                <span>Arreté transitoire</span>
                <button class="btn btn-gradient fs-8 mt-1 d-inline-flex"><span>Télécharger</span></button>
              </a>
            </div>
          </article>
      </section>
    </div>
</div>
@endsection