


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>semsarNet | verification</title>
  <link rel="shortcut icon" href="<?php echo e(asset('./favicon.ico')); ?>" type="image/x-icon">

</head>
<body style="background-color: black ; width: 60%;margin: 10px auto;">
  <div style="text-align: center; background-color: #191C24; padding:20px;border-radius: 24px;">
    <img src="<?php echo e(asset('./logo-removebg.png')); ?>" alt="logo semsarNet" width="100px" style="border-radius:20px; background:black">
  <h2 style="color:white">Hello <span style="color:#d18e2a"><?php echo e($nom); ?></span></h2>
  <p style="color:white">
    bienvenue dans notre site  <span ><a style="color:#d18e2a" href="">SemsarNet</a></span> nous sommes heureux de vous servir et on espere que vous trouvez ce que vous cherchez chez nous
  </p>
  <p style="color:white">Pour continuer l'inscription,verifiez votre email <span style="color:#d18e2a"><?php echo e($email); ?></span> </p>
  <a href="http://localhost:8000/virefiy_email/<?php echo e($href); ?>" style="padding: 10px 29px;;border: 1px solid #d18e2a;color:#d18e2a;background-color: black;border-radius: 10px;text-decoration: none;">Verifier Email</a>
  

</div>

</body>
</html><?php /**PATH C:\Users\hp\Desktop\MY_OMAR_PROJET_FINAL\backend\resources\views/emails/inscription.blade.php ENDPATH**/ ?>