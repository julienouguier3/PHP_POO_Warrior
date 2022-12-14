
<html>
<head>
  <title>Warrior Project</title>
  <!-- Fonts -->
  <link href="simple.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
  <script language="JavaScript" type="text/javascript" src="jquery.min.js"></script>
  <script>
    $( document ).ready(function() {

      var power = 50;
      var fullpower = 100;
      var addpower = <?php echo e($battleField->myPowerRatio()); ?>*50;
      var takepower = (1-<?php echo e($battleField->myDefenceRatio()); ?>)*5;
      var disabled = false;

      var powerb = document.getElementById("powerbar");
      var btn = document.getElementById("power-btn");

      $('#power-btn').on('click', function(){
          console.log('click');
          if (power < fullpower){

            console.log(power);
            power += addpower;
            powerb.style.width = power + '%';


          }

          if (power >= fullpower && !disabled) {
              console.log('update Href iwin');
              console.log('disabled = ', disabled);
              disabled = true;
              $(this).prop('disabled', true);
              document.location.href=<?php echo e(BattleField::getHostJs()); ?>+'?do=iwin&p1=<?php echo e($battleField->getMyWarrior()->name); ?>&p2=<?php echo e($battleField->getOtherWarrior()->name); ?>';
          }
      });



      var refreshIntervalId=setInterval(function(){powerdown();},50);



      function powerdown() {

        if (power > 0 && power < fullpower) {

        power -= takepower;

        console.log("losing power...");
        console.log(power);
        powerb.style.width = power + '%';

        }
        if (power <=0  && !disabled) {
            console.log('update Href ilost');
            console.log('disabled = ', disabled);
            disabled = true;
            $(this).prop('disabled', true);
            clearInterval(refreshIntervalId);
            document.location.href=<?php echo e(BattleField::getHostJs()); ?>+'?do=ilost&p1=<?php echo e($battleField->getMyWarrior()->name); ?>&p2=<?php echo e($battleField->getOtherWarrior()->name); ?>';
        }

      }


  });
  </script>

</head>
<body class="demo">
  <h1>Warrior Project</h1>
  <div class="clearfix center">
      <button id="power-btn">fight !!!</button>
  </div>
  <table>
    <tr>
      <td>
        <img src="<?php echo e($battleField->getMyWarrior()->imageUrl); ?>" alt="<?php echo e(get_class ($battleField->getMyWarrior())); ?>" style="max-width:300px; max-height: 200px">
        <img src="<?php echo e($battleField->getMyWarrior()->weapon->imageUrl); ?>" alt="Pan !" style="width:100px;">
      </td>

      <td width=100%>
        <div id="cont">
          <div id="powerbar"></div>
        </div>
      </td>

      <td>
        <img src="<?php echo e($battleField->getOtherWarrior()->imageUrl); ?>" alt="<?php echo e(get_class ($battleField->getOtherWarrior())); ?>" style="max-width:300px; max-height: 200px">
        <img src="<?php echo e($battleField->getOtherWarrior()->weapon->imageUrl); ?>" alt="Pan !" style="width:100px;">

      </td>
    </tr>
  </table>

</body>
</html>
