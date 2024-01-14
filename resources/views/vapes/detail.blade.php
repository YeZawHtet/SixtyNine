@extends('layouts.app')
@section('content')
<div class="container pt-5">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <div class="image-container">
                          <img src="{{asset('images/vape1.png')}}" class="img-fluid rounded-start" alt="Vape Image">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Vape Name</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      <a href="{{route('vape.create')}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
