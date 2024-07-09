@extends('layout.master')
@section('res')
    active
@endsection
@section('js')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
@endsection


@section('content')
    {{-- {{$erroor=''}} --}}
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary  rounded p-4 ">


            
            <h4>


                Details de reservation de <span class="text-primary">{{ $reservation->profile->nom }}
                    {{ $reservation->profile->prenom }}</span>
            </h4>
            @if(session()->has('error'))
<div class="alert @if(session('error')=='bien modifier')alert-success @else alert-danger @endif alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{session('error')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


@if(session()->has('success'))
<div class="alert alert-success  alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{session('success')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
            <!-- <div class="gap-3 d-md-flex">
                <div class="table-responsive col-md-6">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">

                        <tr class="text-white">

                            <th scope="col">Date debut</th>
                            <td scope="row">{{ $reservation['dateDebut'] }}</td>

                        </tr>
                        <tr class="text-white">
                            <th scope="col">Date fin</th>
                            <td scope="row">{{ $reservation['dateFin'] }}</td>
                        </tr>



                        <tr class="text-white">
                            <th scope="col">preprieter</th>
                            <td scope="row">{{ $reservation['immobiliere']->nom }}</td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">propritaire</th>
                            <td scope="row">{{ $reservation['immobiliere']->proprietaire->nom }}
                                {{ $reservation['immobiliere']->proprietaire->prenom }}</td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">Telephon</th>
                            <td scope="row">{{ $reservation['immobiliere']->proprietaire->tele }} </td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">email</th>
                            <td scope="row">{{ $reservation['immobiliere']->proprietaire->email }}</td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">client</th>
                            <td scope="row">{{ $reservation->profile->nom }} {{ $reservation->profile->prenom }}</td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">Telephon</th>
                            <td scope="row">{{ $reservation->profile->tele }} </td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">email</th>
                            <td scope="row">{{ $reservation->profile->tele }}</td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">nombre perssonnes</th>
                            <td scope="row">{{ $reservation['nbPerssonnes'] }}</td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">relation</th>
                            <td scope="row">{{ $reservation['reservationsrolation']->rolation }}</td>
                        </tr>




                    </table>
                </div>


                @isset($valider)
                    @if ($valider == 1)
                        <div class="mt-5">
                            <h5>Modifier la date de reservation</h5>

                            <form action="{{ route('reservations.update', $reservation->id) }}" method="post"
                                class="d-flex gap-3">
                                @csrf
                                @method('PUT')
                                <input type="date" class="form-control" name="dateDebut"
                                    value="{{ $reservation['dateDebut'] }}">
                                <input type="date" class="form-control" name="dateFin"
                                    value="{{ $reservation['dateFin'] }}">

                                <input type="submit" value="Modifier" class="btn btn-primary">


                            </form>



                            <div class="mt-5 ">
                                <h5>controler la reservation</h5>
                                <div class="d-flex justify-content-between">


                                    <div class="d-flex gap-4">
                                        <form action="{{ route('reservations.update', $reservation->id) }}" method="post"
                                            class="d-flex gap-3">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="etate" value="valide">
                                            <input class="btn btn-success" type="submit" value="Valide">
                                        </form>


                                        <form action="{{ route('reservations.destroy', $reservation->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input class="btn btn-danger" type="submit" value="Refuser ">
                                        </form>
                                    </div>
                                    <a href="{{ route('reservations.index') }}" class="text-warning">Retour</a>
                                </div>
                            </div>
                        </div>
                    @elseif ($valider == 0)
                        <div class="mt-5 ">

                            <h1 class=" bg-primary px-1 py-3 text-secondary">la reservation est valider</h1>
                           <div class="d-flex justify-content-between align-items-center">
                            <form action="{{ route('reservations.destroy', $reservation->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" value="Refuser ">
                            </form>
                            <a href="{{ route('reservations.index') }}" class="btn btn-warning">Retour</a>
                           </div>
                        </div>
                    @endif
                @endisset





            </div> -->

            <div class='d-lg-flex'>

                    <div class="col-sm-12 col-lg-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Reservation</h6>
                            <table class="table table-bordered table-hover">
                              
                                <tbody>
                                    <tr class="text-white">
                                        <th scope="row">Date reservation</th>
                                        <td>{{$reservation->dateReservation}}</td>
                                        
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">Date debut</th>
                                        <td>{{$reservation->dateDebut}}</td>
                                      
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">Date fin</th>
                                        <td>{{$reservation->dateFin}}</td>
                                    
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">Immobiliere</th>
                                        <td>{{$reservation->immobiliere->nom}}</td>
                                    
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">Adresse</th>
                                        <td>{{$reservation->immobiliere->adresse}}</td>
                                    
                                    </tr>

                                    <tr class="text-white">
                                        <th scope="row">Sector</th>
                                        <td>{{$reservation->immobiliere->sector}}</td>
                                    
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">Proprietaire</th>
                                        <td>{{$reservation->immobiliere->proprietaire->nom}} {{$reservation->immobiliere->proprietaire->prenom}}</td>
                                    
                                    </tr>

                                    <tr class="text-white">
                                        <th scope="row">CIN</th>
                                        <td>{{$reservation->immobiliere->proprietaire->cin}}</td>
                                    
                                    </tr>


                                    <tr class="text-white">
                                        <th scope="row">Telephone</th>
                                        <td>{{$reservation->immobiliere->proprietaire->tele}}</td>
                                    
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">Email</th>
                                        <td>{{$reservation->immobiliere->proprietaire->email}}</td>
                                    
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">Client</th>
                                        <td>{{$reservation->profile->nom}} {{$reservation->profile->prenom}}</td>
                                    
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">CIN</th>
                                        <td>{{$reservation->profile->cin}}</td>
                                    
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">Telephone</th>
                                        <td>{{$reservation->profile->tele}}</td>
                                    
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">Email</th>
                                        <td>{{$reservation->email}}</td>
                                    
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">Nombre perssonnes</th>
                                        <td>{{$reservation->nbPerssonnes}}</td>
                                    
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">Relation</th>
                                        <td>{{$reservation->reservationsrolation->relation}}</td>
                                    
                                    </tr>
                                  
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                  @if($reservation->etate=='valider')

                  <div class="col-sm-12 col-lg-6">
                      <div class="bg-secondary rounded h-100 p-4 mt-5 pt-5">
                        <div class="bg-primary mt-5 p-3 pt-0 rounded ">
                        <h4 class="mb-4 text-center mt-5 pt-5">la reservation est valider</h4>
                        <form action="{{route('reservations.destroy',$reservation->id)}}" class="text-center" method="post">
                          @csrf
                          @method('DELETE')
                          

                          <button class="btn btn-danger" type="submit" onclick="return confirm('Supprimer?!!')">Supprimer</button>
                          </form>
                        </div>
                        

                      </div>
                  </div>
                  @else

                  <div class="col-sm-12 col-lg-6">
                      <div class="bg-secondary rounded h-100 p-4">
                        <h4 class="mb-4 text-center mt-5 pt-5">Modifications du reservation</h4>
                        <form action="{{route('reservations.update',$reservation->id)}}" method="post">
                          @csrf
                          @method('PUT')
                          <table class="w-75 m-auto">
                              <tr>
                                <th>
                                  <label for="dateDebut">Date debut</label>
                                </th>
                                <td>
                                  <input type="date" name="dateDebut" id="dateDebut" class="ms-2 form-control" value="{{$reservation->dateDebut}}">
                                </td>  
                              </tr>
                              <tr>
                              <th>
                                  <label for="dateFin">Date fin</label>
                                </th>
                                <td>
                                  <input type="date" name="dateFin" id="dateFin" class="ms-2 form-control" value="{{$reservation->dateFin}}">
                                </td>
                              </tr>


                              <tr >
                              <td colspan="2">
                                  <input class="btn btn-danger m-4 mb-2" type="reset" value="Annule">
                                
                                  <input class="btn btn-success  m-4 mb-2" type="submit" value="Modifier">
                                </td>
                              </tr>
                          </table>
                        </form>

                        <hr>
                        <h4 class="text-center">Actions</h4>
                        <div class="d-lg-flex px-5 mx-5 justify-content-between">
                          <!-- <button class="btn btn-warning">Refuser</button> -->
                          <form action="{{route('reservations.destroy',$reservation->id)}}" class="text-center" method="post">
                          @csrf
                          @method('DELETE')
                          

                          <button class="btn btn-warning" type="submit" onclick="return confirm('Rufeser?!!')">Refuser</button>
                          </form>

                          <form action="{{route('reservations.update',$reservation->id)}}" method="post">
                          @csrf
                          @method('PUT')
                          <input type="hidden" name="etate" value="valider">
                          {{-- <input type="hidden" name="immobiliere_id" value="valider"> --}}

                          <button class="btn btn-success" type="submit">Valider</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  @endif
</div>

        </div>

    </div>


@endsection
