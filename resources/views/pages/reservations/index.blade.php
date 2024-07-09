@extends('layout.master')
@section('res')
active
@endsection
@section('content')

<div class="container-fluid pt-4 px-4">
<div class="bg-secondary text-center rounded p-4">

    <div class="d-md-flex justify-content-between pe-5 pb-3">
        <h6 class="mb-0">les réservations du location</h6>
        <ul class="nav nav-pills d-inline-flex justify-content-between">

            <li class="nav-item me-2">
                <a class="btn btn-outline-primary active"  href="">Location</a>
            </li>
            <li class="nav-item me-2">
                <a class="btn btn-outline-primary" href="{{route('achates.index')}}">Acheter</a>
            </li>

        </ul>
       </div>

       <div class='d-flex justify-content-between my-3 px-4'>
          <h4>
          Tout les reservations @isset($active) @if($active!=0)qui <span class="text-primary">  {{$reservations[0]->etate}}</span> @endif @endisset 
          </h4>


            <div class='text-end'>
              <a href="{{route('reservations.filterEtate',0)}}" class='btn btn-outline-primary @isset($active) @if($active==0) active @endif @endisset"'>Tout</a>
              <a href="{{route('reservations.filterEtate','en cours')}}" class="btn btn-outline-primary @isset($active) @if($active=='en cours') active @endif @endisset">en coure</a>
              <a href="{{route('reservations.filterEtate','valider')}}" class="btn btn-outline-primary @isset($active) @if($active=='valider') active @endif @endisset">valider</a>
              <!-- <a href="" class='btn btn-outline-primary'>en coure</a> -->
            </div>



        </div>

    <div class="table-responsive">
        <table class="table text-start align-middle table-bordered table-hover mb-0">
            <thead>
                <tr class="text-white">
                    <th scope="col">#</th>
                    <th scope="col">Date reservation</th>
                    <th scope="col">preprieter</th>
                    <th scope="col">proprietaire</th>
                    <th scope="col">telephone</th>
                    <th scope="col">client</th>
                    <th scope="col">telephpn</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)

                <tr>
                    <td>{{$reservation['id']}}</td>
                    <td>{{$reservation['dateReservation']}}</td>
                    <td>{{$reservation['immobiliere']->nom}}</td>
                    <td>{{$reservation['immobiliere']->proprietaire->nom}} {{$reservation['immobiliere']->proprietaire->prenom}}</td>
                    <td>{{$reservation['immobiliere']->proprietaire->tele}}</td>
                    <td>{{$reservation->profile->nom}} {{$reservation->profile->prenom}}</td>
                    <td>{{$reservation->profile->tele}}</td>
                    <td class="d-md-flex justify-content-between">
                        <a class="bi bi-eye btn-sm me-1 btn-info" href="{{route('reservations.show',$reservation['id'])}}"></a>
                        <a class="bi bi-pencil btn-sm me-1 btn-primary" href="{{route('reservations.show',$reservation['id'])}}"></a>

                        {{-- <a class="bi bi-check-circle btn-sm me-1 btn-success" href=""></a>
                        <a class="bi bi-trash btn-sm me-1 btn-danger " href=""></a> --}}
                    </td>
                </tr>

                @endforeach
               <tr>
                <td colspan="8"> {{$reservations->links()}}</td>
               </tr>

            </tbody>
        </table>
    </div>
</div>

</div>
@endsection
