@extends('layout.app')

@section('title', 'Contact Details')

@section('content')
    <div class="container  alert alert-info mt-5">
        <h1>Contact Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Name: {{ $contact->name }}</h5>
                <p class="card-text"><strong>Email:</strong> {{ $contact->email }}</p>
                <p class="card-text"><strong>Phone:</strong> {{ $contact->phone }}</p>
                <p class="card-text"><strong>Address:</strong> {{ $contact->address }}</p>
                <a href="{{ route('contacts.index') }}" class="btn btn-info">Back to Contacts</a>
            </div>
        </div>
    </div>
@endsection

