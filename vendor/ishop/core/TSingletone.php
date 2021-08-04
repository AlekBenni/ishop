<?php

namespace ishop;

trait TSingletone
{
    private static $instance;

    public static function instance()
    {
        if(self::$instance == 0){
            self::$instance = new self;
        }
        return self::$instance;
    }

}