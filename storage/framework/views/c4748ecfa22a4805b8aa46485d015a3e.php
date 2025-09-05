<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h1 class="mb-4 text-center">Products List</h1>

    <div class="table-responsive shadow rounded mb-4">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Quantity</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($product->id); ?></td>
                        <td><?php echo e($product->name); ?></td>
                        <td><?php echo e($product->price); ?></td>
                        <td><?php echo e($product->description); ?></td>
                        <td><?php echo e($product->category); ?></td>
                        <td><?php echo e($product->quantity); ?></td>
                        <td><?php echo e($product->created_at->format('Y-m-d')); ?></td>
                        <td><?php echo e($product->updated_at->format('Y-m-d')); ?></td>
                        <td>
                            <a href="<?php echo e(route('user.edit', $product->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                            <form action="<?php echo e(route('user.delete', $product->id)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" 
                                    onclick="return confirm('Are you sure you want to delete this product?');"> Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="9" class="text-center">No products found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="buttons text-center mb-4">
        <a href="<?php echo e(route('user.create')); ?>" class="btn btn-warning m-2">Add Product</a>
        <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-primary m-2">Back to Dashboard</a>
    </div>
</div>
</body>
</html>
<?php /**PATH C:\Users\User\Desktop\Laravel\laravel_proj\resources\views/user/index.blade.php ENDPATH**/ ?>