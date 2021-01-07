<?php

include __DIR__ . '/datas/_skills_array.php';
?>

<?php foreach ($datas as $key => $value) { ?>
    <div class="chips">
        <?php 
        $i = 0;
        foreach ($value as $skills => $skill) {
        $i++ ?>
            <span class="chip <?php echo $i <= 5 ? 'violet' : '' ?>"><?php echo $skill ?></span>
        <?php } ?>
    </div> 
<?php } ?>