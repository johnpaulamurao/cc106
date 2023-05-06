<?php   
    require("header.php");
?>
    <div class="mt-4 p-5 bg-primary text-white rounded">
  <h1>CONTACT</h1>
  <p>Please call me!
  </p>
</div>



<div class="container">
    <?php
    $math=($_GET['pm'] * .30)+($_GET['mm'] * .30)+($_GET['fm'] * .40);
    $english=($_GET['pe'] * .30)+($_GET['me'] * .30)+($_GET['fe'] * .40);
    $filipino=($_GET['pf'] * .30)+($_GET['mf'] * .30)+($_GET['ff']*.40);
    $apan=($_GET['pa']*.30)+($_GET['ma']*.30)+($_GET['fa']*.40);
    $science=($_GET['ps']*.30)+($_GET['ms']*.30)+($_GET['fs']*.40);
    $genave=($math + $english + $filipino + $apan + $science) /5;
    
    if($genave >=75){
      $rem="PASSED!";
    }else{
      $rem="FAILED!";
    }
    ?>
    

  <h1>Math: Prelim=<?=$_GET['pm'];?>, Midterm=<?=$_GET['mm'];?>, Final=<?=$_GET['fm'];?>, Final Grade=<?=$math;?></h1>
  <h1>English:  Prelim= <?=$_GET['pe'];?>, Midterm=<?=$_GET['me'];?>, Final=<?=$_GET['fe'];?>, Final Grade=<?= $english;?></h1>
  <h1>Filipino:  Prelim= <?=$_GET['pf'];?>, Midterm=<?=$_GET['mf'];?>, Final=<?=$_GET['ff'];?>, Final Grade=<?=$filipino;?></h1>
  <h1>AP:  Prelim=<?=$_GET['pa'];?>, Midterm=<?=$_GET['ma'];?>, Final=<?=$_GET['fa'];?>, Final Grade=<?=$apan;?></h1>
  <h1>Science:  Prelim=<?=$_GET['ps'];?>, Midterm=<?=$_GET['ms'];?>, Final=<?=$_GET['fs'];?>, Final Grade=<?=$science;?></h1>
  <h1>General Average: <?=$genave;?></h1>
  <h1>Remarks: <?=$rem;?></h1>

</div>
 <?php
    require('footer.php')
 
 
 ?>

