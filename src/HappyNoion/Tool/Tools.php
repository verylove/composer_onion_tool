<?php
/**
 * Created by PhpStorm.
 * User: yang
 * Date: 2017/1/3
 * Time: 15:30
 */

namespace HappyNoion\Tool;

class Tools{

    public  function __construct(){

    }

    public function getDateTime($format = "Y-m-d H:i:s"){
        if($format == "") return 'error';
        return date($format,time());
    }

}