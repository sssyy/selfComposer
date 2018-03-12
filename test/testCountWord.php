<?php
/**
 * 查数
 */
$str = "*****";

function mb_str_split($str) {
    return preg_split('/(?<!^)(?!$)/u', $str);
}
echo count(mb_str_split($str));
