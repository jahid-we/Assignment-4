<?php $__env->startSection('title', 'Create Contact'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-5  alert alert-info">
        <h1>Create Contact</h1>
        <form action="<?php echo e(route('contacts.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" class="form-control" id="phone">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" name="address" class="form-control" id="address">
            </div>
            <button type="submit" class="btn btn-info">Create</button>
            <a  class="btn btn-danger  p-1 ml-4 px-2" href="/contacts">Cancel</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web application\LARAVEL 10\assignment-3\resources\views/contacts/create.blade.php ENDPATH**/ ?>