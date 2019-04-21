<?php

/**
 * 递归重新排序无限级分类数组
 */
function recursive ($array, $pid=0, $level=0) {
    $arr = array();

    foreach ($array as $v) {
        if ($v['pid'] == $pid) {
            $v['level'] = $level;
            $v['html'] = str_repeat('--', $level);
            $arr[] = $v;
            $arr = array_merge($arr, recursive($array, $v['id'], $level + 1));
        }
    }

    return $arr;
}