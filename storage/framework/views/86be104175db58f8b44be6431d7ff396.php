<?php $__env->startSection('content'); ?>

    <h2>Show page</h2>
    <div class="worker">
        <div>
            <?php echo e($worker->name); ?>

            <?php echo e($worker->surname); ?>

            <?php echo e($worker->email); ?>

            <?php echo e($worker->age); ?>

            <?php echo e($worker->description); ?>

        </div>
        <a href="<?php echo e(route('worker.index')); ?>">Повернутись</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ogsmero/Projects/_Lars/worker_app/resources/views/worker/show.blade.php ENDPATH**/ ?>