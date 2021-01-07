<?php

include __DIR__ . '/datas/_exp_array.php';
?>

<div class="timeline">
    <?php foreach ($datas as $key => $value) { ?>  
        <div class="timeline-block">
            <div class="timeline-point">
                <span class="material-icons">check</span>
            </div>
            
            <div class="timeline-content">
                <div class="card">
                    <div class="card-title">
                        <span class="date"><?php echo $value['date']; ?></span>
                        <a class="name" href="<?php echo $value['site']; ?>" target="_blank"><?php echo $key ?></a>
                        <span class="chip"><?php echo $value['job']; ?></span>
                    </div>
                    <ul class="card-content">
                        <li>
                            <strong>Stack</strong> :<br/>
                            <?php 
                            $countStack = count($value['stack']);
                            $i = 0;
                            foreach ($value['stack'] as $name => $stack) { 
                                $i++ ;
                                echo $stack . ($i < $countStack ? ',<br/>' : '');
                            } ?>
                        </li>
                        <li>
                            <strong>Missions</strong> :<br/>
                            <?php 
                            $countMissions = count($value['missions']);
                            $j = 0;
                            foreach ($value['missions'] as $name => $mission) { 
                                $j++;
                           
                                echo $mission . ($j < $countMissions ? ',<br/>' : '');
                            } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
