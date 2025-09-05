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
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($user->id); ?></td>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td>
                                    <span class="badge bg-primary"><?php echo e($user->role); ?></span>
                                </td>
                                <td><?php echo e($user->created_at); ?></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="<?php echo e(route('admin.view', $user->id)); ?>" class="btn btn-info btn-sm">View</a>
                                        <a href="<?php echo e(route('admin.edit', $user->id)); ?>"  class="btn btn-warning btn-sm">Edit</a>
                                        <form action="<?php echo e(route('admin.delete', $user->id)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                           <?php echo csrf_field(); ?>
                                           <?php echo method_field('DELETE'); ?>
                                           <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class= "buttons container text-center mb-4">
                    <a href="<?php echo e(route('dashboard')); ?>"class="btn btn-primary btn-sm"> Admin Dashboard </a>
                    <a href="<?php echo e(route('user.index')); ?>"class="btn btn-success btn-sm"> User Dashboard </a>
                   
            </div>
        </div>
    </body>
    </html>
<?php /**PATH C:\Users\User\Desktop\Laravel\laravel_proj\resources\views/admin/index.blade.php ENDPATH**/ ?>