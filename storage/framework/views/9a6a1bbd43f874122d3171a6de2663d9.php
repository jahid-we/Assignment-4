<div class="container mt-5">
    <h1>Contacts</h1>
    <a href="<?php echo e(route('contacts.create')); ?>" class="btn btn-primary mb-3">Create Contact</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th><a href="<?php echo e(route('contacts.index', ['sort' => 'name'])); ?>">Name</a></th>
                <th><a href="<?php echo e(route('contacts.index', ['sort' => 'created_at'])); ?>">Created At</a></th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($contact->name); ?></td>
                    <td><?php echo e($contact->created_at->format('Y-m-d H:i')); ?></td>
                    <td><?php echo e($contact->email); ?></td>
                    <td><?php echo e($contact->phone); ?></td>
                    <td><?php echo e($contact->address); ?></td>
                    
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH D:\web application\LARAVEL 10\assignment-3\resources\views/components/home.blade.php ENDPATH**/ ?>