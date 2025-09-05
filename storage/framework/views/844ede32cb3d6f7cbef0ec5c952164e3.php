<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4 text-center">Add New Product</h1>

   
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="card shadow p-4">
        <form action="<?php echo e(route('user.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" name="name" id="name" class="form-control" value="<?php echo e(old('name')); ?>" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" name="price" id="price" class="form-control" value="<?php echo e(old('price')); ?>" required>
            </div>

             <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control" value="<?php echo e(old('description')); ?>" required>
            </div>


            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" name="category" id="category" class="form-control" value="<?php echo e(old('category')); ?>" required>
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="form-control" value="<?php echo e(old('quantity')); ?>" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success">Add Product</button>
                <a href="<?php echo e(route('user.index')); ?>" class="btn btn-secondary">Back to Products list</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
<?php /**PATH C:\Users\User\Desktop\Laravel\laravel_proj\resources\views/user/create.blade.php ENDPATH**/ ?>