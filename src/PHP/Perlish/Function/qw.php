<?php


// @see http://anond.hatelabo.jp/20080304184210
if (!function_exists('qw')) {
    function qw($str)
    {
        return preg_split('/\s+/',$str,-1,PREG_SPLIT_NO_EMPTY);
    }
}
