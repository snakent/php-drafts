<?php

    /* Find date in array */
    $dates = [
        '01.01.2021',
        '02.01.2021',
        '03.01.2021',
        '04.01.2021',
    ];

    $d = date('d.m.Y');
    
    if (in_array($d, $dates)) {
       echo "Date in array";
    }
