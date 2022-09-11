<?php

require "src/classes/converters/distance/DistanceConverter.php";
require "src/classes/converters/temperature/FahrenheitConverter.php";
require "src/classes/converters/temperature/RankineConverter.php";
require "src/classes/converters/temperature/CelciusConverter.php";
require "src/classes/converters/temperature/KelvinConverter.php";
require "src/classes/Unit.php";
require "src/constants.php";

function unitFactory(String $unit) {
    $units = array("meter"=>new Unit(new DistanceConverter(DISTANCES_RATIO_TO_METER["meter"])), 
                    "centimeter"=>new Unit(new DistanceConverter(DISTANCES_RATIO_TO_METER["centimeter"])), 
                    "inch"=>new Unit(new DistanceConverter(DISTANCES_RATIO_TO_METER["inch"])),
                    "yard"=>new Unit(new DistanceConverter(DISTANCES_RATIO_TO_METER["yard"])),
                    "celcius"=>new Unit(new CelciusConverter()),
                    "kelvin"=>new Unit(new KelvinConverter()),
                    "fahrenheit"=>new Unit(new FahrenheitConverter()),
                    "rankine"=>new Unit(new RankineConverter())
                );
    return $units[$unit];
}

?>