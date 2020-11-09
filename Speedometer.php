<?php

class Speedometer
{

    const milesToKm = 1.60934;
    const kmToMiles = 0.621371;

    public static function convertMilesToKm(float $mile): float
    {
        return $mile * self::milesToKm;
    }

    public static function convertKmToMiles(float $kilometer): float
    {
        return $kilometer * self::kmToMiles;
    }
}
