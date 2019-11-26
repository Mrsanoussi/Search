@extends('master.master')

@section('title')
    Zoekmachine
@endsection


@section('content')
  
    @section('side')
    <div class="sportschool-section container">
        <div class="sidebar">
            <h3>Sportschool</h3>
                <ul>
                @foreach ($categories as $category)
                    <li><a href="{{ route('index', ['category' => $category->name]) }}">{{ $category->name }}</a></li>
                @endforeach
                </ul>
        </div>
    </div>

    @endsection

@foreach($sportschools->chunk(4) as $sportschoolChunk)
<div class="row mt-1">
    @foreach($sportschoolChunk as $sportschool)
  <div class="col-sm-6 col-md-3 d-flex flex-row">
    <div class="img-thumbnail">
      <img src="{{ $sportschool->imagepath }}" class="img-responsive mx-auto" width="245" height="200">
      <div class="caption">
      <a href="/app/show/{{ $sportschool->id }}" class="font-weight-bold">{{ $sportschool->name }}</a>
        <p class="description">{{ $sportschool->description }}</p>
        <div class="clearfix">
            <h6 class="pull-left price align-bottom pull-down">
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