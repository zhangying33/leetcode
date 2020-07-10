<?php
/*
|2020.7.8| [11.盛最多水的容器](https://leetcode-cn.com/problems/container-with-most-water/)|[张颖]
*/
class SolutionOne {
    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        //双指针
        $length = count($height);
        $left = 0; //key
        $right = $length - 1; //从0开始，长度-1
        $max = 0; //定义最大值
        while($left < $right) { //不是一个的情况下
            $max = max($max,min($height[$left],$height[$right])*($right-$left));
            if($height[$left] <= $height[$right]) {
                $left++;
            } else {
                $right--;
            }
        }
        return $max;

    }
}
/*
|2020.7.8| [283. 移动零](https://leetcode-cn.com/problems/move-zeroes/)|[张颖]
*/
class SolutionTwo {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $length = count($nums);
        $j = 0;
        for($i=0 ; $i < $length; $i++) {
            if($nums[$i] != 0) {
                $tmp = $nums[$j];
                $nums[$j] = $nums[$i];
                $nums[$i] = $tmp;
                $j++;
            }
        }
        return $nums;
    }
}

/*
|2020.7.8| [70.爬楼梯](https://leetcode-cn.com/problems/climbing-stairs/)|[张颖]
*/
class SolutionThree {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        //F(X) = F(X-1)+F(X-2)
        if ($n <= 2) {
            return $n;
        }
        $first = 1;
        $second = 2;
        $sum = 0;
        while ($n-- > 2) {
            $sum = $first + $second;
            $first = $second;
            $second = $sum;
        }
        return $sum;
    }
}

?>
