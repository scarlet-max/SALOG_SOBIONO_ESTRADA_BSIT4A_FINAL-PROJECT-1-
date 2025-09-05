    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    </head>
    <body class="p-4 bg-light">
        <div class="container">
            <h1 class="mb-4 text-center">Admin Dashboard</h1>
            <h2 class="mb-3">User List</h2>
            
            <div class="table-responsive shadow rounded">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>   
                            <th>Name</th> 
                            <th>Email</th> 
                            <th>Role</th> 
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <span class="badge bg-primary">{{ $user->role }}</span>
                                </td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('admin.view', $user->id) }}" class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('admin.edit', $user->id) }}"  class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.delete', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                           @csrf
                                           @method('DELETE')
                                           <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class= "buttons container text-center mb-4">
                    <a href="{{ route('dashboard') }}"class="btn btn-primary btn-sm"> Admin Dashboard </a>
                    <a href="{{ route('user.index') }}"class="btn btn-success btn-sm"> User Dashboard </a>
                   
            </div>
        </div>
    </body>
    </html>
