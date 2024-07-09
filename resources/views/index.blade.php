@extends('layout.master')

@section('dash')
    active
@endsection
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4 ps-3">
                <i class="bi bi-alarm fs-2 text-primary"></i>
                <div class="ps-2">
                    <p class="mb-2">Reservations en cours  </p>
                    <h6 class="mb-0">{{$reservationslengt->count()}}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4 ps-3">
                <i class="bi bi-alarm fs-2 text-primary"></i>
                <div class="ms-2">
                    <p class="mb-2">Achat en cours</p>
                    <h6 class="mb-0">{{$achatesLengts->count()}}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="bi bi-alarm fs-2 text-primary"></i>
                <div class="ms-2">
                    <p class="mb-2"> Immobilieres</p>
                    <h6 class="mb-0">{{$immobilier->count()}}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="bi bi-alarm fs-2 text-primary"></i>
                <div class="ms-2">
                    <p class="mb-2">Utilisateurs</p>
                    <h6 class="mb-0">{{count($profile)}}</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Nouvelles réservations du location</h6>
            <a href="{{route('reservations.index')}}" class="text-primary">Voir plus</a>
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

                    @if ($reservations)
                    @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{$reservation['id']}}</td>
                        <td>{{$reservation['dateReservation']}}</td>
                        <td>{{$reservation->immobiliere->nom}}</td>
                    <td>{{$reservation['immobiliere']->proprietaire->nom}} {{$reservation['immobiliere']->proprietaire->prenom}}</td>
                    <td>{{$reservation['immobiliere']->proprietaire->tele}}</td>
                    <td>{{$reservation->profile->nom}} {{$reservation->profile->prenom}}</td>
                    <td>{{$reservation->profile->tele}}</td>
                        <td class="d-md-flex justify-content-between">
                            <a class="bi bi-eye btn-sm me-1 btn-info" href="{{route('reservations.show',$reservation['id'])}}"></a>
                            <a class="bi bi-pencil btn-sm me-1 btn-primary" href="{{route('reservations.show',$reservation['id'])}}"></a>

                        </td>
                    </tr>

                    @endforeach

                    @endif

                </tbody>
            </table>
        </div>
    </div>

    <div class="bg-secondary text-center rounded p-4 mt-3">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Nouvelles réservations d'achat</h6>
            <a href="{{route('achates.index')}}" class="text-primary">Voir plus</a>
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

                    @if ($achates)
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
                            <form action="{{ route('achates.destroy', $achate->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="bi bi-check-circle btn-sm me-1 btn-success " type="submit"></button>
                            </form>
                            <form action="{{ route('achates.destroy', $achate->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="bi bi-trash btn-sm me-1 btn-danger " type="submit"></button>
                            </form>

                        </td>
                    </tr>
                    @endforeach

                    @endif

                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
