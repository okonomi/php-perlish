<?php


error_reporting(E_ALL | E_STRICT);

set_include_path(realpath(dirname(__FILE__) . '/../src') . PATH_SEPARATOR .
                 get_include_path()
);