@extends('layouts.appBack')

@section('content')
    <div class="d-flex align-items-center justify-content-center mb-5">
        <h1 class="my-0 mx-2">teams</h1>
    </div>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Icone</th> 
                <th scope="col">img</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teams as $team)
                <tr>
                    <th scope="row">{{ $team->id }}</th>                  
                    <td>{{ $team->icone }}</td>
                    <td><img style="width : 200px" src={{ asset('img/'. $team->img) }} alt=""></td>

                    <td>
                        <div class="d-flex">
                            <a class="btn btn-warning text-white mx-2" href="/teams/{{ $team->id }}"><i class="fas fa-eye"></i></a>
                                
                            <a class="btn btn-success text-white mx-2" href="/teams/{{ $team->id }}/edit"><i class="fas fa-edit"></i></a>
                               
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $teams->links() }}
    </div>
@endsection
