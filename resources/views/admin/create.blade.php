@extends('layouts.app')

@section('content')
<div style="display: flex; flex-direction: column" >
    <h1>Ajoutons un chat!</h1>
    <form action="{{ Route('admin.cats.store') }}" method="POST">
        @csrf
        @method('POST')
    <div>
        <label for="legend">Legend</label>
        <input type="text" name="legend" id="">
        </div>
    <div>
        <label for="description">Desciption</label>
        <input type="text" name="description" id="">
    </div>
    <div>
        <p>L'ajout de l'image sera automatique!</p>
    </div>
    <input type="submit" value="Envoyer!">

    </form>
</div>
@endsection