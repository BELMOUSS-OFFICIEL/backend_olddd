@extends('layout.master')

@section('imm')
    active
@endsection
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary  rounded p-4">

            <div class="row g-0 gx-5 align-items-end">
            @if(session()->has('success'))
<div class="alert alert-success w-75 m-auto alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{session('success')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
                <div class="text-start mx-auto  wow mt-2 ">
                    <h3 class="mb-3">Les Proprietes desponibles</h3>

                </div>
      

            </div>
            <div class="tab-content px-5">
          <div class="text-end m-4">
            <a class="btn btn-outline-primary active" href="{{route('immobiliers.index')}}">Desponibles</a>
            <a class="btn btn-outline-primary" href="{{route('immobiliersEncours.index')}}">En cours</a>
          </div>
          <hr class=" bg-dark fw-bold">
                <div class="row ">

                    @foreach ($immobilieres as $immobiliere)
                        <div class="col-lg-4 col-md-6  pt-1  " data-wow-delay="0.1s" style="border: 4px solid black">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a class="hova" href="{{ route('immobiliers.show', $immobiliere['id']) }}"><img
                                            class="img-fluid"
                                            src="{{ asset('storage/' . $immobiliere['medias'][0]->src . '') }}" alt=""
                                            style=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        {{ $immobiliere['type']->type }}</div>
                                    <div
                                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        {{ $immobiliere['categorie']->categorie }}</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">{{ $immobiliere['prix'] }}$</h5>
                                    <a class="d-block h5 mb-2 hova">{{ $immobiliere['nom'] }}</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $immobiliere['adresse'] }}
                                    </p>
                                </div>
                                <div class="d-flex border-top">

                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-primary me-2"></i>{{ $immobiliere['nbrChamber'] }}
                                        Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-primary me-2"></i>{{ $immobiliere['nprToilets'] }}
                                        Bath</small>

                                </div>

                            </div>
                        </div>
                    @endforeach




                </div>



            </div>
<div class="border border-0 border-top mt-3 p-2">

    {{$immobilieres->links()}}
</div>
        </div>
    </div>

@endsection
