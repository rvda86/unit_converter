<?php

require "src/classes/converters/distance/DistanceConverter.php";
require "src/classes/converters/temperature/FahrenheitConverter.php";
require "src/classes/converters/temperature/RankineConverter.php";
require "src/classes/converters/temperature/CelciusConverter.php";
require "src/classes/converters/temperature/KelvinConverter.php";
require "src/classes/Unit.php";
require "src/constants.php";

function unitFactory(String $unit) {
    $units = array("meter"=>new Unit(new DistanceConverter(DISTANCES_RATIO_TO_METER["meter"]), "distance"), 
                    "centimeter"=>new Unit(new DistanceConverter(DISTANCES_RATIO_TO_METER["centimeter"]), "distance"), 
                    "inch"=>new Unit(new DistanceConverter(DISTANCES_RATIO_TO_METER["inch"]), "distance"),
                    "yard"=>new Unit(new DistanceConverter(DISTANCES_RATIO_TO_METER["yard"]), "distance"),
                    "celcius"=>new Unit(new CelciusConverter(), "temperature"),
                    "kelvin"=>new Unit(new KelvinConverter(), "temperature"),
                    "fahrenheit"=>new Unit(new FahrenheitConverter(), "temperature"),
                    "rankine"=>new Unit(new RankineConverter(), "temperature")
                );
    return $units[$unit];
}

?>