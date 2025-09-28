<?php

function getsquareArea($base, $heighit)
{
    return $base * $heighit;
}
function getTriangleArea($base, $heighit)
{
    return $base * $heighit / 2;
}
function getTrapezoidArea($upperbase, $lowerbase,$height)
{
    return ($upperbase + $lowerbase) * $height / 2;
}

echo getsquareArea(5,5) . "<br />";
echo getTriangleArea(7,8) . "<br />";
echo getTrapezoidArea(4, 5, 4) . "<br />";