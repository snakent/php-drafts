<?php
    /* Leave only numbers */
    $str = "asdkE2oedsl;043w";
    $str = preg_replace("/[^0-9]/", "", $str);
    echo $str; //result is 2043

    /* Contains string with slashes */
    $url = "/catalog/23/";
    if(preg_match("/\/catalog\//", $url, $match)) {
        echo $match[0]; //result is /catalog/
    };

    /* Replace all spaces to one space */
    $str = "Audi A4 B8 big    with hydro ";
    $str = preg_replace('| +|', ' ', trim($str));
    var_dump($str); //result is "Audi A4 B8 big with hydro"

    /* Replace all spaces and space symbols to one space */
    $str = "Audi A4 B8 \t\t big  \t\n  with hydro ";
    $str = preg_replace('|\s+|', ' ', trim($str));
    var_dump($str); //result is "Audi A4 B8 big with hydro"
