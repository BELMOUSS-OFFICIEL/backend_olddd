@extends('layout.master')
@section('com')
active
@endsection
@section('content')

<div class="container-fluid pt-4 px-4">
  @if(session()->has('success'))
  <div class="alert alert-success w-75 m-auto alert-dismissible fade show" role="alert">
                                  <i class="fa fa-exclamation-circle me-2"></i>{{session('success')}}
                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-8 m-auto mt-2">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Messages</h6>
                                
                            </div>
                            @foreach ($reviews as $item)
                            <div class="d-flex align-items-center border-bottom py-3">
                              {{-- <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;"> --}}
                              <div class="w-100 ms-3">
                                  <div class="d-flex w-100 justify-content-between">
                                      <h6 class="mb-0">{{$item->name}}</h6>
                                      <small>{{$item->email}}</small>
                                  </div>
                                  <span>{{$item->mesage}}</span>
                                  <br>
                                  <span class="text-primary">{{$item->dateMessage}}</span>
                              <div class="text-end d-flex justify-content-end">
                                @if ($item->etate!=='valider')
                                <form action="{{route('reviews.update',$item->id)}}" method="post">
                                  @csrf
                                  @method('PUT')
                    
                                  <input class="text-success bg-secondary border-0" type="submit" value="Valider">
                                  </form>
                                @endif
                              

                                <form action="{{route('reviews.destroy',$item->id)}}" method="post">
                                  @csrf
                                @method('DELETE')
                    
                                  <input class="text-danger bg-secondary border-0" type="submit" value="Supprimer">
                                  </form>
                              </div>
                              </div>
                            

                          </div>
                            @endforeach
                            
                            
                        </div>
                    </div>
                  
                  
                </div>
</div>

@endsection