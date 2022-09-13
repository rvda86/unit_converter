<?php

bcscale(100);

define("DISTANCES", array("millimeter", "centimeter", "meter", "kilometer", "inch", "foot", "yard", "mile"));
define("AREAS", array("square millimeter", "square centimeter", "square meter", "square kilometer", 
                    "square inch", "square foot", "square yard", "square mile", "acre", "hectare"));
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


?>