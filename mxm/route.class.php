<?php

namespace mxm;

class route {
    
    public static function jump()
    {        
        $ct = !empty(request::getKeyParam('ct')) ? trim(request::getKeyParam('ct')) : 'index';
        $ac = !empty(request::getKeyParam('ac')) ? trim(request::getKeyParam('ac')) : 'start';
        
        $ctrlClass = new $ct();
        $ctrlClass->$ac();
    }
}

?>