@extends('layouts.app')

@section('title', 'Manage Skills')

@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Manage Skills</h2>

    <form action="{{ route('admin.addSkill') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">New Skill</label>
            <input type="text" class="form-control" name="skill" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Skill</button>
    </form>

    <ul class="list-group mt-3">
        @foreach ($skills as $skill)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $skill->name }}
                <form action="{{ route('admin.deleteSkill', $skill->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>

@endsection
