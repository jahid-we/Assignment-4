@extends('layout.app')

@section('title', 'All Contacts')

@section('content')
    <div class="container mt-4 alert alert-primary">
        <h1 class="mb-4">All Contacts</h1>

        <form method="GET" action="/contacts" class="form-inline mb-4">
            <input type="text" name="search" class="form-control mr-2" placeholder="Search by name or email">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <a href="/contacts/create" class="btn btn-success mb-4">Create New Contact</a><br>
        <a class="btn btn-info btn-sm mb-3" href="?sort=name">Short By Name</a>
        <a href="?sort=created_at" class="btn btn-info btn-sm mb-3">Short By Date</a>

        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td></td>
                        <td>{{ \Carbon\Carbon::parse($contact->created_at)->diffForHumans() }}</td>
                        <td>
                            <a href="/contacts/{{ $contact->id }}" class="btn btn-info btn-sm px-3">View</a>
                            <a href="/contacts/{{ $contact->id }}/edit" class="btn btn-warning btn-sm px-3">Edit</a>
                            <form action="/contacts/{{ $contact->id }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm px-3">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
