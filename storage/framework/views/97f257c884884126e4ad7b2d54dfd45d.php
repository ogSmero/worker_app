<?php $__env->startSection('content'); ?>

    <div>
        <a href="<?php echo e(route('worker.create')); ?>">Додати робітника</a>
    </div>
    <hr>
    <div>
        <form action="<?php echo e(route('worker.index')); ?>">
            <input type="text" name="name" placeholder="name" value="<?php echo e(request()->get('name')); ?>">
            <input type="text" name="surname" placeholder="surname" value="<?php echo e(request()->get('surname')); ?>">
            <input type="text" name="email" placeholder="email" value="<?php echo e(request()->get('email')); ?>">
            <input type="number" name="from" placeholder="from" value="<?php echo e(request()->get('from')); ?>">
            <input type="number" name="to" placeholder="to" value="<?php echo e(request()->get('to')); ?>">
            <input type="text" name="description" placeholder="description" value="<?php echo e(request()->get('description')); ?>">
            <input id="isMarried" type="checkbox" name="is_married" <?php echo e(request()->get('is_married') == 'on' ? ' checked' : ''); ?>>
            <label for="isMarried">is Married</label>
            <input type="submit" value="Пошук">
            <a href="<?php echo e(route('worker.index')); ?>">Скинути фільтр</a>
        </form>
    </div>
    <div class="worker">
        <?php $__currentLoopData = $workers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $worker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <hr>
            <div>
                <?php echo e($worker->name); ?>

                <?php echo e($worker->surname); ?>

                <?php echo e($worker->email); ?>

                <?php echo e($worker->age); ?>

                <?php echo e($worker->description); ?>

            </div>
            <a href="<?php echo e(route('worker.show', $worker->id)); ?>">Подивитись</a>
            <a href="<?php echo e(route('worker.edit', $worker->id)); ?>">Редагувати</a>
            <form action="<?php echo e(route('worker.delete', $worker->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <input type="submit" value="Видалити">
            </form>
            <hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="my-nav">
            <?php echo e($workers->withQueryString()->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ogsmero/Projects/_Lars/worker_app/resources/views/worker/index.blade.php ENDPATH**/ ?>