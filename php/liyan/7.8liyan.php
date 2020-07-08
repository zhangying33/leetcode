<?php
#盛最多水的容器
function maxArea($height)
{
    $maxArea = 0;
    $count = count($height);
    for ($i = 0, $j = $count - 1; $i < $j;) {
        $area = ($j - $i) * (($height[$i] < $height[$j]) ? $height[$i++]: $height[$j--]);
        $maxArea = $area < $maxArea ? $maxArea: $area;
    }
    return $maxArea;
}

#移动零  标记不为零的位置做交换
function moveZeroes(&$nums)
{
    $flag = 0;
    $count = count($nums);
    for ($i = 0; $i < $count; $i++)
        if ($nums[$i] != 0) {
            if ($i != $flag) {
                $nums[$flag] = $nums[$i];
                $nums[$i] = 0;
            }
            $flag++;
        }

    return $nums;
}

#爬楼梯
function climbStairs($n)
{
    if ($n <= 2) {
        return $n;
    }
    $one = 1;
    $two = 2;
    for ($i = 2; $i < $n; $i++) {
        $three = $one + $two;
        $one = $two;
        $two = $three;
    }
    return $three;
}