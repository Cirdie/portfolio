@extends('layouts.app')

@section('title', 'Manage Contacts')

@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Manage Contact Information</h2>

    <form action="{{ route('admin.updateContact') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Facebook</label>
            <input type="url" class="form-control" name="facebook" value="{{ $contact->facebook ?? '' }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Instagram</label>
            <input type="url" class="form-control" name="instagram" value="{{ $contact->instagram ?? '' }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" value="{{ $contact->phone ?? '' }}">
        </div>
        <button type="submit" class="btn btn-success">Update Contacts</button>
    </form>
</div>

@endsection
