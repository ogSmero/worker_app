<?php $__env->startSection('content'); ?>

    <h2>Edit page</h2>
    <hr>
    <form style="display: flex; flex-direction: column; width: fit-content; gap: 10px"
          action="<?php echo e(route('worker.update', $worker->id)); ?>"
          method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('Patch'); ?>
        <input type="text" name="name" placeholder="name" value="<?php echo e(old('name') ?? $worker->name); ?>">
        <input type="text" name="surname" placeholder="surname" value="<?php echo e(old('surname') ?? $worker->surname); ?>">
        <input type="email" name="email" placeholder="email" value="<?php echo e(old('email') ?? $worker->email); ?>">
        <input type="number" name="age" placeholder="age" value="<?php echo e(old('age') ?? $worker->age); ?>">
        <textarea name="description" placeholder="description">
            <?php echo e(old('description') ?? $worker->description); ?>

        </textarea>
        <div>
            <label for="married">is married</label>
            <input type="checkbox" name="is_married" id="married" <?php echo e($worker->is_married ? ' checked': ''); ?>>
        </div>
        <input type="submit" value="Зберегти">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ogsmero/Projects/_Lars/worker_app/resources/views/worker/edit.blade.php ENDPATH**/ ?>