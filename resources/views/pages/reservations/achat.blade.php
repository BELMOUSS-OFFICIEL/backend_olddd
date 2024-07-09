@extends('layout.master')
@section('res')
    active
@endsection

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded p-4">

            <div class="d-flex justify-content-between pe-5 pb-3">
                <h6 class="mb-0">les réservations d'achat</h6>
                <ul class="nav nav-pills d-inline-flex justify-content-between">

                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary" href="{{ route('reservations.index') }}">Location</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary active" href="">Acheter</a>
                    </li>

                </ul>
            </div>

            <div class='d-flex justify-content-between my-3 px-4'>
          <h4>
            Tout les reservations  achate  @isset($active) @if($active!=0) qui <span class="text-primary">  {{$achates[0]->etate==1?'Valide':'en cours'}}</span> @endif @endisset
          </h4>


            <div class='text-end'>
              <a href="{{route('achats.filterEtate',0)}}" class='btn btn-outline-primary @isset($active) @if($active==0) active @endif @endisset"'>Tout</a>
              <a href="{{route('achats.filterEtate',2)}}" class="btn btn-outline-primary @isset($active) @if($active==2) active @endif @endisset">en coure</a>
              <a href="{{route('achats.filterEtate',1)}}" class="btn btn-outline-primary @isset($active) @if($active==1) active @endif @endisset">valider</a>
              <!-- <a href="" class='btn btn-outline-primary'>en coure</a> -->
            </div>


      </div>

            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th scope="col">#</th>
                            <th scope="col">Date reservation</th>
                            <th scope="col">Immobiliere</th>
                            <th scope="col">proprietaire</th>
                            <th scope="col">telephone</th>
                            <th scope="col">client</th>
                            <th scope="col">telephpn</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($achates as $achate)
                            <tr>
                                <td>{{ $achate->id }}</td>
                                <td>{{ $achate->dateReservation }}</td>
                                <td>{{ $achate['immobiliere']->nom }}</td>
                                <td>{{ $achate['immobiliere']->proprietaire->nom }}
                                    {{ $achate['immobiliere']->proprietaire->prenom }}</td>
                                <td>{{ $achate['immobiliere']->proprietaire->tele }} </td>
                                <td>{{ $achate->profile->nom }} {{ $achate->profile->prenom }}</td>
                                <td>{{ $achate->profile->tele }}</td>
                                <td class="d-flex justify-content-between">
                                    <!-- <form action="{{ route('achates.update', $achate->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bi bi-check-circle btn-sm me-1 btn-success " type="submit"></button>
                                    </form> -->

                                    @if($achate->etate!=1)
                              <form action="{{route('achates.update',$achate->id)}}" method="post">
                          @csrf
                          @method('PUT')
                          <input type="hidden" name="etate" value="valider">

                          <button class="bi bi-check-circle btn-sm me-1 btn-success " type="submit"></button>
                          </form>
@endif
                                    <!-- <form action="{{ route('achates.destroy', $achate->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bi bi-trash btn-sm me-1 btn-danger " type="submit"></button>
                                    </form> -->

                                    <form action="{{route('achates.destroy',$achate->id)}}" class="text-center" method="post">
                          @csrf
                          @method('DELETE')
                          

                          <button class="btn btn-sm @if($achate->etate==1)btn-danger @else btn-warning @endif bi bi-check-circle btn-sm" type="submit" onclick="return confirm('@if($achate->etate==1)Supprimer?!! @else Refuser?!! @endif')"></button>
                          </form>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>


        </div>
    </div>
@endsection
