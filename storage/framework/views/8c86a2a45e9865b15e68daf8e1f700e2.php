<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Spaceblogs</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body>
    <h1>Welcome to The Spaceblog</h1>
    <a href="<?php echo e(route('all-my-posts')); ?>">Check my posts</a>
    <a href="<?php echo e(route('my-single-post', ['id' => 7])); ?>">Random post</a>
    <main>
        <?php echo e($slot); ?>

    </main>
</body>
</html>
<?php /**PATH /Users/karolwichmann/Downloads/spaceblog-ws/spaceblog-ws/resources/views/components/layout.blade.php ENDPATH**/ ?>