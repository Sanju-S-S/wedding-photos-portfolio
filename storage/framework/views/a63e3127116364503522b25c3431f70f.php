<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> <?php echo e($album->title); ?> <?php $__env->endSlot(); ?>
    <div class="container mx-auto flex justify-between m-2 p-2 bg-white shadow-md rounded-lg">
        <div class="m-2 p-2">
            <img src="<?php echo e($image->getUrl()); ?>">
        </div>
        <div class="m-2 p-2">
            <ul>
                <li>Collection Name: <?php echo e($image->collection_name); ?></li>
                <li>Name: <?php echo e($image->name); ?></li>
                <li>Mime type: <?php echo e($image->mime_type); ?></li>
                <li>Size: <?php echo e($image->human_readable_size); ?></li>
            </ul>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH H:\Laravel\laragon\www\wedding-photo-portfolio\resources\views/albums/image-show.blade.php ENDPATH**/ ?>