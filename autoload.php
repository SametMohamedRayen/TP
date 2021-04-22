<?php
function load($className)
{
    include_once ("Classes/".$className.".php");
}

spl_autoload_register("load");

