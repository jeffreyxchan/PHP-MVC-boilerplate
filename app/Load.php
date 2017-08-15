<?php

Class Load
{
    function view($fileName, $data=null)
    {
        if(is_array($data)) {
            extract($data);
        }
        require_once('views/' . $fileName);
    }
}
