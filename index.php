<?php
$nums = '';
for ($i = 1; $i < 10; $i++) {
    $nums = $nums . $i;
    $out = $nums;
    if($i != 1) $out = $out . substr(strrev($out),1);
    #echo '<p style="text-align:center;">' . $out . '</p>';
    print($out . "\n");
}
