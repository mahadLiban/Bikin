@extends('layouts.appBack')

@section('content')
    <div class="d-flex align-items-center justify-content-center mb-5">
        <h1 class="my-0 mx-2">filtres</h1>
            
        <a href={{ route('filtres.create') }} class="btn btn-success text-white"><i class="fas fa-plus"></i></a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th> 
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($filtres as $filtre)
                <tr>
                    <th scope="row">{{ $filtre->id }}</th>
                    <td>{{ $filtre->nom }}</td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-warning text-white mx-2" href="/filtres/{{ $filtre->id }}"><i class="fas fa-eye"></i></a>

                                
                            <a class="btn btn-success text-white mx-2" href="/filtres/{{ $filtre->id }}/edit"><i class="fas fa-edit"></i></a>
                                
                            <form action={{ route('filtres.destroy', $filtre->id) }} method="post">
                                @csrf
                                @method("delete")
                                <button class="btn btn-danger text-white mx-2" type="submit">
                                    <i class="fas fa-trash-alt"></i></button>
                            </form>

                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <div>
        {{ $filtres->links() }}
    </div>
@endsection
