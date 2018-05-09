<?php

function randomColor()
{
    $background_colors = array('#009688', '#05354D', '#E6E7E8', '#F2C573', '#8EC3A7');
    shuffle($background_colors);
    return $background_colors;
}

function standardColor()
{
    $colors = array('#OD2633', '#05354D', '#E6E7E8', '#F2C573', '#8EC3A7', '#F24738');

    return $colors;
}
