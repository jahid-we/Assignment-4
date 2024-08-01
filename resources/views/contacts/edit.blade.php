@extends('layout.app')

@section('title', 'Edit Contact')

@section('content')
    <div class="container mt-5  alert alert-info">
        <h1>Edit Contact</h1>
        <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $contact->name }} " required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $contact->email }}"
                    required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $contact->address }}">
            </div>
            <button type="submit" class="btn btn-info mt-3">Update</button>
        </form>
        <a href="{{ route('contacts.index') }}" class="btn btn-danger mt-3">Back to Contacts</a>
    </div>
@endsection
