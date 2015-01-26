<?php

function getconfig($filename)
{
    // leer contenido global.php
    $global = $config['../configs/global.php'];
    // leer contenido local.php
    $local = $config['../configs/local.php'];
    // juntar los dos arrays dando preferencia a local.php
    $config = array_merge($global,$local);
    return $config;    
}