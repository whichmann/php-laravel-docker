<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title', 'body', 'author', 'created_at', 'id']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['title', 'body', 'author', 'created_at', 'id']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
    <h4><b><?php echo e($title); ?></b></h4>
    <p><?php echo e($body); ?></p>
    <p><i>Posted by <?php echo e($author); ?> on <?php echo e($created_at); ?></i></p>
    <?php if(isset($id)): ?> <a href="<?php echo e(route('my-single-post', ['id' => $id])); ?>">Read More</a> <?php endif; ?>
</div>
<?php /**PATH /Users/karolwichmann/Downloads/spaceblog-ws/spaceblog-ws/resources/views/components/post.blade.php ENDPATH**/ ?>