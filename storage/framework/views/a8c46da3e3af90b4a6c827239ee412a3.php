<?php $__env->startSection('title', 'Edit Contact'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-5  alert alert-info">
        <h1>Edit Contact</h1>
        <form action="<?php echo e(route('contacts.update', $contact->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo e($contact->name); ?> " required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo e($contact->email); ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo e($contact->phone); ?>">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" value="<?php echo e($contact->address); ?>">
            </div>
            <button type="submit" class="btn btn-info mt-3">Update</button>
        </form>
        <a href="<?php echo e(route('contacts.index')); ?>" class="btn btn-danger mt-3">Back to Contacts</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web application\LARAVEL 10\assignment-3\resources\views/contacts/edit.blade.php ENDPATH**/ ?>