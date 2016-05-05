<?php

function p($print,$bool = ''){
    if($bool != ''){
        echo '<pre>'; print_r($print); echo '</pre>';
    }
    else {
        echo '<pre>'; print_r($print); echo '</pre>';
        exit;
    }
    
}