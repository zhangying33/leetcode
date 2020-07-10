<?php
class Solution {
    /**
     * 三数之和
     * https://leetcode-cn.com/problems/3sum/submissions/
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        //定义数组
        $arrayList = [];
        //排序数组
        sort($nums);
        $length = count($nums);
        for ($i =0 ; $i< $length; $i++) {
            //两种情况直接跳出循环 1、当前值>0.后续值相加肯定>0
            if($nums[$i] > 0) break;
            // 2、如果当前值和前一个值相同，则跳过当前循环，防止重复
            if($i > 0 && $nums[$i-1] == $nums[$i]) continue;
            //定义左右指针
            $left = $i+1; //即第二个 参数
            $right = $length-1; //第三个参数
            while($left < $right) {
                $sum = $nums[$i] + $nums[$left] + $nums[$right];
                if (0 == $sum) {
                    $arrayList[] = [$nums[$i] , $nums[$left] , $nums[$right]];
                    //判重
                    while($left < $right && $nums[$left] == $nums[$left+1]) {
                        $left++;
                    }
                    $left++;
                    while($left < $right && $nums[$right] == $nums[$right-1]) {
                        $right--;
                    }
                    $right--;
                } elseif ($sum >0) {
                    $right--;
                } else {
                    $left++;
                }
            }
        }
        return $arrayList;
    }

    /**
     * 两数之和
     * https://leetcode-cn.com/problems/two-sum/submissions/
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        //定义数组
        $arrayList = [];
        $length = count($nums);
        for($i=0; $i< $length; $i++) {
            //获取当前差值
            $diff = $target - $nums[$i];
            //判断差值
            if (array_key_exists($diff,$arrayList)) {
                return [$arrayList[$diff],$i];
            }
            //储存
            $arrayList[$nums[$i]] = $i;
        }
    }

    /**
     * 删除排序数组中的重复项
     * https://leetcode-cn.com/problems/remove-duplicates-from-sorted-array/
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $length = count($nums);

        if($length <= 1){ //长度小于等于1 直接返回
            return $length;
        }

        for($i = 0; $i <= $length; $i++){
            $j=$i+1;
            if(isset($nums[$j]) && ($nums[$j] == $nums[$i])){ //当前项与 下一项重复
                unset($nums[$i]);
            }
        }
        return  count($nums);
    }

    /**
     * 旋转数组
     * https://leetcode-cn.com/problems/rotate-array/
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        $arr = [];
        $length = count($nums);
        for($i = 0; $i < $length; $i++){
            $arr[($i + $k) % $length] = $nums[$i];
        }
        ksort($arr);
        $nums = $arr;
        return $nums;
    }


}
