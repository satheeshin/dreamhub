<?php

if (! function_exists('cpurl')) {
    
    function cpurl($path = null)
    {
 
        return "https://www.dreamhost.in/cp/".$path;
    }
}