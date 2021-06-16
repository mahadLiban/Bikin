@extends('layouts.appBack')

@section('content')
    <div class="d-flex align-items-center justify-content-center mb-5">
        <h1 class="my-0 mx-2">imgortfolios</h1>
    </div>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">img</th> 
                <th scope="col">filtre</th> 

                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($imgortfolios as $imgortfolio)
                <tr>
                    <th scope="row">{{ $imgortfolio->id }}</th>
                    
                    <td><img style="width : 200px" src={{ asset('img/'. $imgortfolio->img) }} alt=""></td>
                    <td>{{ $imgortfolio->filtre->nom }}</td>

                 
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-warning text-white mx-2" href="/imgortfolios/{{ $imgortfolio->id }}"><i class="fas fa-eye"></i></a>
                                
                            <a class="btn btn-success text-white mx-2" href="/imgortfolios/{{ $imgortfolio->id }}/edit"><i class="fas fa-edit"></i></a>
                               
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $imgortfolios->links() }}
    </div>
@endsection
