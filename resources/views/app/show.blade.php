@extends('master.master')

@section('content')
<div class="col-sm-6 col-md-4 mt-2 mx-auto">
    <div class="img-thumbnail">
      <img src="{{ $sportschool->imagepath }}" class="img-responsive mx-auto" width="330" height="300">
      <div class="caption">
      <h3>{{ $sportschool->name }}</h3>
        <p class="description">{{ $sportschool->description }}</p>
        <h5 class="description">Plaats: {{ $sportschool->place }}</h5>
        <div class="clearfix">
            <h6 class="pull-left price d-flex flex-row bd-highlight">
            Prijs: €{{ $sportschool->price }}
            </h6><a href="{{ $sportschool->url }}" class="btn btn-success d-flex justify-content-center" role="button">Bekijk de site!</a>   
        </div>
      </div>
    </div>
  </div>
@endsection