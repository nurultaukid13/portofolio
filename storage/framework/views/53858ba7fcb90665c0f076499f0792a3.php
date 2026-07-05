<?php $__env->startSection('title', 'Home - My Portfolio'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-20">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6">Hi, I'm <span class="text-yellow-300">Your Name</span></h1>
        <p class="text-xl md:text-2xl mb-8 text-blue-100">Web Developer & Designer</p>
        <p class="text-lg mb-8 max-w-2xl mx-auto text-blue-100">
            I build beautiful, responsive websites and applications using modern technologies.
        </p>
        <div class="flex justify-center gap-4">
            <a href="<?php echo e(route('projects')); ?>" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                View Projects
            </a>
            <a href="<?php echo e(route('contact')); ?>" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">
                Contact Me
            </a>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="section-title text-center">About Me</h2>
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="flex justify-center">
                <div class="w-64 h-64 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full flex items-center justify-center text-white text-6xl font-bold">
                    YN
                </div>
            </div>
            <div>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    I'm a passionate web developer with experience in building modern web applications. 
                    I love creating clean, efficient, and user-friendly solutions.
                </p>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    My expertise includes Laravel, PHP, JavaScript, and Tailwind CSS. 
                    I'm always eager to learn new technologies and take on challenging projects.
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Laravel</span>
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">PHP</span>
                    <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm">JavaScript</span>
                    <span class="bg-cyan-100 text-cyan-800 px-3 py-1 rounded-full text-sm">Tailwind CSS</span>
                    <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">MySQL</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="py-16 bg-gray-100">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="section-title text-center">My Skills</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="card text-center">
                <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Web Development</h3>
                <p class="text-gray-600">Building responsive and modern web applications with Laravel and PHP.</p>
            </div>
            <div class="card text-center">
                <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">UI/UX Design</h3>
                <p class="text-gray-600">Creating beautiful and intuitive user interfaces with Tailwind CSS.</p>
            </div>
            <div class="card text-center">
                <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Database</h3>
                <p class="text-gray-600">Designing and managing databases with MySQL for optimal performance.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-purple-600 text-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Let's Work Together</h2>
        <p class="text-xl mb-8 text-blue-100">Have a project in mind? Let's discuss how I can help you.</p>
        <a href="<?php echo e(route('contact')); ?>" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
            Get In Touch
        </a>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/m/Documents/masa_kerja/freelance/build/portofolio/resources/views/home.blade.php ENDPATH**/ ?>