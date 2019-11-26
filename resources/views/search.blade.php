@extends('master.master')

@section('content')

@foreach($sportschools->chunk(4) as $sportschoolChunk)
<div class="mt-4 d-flex flex-row">
@foreach($sportschoolChunk as $sportschool)
  <div class="col-sm-6 col-md-3 d-flex flex-row">
    <div class="img-thumbnail">
      <img src="{{ $sportschool->imagepath }}" class="img-responsive mx-auto" width="240" height="200">
      <div class="caption">
      <a href="/app/show/{{ $sportschool->id }}" class="font-weight-bold">{{ $sportschool->name }}</a>
        <p class="description">{{ $sportschool->description }}</p>
        <h6 class="font-weight-bold">Plaats: {{ $sportschool->place }}</h6>
        <div class="clearfix">
            <h6 class="pull-left align-bottom">
            €{{ $sportschool->price }}
            </h6>
        </div>
      </div>
    </div>
  </div>
@endforeach
</div>
@endforeach

@endsection