@extends('layouts.app')

@section('content')

<div style="display: flex; flex-wrap: wrap" >
    <div class="col-sm-6 col-md-4">
        <div style="display: flex; justify-content: space-between;">
            <h3>{{ $cat->legend }}</h3>
            <form action="{{ Route('admin.cats.edit', ['cat' => $cat->id]) }}" method="GET">
                @csrf
                <input type="submit" value="MAJ">
            </form>
        </div>
        <div class="thumbnail">
            <img src="{{ $cat->url }}">
            <p>{{ $cat->description }}</p>
        </div>
    </div>
</div>
@endsection