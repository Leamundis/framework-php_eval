@extends('layouts.app')

@section('content')
<div style="display: flex; flex-wrap: wrap" >
    <div>
        <h1>Bonjour {{ ucfirst(Auth::user()->name)}} !</h1>
        <div>
            <form action="{{ Route('admin.cats.create') }}">
                <input type="submit" value="Ajouter un chat" />
            </form>
    
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
            <th scope="col">Legend</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cats as $cat)
            <tr>
            <th scope="row">{{ $cat->id }}</th>
                <td>{{ $cat->legend }} </td>
                <td>
                <form action="{{ Route('admin.cats.show', ['cat' => $cat->id]) }}">
                    @csrf
                    <input type="submit" value="Voir">
                </form>
                </td>
                <td>
                    <form action="{{ Route('admin.cats.destroy', ['cat' => $cat->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{ $cat->id}}">
                        <input type="submit" value="Delete">
                    </form>
                </td>
                <td>
                    
                    <form action="{{ Route('admin.cats.edit', ['cat' => $cat->id]) }}" method="GET">
                        @csrf
                        <input type="submit" value="MAJ">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection