<?php


function calculCalorie($weight, $size, $age, $sex, $sportiveActivity)
{
    $resultWeight = $weight * 10;
    $resultSize = $size * 6.25;
    $result = $resultWeight + $resultSize;
    $result = $result - ($age * 5);
    if ($sex == 0) {
        $result -= 161;
    } else {
        $result += 5;
    }

    if ($sportiveActivity == 0) {
        $result *= 1.2;
    } elseif ($sportiveActivity == 1) {
        $result *= 1.55;
    } else {
        $result *= 1.725;
    }
    return $result;
}
