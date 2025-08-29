<nav x-data="{ open: false }" class="fixed top-0 w-full z-50 gradient-bg glass backdrop-blur-md">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            
            <div class="text-xl font-bold nav-logo">
                <img src="<?php echo e(asset($logo)); ?>" alt="Logo" class="logo">
            </div>

            <div class="hidden md:flex space-x-8">
                <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $href => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($href); ?>" class="text-white hover:text-blue-200 transition nav-link">
                        <?php echo e($label); ?>

                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="md:hidden">
                <button 
                    class="text-white focus:outline-none"
                    @click="open = !open"
                >
                    <i class="fas fa-bars" x-show="!open"></i>
                    <i class="fas fa-times" x-show="open"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="md:hidden" x-show="open" x-transition>
        <div class="px-4 pt-2 pb-4 space-y-2 gradient-bg backdrop-blur-md">
            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $href => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($href); ?>" class="block text-white hover:text-blue-200 transition nav-link">
                    <?php echo e($label); ?>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</nav>
<?php /**PATH C:\laragon\www\portifolio-codebyazeredo\resources\views/components/navbar.blade.php ENDPATH**/ ?>