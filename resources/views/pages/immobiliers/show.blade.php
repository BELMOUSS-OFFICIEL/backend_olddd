@extends('layout.master')

@section('imm')
    active
@endsection
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary  rounded p-4">

          @if(session()->has('success'))
<div class="alert alert-success  alert-dismissible fade show" role="alert">
                              <i class="fa fa-exclamation-circle me-2"></i>{{session('success')}}
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
            <h5 class="p-3 mb-2">Detailes d'immobilier : <span class="text-primary">{{ $immobiliere['nom'] }}</span></h5>
            <div>
                <div class="bd-example-snippet bd-code-snippet">
                    <div class="bd-example m-0 border-0">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                @foreach ($immobiliere['medias'] as $medias)
                                    <button type="button" data-bs-target="#carouselExampleCaptions"
                                        data-bs-slide-to="{{ $medias['id'] }}" class="active" aria-current="true"
                                        aria-label="Slide {{ $medias['id'] }}"></button>
                                @endforeach

                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('storage/' . $immobiliere['medias'][0]['src'] . '') }}"
                                        class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800"
                                        height="400" alt="">
                                </div>
                                @foreach ($immobiliere['medias'] as $medias)
                                    <div class="carousel-item ">
                                        <img src="{{ asset('storage/' . $medias['src'] . '') }}"
                                            class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800"
                                            height="400" alt="">
                                    </div>
                                @endforeach

                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>








            <div class="gap-3 d-md-flex mt-5">
                <form action="{{ route('immobiliers.update', $immobiliere['id']) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">

                            <tr class="text-white">

                                <th scope="col">Nom</th>
                                <td scope="row"><input class="myform-control" type="text" name="nom"
                                        id="nom" value="{{ $immobiliere['nom'] }}"></td>

                            </tr>
                            <tr class="text-white">
                                <th scope="col">description</th>
                                <td scope="row">
                                    <textarea class="myform-control" name="description" id="description" cols="100" rows="3">{{ $immobiliere['description'] }} </textarea>
                                </td>
                            </tr>
                            <tr class="text-white">
                                <th scope="col">Adress</th>
                                <td scope="row"><input class="myform-control" type="text" name="adresse"
                                        id="adresse" value="{{ $immobiliere['adresse'] }}"> </td>
                            </tr>
                            <tr class="text-white">
                                <th scope="col">Sector</th>
                                <td scope="row"><input class="myform-control" type="text" name="sector"
                                        id="sector" value="{{ $immobiliere['sector'] }}"> </td>
                            </tr>

                            <tr class="text-white">
                                <th scope="col">type</th>
                                <td scope="row"><select class="myform-control" type="text" name="type_id"
                                        id="type_id">
                                        <option value="{{ $immobiliere['type_id'] }}">{{ $immobiliere['type']->type }}
                                        </option>

                                        <option value="1">Achat</option>
                                        <option value="2">Location</option>

                                    </select> </td>
                            </tr>

                            <tr class="text-white">
                                <th scope="col">Categorie</th>
                                <td scope="row">{{ $immobiliere['categorie']->categorie }} </td>
                            </tr>

                            <tr class="text-white">
                                <th scope="col">prix par mois</th>
                                <td scope="row"><input class="myform-control" type="text" name="prix"
                                        id="prix" value="{{ $immobiliere['prix'] }}"> </td>
                            </tr>

                            <tr class="text-white">
                                <th scope="col">prix par jour</th>
                                <td scope="row"><input class="myform-control" type="text" name="prixParJour"
                                        id="prixParJour" value="{{ $immobiliere['prixParJour'] }}"></td>
                            </tr>

                            <tr class="text-white">
                                <th scope="col">propritaire</th>
                                <td scope="row">{{ $immobiliere['proprietaire']->nom }}
                                    {{ $immobiliere['proprietaire']->prenom }}</td>
                            </tr>

                            <tr class="text-white">
                                <th scope="col">Telephon</th>
                                <td scope="row">{{ $immobiliere['proprietaire']->tele }}</td>
                            </tr>

                            <tr class="text-white">
                                <th scope="col">email</th>
                                <td scope="row">{{ $immobiliere['proprietaire']->email }}</td>
                            </tr>







                            <tr class="text-white">
                                <th scope="col">nombre chombers</th>
                                <td scope="row"><input class="myform-control" type="text" name="nbrChamber"
                                        id="nbrChamber" value="{{ $immobiliere['nbrChamber'] }}"></td>
                            </tr>

                            <tr class="text-white">
                                <th scope="col">nomber toiletes</th>
                                <td scope="row"><input class="myform-control" type="text" name="nprToilets"
                                        id="nprToilets" value="{{ $immobiliere['nprToilets'] }}"></td>
                            </tr>





                        </table>

                    </div>
                    <div class="d-flex gap-5 mt-4">
                        <input class="btn btn-primary " type="submit" value="Modifier">






                </form>
                <form action="{{route('immobiliers.destroy', $immobiliere['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" onclick="return confirm('Supprimer?!!')" value="Supprimer">
                </form>
                <a class="btn btn-outline-danger" href="{{ route('immobiliers.index') }}">Retour</a>

            </div>

            </div>

        </div>



    </div>
@endsection


@section('js')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="{{asset('js/cheatsheet.js')}}"></script> --}}
@endsection
