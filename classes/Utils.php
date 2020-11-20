<?php


class Utils
{
   static function getBy($att, $value, $array)
    {
        foreach ($array as $key => $val) {
            if ($val[$att] == $value) {
                return $key;
            }
        }
        return null;
    }
}