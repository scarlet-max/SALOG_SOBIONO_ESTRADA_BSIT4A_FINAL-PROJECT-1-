@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-primary text-white fw-bold">
                    User Details
                </div>

                <div class="card-body p-4">
                    <div class="border rounded p-3 mb-3 bg-light">
                        <p><strong>Name:</strong> {{ $user->name }}</p>
                    </div>

                    <div class="border rounded p-3 mb-3 bg-light">
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                    </div>

                    <div class="border rounded p-3 mb-3 bg-light">
                        <p><strong>Role:</strong> {{ $user->role }}</p>
                    </div>

                    <div class="border rounded p-3 mb-3 bg-light">
                        <p><strong>Created At:</strong> {{ $user->created_at }}</p>
                    </div>

                    <div class="border rounded p-3 mb-4 bg-light">
                        <p><strong>Updated At:</strong> {{ $user->updated_at }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                       <a href="{{ route('admin.index', $user->id) }}" class="btn btn-info btn-sm">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
