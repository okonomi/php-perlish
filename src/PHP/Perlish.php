<?php


class PHP_Perlish
{
    static public function loadFunction($function)
    {
        // Recursiveness
        if (is_array($function)) {
            $res = array();
            foreach ($function as $singlefunc) {
                $res[$singlefunc] = PHP_Perlish::loadFunction($singlefunc);
            }

            return $res;
        }

        // Load function
        if (!function_exists($function)) {
            $file = sprintf('PHP/Perlish/Function/%s.php', $function);
            if ((@include_once $file) !== false) {
                return true;
            }
        }

        return false;
    }
}
