<?php

class Validator {
    //pure method tāpēc static
    public static function string($data, $min=0, $max = INF) {
        $data = trim($data);

        return is_string($data)
        && strlen($data) >= $min
        && strlen($data) <= $max;
    }   
    public static function number($data, $min=0, $max = INF) {
        $data = trim($data);

        return is_numeric($data)
        && strlen($data) >= $min
        && strlen($data) <= $max;
    }  
}