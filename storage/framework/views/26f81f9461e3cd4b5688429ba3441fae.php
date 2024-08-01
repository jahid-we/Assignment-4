<h1>Create Contact</h1>
<form action=<?php echo e(url('/contacts')); ?> method="POST">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" id="phone" name="phone">
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="address">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Create</button>
</form>
<?php /**PATH D:\web application\LARAVEL 10\assignment-3\resources\views/components/createForm.blade.php ENDPATH**/ ?>