@extends('layouts.app')

@section('title', 'Add About Information')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Add About Information</h2>

    {{-- Display Validation Errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow p-4">
        <form action="{{ route('admin.about.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" class="form-control" name="age" value="{{ old('age') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Hometown</label>
                <input type="text" class="form-control" name="hometown" value="{{ old('hometown') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Studied At</label>
                <input type="text" class="form-control" name="studied_at" value="{{ old('studied_at') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Course</label>
                <input type="text" class="form-control" name="course" value="{{ old('course') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Hobbies</label>
                <input type="text" class="form-control" name="hobbies" value="{{ old('hobbies') }}" required>
            </div>

            <button type="submit" class="btn btn-success w-100">Add About</button>
        </form>
    </div>
</div>
@endsection
