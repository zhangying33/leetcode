<?php
#2020.7.9 三数之和

#2020.7.9 两数之和 1遍hash
function twoSum($nums, $target) {
    $count = count($nums);
    $map = [];
    for($i = 0;$i < $count;$i++){
        $value = $target - $nums[$i];

        if(isset($map[$value])){
            return [$map[$value], $i];
        }
        $map[$nums[$i]] = $i;
    }
    return [];
}
#2020.7.9 删除排序数组中的重复项 双指针
function removeDuplicates(&$nums)
{
    $i = 0;
    $count = count($nums);
    for ($j = 1; $j < $count; $j++) {
        if($nums[$i] != $nums[$j]){
            $i++;
            $nums[$i] = $nums[$j];
        }
    }
    return $i+1;
}
#2020.7.9 旋转数组
