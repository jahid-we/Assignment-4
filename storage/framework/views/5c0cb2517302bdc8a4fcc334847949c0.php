<?php $__env->startSection('title', 'Home Page'); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('components.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web application\LARAVEL 10\assignment-3\resources\views/index.blade.php ENDPATH**/ ?>