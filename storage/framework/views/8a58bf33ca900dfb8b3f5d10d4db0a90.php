<title>Wedding Photo Portfolio</title>
<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> Albums <?php $__env->endSlot(); ?>
    <div class="container mx-auto mt-6 p-4">
        <div class="w-full m-2 p-2">
            <a href="<?php echo e(route('albums.create')); ?>" class="bg-green-600 text-white p-2 m-2 font-semibold rounded-lg">Create</a>
        </div>
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
          <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Id</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Title</th>
            <th scope="col" class="relative px-6 py-3">Manage</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($album->id); ?></td>
            <td class="px-6 py-4 whitespace-nowrap">
              <a class="text-indigo-500 hover:text-indigo-700 font-semibold" href="<?php echo e(route('albums.show', $album->id)); ?>">
              <?php echo e($album->title); ?>

              </a>
            </td>
            
            <td class="px-6 py-4 text-right text-sm">
              <div class="flex justify-center">
               <a href="<?php echo e(route('albums.edit', $album->id)); ?>" class="py-2 px-4 bg-green-500 hover:bg-green-700 rounded-lg mr-2">Edit</a>
               <form method="POST" action="<?php echo e(route('albums.destroy', $album->id)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'bg-red-500 hover:bg-red-700']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-red-500 hover:bg-red-700']); ?>Delete <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> 
              </form>
              </div>
            </td>
          </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH H:\Laravel\laragon\www\wedding-photo-portfolio\resources\views/albums/index.blade.php ENDPATH**/ ?>