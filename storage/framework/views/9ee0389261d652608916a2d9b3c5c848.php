<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    my blog
    <ul>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <?php if (isset($component)) { $__componentOriginalbe59bb4860554bf4e18abcc14efde964 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbe59bb4860554bf4e18abcc14efde964 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.post','data' => ['id' => $post['id'],'author' => $post['author'],'createdAt' => $post['created_at'],'title' => $post['title'],'body' => $post['body']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('post'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post['id']),'author' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post['author']),'created_at' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post['created_at']),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post['title']),'body' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post['body'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbe59bb4860554bf4e18abcc14efde964)): ?>
<?php $attributes = $__attributesOriginalbe59bb4860554bf4e18abcc14efde964; ?>
<?php unset($__attributesOriginalbe59bb4860554bf4e18abcc14efde964); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbe59bb4860554bf4e18abcc14efde964)): ?>
<?php $component = $__componentOriginalbe59bb4860554bf4e18abcc14efde964; ?>
<?php unset($__componentOriginalbe59bb4860554bf4e18abcc14efde964); ?>
<?php endif; ?>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH /Users/karolwichmann/Downloads/spaceblog-ws/spaceblog-ws/resources/views/blogs/my-blog.blade.php ENDPATH**/ ?>