

<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">Edit Job Post</div>
    <div class="card-body">
        <form action="<?php echo e(url('/alumnis/'.$alumnis->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <?php echo method_field("PATCH"); ?>

            <label for="role">Job Role</label><br>
            <input type="text" name="role" id="role" value="<?php echo e($alumnis->role); ?>" class="form-control"><br>
            
            <label for="company_name">Company Name</label><br>
            <input type="text" name="company_name" id="company_name" value="<?php echo e($alumnis->company_name); ?>" class="form-control"><br>
            
            <label for="location">Location</label><br>
            <input type="text" name="location" id="location" value="<?php echo e($alumnis->location); ?>" class="form-control"><br>

            <label for="batch">Batch</label><br>
            <input type="text" name="batch" id="batch" value="<?php echo e($alumnis->batch); ?>" class="form-control"><br>

            <label for="job_description">Job Description</label><br>
            <textarea name="job_description" id="job_description" class="form-control"><?php echo e($alumnis->job_description); ?></textarea><br>

            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\N RATHNA PRABA\alumni-app\resources\views/alumnis/edit.blade.php ENDPATH**/ ?>