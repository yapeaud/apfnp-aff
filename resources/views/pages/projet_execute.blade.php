@extends('base')

@section('title')
Projets exécutés
@endsection

@section('content')
<div class="bg-white p-1 p-lg-2">
  <div class="container">
    <section class="mb-9 mb-lg-10 mb-xxl-11 text-center text-lg-start" id="">
      <h4 class="mb-x1 fs-8 fs-md-7 fs-xxl-6 text-success fw-bold pt-6 text-capitalize">projet </h4>
      <h1 class="fs-5 fs-lg-3 fs-xl-2 text-secondary text-capitalize fw-light mb-x1">projets <span
          class="fw-bold"></span> <span class="fw-bold">exécutés
        </span></h1>
      <article class="row mb-7 mb-lg-8 mb-xl-9 gap-3">
        <div class="col-12 col-lg">
          <p class="text-black fs-10 fs-md-9 fs-xxl-8 lh-xl mb-0 line-clamp-5 text-justify"><span class="fw-bold">2022 :
            </span>contribution à la gestion durable des ressources forestières par le développement de l'observation
            indépendante dans le domaine forestier en périphérie de la Réserve Naturelle de Mabi-Yaya, <span
              class="fw-bold">financé par l'Union Européenne</span></p>
        </div>
        <div class="col-12 col-lg">
          <p class="text-black fs-10 fs-md-9 fs-xxl-8 lh-xl mb-0 line-clamp-5 text-justify"><span class="fw-bold">2022 :
            </span>création de 50 ha de plantations forestières dans les régions de la Mé et du Sud-Comoé dans le cadre
            du projet PROMIRE, <span class="fw-bold">financé par le Fond Vert Carbone (GCF) et mis en œuvre par la
              FAO</span></p>
        </div>
      </article>
    </section>
  </div>
</div>
@endsection