<?php
$val = isNumber(100);
echo $val;
function isNumber($val){
    return is_numeric($val);
}

?>