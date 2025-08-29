<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-900 mb-4"><?php echo e($title); ?></h2>
        <div class="w-20 h-1 bg-blue-600 mx-auto"></div>
    </div>

    <div class="space-y-8">
        <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white p-8 rounded-lg shadow-lg card-hover transition transform hover:scale-105">
                <div class="flex flex-wrap justify-between items-start mb-4">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900"><?php echo e($exp['position']); ?></h3>
                        <p class="text-blue-600 font-semibold"><?php echo e($exp['company']); ?></p>
                    </div>
                    <div class="text-right">
                        <?php if(!empty($exp['status'])): ?>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold"><?php echo e($exp['status']); ?></span>
                        <?php endif; ?>
                        <?php if(!empty($exp['period'])): ?>
                            <p class="text-gray-600 mt-1"><?php echo e($exp['period']); ?></p>
                        <?php endif; ?>
                        <?php if(!empty($exp['mode'])): ?>
                            <p class="text-gray-1000 text-sm"><?php echo e($exp['mode']); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="text-gray-700 space-y-2">
                    <?php $__currentLoopData = $exp['description']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $desc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p>• <?php echo e($desc); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="flex flex-wrap gap-2 mt-4">
                    <?php $__currentLoopData = $exp['skills']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm"><?php echo e($skill); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\laragon\www\portifolio-codebyazeredo\resources\views/components/experience.blade.php ENDPATH**/ ?>