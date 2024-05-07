

<?php $__env->startSection('content'); ?>


<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->



    <div class="card-body">
        <a href="<?php echo e(url('/alumni/job')); ?>" class="btn btn-success btn-sm" title="Add New Job Post">
            <i class="fa fa-plus" aria-hidden="true"></i> Post Job/Internship
        </a>
        
        <br />
        <br />
       
        
     <a href="<?php echo e(url('/alumni/blog')); ?>" class="btn btn-success btn-sm" title="Add New Job Post">
            <i class="fa fa-plus" aria-hidden="true"></i> Post Blog
        </a>

        <br /><br />
        
             
     <a href="<?php echo e(url('/alumni/event')); ?>" class="btn btn-success btn-sm" title="Add New Job Post">
            <i class="fa fa-plus" aria-hidden="true"></i> Post Event
        </a>

        <br /><br />
      

        <div class="card">
    <div class="card-header">
        <h2>Job Posts</h2>
    </div>
    
    <br />

    <br />

    <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Role</th>
                        <th>Company Name</th>
                        <th>Location</th>
                        <th>Batch</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $jobposts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jobpost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($jobpost->id); ?></td>
                        <td><?php echo e($jobpost->role); ?></td>
                        <td><?php echo e($jobpost->company_name); ?></td>
                        <td><?php echo e($jobpost->location); ?></td>
                        <td><?php echo e($jobpost->batch); ?></td>
                        <td><?php echo e($jobpost->job_description); ?></td>
                        <td>
                            <a href="<?php echo e(url('/alumni/job/' . $jobpost->id . '/edit')); ?>" title="Edit Job Post">
                                <button class="btn btn-primary btn-sm"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button>
                            </a>

                            <br />
                            <br />
                            
                            <form method="POST" action="<?php echo e(url('/alumni/job/' . $jobpost->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                <?php echo e(method_field('DELETE')); ?>

                                <?php echo e(csrf_field()); ?>

                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Job Post" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\N RATHNA PRABA\alumni-app\resources\views/alumni/post.blade.php ENDPATH**/ ?>