<footer class="bg-gray-900 text-white py-6">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-2">
        <p>&copy; 2025 codebyazeredo® Todos os direitos reservados.</p>
        <div class="flex justify-center space-x-4">
            <?php if(!empty($links)): ?>
                <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($link['href']); ?>" class="text-gray-400 hover:text-yellow-400 transition text-sm">
                        <?php echo e($link['label']); ?>

                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
</footer>
<?php /**PATH C:\laragon\www\portifolio-codebyazeredo\resources\views/components/footer.blade.php ENDPATH**/ ?>