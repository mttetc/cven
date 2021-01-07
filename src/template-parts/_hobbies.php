<?php

include __DIR__ . '/datas/_hobbies_array.php';
?>

<div class="hobbies chips">
    <?php     
        $i = 0;
        foreach ($datas as $key => $value) {
        $i++ ?>   
        <span class='chip <?php echo $i <= 4 ? 'violet' : '' ?>'><?php echo $value ?></span>
    <?php } ?>
</div>