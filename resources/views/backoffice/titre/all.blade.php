@extends('layouts.appBack')

@section('content')

    <div class="d-flex align-items-center justify-content-center mb-5">
        <h1 class="my-0 mx-2">titres</h1>
            @can('update',\App\Models\Titre::class)
                
            <a href={{ route('titres.create') }} class="btn btn-success text-white"><i class="fas fa-plus"></i></a>
            @endcan
    </div>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Description</th> 
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($titres as $titre)
                <tr>
                    <th scope="row">{{ $titre->id }}</th>
                    <td>{{ $titre->titre }}</td>
                    <td>{{ $titre->description }}</td>
                 
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-warning  mx-2" href="/titres/{{ $titre->id }}"><i class="fas fa-eye"></i></a>
                           
                             @can('update',$titre)
                                 
                             <a class="btn btn-success  mx-2" href="/titres/{{ $titre->id }}/edit"><i class="fas fa-edit"></i></a>
                             @endcan
                            
                                @can('delete', $titre)
                                        <form action={{ route('titres.destroy', $titre->id) }} method="post">
                                            @csrf
                                            @method("delete")
                                            <button class="btn btn-danger  mx-2" type="submit">
                                            <i class="fas fa-trash-alt"></i></button>
                                        </form>
                                @endcan
                            
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        {{ $titres->links() }}
    </div>
@endsection
