<?php
/**
 * 合并两个有序数组
 */
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {//将第二个数组方在第一个数组里。，则，当n 小于等于 0 时，循环结束
        while ($n > 0) {
            if ($m <= 0 || $nums2[$n-1] >= $nums1[$m-1]) {
                $nums1[$m+$n-1] = $nums2[$n-1];
                $n--;
            } else {
                $nums1[$m+$n-1] = $nums1[$m-1];
                $m--;
            }
        }
        return $nums1;
    }

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $len_d = count($digits);
        $i = $len_d - 1;
        $res = [];
        $carry = 1;
        while ($i >= 0 || $carry) {
            $cur = $carry;
            if ($i >= 0) {
                $cur += $digits[$i];
            }
            $carry = (int)($cur / 10);
            $res[] = $cur % 10;
            $i--;
        }
        return array_reverse($res);
    }
}