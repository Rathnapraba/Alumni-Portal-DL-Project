

<?php $__env->startSection('content'); ?>

<style>
    .custom-btn-box {
        padding: 20px;
        border-radius: 5px; /* Rounded corners */
        background-color: #28a745; /* Bootstrap success color */
        display: block; /* Ensure it behaves like a block element */
        margin: 15px auto; /* Centering and adding space between buttons */
        text-align: center;
        width: 20%; /* Adjust the width as needed */
    }

    .custom-btn-link {
        color: white; /* Text color */
        text-decoration: none; /* Remove underline */
        display: block; /* Cover the entire area of the button */
    }

    .custom-btn-box:hover {
        background-color: #218838; /* Darker shade on hover */
    }

    .fa-plus {
        margin-right: 8px; /* Space between icon and text */
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="custom-btn-box">
                <a href="<?php echo e(url('/admin/view')); ?>" class="custom-btn-link" title="Add Student">
                    <i class="fa fa-plus" aria-hidden="true"></i> View Students
                </a>
            </div>
            <div class="custom-btn-box">
                <a href="<?php echo e(url('/admin/create')); ?>" class="custom-btn-link" title="Add Alumni">
                    <i class="fa fa-plus" aria-hidden="true"></i> View Alumni
                </a>
            </div>
            <div class="custom-btn-box">
                <a href="<?php echo e(url('/alumnis/event')); ?>" class="custom-btn-link" title="View Events">
                    <i class="fa fa-plus" aria-hidden="true"></i> View Events
                </a>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\N RATHNA PRABA\alumni-app\resources\views/admin/index.blade.php ENDPATH**/ ?>