@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-danger text-white">
            Delete User
        </div>
        <div class="card-body">
            <h5 class="card-title">Are you sure you want to delete this user?</h5>
            <p class="card-text">
                <strong>ID:</strong> {{ $user->id }} <br>
                <strong>Name:</strong> {{ $user->name }} <br>
                <strong>Email:</strong> {{ $user->email }} <br>
                <strong>Role:</strong> {{ $user->role }}
            </p>

            <form action="{{ route('user.delete', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                
                <a href="{{ route('user.dashboard') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-danger">Confirm Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection