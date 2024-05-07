 

<?php $__env->startSection('content'); ?>
<div class="text-center">
    <!-- <a href="<?php echo e(url('alumni/register')); ?>" class="btn btn-success btn-sm" title="Add New Alumni">
        <i class="fa fa-plus" aria-hidden="true"></i> Register
        
    </a> -->
    <a href="<?php echo e(url('alumni/register')); ?>" class="btn btn-success btn-sm" title="Add New Alumni">
    <i class="fa fa-plus" aria-hidden="true"></i> Register
</a>

</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <!-- <div class="card-header">Alumni Details</div> -->
                <div class="card-header" style="text-align: center;font-size: 30px; color: red;">Alumni Details</div>
                <br /> 

                <div class="card-body">
                    <?php $__empty_1 = true; $__currentLoopData = $alumni; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="alumni-post mb-5 pb-4 border-bottom">
                            <h3 class="text-primary"><?php echo e($alum->name); ?></h3>
                            <p><strong>Email:</strong> <?php echo e($alum->email); ?></p>
                            <p><strong>Mobile:</strong> <?php echo e($alum->mobile); ?></p>
                            <p><strong>Batch:</strong> <?php echo e($alum->batch); ?></p>
                            <p><strong>Department:</strong> <?php echo e($alum->department); ?></p>
                            <p><strong>Address:</strong> <?php echo e($alum->address); ?></p>
                            <p><strong>Current Designation:</strong> <?php echo e($alum->current_designation); ?></p>
                            <p><strong>Employer Name:</strong> <?php echo e($alum->employer_name); ?></p>
                            <p><strong>Work Location:</strong> <?php echo e($alum->work_location); ?></p>
                            <p><strong>Domain:</strong> <?php echo e($alum->domain); ?></p>
                            <p><strong>Experience Years:</strong> <?php echo e($alum->experience_years); ?></p>
                            <p><strong>Highest Degree:</strong> <?php echo e($alum->highest_degree); ?></p>
                            <p><strong>Present Status:</strong> <?php echo e($alum->present_status); ?></p>
                            <p><strong>University:</strong> <?php echo e($alum->university); ?></p>
                            <div class="actions">
                                <a href="<?php echo e(url('/alumniss/' . $alum->id .'/edit')); ?>" class="btn btn-primary btn-sm" title="Edit Alumni">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </a>
                                <form method="POST" action="<?php echo e(url('/alumniss/'. $alum->id)); ?>" style="display:inline" onsubmit="return confirm('Are you sure you want to delete this alumni record?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Alumni">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="text-center">No alumni records found.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\N RATHNA PRABA\alumni-app\resources\views/alumni/create.blade.php ENDPATH**/ ?>