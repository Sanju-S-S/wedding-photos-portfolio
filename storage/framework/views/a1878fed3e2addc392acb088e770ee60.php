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
    <div class="container mx-auto m-2 p-2 bg-white shadow-md rounded-lg">
        <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
        <form method="POST" action="<?php echo e(route('ablums.upload', $album->id)); ?>" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <div class="sm:col-span-6">
            <label for="title" class="block text-sm font-medium text-gray-700"> Album Image </label>
            <div class="mt-1">
              <input type="file" id="image" name="image" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>
          </div>
          <div class="sm:col-span-6 pt-5">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'bg-green-500']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-green-500']); ?>Upload <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
          </div>
        </form>
       </div>
       <div class="mt-4">
         <div class="grid grid-cols-2 md:grid-cols-3 gap-2 md:gap-4">
           <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <div class="bg-gray-300 p-2">
             <a class="block relative h-56 rounded overflow-hidden">
                <img 
                alt="gallery" 
                class="object-cover object-center w-full h-full block" 
                src="<?php echo e($photo->getUrl('thumb')); ?>">
              </a>
              <div class="flex justify-between mt-4 p-4">
              <a class="m-2 p-2 bg-blue-500 hover:bg-blue-700 rounded-lg" href="<?php echo e(route('album.image.show', [$album->id, $photo->id])); ?>">Full image</a>
              <form method="POST" action="<?php echo e(route('album.image.destroy', [$album->id, $photo->id])); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button class="m-2 p-2 rounded-lg bg-red-500 hover:bg-red-700">Delete</button>  
              </form> 
            </div>
            </div>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
       </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH H:\Laravel\laragon\www\wedding-photo-portfolio\resources\views/albums/show.blade.php ENDPATH**/ ?>