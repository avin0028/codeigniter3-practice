<?php
defined('BASEPATH') or exit('No direct script access allowed');

function normalize_number($n)
{
    $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    $arabic = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];

    $num = range(0, 9);
    $convertedPersianNums = str_replace($persian, $num, $n);
    $englishNumbersOnly = str_replace($arabic, $num, $convertedPersianNums);

    return $englishNumbersOnly;
}
