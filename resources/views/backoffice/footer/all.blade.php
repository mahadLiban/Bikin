@extends('layouts.appBack')

@section('content')


    <div class="d-flex align-items-center justify-content-center mb-5">
        <h1 class="my-0 mx-2">footer</h1>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>

                <th scope="col">Titre1</th>
                <th scope="col">Titre2</th>
                <th scope="col">Titre3</th>
                <th scope="col">Titre4</th>

                <th scope="col">Description</th>
                <th scope="col">Description2</th>

                <th scope="col">Phone</th>
                <th scope="col">Email</th> 
                <th scope="col">li1</th> 
                <th scope="col">li2</th> 
               
            </tr>
            
        </thead>
        <tbody>
                <tr>
                    <th scope="row">{{ $footer->id }}</th>
                    <td>{{ $footer->footerTitre1 }}</td>
                    <td>{{ $footer->footerTitre2 }}</td>
                    <td>{{ $footer->footerTitre3 }}</td>
                    <td>{{ $footer->footerTitre4 }}</td>
                    <td>{{ $footer->description }}</td>
                    <td>{{ $footer->description2 }}</td>
                    <td>{{ $footer->phone }}</td>
                    <td>{{ $footer->email }}</td>
                    <td>{{ $footer->li1 }}</td>
                    <td>{{ $footer->li2 }}</td>

                    
                </tr> 
                <tr>

                    <th scope="col">li3</th> 
                    <th scope="col">li4</th> 
                    <th scope="col">li5</th> 
                    <th scope="col">li6</th> 
                    <th scope="col">li7</th> 
                    <th scope="col">li8</th> 
                    <th scope="col">li9</th> 
                    <th scope="col">li10</th> 
                    <th scope="col">btnTxt</th> 
    
                    <th scope="col">Actions</th>
                </tr>
                <tr>

                    <td>{{ $footer->li3 }}</td>
                    <td>{{ $footer->li4 }}</td>
                    <td>{{ $footer->li5 }}</td>
                    <td>{{ $footer->li6 }}</td>
                    <td>{{ $footer->li7 }}</td>
                    <td>{{ $footer->li8 }}</td>
                    <td>{{ $footer->li9 }}</td>
                    <td>{{ $footer->li10 }}</td>
                    <td>{{ $footer->btnTxt }}</td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-warning text-white mx-2" href="/footers/{{ $footer->id }}"><i class="fas fa-eye"></i></a>
                                @can('update', $footer)
                                    <a class="btn btn-success text-white mx-2" href="/footers/{{ $footer->id }}/edit"><i class="fas fa-edit"></i></a>
                                @endcan
                               
                        </div>
                    </td>
                </tr>


               
        </tbody>
    </table>


@endsection
