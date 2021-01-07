<?php

include __DIR__ . '/datas/_languages_array.php';
?>

<ul class="languages">
    <?php foreach ($datas as $key => $value) { ?>    
        <li> 
            <div class="name"><?php echo $key ?>&nbsp;<small><?php echo $value['comp'] ?></small></div>
            <div class="progress">
                <div class="percentage" style="width:<?php echo $value['percent'] ?>;">
                    <span class="percent"><span class="material-icons">check</span></span>
                </div>
            </div>
        </li>
    <?php } ?>
</ul>