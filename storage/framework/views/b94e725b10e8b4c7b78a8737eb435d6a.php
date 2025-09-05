<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4 text-center">Edit Product</h1>


    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('user.update', $product->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <!-- Fields -->
    <div class="mb-3">
        <label for="name" class="form-label">Product Name</label>
        <input type="text" name="name" value="<?php echo e($product->name); ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" name="price" value="<?php echo e($product->price); ?>" class="form-control">
    </div>
    
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="3" required><?php echo e(old('description', $product->description)); ?></textarea>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" name="category" id="category" class="form-control" value="<?php echo e(old('category', $product->category)); ?>" required>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="<?php echo e(old('quantity', $product->quantity)); ?>" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Update Product</button>
            <a href="<?php echo e(route('user.index')); ?>" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
</body>
</html>
<?php /**PATH C:\Users\User\Desktop\Laravel\laravel_proj\resources\views/user/edit.blade.php ENDPATH**/ ?>