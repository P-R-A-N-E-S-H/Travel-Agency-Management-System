<?php
class Sorting {
    public static function quickSort(&$arr) {
        if (count($arr) < 2) return $arr;
        
        $left = $right = array();
        reset($arr);
        $pivot_key = key($arr);
        $pivot = array_shift($arr);

        foreach ($arr as $k => $v) {
            if ($v['price'] < $pivot['price'])
                $left[$k] = $v;
            else
                $right[$k] = $v;
        }

        return array_merge(self::quickSort($left), array($pivot_key => $pivot), self::quickSort($right));
    }
}
?>
