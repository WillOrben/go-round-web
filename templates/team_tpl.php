<?php
$i = 0;
foreach(get('team:members') as $person){
    if($i % 2 == 0){ // left align
        ?>
        <div class="row">
            <div class="col-md-3">
                <img style="width: 200px;" src="<?=$person['bitmoji'];?>">
            </div>
            <div class="col-md-9">
                <h5><?=$person['name'];?></h5>
                <p class="muted"><?=$person['position'];?></p>
                <p><?=$person['biography'];?></p>
            </div>
        </div>
        ';
         <?php
    } else {
        ?>
        <div class="row">
        <div class="col-md-9" style="text-align: right;">
            <h5><?=$person['name'];?></h5>
            <p class="muted"><?=$person['position'];?></p>
            <p><?=$person['biography'];?></p>
        </div>
        <div class="col-md-3">
            <img style="width: 200px;" src="<?=$person['bitmoji'];?>">
        </div>
        </div>
        ';
    <?php
    }
    $i++;
}