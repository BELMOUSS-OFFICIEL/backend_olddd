@extends('layout.master')
@section('res')
active
@endsection
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary  rounded p-4 ">

        <h5>Modifier la date de reservation <span class="text-primary">{{$reservation->profile->nom}} {{$reservation->profile->prenom}}</span>
        </h5>
        <form action="{{route('reservations.update',$reservation->id)}}" method="post" class="d-flex gap-3">
            @csrf
            @method('PUT')
            <input type="date" class="form-control" name="dateDebut" value="{{$reservation['dateDebut']}}">
            <input type="date" class="form-control" name="dateFin" value="{{$reservation['dateFin']}}">

            <input type="submit" value="Modifier" class="btn btn-primary">


        </form>

    </div>
</div>
@endsection
