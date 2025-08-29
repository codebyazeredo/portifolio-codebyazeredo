<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-900 mb-4"><?php echo e($title); ?></h2>
        <div class="w-20 h-1 bg-blue-600 mx-auto"></div>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-gray-100 p-6 rounded-2xl shadow-md transform transition hover:scale-105 hover:shadow-lg flex flex-col">
                
                <div class="flex items-center mb-6 border-b border-gray-200 pb-3">
                    <?php if(!empty($category['icon'])): ?>
                        <i class="<?php echo e($category['icon']); ?> text-blue-600 text-3xl mr-3"></i>
                    <?php endif; ?>
                    <h3 class="text-2xl font-semibold text-gray-900"><?php echo e($category['name']); ?></h3>
                </div>

                <div class="space-y-4">
                    <?php $__currentLoopData = $category['skills']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(!empty($skill['level'])): ?>
                            <div>
                                <div class="flex justify-between items-center mb-1">
                                    <span class="flex items-center text-gray-800 font-medium">
                                        <?php if(!empty($skill['icon'])): ?>
                                            <i class="<?php echo e($skill['icon']); ?> text-blue-600 mr-2"></i>
                                        <?php endif; ?>
                                        <?php echo e($skill['name']); ?>

                                    </span>
                                    <span class="text-sm text-gray-500 font-semibold"><?php echo e($skill['level']); ?></span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: <?php echo e($skill['level']); ?>;"></div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="flex items-center text-gray-700 bg-white border rounded-lg px-3 py-2 hover:bg-blue-100 transition">
                                <?php if(!empty($skill['icon'])): ?>
                                    <i class="<?php echo e($skill['icon']); ?> text-blue-600 mr-2"></i>
                                <?php endif; ?>
                                <span class="font-medium"><?php echo e($skill['name']); ?></span>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\laragon\www\portifolio-codebyazeredo\resources\views/components/skills.blade.php ENDPATH**/ ?>