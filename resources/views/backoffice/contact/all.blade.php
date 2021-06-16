@extends('layouts.appBack')

@section('content')
    <div class="d-flex align-items-center justify-content-center mb-5">
        <h1 class="my-0 mx-2">contacts</h1>
        <a href={{ route('contacts.create') }} class="btn btn-success text-white"><i class="fas fa-plus"></i></a>
    </div>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Icon</th>
                <th scope="col">Titre</th> 
                <th scope="col">Email</th> 
                <th scope="col">Description</th> 

                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <th scope="row">{{ $contact->id }}</th>
                    <td><i class="{{ $contact->logo }}"></i></td>
                    <td>{{ $contact->text }}</td>
                    <td>{{ $contact->email1 }}</td>
                    <td>{{ $contact->description }}</td>

                    <td>
                        <div class="d-flex">
                            <a class="btn btn-warning text-white mx-2" href="/contacts/{{ $contact->id }}"><i class="fas fa-eye"></i></a>
                            <a class="btn btn-success text-white mx-2" href="/contacts/{{ $contact->id }}/edit"><i class="fas fa-edit"></i></a>
                            <form action={{ route('contacts.destroy', $contact->id) }} method="post">
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
        {{ $contacts->links() }}
    </div>
@endsection
