<?php
    $num = $_GET['num'];
    $pick = substr($num, 0, 1);
    echo date("Y/m/dの運勢は", time());
    ?></br>
    選ばれた数字は <?php echo $pick ?></br>
    <?php 
    switch($pick){
        case 0:
            echo "凶";
            break;
        case 1:
        case 2:
        case 3:
            echo "小吉";
            break;
        case 4:
        case 5:
        case 6:
            echo "中吉";
            break;
        case 7:
        case 8:
            echo "吉";
            break;
        case 9:
            echo "大吉";
            break;
            default;
            echo "何らかのエラーが発生しています";
    }
    ?>