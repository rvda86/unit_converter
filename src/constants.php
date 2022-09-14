<?php

bcscale(100);

define("DISTANCES", array("millimeter", "centimeter", "meter", "kilometer", "inch", "foot", "yard", "mile"));
define("AREAS", array("square millimeter", "square centimeter", "square meter", "square kilometer", 
                    "square inch", "square foot", "square yard", "square mile", "acre", "hectare"));
define("VOLUMES", array("cubic millimeter", "cubic centimeter", "cubic meter", "cubic kilometer", 
                    "cubic inch", "cubic foot", "cubic yard", "cubic mile", "liter", "gallon")); 
define("WEIGHTS", array("gram", "milligram", "kilogram", "metric ton", "ounce", "pound"));                
define("TEMPERATURES", array("celcius", "kelvin", "fahrenheit", "rankine"));

define("DISTANCE_RATIO_TO_METER", array(
                                        "millimeter"=>"0.001",
                                        "centimeter"=>"0.01", 
                                        "meter"=>"1",
                                        "kilometer"=>"1000",
                                        "inch"=>"0.0254",
                                        "foot"=>"0.3048",
                                        "yard"=>"0.9144",
                                        "mile"=>"1609.344"
                                        ));
define("AREA_RATIO_TO_SQUARE_METER", array(
                                        "square millimeter"=>bcpow(DISTANCE_RATIO_TO_METER["millimeter"], 2),
                                        "square centimeter"=>bcpow(DISTANCE_RATIO_TO_METER["centimeter"], 2), 
                                        "square meter"=>"1",
                                        "square kilometer"=>bcpow(DISTANCE_RATIO_TO_METER["kilometer"], 2),
                                        "square inch"=>bcpow(DISTANCE_RATIO_TO_METER["inch"], 2),
                                        "square foot"=>bcpow(DISTANCE_RATIO_TO_METER["foot"], 2),
                                        "square yard"=>bcpow(DISTANCE_RATIO_TO_METER["yard"], 2),
                                        "square mile"=>bcpow(DISTANCE_RATIO_TO_METER["mile"], 2),
                                        "acre"=>"4046.8564224",
                                        "hectare"=>"10000"
                                        ));          
define("CUBIC_RATIO_TO_CUBIC_METER", array(
                                        "cubic millimeter"=>bcpow(DISTANCE_RATIO_TO_METER["millimeter"], 3),
                                        "cubic centimeter"=>bcpow(DISTANCE_RATIO_TO_METER["centimeter"], 3), 
                                        "cubic meter"=>"1",
                                        "cubic kilometer"=>bcpow(DISTANCE_RATIO_TO_METER["kilometer"], 3),
                                        "cubic inch"=>bcpow(DISTANCE_RATIO_TO_METER["inch"], 3),
                                        "cubic foot"=>bcpow(DISTANCE_RATIO_TO_METER["foot"], 3),
                                        "cubic yard"=>bcpow(DISTANCE_RATIO_TO_METER["yard"], 3),
                                        "cubic mile"=>bcpow(DISTANCE_RATIO_TO_METER["mile"], 3),
                                        "liter"=>"0.001",
                                        "gallon"=>"0.00378541178"
                                        ));                                        
define("WEIGHT_RATIO_TO_GRAM", array(
                                        "gram"=>"1",
                                        "milligram"=>"0.001", 
                                        "kilogram"=>"1000",
                                        "metric ton"=>"1000000",
                                        "ounce"=>"28.3495231",
                                        "pound"=>"453.59237",
                                        ));       


?>