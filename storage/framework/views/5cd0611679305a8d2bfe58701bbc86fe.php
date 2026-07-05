<?php $__env->startSection('title', 'Projects - My Portfolio'); ?>

<?php $__env->startSection('content'); ?>
<section class="py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h1 class="section-title text-center">My Projects</h1>
        <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">
            Here are some of my recent projects. Each project is a unique piece of development.
        </p>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card group">
                <div class="overflow-hidden rounded-lg mb-4">
                    <img src="<?php echo e($project['image']); ?>" alt="<?php echo e($project['title']); ?>" 
                         class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                </div>
                <h3 class="text-xl font-semibold mb-2"><?php echo e($project['title']); ?></h3>
                <p class="text-gray-600 mb-4"><?php echo e($project['description']); ?></p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <?php $__currentLoopData = $project['tags']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm"><?php echo e($tag); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="flex gap-4">
                    <a href="<?php echo e($project['github']); ?>" target="_blank" 
                       class="text-gray-700 hover:text-blue-600 transition flex items-center gap-1">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                        Code
                    </a>
                    <a href="<?php echo e($project['demo']); ?>" target="_blank"
                       class="text-gray-700 hover:text-blue-600 transition flex items-center gap-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                        Demo
                    </a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/m/Documents/masa_kerja/freelance/build/portofolio/resources/views/projects.blade.php ENDPATH**/ ?>