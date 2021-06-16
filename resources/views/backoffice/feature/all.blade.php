@extends('layouts.appBack')

@section('content')


    <div class="d-flex align-items-center justify-content-center mb-5">
        <h1 class="my-0 mx-2">features</h1>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>

                <th scope="col">image</th> 
                <th scope="col">petit Titre</th>
                <th scope="col">sous Titre</th>
                <th scope="col">li1</th> 
                <th scope="col">li2</th> 
                <th scope="col">li3</th> 
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($features as $feature)
                <tr>
                    <th scope="row">{{ $feature->id }}</th>
                    <td><img style="width : 200px" src={{ asset('img/'. $feature->img) }} alt=""></td>
                    <td>{{ $feature->petitTitre }}</td>
                    <td>{{ $feature->sousTitre }}</td>
                    <td>{{ $feature->li1 }}</td>
                    <td>{{ $feature->li2 }}</td>
                    <td>{{ $feature->li3 }}</td>
                    <td>{{ $feature->description }}</td>

                    <td>
                        <div class="d-flex">
                            <a class="btn btn-warning text-white mx-2" href="/features/{{ $feature->id }}"><i class="fas fa-eye"></i></a>
                                
                            <a class="btn btn-success text-white mx-2" href="/features/{{ $feature->id }}/edit"><i class="fas fa-edit"></i></a>
                               
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        {{ $features->links() }}
    </div>

@endsection
