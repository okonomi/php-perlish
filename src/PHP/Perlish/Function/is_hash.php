<?php


// @see http://d.hatena.ne.jp/fbis/20091112/1258002754
if (!function_exists('is_hash')) {
    function is_hash($array)
    {
        if (!is_array($array)) {
            return false;
        }

        $i = 0;
        foreach ($array as $k => $dummy) {
            if ($k !== $i++) return true;
        }

        return false;
    }
}
