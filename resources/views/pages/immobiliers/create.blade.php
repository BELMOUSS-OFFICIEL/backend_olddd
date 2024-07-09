@extends('layout.master')

@section('ajo')
    active
@endsection
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary  rounded p-4">
            <h4 class="mb-3">Ajouter une nouvelle immobilier</h4>
            <form action="{{ route('immobiliers.store') }}" method="post" enctype="multipart/form-data">
                @csrf


                <div class=" rounded h-100 p-2 border border-3 ">
                    <h5 class="my-2 ps-1">les donnees de l'immobilie</h5>
                    <div class="d-lg-flex gap-3 justify-content-between  ">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="villa/appartement/...." name="nom" value="{{old('nom')}}">
                            <label for="floatingInput">Nom Immobilie</label>
                            @error('nom')
                                <p><i class="text-danger">{{ $message }}</i></p>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="villa/appartement/...." name="adresse" value="{{old('adresse')}}">
                            <label for="floatingInput">Adresse</label>
                            @error('adresse')
                                <p><i class="text-danger">{{ $message }}</i></p>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="villa/appartement/...." name="sector" value="{{old('sector')}}">
                            <label for="floatingInput">Sector </label>
                            @error('sector')
                                <p><i class="text-danger">{{ $message }}</i></p>
                            @enderror
                        </div>


                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="villa/appartement/...." name="prix" value="{{old('prix')}}" >
                            <label for="floatingInput">Prix </label>
                            @error('prix')
                                <p><i class="text-danger">{{ $message }}</i></p>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="villa/appartement/...." name="prixParJour" value="{{old('prixParJour')}}">
                            <label for="floatingInput">prix par jour</label>
                        </div>


                    </div>
                    <div class="d-flex gap-3">

                        <div class="w-50 mb-3">
                            <select class="form-select form-select-sm " name="categorie_id"
                            aria-label=".form-select-sm example" >
                            <option selected >Categoris </option>
                            <option value="1">Villa</option>
                            <option value="2">Appartement</option>
                            <option value="3">Terre</option>
                            <option value="4">Garage</option>
                        </select>
                        @error('categorie_id')
                            <p>
                                <i class="text-danger">{{ $message }}</i>
                            </p>
                        @enderror
                        </div>
                        <div class="w-50 mb-3">
                            <select class="form-select form-select-sm " aria-label=".form-select-sm example" name="type_id">
                                <option selected>Type </option>
                                <option value="1">Location</option>
                                <option value="2">Vente</option>

                            </select>
                            @error('type_id')
                            <p>
                                <i class="text-danger">{{ $message }}</i>
                            </p>
                        @enderror
                        </div>

                    </div>

                    <div class="form-floating">
                        <textarea name="description" class="form-control" placeholder="descripton ..." id="floatingTextarea"
                            style="height: 150px;" value="{{old('description')}}"></textarea>
                        <label for="floatingTextarea">Description </label>
                        @error('description')
                            <p>
                                <i class="text-danger">{{ $message }}</i>
                            </p>
                        @enderror
                    </div>

                    <div class="d-lg-flex justify-content-between mt-3 gap-4">

                        <div class="form-floating mb-3">
                            <input name="nbrChamber" type="text" class="form-control" id="floatingInput"
                                placeholder="1/2/...." value="{{old('nbrChamber')}}">
                            <label for="floatingInput">Nomber chambers</label>
                        </div>

                        <div class="mb-3">
                            <input class="form-control bg-dark" type="file" id="formFileMultiple" name="images[]"
                                multiple />
                            <label for="formFileMultiple" class="form-label" value="{{old('images')}}">Choisir les images</label>
                            @error('images')
                            <p>
                                <i class="text-danger">{{ $message }}</i>
                            </p>
                        @enderror
                        </div>
                        {{-- <div class="mb-3">
                          <input class="form-control bg-dark" type="file" id="vedio" name="vedio"
                              multiple />
                          <label for="vedio" class="form-label" value="{{old('vedio')}}">Choisir le video</label>
                          @error('vedio')
                          <p>
                              <i class="text-danger">{{ $message }}</i>
                          </p>
                      @enderror
                      </div> --}}

                        <div class="form-floating mb-3">
                            <input name="nprToilets" type="text" class="form-control" id="floatingInput"
                                placeholder="1/2/...." value="{{old('nprToilets')}}">
                            <label for="floatingInput">Nomber Toilets</label>
                        </div>
                    </div>
                    <div style="border-top: 2px solid black"></div>
                    <h4 class="my-2 ps-1">les donnees de l'immobilier</h4>

                    <div class="d-lg-flex gap-3 justify-content-between  ">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="villa/appartement/...." name="cin" value="{{old('cin')}}">
                            <label for="floatingInput">CIN </label>
                            @error('cin')
                            <p>
                                <i class="text-danger">{{ $message }}</i>
                            </p>
                        @enderror
                        </div>


                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="villa/appartement/...." name="nomp" value="{{old('nomp')}}">
                            <label for="floatingInput">Nom </label>
                            @error('nomp')
                            <p>
                                <i class="text-danger">{{ $message }}</i>
                            </p>
                        @enderror
                        </div>


                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="villa/appartement/...." name="prenom" value="{{old('prenom')}}">
                            <label for="floatingInput">Prenom </label>
                            @error('prenom')
                            <p>
                                <i class="text-danger">{{ $message }}</i>
                            </p>
                        @enderror
                        </div>

                    </div>
                    <div class="d-lg-flex gap-3 justify-content-between  ">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="villa/appartement/...." name="tele" value="{{old('tele')}}">
                            <label for="floatingInput">Telephone  </label>
                            @error('tele')
                            <p>
                                <i class="text-danger">{{ $message }}</i>
                            </p>
                        @enderror
                        </div>


                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="villa/appartement/...." name="email" value="{{old('email')}}">
                            <label for="floatingInput">E-mail </label>
                            @error('email')
                            <p>
                                <i class="text-danger">{{ $message }}</i>
                            </p>
                        @enderror
                        </div>
                    </div>
                    <div style="border-top: 2px solid black"></div>
                    <div class="mt-3 py-4 d-flex justify-content-between">
                        <a href="{{ route('immobiliers.index') }}" class="btn btn-danger">Retour</a>

                        <input type="submit" class="btn btn-primary" value="Ajouter" onclick="return this.style.display='none'">

                    </div>
                </div>

        </div>

    </div>

    </form>
    </div>
    </div>
@endsection
