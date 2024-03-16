@extends('base')

@section('title')
Ressource texte de loi
@endsection

@section('content')
<div class="bg-white p-1 p-lg-2">
    <div class="container">
      <section class="mb-9 mb-lg-10 mb-xxl-11 text-center text-lg-start" id="">
        <h4 class="mb-x1 fs-8 fs-md-7 fs-xxl-6 text-success fw-bold pt-6 text-capitalize">texte de loi </h4>
        <h1 class="fs-5 fs-lg-3 fs-xl-2 text-secondary text-capitalize fw-light mb-x1">ressource <span
            class="fw-bold">text </span> <br> de <span class="fw-bold">loi
          </span></h1>
          <div class="row mb-7 mb-lg-8 mb-xl-9 gap-3"> 
            <div class="col-12 col-lg">
              <p class="text-black fs-10 fs-md-9 fs-xxl-8 lh-xl mb-0 line-clamp-5"><span class="fw-bold"> 
            </span> <span class="fw-bold"></span></p>
            </div>
            <div class="col-12 col-lg">
                <p class="text-black fs-10 fs-md-9 fs-xxl-8 lh-xl mb-0 line-clamp-5"><span class="fw-bold"> 
              </span> <span class="fw-bold"></span></p>
              </div>

             
          </div>
          <button class="btn btn-gradient fs-8 mt-1 d-inline-flex"><span>Qui sommes-nous ?</span><span class="uil uil-arrow-right"></span></button>
      </section>
    </div>
</div>
@endsection