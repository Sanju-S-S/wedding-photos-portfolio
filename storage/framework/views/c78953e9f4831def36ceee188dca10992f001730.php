<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
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
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH H:\Laravel\laragon\www\laravel-photo-gallery-main\resources\views/albums/image-show.blade.php ENDPATH**/ ?>