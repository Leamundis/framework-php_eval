@extends('layouts.app')

@section('content')
<div style="display: flex; flex-direction: column" >
    <h1>Modifions ce chat!</h1>
    <div style="    display: flex; justify-content: space-around;">
        <img src="{{ $cat->url }}" style="width: 500px; height: 500px;">
        <form action="{{ Route('admin.cats.update', ['cat' => $cat->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="legend">Legend</label>
            <input type="text" name="legend" id="" value="{{ $cat->legend }}">
                </div>
            <div>
                <label for="description">Desciption</label>
                <input type="text" name="description" id="" value={{ $cat->description }}>
            </div>
            <div>
                <p>L'image changera automatiquement!</p>
            </div>
            <input type="submit" value="Envoyer!">
        </form>

    </div>
</div>
@endsection