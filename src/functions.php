<?php

if (!function_exists('bus')) {
    function bus(): \Phico\Bus\Bus
    {
        static $bus;

        $bus = $bus ? $bus : new \Phico\Bus\Bus;

        return $bus;
    }
}
