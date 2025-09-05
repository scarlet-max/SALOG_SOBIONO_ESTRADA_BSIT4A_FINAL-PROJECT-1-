<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4 text-center">Product Details</h1>

    <table class="table table-bordered">
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
            </tr>   
            <td><?php echo e($product->id); ?></td>
            <td><?php echo e($product->name); ?></td>
            <td><?php echo e($product->price); ?></td>
            <td><?php echo e($product->description); ?></td>
            <td><?php echo e($product->category); ?></td>
            <td><?php echo e($product->quantity); ?></td>
            <td><?php echo e($product->created_at); ?></td>
            <td><?php echo e($product->updated_at); ?></td>
        </tr>
  
</tbody>
    </table>

    <div class="text-center mt-4 mb-4">
        <a href="<?php echo e(route('user.index')); ?>" class="btn btn-secondary m-2">Back to Product List</a>
        <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-primary m-2">Back to Dashboard</a>
    </div>
</div>
</body>
</html>
<?php /**PATH C:\Users\User\Desktop\Laravel\laravel_proj\resources\views/user/view.blade.php ENDPATH**/ ?>