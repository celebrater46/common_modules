<?php

namespace common_modules;

function space_br($html, $num): string
{
    $space = str_repeat("    ", $num);
    return $space . $html . "\n";
}

function delete_br($line){
    return str_replace(["\n", "\r", "\r\n"], "", $line);
}

function h($s): string
{
    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}

function get_url_all(){
    return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}
//
//function get_current_dir(){
//    return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//}