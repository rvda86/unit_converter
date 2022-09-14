<?php

require_once "src/classes/converters/linear/LinearConverter.php";
require_once "src/classes/converters/temperature/FahrenheitConverter.php";
require_once "src/classes/converters/temperature/RankineConverter.php";
require_once "src/classes/converters/temperature/CelciusConverter.php";
require_once "src/classes/converters/temperature/KelvinConverter.php";
require_once "src/classes/Unit.php";
require_once "src/constants.php";

function unitFactory(String $unit) {
    $units = array(
                    "millimeter"=>new Unit(new LinearConverter(DISTANCE_RATIO_TO_METER["millimeter"]), "distance"), 
                    "centimeter"=>new Unit(new LinearConverter(DISTANCE_RATIO_TO_METER["centimeter"]), "distance"), 
                    "meter"=>new Unit(new LinearConverter(DISTANCE_RATIO_TO_METER["meter"]), "distance"), 
                    "kilometer"=>new Unit(new LinearConverter(DISTANCE_RATIO_TO_METER["kilometer"]), "distance"), 
                    "inch"=>new Unit(new LinearConverter(DISTANCE_RATIO_TO_METER["inch"]), "distance"),
                    "foot"=>new Unit(new LinearConverter(DISTANCE_RATIO_TO_METER["foot"]), "distance"), 
                    "yard"=>new Unit(new LinearConverter(DISTANCE_RATIO_TO_METER["yard"]), "distance"),
                    "mile"=>new Unit(new LinearConverter(DISTANCE_RATIO_TO_METER["mile"]), "distance"), 

                    "square millimeter"=>new Unit(new LinearConverter(AREA_RATIO_TO_SQUARE_METER["square millimeter"]), "area"),
                    "square centimeter"=>new Unit(new LinearConverter(AREA_RATIO_TO_SQUARE_METER["square centimeter"]), "area"),
                    "square meter"=>new Unit(new LinearConverter(AREA_RATIO_TO_SQUARE_METER["square meter"]), "area"),
                    "square kilometer"=>new Unit(new LinearConverter(AREA_RATIO_TO_SQUARE_METER["square kilometer"]), "area"),
                    "square inch"=>new Unit(new LinearConverter(AREA_RATIO_TO_SQUARE_METER["square inch"]), "area"),
                    "square foot"=>new Unit(new LinearConverter(AREA_RATIO_TO_SQUARE_METER["square foot"]), "area"),
                    "square yard"=>new Unit(new LinearConverter(AREA_RATIO_TO_SQUARE_METER["square yard"]), "area"),
                    "square mile"=>new Unit(new LinearConverter(AREA_RATIO_TO_SQUARE_METER["square mile"]), "area"),
                    "acre"=>new Unit(new LinearConverter(AREA_RATIO_TO_SQUARE_METER["acre"]), "area"),
                    "hectare"=>new Unit(new LinearConverter(AREA_RATIO_TO_SQUARE_METER["hectare"]), "area"),

                    "cubic millimeter"=>new Unit(new LinearConverter(CUBIC_RATIO_TO_CUBIC_METER["cubic millimeter"]), "volume"),
                    "cubic centimeter"=>new Unit(new LinearConverter(CUBIC_RATIO_TO_CUBIC_METER["cubic centimeter"]), "volume"),
                    "cubic meter"=>new Unit(new LinearConverter(CUBIC_RATIO_TO_CUBIC_METER["cubic meter"]), "volume"),
                    "cubic kilometer"=>new Unit(new LinearConverter(CUBIC_RATIO_TO_CUBIC_METER["cubic kilometer"]), "volume"),
                    "cubic inch"=>new Unit(new LinearConverter(CUBIC_RATIO_TO_CUBIC_METER["cubic inch"]), "volume"),
                    "cubic foot"=>new Unit(new LinearConverter(CUBIC_RATIO_TO_CUBIC_METER["cubic foot"]), "volume"),
                    "cubic yard"=>new Unit(new LinearConverter(CUBIC_RATIO_TO_CUBIC_METER["cubic yard"]), "volume"),
                    "cubic mile"=>new Unit(new LinearConverter(CUBIC_RATIO_TO_CUBIC_METER["cubic mile"]), "volume"),
                    "liter"=>new Unit(new LinearConverter(CUBIC_RATIO_TO_CUBIC_METER["liter"]), "volume"),
                    "gallon"=>new Unit(new LinearConverter(CUBIC_RATIO_TO_CUBIC_METER["gallon"]), "volume"),

                    "gram"=>new Unit(new LinearConverter(WEIGHT_RATIO_TO_GRAM["gram"]), "weight"),
                    "milligram"=>new Unit(new LinearConverter(WEIGHT_RATIO_TO_GRAM["milligram"]), "weight"),
                    "kilogram"=>new Unit(new LinearConverter(WEIGHT_RATIO_TO_GRAM["kilogram"]), "weight"),
                    "metric ton"=>new Unit(new LinearConverter(WEIGHT_RATIO_TO_GRAM["metric ton"]), "weight"),
                    "ounce"=>new Unit(new LinearConverter(WEIGHT_RATIO_TO_GRAM["ounce"]), "weight"),
                    "pound"=>new Unit(new LinearConverter(WEIGHT_RATIO_TO_GRAM["pound"]), "weight"),
                    
                    "celcius"=>new Unit(new CelciusConverter(), "temperature"),
                    "kelvin"=>new Unit(new KelvinConverter(), "temperature"),
                    "fahrenheit"=>new Unit(new FahrenheitConverter(), "temperature"),
                    "rankine"=>new Unit(new RankineConverter(), "temperature")
                );
    return $units[$unit];
}

?>