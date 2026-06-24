<?php $__env->startSection('content'); ?>
<div class="card flex flex-col justify-center items-center">
    <form action="<?php echo e(route('categories.store')); ?>" method="POST" class="ml-40 mt-10">
        <h1 class="text-white">Crear Categoría</h1>
        <?php echo csrf_field(); ?>

        <div class="mb-3 flex flex-col gap-4">
            <label for="name" class="form-label text-white">Nombre</label>
                <input name="name" class="form-label-control text-dark w-96" value="<?php echo e(old('name')); ?>" type="text">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger text-red-400"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3 flex flex-col gap-4">
            <label for="description" class="form-label text-white">Descripción</label>
            <textarea name="description" class="form-control text-dark w-96"><?php echo e(old('description')); ?></textarea>
            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger text-red-400"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3 flex flex-col gap-4">
            <label for="parent_id" class="form-label text-white">Categoría</label>
                <select name="parent_id" class="form-control text-dark w-96">
                <option value="">Seleccionar Categoría</option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>" <?php echo e(old('parent_id') == $category->id ? 'selected' : ''); ?>>
                        <?php echo e($category->name); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            <?php $__errorArgs = ['parent_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-danger text-red-400"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <button type="submit" class="btn btn-primary text-white bg-red-600 transition duration-300 p-2 rounded-lg">Guardar</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\articulo\resources\views/Category/create.blade.php ENDPATH**/ ?>