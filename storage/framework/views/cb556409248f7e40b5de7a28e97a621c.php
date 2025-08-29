<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-900 mb-4"><?php echo e($title); ?></h2>
        <div class="w-20 h-1 bg-blue-600 mx-auto"></div>
    </div>

    <div class="grid md:grid-cols-2 gap-12 items-center">
        
        <div>
            <?php $__currentLoopData = $paragraphs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paragraph): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p class="text-lg text-gray-800 mb-6 leading-relaxed">
                    <?php echo e($paragraph); ?>

                </p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="bg-gray-100 p-8 rounded-lg">
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Especialidades</h3>
            <div class="space-y-4">
                <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex items-center">
                        <i class="<?php echo e($skill['icon']); ?> text-blue-600 text-xl mr-4"></i>
                        <span class="text-gray-700"><?php echo e($skill['label']); ?></span>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\portifolio-codebyazeredo\resources\views/components/about.blade.php ENDPATH**/ ?>