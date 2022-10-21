


<?php if($battleField!=NULL && $battleField->getMyWarrior()!=NULL): ?>

  <table width="100%">

      <tr>
      <td width="33%">
        <img src="<?php echo e($battleField->getMyWarrior()->imageUrl); ?>" alt="<?php echo e(get_class ($battleField->getMyWarrior())); ?>" style="width:300px;">
        <img src="<?php echo e($battleField->getMyWarrior()->weapon->imageUrl); ?>" alt="Pan !" style="width:100px;">
        <progress class="nes-progress is-primary mt-3" value="<?php echo e($battleField->getMyWarrior()->life); ?>" max="100"></progress>
      </td>

      <?php if($battleField->getOtherWarriors() != NULL): ?>
          <td width="33%" align="center"><img src="vs.png" alt="VS" style="width:100px;"></td>
          <td width="33%">
            <table>
            <?php $__currentLoopData = $battleField->getOtherWarriors(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warrior): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td>
                  <a href="<?php echo e(BattleField::getHost()); ?>?do=fight&p1=<?php echo e($battleField->getMyWarrior()->name); ?>&p2=<?php echo e($warrior->name); ?>">
                    <img src="<?php echo e($warrior->imageUrl); ?>" alt="<?php echo e(get_class ($warrior)); ?>" style="width:100px">
                  </a>
                  <img src="<?php echo e($warrior->weapon->imageUrl); ?>" alt="Pan !" style="width:30px;">
                <progress class="nes-progress is-primary mt-3" value="<?php echo e($warrior->life); ?>" max="100"></progress>
                </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
          </td>
      <?php endif; ?>
    </tr>
  </table>


<?php endif; ?>
