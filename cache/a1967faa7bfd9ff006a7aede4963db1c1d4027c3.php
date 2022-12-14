
<html>
<head>
  <title>Warrior Project</title>
  <!-- Fonts -->
  <link href="simple.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
  <link href="https://unpkg.com/nes.css/css/nes.css" rel="stylesheet" />

  <style>
    html, body, pre, code, kbd, samp {
      font-family: "Press Start 2P";
    }
  </style>
</head>
<body>

  <div class="container">

    <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php echo $__env->make('error', ['txt' => $e], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    <h1>Warrior Project</h1>

    <p class="nes-balloon from-left nes-pointer">
      Si les étapes sont validées, une étoile <i class="nes-icon is-small star"></i> apparait au rechargement de la page
    </p>

    <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="nes-container is-rounded is-dark mb-3">
          <div class="flex items-center">
            <?php if($result->isValid): ?>
              <i class="nes-icon is-large star"></i>
            <?php else: ?>
              <i class="nes-icon is-large star is-empty"></i>
            <?php endif; ?>
            <p class="ml-3"><?php echo $result->title; ?></p>
          </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    <?php if(getGoodAnswersCount($results) >= 14): ?>
      <h1 class="mt-3">Ready to fight ? </h1>
      <p>Click on your enemy to fight them!</p>
      <div class="flex mb-3">
        <a href="<?php echo e(BattleField::getHost()); ?>?do=createMy&me=<?php echo e($me); ?>" class="nes-btn is-primary mr-3">Create My Warrior</a>
        <a href="<?php echo e(BattleField::getHost()); ?>?do=createOther&me=<?php echo e($me); ?>" class="nes-btn is-primary  mr-3">Create Another</a>
        <a href="<?php echo e(BattleField::getHost()); ?>?do=deleteAll&me=<?php echo e($me); ?>" class="nes-btn is-error">Delete All</a>

      </div>

      <?php echo $__env->make('battlefield', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php endif; ?>

    <?php if(getGoodAnswersCount($results) === count($results)): ?>
      <h1  class="mt-3">Pour aller plus loin ... </h1>
      <ul class="nes-list is-disc">
        <li>Créez plus de  guerriers</li>
        <li>Affichez les caractéristiques de vos guerriers (Je vous conseille de le faire dans battlefield.blade.php)</li>
        <li>Pour avoir un vrai champ de bataille, faites hériter warrior de DistantWarrior</li>
        <li>Créez le guerrier le plus fort de l'arène</li>
        <li>Battez tous les autres guerriers</li>
        <li>Devenez immortels</li>
        <li>Implémentez un "vrai" serveur de jeux, à partir de <a href="https://github.com/le-campus-numerique/PHP_POO_Serve">POO Serve</a></li>
      </ul>

    <?php endif; ?>

  </div>

</body>
</html>
