<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="grid md:grid-cols-2 gap-12 items-center">
        
        <div class="text-white">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">
                <?php echo e($title); ?>

                <span class="block text-yellow-300 typing-effect"><?php echo e($name); ?></span>
            </h1>
            <p class="text-xl mb-6 text-blue-100">
                <?php echo e($subtitle); ?>

            </p>
            <p class="text-lg mb-8 text-blue-100">
                <i class="fas fa-map-marker-alt mr-2"></i><?php echo e($location); ?>

            </p>

            <div class="flex flex-wrap gap-4">
                <?php if(!empty($ctaPrimary)): ?>
                    <a href="<?php echo e($ctaPrimary['href'] ?? '#'); ?>"
                       class="bg-yellow-400 text-gray-900 px-8 py-3 rounded-lg font-semibold hover:bg-yellow-300 transition">
                        <?php echo e($ctaPrimary['label'] ?? 'Ação'); ?>

                    </a>
                <?php endif; ?>

                <?php if(!empty($ctaSecondary)): ?>
                    <a href="<?php echo e($ctaSecondary['href'] ?? '#'); ?>" target="_blank"
                       class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-gray-900 transition">
                        <?php echo e($ctaSecondary['label'] ?? 'Saiba Mais'); ?>

                    </a>
                <?php endif; ?>
            </div>

            <div class="flex space-x-6 mt-8">
                <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($social['href']); ?>" target="_blank"
                       class="text-white hover:text-yellow-300 transition text-2xl">
                        <i class="<?php echo e($social['icon']); ?>"></i>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <div class="flex justify-center">
            <div class="relative">
                <div class="w-80 h-80 bg-white bg-opacity-20 rounded-full flex items-center justify-center backdrop-blur-sm">
                    <img src="<?php echo e(asset('images/eu.png')); ?>" alt="Minha imagem" class="rounded-full w-full h-full object-cover">
                </div>
                <div class="absolute -top-4 -right-4 w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center">
                    <i class="fas fa-code text-gray-900 text-2xl"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\portifolio-codebyazeredo\resources\views/components/hero.blade.php ENDPATH**/ ?>