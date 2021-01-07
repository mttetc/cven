<?php

include __DIR__ . '/datas/_studies_array.php';
?>

<div class="studies row">
    <?php foreach ($datas as $key => $value) { ?>
        <section class="col s12 m6">
            <span class="chip violet"><?php echo $key ?></span>
            <small class="date"><?php echo $value['place'] ?> - <?php echo $value['date'] ?></small>
            <ul class="card-content">
                <?php foreach ($value['desc'] as $desc) { ?>  
                    <li><?php echo $desc ?></li>
                <?php } ?>
            </ul>
        </section> 
    <?php } ?>
</div>