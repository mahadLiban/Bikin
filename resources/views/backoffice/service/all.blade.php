@extends('layouts.appBack')

@section('content')
    <div class="d-flex align-items-center justify-content-center mb-5">
        <h1 class="my-0 mx-2">services</h1>
    </div>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Icone</th> 
                <th scope="col">Petit titre</th> 
                <th scope="col">Description</th> 

                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <th scope="row">{{ $service->id }}</th>                  
                    <td>{{ $service->logo }}</td>
                    <td>{{ $service->petitTitre}}</td>
                    <td>{{ $service->description }}</td>

                    <td>
                        <div class="d-flex">
                            <a class="btn btn-warning text-white mx-2" href="/services/{{ $service->id }}"><i class="fas fa-eye"></i></a>
                              @can('update', $service)
                                  
                              <a class="btn btn-success text-white mx-2" href="/services/{{ $service->id }}/edit"><i class="fas fa-edit"></i></a>
                              @endcan  
                               
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $services->links() }}
    </div>
@endsection
