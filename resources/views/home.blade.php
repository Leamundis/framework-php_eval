@extends('layouts.app')

@section('content')
<div style="display: flex; flex-wrap: wrap" >
    @foreach ($cats as $cat)
        <div class="col-sm-6 col-md-4">
            <h3>{{ $cat->legend }}</h3>
            <div class="thumbnail">
                <img src="{{ $cat->url }}" style='width: 100%; height: 100%'>
            </div>
            <div class="caption">
                <p><a href="{{ 'cats/' . $cat->id }}" class="btn btn-xs btn-primary" role="button" title="En savoir +">Voir</a></p>
            </div>
        </div>
    @endforeach
</div>
@endsection


