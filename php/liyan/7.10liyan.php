<?php
//88. 合并两个有序数组	李岩
function merge(&$nums1, $m, $nums2, $n)
{
    $nums = [];
    $i = $j = 0;
    //从前往后一次往新数组里面塞，逻辑看着不清晰判断多
    while ($i < $m || $j < $n) {
        if ($n === 0 || ($nums1[$i] < $nums2[$j] && $i < $m)) {
            $nums[] = $nums1[$i];
            $i++;
        } elseif ($n > 0 && ($nums1[$i] >= $nums2[$j] || $j < $n)) {
            $nums[] = $nums2[$j];
            $j++;
        }
    }
    $nums1 = $nums;
}
//官方炫酷解法 从后往前双指针
function merge1(&$nums1, $m, $nums2, $n)
{
    $i = $m - 1;
    $j = $n - 1;
    $last = $m + $n - 1;
    while ($i >= 0 && $j >= 0) {
        $nums1[$last--] = $nums2[$j] > $nums1[$i] ? $nums2[$j--]: $nums1[$i--];
    }
    while ($j >= 0) {
        $nums1[$last--] = $nums2[$j--];
    }
    while ($i >= 0) {
        $nums1[$last--] = $nums1[$i--];
    }
}

#66. 加一
function plusOne($digits) {
    $len = count($digits);

    for($i=$len-1;$i>=0;$i--){
        $digits[$i]++;
        $digits[$i] %= 10;
        if($digits[$i] !== 0){
            return $digits;
        }
    }
    $arr = array_fill(0,$len+1,0);//填充0
    $arr[0] = 1;
    return $arr;
}