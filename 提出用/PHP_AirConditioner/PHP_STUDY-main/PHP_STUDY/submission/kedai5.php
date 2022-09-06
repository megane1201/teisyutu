<?php
$result = dubleArr(array(1,2,3));

// 引数に配列以外を渡した場合
if (!$result) {
    echo "引数が不正です!";
    return;
}

foreach ($result as $num) {
    echo $num;
    echo "\n";
}

if (is_array($result) === true) {
   echo "配列です";
}else{
   echo "配列ではない";
}

?>