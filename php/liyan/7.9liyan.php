<?php
#2020.7.9 三数之和
/**
 * @param Integer[] $nums
 * @return Integer[][]
 */
function threeSum($nums) {
    $threeArray = [];
    $count = count($nums);


    sort($nums);
    for($i=0;$i<$count-2;++$i){
        if($nums[$i] > 0)break;

        if($i>0 && $nums[$i] === $nums[$i-1])continue;
        $first = $i+1;
        $last = $count-1;

        while($first < $last){
            $tSum = $nums[$first] + $nums[$last] + $nums[$i];
            if($tSum === 0){
                $threeArray[] = [$nums[$i], $nums[$first] ,$nums[$last]];
                while($first<$last && $nums[$last] == $nums[--$last]){};
                while($first<$last && $nums[$first] == $nums[++$first]){};
            }else
                if($tSum > 0){
                    $last--;
                }else if($tSum < 0){
                    $first++;
                }
        }
    }
    return $threeArray;
}
#2020.7.9 两数之和 1遍hash
function twoSum($nums, $target)
{
    $count = count($nums);
    $map = [];
    for ($i = 0; $i < $count; $i++) {
        $value = $target - $nums[$i];

        if (isset($map[$value])) {
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
        if ($nums[$i] != $nums[$j]) {
            $i++;
            $nums[$i] = $nums[$j];
        }
    }
    return $i + 1;
}

#2020.7.9 旋转数组  翻转三次
function rotate(&$nums, $k)
{
    $len = count($nums);
    $k = $k % $len;
    if ($len < 2) {
        return $nums;
    }

    $this->reverse($nums, 0, $len - 1);

    $this->reverse($nums, 0, $k - 1);

    $this->reverse($nums, $k, $len - 1);
    return $nums;

}

function reverse(&$nums, $start, $end)
{
    while ($start < $end) {
        $temp = $nums[$start];
        $nums[$start] = $nums[$end];
        $nums[$end] = $temp;
        $start++;
        $end--;
    }

}