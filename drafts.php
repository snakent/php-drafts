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
