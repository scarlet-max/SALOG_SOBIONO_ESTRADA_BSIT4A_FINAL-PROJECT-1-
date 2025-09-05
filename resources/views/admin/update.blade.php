@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow rounded">
        <div class="card-body">
            <h1 class="mb-4">Confirm Update User Details</h1>

            <p><strong>ID:</strong> {{ $user->id }}</p>
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Role:</strong> {{ $user->role }}</p>

            <form action="{{ route('admin.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="name" value="{{ $user->name }}">
                <input type="hidden" name="email" value="{{ $user->email }}">
                <input type="hidden" name="role" value="{{ $user->role }}">

                <div class="d-flex gap-2">
                    <a href="{{ route('admin.index', $user->id) }}" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-primary">Confirm Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
