<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-4 bg-light">
    <div class="container">
        <h1 class="mb-4">Edit User Details</h1>

        <div class="card shadow rounded">
            <div class="card-body">
                <form action="<?php echo e(route('admin.update', $user->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" 
                               value="<?php echo e(old('name', $user->name)); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" 
                               value="<?php echo e(old('email', $user->email)); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label">Role:</label>
                        <select id="role" name="role" class="form-select">
                            <option value="user" <?php echo e($user->role === 'user' ? 'selected' : ''); ?>>User</option>
                            <option value="admin" <?php echo e($user->role === 'admin' ? 'selected' : ''); ?>>Admin</option>
                        </select>
                    </div>

                    <div class="d-flex gap-2">
                       <button type="submit" class="btn btn-primary">Update</button>
                       <a href="<?php echo e(route('admin.index')); ?>" class="btn btn-primary"> Cancel</a>
                     </div>  
                </form>
            </div>
        </div>

    </div>
</body>
</html>
<?php /**PATH C:\Users\User\Desktop\Laravel\laravel_proj\resources\views/admin/edit.blade.php ENDPATH**/ ?>