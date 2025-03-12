@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')

<div class="container mt-5">
    <h1 class="text-center mb-4">Admin Dashboard</h1>

    <!-- Tabs Navigation -->
    <ul class="nav nav-tabs" id="adminTabs">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#about">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#skills">Skills</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#contacts">Contacts</a>
        </li>
    </ul>

    <div class="tab-content mt-3">

        <!-- About Section -->
        <div id="about" class="tab-pane fade show active">
            <h2 class="mb-3">Manage About</h2>

            @include('partials.alerts') <!-- Flash messages (success & errors) -->

            <form action="{{ $about ? route('admin.about.update', $about->id) : route('admin.about.store') }}" method="POST">
                @csrf
                @if ($about) @method('POST') @endif

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name', $about->name ?? '') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="number" class="form-control" name="age" value="{{ old('age', $about->age ?? '') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Hometown</label>
                    <input type="text" class="form-control" name="hometown" value="{{ old('hometown', $about->hometown ?? '') }}" required>
                </div>

                <button type="submit" class="btn btn-success w-100">
                    {{ $about ? 'Update About' : 'Add About' }}
                </button>
            </form>
        </div>

        <!-- Skills Section -->
        <div id="skills" class="tab-pane fade">
            <h2 class="mb-3">Manage Skills</h2>

            @include('partials.alerts')

            <form action="{{ route('admin.skills.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">New Skill</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Add Skill</button>
            </form>

            <ul class="list-group mt-3">
                @foreach ($skills as $skill)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $skill->name }}
                        <form action="{{ route('skills.destroy', $skill->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </li>
                @endforeach
            </ul>

        </div>

        <!-- Contacts Section -->
        <div id="contacts" class="tab-pane fade">
            <h2 class="mb-3">Manage Contact Information</h2>

            @include('partials.alerts')

            <form action="{{ $contact ? route('admin.contacts.update', $contact->id) : route('admin.contacts.store') }}" method="POST">
                @csrf
                @if ($contact) @method('POST') @endif

                <div class="mb-3">
                    <label class="form-label">Facebook</label>
                    <input type="url" class="form-control" name="facebook" value="{{ old('facebook', $contact->facebook ?? '') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Instagram</label>
                    <input type="url" class="form-control" name="instagram" value="{{ old('instagram', $contact->instagram ?? '') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{ old('phone', $contact->phone ?? '') }}">
                </div>

                <button type="submit" class="btn btn-success w-100">
                    {{ $contact ? 'Update Contacts' : 'Add Contacts' }}
                </button>
            </form>
        </div>

    </div>
</div>

@endsection
