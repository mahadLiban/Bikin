@extends('layouts.appBack')

@section('content')


    <div class="d-flex align-items-center justify-content-center mb-5">
        <h1 class="my-0 mx-2">abouts</h1>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>

                <th scope="col">Icone</th>
                <th scope="col">Petit titre 1</th> 
                <th scope="col">Sous titre 1</th> 

                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($abouts as $about)
                <tr>
                    <th scope="row">{{ $about->id }}</th>
                    <td><i class="{{ $about->logo }}"></i></td>
                    <td>{{ $about->petitTitre1 }}</td>
                    <td>{{ $about->sousTitre1 }}</td>
                    

                    <td>
                        <div class="d-flex">
                            <a class="btn btn-warning text-white mx-2" href="/abouts/{{ $about->id }}"><i class="fas fa-eye"></i></a>
                                
                            <a class="btn btn-success text-white mx-2" href="/abouts/{{ $about->id }}/edit"><i class="fas fa-edit"></i></a>
                               
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        {{ $abouts->links() }}
    </div>

@endsection
