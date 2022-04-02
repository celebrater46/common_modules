<?php

namespace fp_common_modules;

//echo "Hello World from html_common_module.php (It is a test message)." . "<br>";

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

function is_daytime(){
    date_default_timezone_set('Asia/Tokyo');
    $m = date("m");
    $h_temp = date("H");
    $i = date("i");
    $i = (float)$i;
    $h = $i / 60 + (float)$h_temp; // 18:30 -> 18.5

    // 各月21日の日の出と日没時刻から、昼か夜かを判断（昼なら true）
    switch ((int)$m){
        case 1:  if($h >= 6.8 && $h <= 16.9) { return true; } else { return false; }
        case 2:  if($h >= 6.3 && $h <= 17.5) { return true; } else { return false; }
        case 3:  if($h >= 5.7 && $h <= 17.9) { return true; } else { return false; }
        case 4:  if($h >= 5.1 && $h <= 18.3) { return true; } else { return false; }
        case 5:  if($h >= 4.6 && $h <= 18.7) { return true; } else { return false; }
        case 6:  if($h >= 4.4 && $h <= 19.0) { return true; } else { return false; }
        case 7:  if($h >= 4.7 && $h <= 18.9) { return true; } else { return false; }
        case 8:  if($h >= 5.1 && $h <= 18.4) { return true; } else { return false; }
        case 9:  if($h >= 5.5 && $h <= 17.7) { return true; } else { return false; }
        case 10: if($h >= 5.9 && $h <= 17.0) { return true; } else { return false; }
        case 11: if($h >= 6.3 && $h <= 16.5) { return true; } else { return false; }
        case 12: if($h >= 6.8 && $h <= 16.5) { return true; } else { return false; }
        default: return false;
    }
}
//
//function get_current_dir(){
//    return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//}