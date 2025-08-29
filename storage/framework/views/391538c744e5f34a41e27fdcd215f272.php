<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-white mb-4"><?php echo e($title); ?></h2>
        <div class="w-20 h-1 bg-yellow-400 mx-auto"></div>
        <?php if($subtitle): ?>
            <p class="text-blue-100 mt-4 text-lg"><?php echo e($subtitle); ?></p>
        <?php endif; ?>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(isset($contact['href'])): ?>
                <a href="<?php echo e($contact['href']); ?>"
                   class="bg-white bg-opacity-10 backdrop-blur-sm p-6 rounded-lg text-center hover:bg-opacity-20 transition card-hover">
                    <i class="<?php echo e($contact['icon']); ?> text-yellow-400 text-3xl mb-4"></i>
                    <h3 class="text-white font-semibold mb-2"><?php echo e($contact['label']); ?></h3>
                    <p class="text-blue-100"><?php echo e($contact['value']); ?></p>
                </a>
            <?php else: ?>
                <div class="bg-white bg-opacity-10 backdrop-blur-sm p-6 rounded-lg text-center">
                    <i class="<?php echo e($contact['icon']); ?> text-yellow-400 text-3xl mb-4"></i>
                    <h3 class="text-white font-semibold mb-2"><?php echo e($contact['label']); ?></h3>
                    <p class="text-blue-100"><?php echo e($contact['value']); ?></p>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <?php if(!empty($socials)): ?>
        <div class="text-center mt-12">
            <h3 class="text-white text-xl font-semibold mb-6">Conecte-se comigo</h3>
            <div class="flex justify-center space-x-6">
                <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($social['href']); ?>" target="_blank"
                       class="bg-white bg-opacity-10 backdrop-blur-sm p-4 rounded-lg hover:bg-opacity-20 transition">
                        <i class="<?php echo e($social['icon']); ?> text-white text-2xl"></i>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\laragon\www\portifolio-codebyazeredo\resources\views/components/contact.blade.php ENDPATH**/ ?>