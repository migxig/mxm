<?php

namespace mxm;

class request {
    public static function getKeyParam($key) 
    {
        if(isset($_GET[$key])) {
            return $_GET[$key];
        }

        if(isset($_POST[$key])) {
            return $_POST[$key];
        }

        return '';
    }

	public static function getParams()
    {
        return array_merge($_GET, $_POST);
    }

    public static function getValue()
    {
        return $_GET;
    }

    public static function postValue()
    {
        return $_POST;
    }
}

?>