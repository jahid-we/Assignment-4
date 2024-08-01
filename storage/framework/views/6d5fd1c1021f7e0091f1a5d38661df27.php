<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3 class="mb-0">Contact Details</h3>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Id</div>
                <div class="col-md-9"><?php echo e($contact->id); ?></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Name</div>
                <div class="col-md-9"><?php echo e($contact->name); ?></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Email</div>
                <div class="col-md-9"><?php echo e($contact->email); ?></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Phone</div>
                <div class="col-md-9"><?php echo e($contact->phone ?? 'N/A'); ?></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Address</div>
                <div class="col-md-9"><?php echo e($contact->address ?? 'N/A'); ?></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Created At</div>
                <div class="col-md-9"><?php echo e($contact->created_at->format('Y-m-d H:i')); ?></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Updated At</div>
                <div class="col-md-9"><?php echo e($contact->updated_at->format('Y-m-d H:i')); ?></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="/contacts" class="btn btn-secondary">Back to Contacts</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\web application\LARAVEL 10\assignment-3\resources\views/components/show.blade.php ENDPATH**/ ?>