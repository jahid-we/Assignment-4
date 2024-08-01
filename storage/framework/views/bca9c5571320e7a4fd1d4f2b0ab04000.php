<?php $__env->startSection('title', 'Contact Details'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container  alert alert-info mt-5">
        <h1>Contact Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Name: <?php echo e($contact->name); ?></h5>
                <p class="card-text"><strong>Email:</strong> <?php echo e($contact->email); ?></p>
                <p class="card-text"><strong>Phone:</strong> <?php echo e($contact->phone); ?></p>
                <p class="card-text"><strong>Address:</strong> <?php echo e($contact->address); ?></p>
                <a href="<?php echo e(route('contacts.index')); ?>" class="btn btn-info">Back to Contacts</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web application\LARAVEL 10\assignment-3\resources\views/contacts/show.blade.php ENDPATH**/ ?>