<?php
class Search {
    public static function binarySearch($arr, $target) {
        $left = 0;
        $right = count($arr) - 1;

        while ($left <= $right) {
            $mid = floor(($left + $right) / 2);

            if ($arr[$mid]['price'] == $target) {
                return $arr[$mid];
            } elseif ($arr[$mid]['price'] < $target) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }
        return null;
    }
}
?>
