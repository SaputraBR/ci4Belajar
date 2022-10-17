<?php
    if (!function_exists("an_each"))
    {
        function an_each(&$array)
        {
            $key = key($array);
            $result = ($key === null) ? false : [$key, current($array), 'key' => $key, 'value' => current($array)];
            next($array);
            return $result;
        }
    }

    if (!function_exists('php_date'))
    {
        function php_date($mysql_date)
        {
            $datetime = strtotime($mysql_date);
            $format = date("d M o, g:i a", $datetime);
            return $format;
        }
    }
    
?>