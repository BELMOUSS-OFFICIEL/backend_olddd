@extends('layout.master')
@section('res')
active
@endsection
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h4>Ajouter une nouvelles reservation </h4>
        <form action="" method="post" class="px-5 py-3">
            <div class="d-flex gap-5">
                <input class="form-control mb-3" type="text" placeholder="nom" >
                <input class="form-control mb-3" type="text" placeholder="prenom" >
            </div>
            
            <div class="d-flex gap-5">
                <input class="form-control mb-3" type="text" placeholder="Telephon" >
                <input class="form-control mb-3" type="email" placeholder="E-mail" >
            </div>
            <div class="d-flex gap-4 justify-content-between">
           
                    <select class="form-select mb-4" id="floatingSelect"
                        aria-label="Floating label select example">
                        <option selected>Types</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
            
            
           
                    <select class="form-select mb-4" id="floatingSelect"
                        aria-label="Floating label select example">
                        <option selected>Categories</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
            
            
           
                    <select class="form-select mb-4" id="floatingSelect"
                        aria-label="Floating label select example">
                        <option selected>Immobiliers</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
            
            
            </div>
            <div class="d-flex gap-5">
                <input class="form-control mb-3" type="date"  >
                <input class="form-control mb-3" type="date" >
            </div>
            <div class="d-flex gap-5">
                <input class="form-control mb-3" type="text" placeholder="nombre de perssonnes" >
              
                    <select class="form-select form-select-sm " id="floatingSelect">
                        <option selected>Choisir la relation entr les perssonnes</option>
                        <option value="1">famille</option>
                        <option value="2">Emploier</option>
                        <option value="3">amis</option>
                    </select>
                    {{-- <label for="floatingSelect">Choisir la relation entr les perssonnes</label> --}}
               
            </div>

            <div class="d-flex justify-content-between p-4">
                <input class="btn btn-success" type="submit" value="Ajouter">
                <a class="text-primary me-5" href="{{route('reservations.index')}}">Retour</a>
            </div>
        </form>
    </div>
</div>

@endsection
