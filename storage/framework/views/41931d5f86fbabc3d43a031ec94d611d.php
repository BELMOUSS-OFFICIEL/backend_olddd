<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>log in</title>
</head>
<body>
    <form action="<?php echo e(route('logind')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" value="log">

    </form>
</body>
</html>
<?php /**PATH C:\Users\abdel_mgur99m\Desktop\gestion immobilier\projet\backend\resources\views/pages/authontification/loool.blade.php ENDPATH**/ ?>