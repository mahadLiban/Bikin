@extends('layouts.appBack')

@section('content')
    <div class="d-flex align-items-center justify-content-center mb-5">
        <h1 class="my-0 mx-2">homes</h1>
    </div>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">btntxt</th> 
                <th scope="col">img</th> 
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($homes as $home)
                <tr>
                    <th scope="row">{{ $home->id }}</th>
                    
                    <td>{{ $home->btnTxt }}</td>
                    <td><img style="width : 200px" src={{ asset('img/'. $home->img) }} alt=""></td>

                 
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-warning text-white mx-2" href="/homes/{{ $home->id }}"><i class="fas fa-eye"></i></a>
                                
                            <a class="btn btn-success text-white mx-2" href="/homes/{{ $home->id }}/edit"><i class="fas fa-edit"></i></a>
                               
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $homes->links() }}
    </div>
@endsection
