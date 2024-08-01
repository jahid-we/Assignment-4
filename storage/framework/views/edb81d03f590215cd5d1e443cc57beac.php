<?php $__env->startSection('title', 'All Contacts'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-4 alert alert-primary">
        <h1 class="mb-4">All Contacts</h1>

        <form method="GET" action="/contacts" class="form-inline mb-4">
            <input type="text" name="search" class="form-control mr-2" placeholder="Search by name or email">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <a href="/contacts/create" class="btn btn-success mb-4">Create New Contact</a><br>
        <a class="btn btn-info btn-sm mb-3" href="?sort=name">Short By Name</a>
        <a href="?sort=created_at" class="btn btn-info btn-sm mb-3">Short By Date</a>

        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($contact->name); ?></td>
                        <td><?php echo e($contact->email); ?></td>
                        <td></td>
                        <td><?php echo e(\Carbon\Carbon::parse($contact->created_at)->diffForHumans()); ?></td>
                        <td>
                            <a href="/contacts/<?php echo e($contact->id); ?>" class="btn btn-info btn-sm px-3">View</a>
                            <a href="/contacts/<?php echo e($contact->id); ?>/edit" class="btn btn-warning btn-sm px-3">Edit</a>
                            <form action="/contacts/<?php echo e($contact->id); ?>" method="POST" style="display:inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm px-3">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web application\LARAVEL 10\assignment-3\resources\views/contacts/index.blade.php ENDPATH**/ ?>