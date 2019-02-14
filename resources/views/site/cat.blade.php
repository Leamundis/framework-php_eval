@extends('layouts.app')

@section('content')

<div style="display: flex; flex-wrap: wrap" >
    <div class="col-sm-6 col-md-4">
        <h3>{{ $cat->legend }}</h3>
        <div class="thumbnail">
            <img src="{{ $cat->url }}" style='width: 100%; height: 100%'>
            <p>{{ $cat->description }}</p>
        </div>
    </div>
</div>
@endsection
