<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Categorías
            </h2>
            <a href="<?php echo e(route('categories.create')); ?>" class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">
                Crear categoría
            </a>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
            <div class="p-4 bg-gray-800 text-white rounded">
                <strong>DEBUG:</strong> count = <?php echo e($categories->count()); ?>

            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <?php if($categories->isEmpty()): ?>
                        <div class="py-12 text-center">
                            <p class="text-gray-700 dark:text-gray-300 mb-4">No hay categorías disponibles aún.</p>
                            <a href="<?php echo e(route('categories.create')); ?>" class="inline-block px-4 py-2 bg-blue-600 text-white rounded">Crear categoría</a>
                        </div>
                    <?php else: ?>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 text-left">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2">ID</th>
                                        <th class="px-4 py-2">Nombre</th>
                                        <th class="px-4 py-2">Descripción</th>
                                        <th class="px-4 py-2">Categoría</th>
                                        <th class="px-4 py-2">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="px-4 py-2"><?php echo e($category->id); ?></td>
                                            <td class="px-4 py-2"><?php echo e($category->name); ?></td>
                                            <td class="px-4 py-2"><?php echo e($category->description); ?></td>
                                            <td class="px-4 py-2"><?php echo e($category->parent ? $category->parent->name : '-'); ?></td>
                                            <td class="px-4 py-2 space-x-3">
                                                <a href="<?php echo e(route('categories.show', $category)); ?>" class="text-blue-600">Ver</a>
                                                <a href="<?php echo e(route('categories.edit', $category)); ?>" class="text-yellow-600">Editar</a>
                                                <form action="<?php echo e(route('categories.destroy', $category)); ?>" method="POST" class="inline" onsubmit="return confirm('¿Seguro que deseas eliminar esta categoría?')">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="text-red-600">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\articulo\resources\views/Category/index.blade.php ENDPATH**/ ?>