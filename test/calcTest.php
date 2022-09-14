<?php

require_once "src/calc.php";
require_once "src/exceptions.php";

class calcTest extends PHPUnit\Framework\TestCase {

    private $invalidValueMsg = "invalid input value";
    private $incompatibleUnitsMsg = "incompatible units";
    private $inputValueTooLowMsg = "input value too low";

    public function testInvalidFloat() {
        $this->assertEquals(calc("meter", "meter", "ewqr"), $this->invalidValueMsg);
        $this->assertEquals(calc("meter", "meter", "+"), $this->invalidValueMsg);
        $this->assertEquals(calc("meter", "meter", "100!"), $this->invalidValueMsg);
        $this->assertNotEquals(calc("meter", "meter", ".2"), $this->invalidValueMsg);
        $this->assertNotEquals(calc("meter", "meter", "-"), $this->invalidValueMsg);
        $this->assertNotEquals(calc("meter", "meter", "-."), $this->invalidValueMsg);
    }

    public function testIncompatibleUnits() {
        $this->assertEquals(calc("meter", "celcius", "100"), $this->incompatibleUnitsMsg);
        $this->assertEquals(calc("celcius", "meter", "100"), $this->incompatibleUnitsMsg);
        $this->assertEquals(calc("fahrenheit", "inch", "100"), $this->incompatibleUnitsMsg);
        $this->assertEquals(calc("fahrenheit", "square inch", "100"), $this->incompatibleUnitsMsg);
        $this->assertEquals(calc("meter", "ounce", "100"), $this->incompatibleUnitsMsg);
        $this->assertEquals(calc("cubic meter", "square inch", "100"), $this->incompatibleUnitsMsg);
        $this->assertEquals(calc("kelvin", "liter", "100"), $this->incompatibleUnitsMsg);
        $this->assertEquals(calc("pound", "cubic kilometer", "100"), $this->incompatibleUnitsMsg);
        $this->assertEquals(calc("ounce", "inch", "100"), $this->incompatibleUnitsMsg);
    }
    
    public function testMeter() {
        $this->assertEquals(calc("meter", "meter", "100"), "100"); 
        $this->assertEquals(calc("meter", "meter", "-100"), "-100"); 
        $this->assertEquals(calc("meter", "millimeter", "100"), "100000"); 
        $this->assertEquals(calc("meter", "centimeter", "100"), "10000"); 
        $this->assertEquals(calc("meter", "kilometer", "100"), "0.1"); 
        $this->assertEquals(calc("meter", "inch", "100"), "3937.0078740157483"); 
        $this->assertEquals(calc("meter", "foot", "100"), "328.0839895013123"); 
        $this->assertEquals(calc("meter", "yard", "100"), "109.36132983377078"); 
        $this->assertEquals(calc("meter", "mile", "100"), "0.0621371192237334"); 
    }

    public function testMillimeter() {
        $this->assertEquals(calc("millimeter", "millimeter", "100"), "100"); 
        $this->assertEquals(calc("millimeter", "millimeter", "-100"), "-100"); 
        $this->assertEquals(calc("millimeter", "meter", "100"), "0.1"); 
    }

    public function testCentimeter() {
        $this->assertEquals(calc("centimeter", "centimeter", "100"), "100"); 
        $this->assertEquals(calc("centimeter", "centimeter", "-100"), "-100"); 
        $this->assertEquals(calc("centimeter", "meter", "100"), "1"); 
    }

    public function testKilometer() {
        $this->assertEquals(calc("kilometer", "kilometer", "100"), "100");
        $this->assertEquals(calc("kilometer", "kilometer", "-100"), "-100"); 
        $this->assertEquals(calc("kilometer", "meter", "100"), "100000"); 
    }

    public function testInch() {
        $this->assertEquals(calc("inch", "inch", "100"), "100"); 
        $this->assertEquals(calc("inch", "inch", "-100"), "-100"); 
        $this->assertEquals(calc("inch", "meter", "100"), "2.54"); 
    }

    public function testYard() {
        $this->assertEquals(calc("yard", "yard", "100"), "100"); 
        $this->assertEquals(calc("yard", "yard", "-100"), "-100"); 
        $this->assertEquals(calc("yard", "meter", "100"), "91.44"); 
    }

    public function testFoot() {
        $this->assertEquals(calc("foot", "foot", "100"), "100"); 
        $this->assertEquals(calc("foot", "foot", "-100"), "-100"); 
        $this->assertEquals(calc("foot", "meter", "100"), "30.48"); 
    }

    public function testMile() {
        $this->assertEquals(calc("mile", "mile", "100"), "100"); 
        $this->assertEquals(calc("mile", "mile", "-100"), "-100"); 
        $this->assertEquals(calc("mile", "meter", "100"), "160934.4"); 
    }
    
    public function testSquareMeter() {
        $this->assertEquals(calc("square meter", "square meter", "100"), "100"); 
        $this->assertEquals(calc("square meter", "square meter", "-100"), "-100"); 
        $this->assertEquals(calc("square meter", "square millimeter", "100"), "100000000"); 
        $this->assertEquals(calc("square meter", "square centimeter", "100"), "1000000"); 
        $this->assertEquals(calc("square meter", "square kilometer", "100"), "0.0001"); 
        $this->assertEquals(calc("square meter", "square inch", "100"), "155000.31000062"); 
        $this->assertEquals(calc("square meter", "square foot", "100"), "1076.3910416709723"); 
        $this->assertEquals(calc("square meter", "square yard", "100"), "119.59900463010803"); 
        $this->assertEquals(calc("square meter", "square mile", "100"), "0.0000386102"); 
    }

    public function testSquareMillimeter() {
        $this->assertEquals(calc("square millimeter", "square millimeter", "100"), "100"); 
        $this->assertEquals(calc("square millimeter", "square millimeter", "-100"), "-100"); 
        $this->assertEquals(calc("square millimeter", "square meter", "100"), "0.0001"); 
    }

    public function testSquareCentimeter() {
        $this->assertEquals(calc("square centimeter", "square centimeter", "100"), "100"); 
        $this->assertEquals(calc("square centimeter", "square centimeter", "-100"), "-100"); 
        $this->assertEquals(calc("square centimeter", "square meter", "100"), "0.01"); 
    }

    public function testSquareKilometer() {
        $this->assertEquals(calc("square kilometer", "square kilometer", "100"), "100"); 
        $this->assertEquals(calc("square kilometer", "square kilometer", "-100"), "-100"); 
        $this->assertEquals(calc("square kilometer", "square meter", "100"), "100000000"); 
    }

    public function testSquareInch() {
        $this->assertEquals(calc("square inch", "square inch", "100"), "100"); 
        $this->assertEquals(calc("square inch", "square inch", "-100"), "-100"); 
        $this->assertEquals(calc("square inch", "square meter", "100"), "0.064516"); 
    }

    public function testSquareYard() {
        $this->assertEquals(calc("square yard", "square yard", "100"), "100"); 
        $this->assertEquals(calc("square yard", "square yard", "-100"), "-100"); 
        $this->assertEquals(calc("square yard", "square meter", "100"), "83.612736"); 
    }

    public function testSquareFoot() {
        $this->assertEquals(calc("square foot", "square foot", "100"), "100"); 
        $this->assertEquals(calc("square foot", "square foot", "-100"), "-100"); 
        $this->assertEquals(calc("square foot", "square meter", "100"), "9.290304"); 
    }

    public function testSquareMile() {
        $this->assertEquals(calc("square mile", "square mile", "100"), "100"); 
        $this->assertEquals(calc("square mile", "square mile", "-100"), "-100"); 
        $this->assertEquals(calc("square mile", "square meter", "100"), "258998811.0336"); 
    }

    public function testSquareHectare() {
        $this->assertEquals(calc("hectare", "hectare", "100"), "100"); 
        $this->assertEquals(calc("hectare", "hectare", "-100"), "-100"); 
        $this->assertEquals(calc("hectare", "square meter", "100"), "1000000"); 
    }

    public function testSquareAcre() {
        $this->assertEquals(calc("acre", "acre", "100"), "100"); 
        $this->assertEquals(calc("acre", "acre", "-100"), "-100"); 
        $this->assertEquals(calc("acre", "square meter", "100"), "404685.64224"); 
    }

    public function testCubicMeter() {
        $this->assertEquals(calc("cubic meter", "cubic meter", "100"), "100"); 
        $this->assertEquals(calc("cubic meter", "cubic meter", "-100"), "-100"); 
        $this->assertEquals(calc("cubic meter", "cubic millimeter", "100"), "100000000000"); 
        $this->assertEquals(calc("cubic meter", "cubic centimeter", "100"), "100000000"); 
        $this->assertEquals(calc("cubic meter", "cubic kilometer", "100"), "0.0000001"); 
        $this->assertEquals(calc("cubic meter", "cubic inch", "100"), "6102374.409473228"); 
        $this->assertEquals(calc("cubic meter", "cubic foot", "100"), "3531.466672148859"); 
        $this->assertEquals(calc("cubic meter", "cubic yard", "100"), "130.79506193143922"); 
        $this->assertEquals(calc("cubic meter", "cubic mile", "1000000"), "0.000239912759"); 
        $this->assertEquals(calc("cubic meter", "liter", "100"), "100000"); 
        $this->assertEquals(calc("cubic meter", "gallon", "100"), "26417.20526372959"); 
    }

    public function testCubicMillimeter() {
        $this->assertEquals(calc("cubic millimeter", "cubic millimeter", "100"), "100"); 
        $this->assertEquals(calc("cubic millimeter", "cubic millimeter", "-100"), "-100"); 
        $this->assertEquals(calc("cubic millimeter", "cubic meter", "100"), "0.0000001"); 
    }

    public function testCubicCentimeter() {
        $this->assertEquals(calc("cubic centimeter", "cubic centimeter", "100"), "100"); 
        $this->assertEquals(calc("cubic centimeter", "cubic centimeter", "-100"), "-100"); 
        $this->assertEquals(calc("cubic centimeter", "cubic meter", "1000"), "0.001"); 
    }

    public function testCubicKilometer() {
        $this->assertEquals(calc("cubic kilometer", "cubic kilometer", "100"), "100"); 
        $this->assertEquals(calc("cubic kilometer", "cubic kilometer", "-100"), "-100"); 
        $this->assertEquals(calc("cubic kilometer", "cubic meter", "1"), "1000000000"); 
    }

    public function testCubicInch() {
        $this->assertEquals(calc("cubic inch", "cubic inch", "100"), "100"); 
        $this->assertEquals(calc("cubic inch", "cubic inch", "-100"), "-100"); 
        $this->assertEquals(calc("cubic inch", "cubic meter", "100"), "0.0016387064"); 
    }

    public function testCubicYard() {
        $this->assertEquals(calc("cubic yard", "cubic yard", "100"), "100"); 
        $this->assertEquals(calc("cubic yard", "cubic yard", "-100"), "-100"); 
        $this->assertEquals(calc("cubic yard", "cubic meter", "100"), "76.4554857984"); 
    }

    public function testCubicFoot() {
        $this->assertEquals(calc("cubic foot", "cubic foot", "100"), "100"); 
        $this->assertEquals(calc("cubic foot", "cubic foot", "-100"), "-100"); 
        $this->assertEquals(calc("cubic foot", "cubic meter", "100"), "2.8316846592"); 
    }

    public function testCubicMile() {
        $this->assertEquals(calc("cubic mile", "cubic mile", "100"), "100"); 
        $this->assertEquals(calc("cubic mile", "cubic mile", "-100"), "-100"); 
        $this->assertEquals(calc("cubic mile", "cubic meter", "1"), "4168181825.4405794"); 
    }

    public function testLiter() {
        $this->assertEquals(calc("liter", "liter", "100"), "100"); 
        $this->assertEquals(calc("liter", "liter", "-100"), "-100"); 
        $this->assertEquals(calc("liter", "cubic meter", "100"), "0.1"); 
    }

    public function testGallon() {
        $this->assertEquals(calc("gallon", "gallon", "100"), "100"); 
        $this->assertEquals(calc("gallon", "gallon", "-100"), "-100"); 
        $this->assertEquals(calc("gallon", "cubic meter", "100"), "0.378541178"); 
    }

    public function testGram() {
        $this->assertEquals(calc("gram", "gram", "100"), "100"); 
        $this->assertEquals(calc("gram", "gram", "-100"), "-100"); 
        $this->assertEquals(calc("gram", "milligram", "100"), "100000"); 
        $this->assertEquals(calc("gram", "kilogram", "100"), "0.1"); 
        $this->assertEquals(calc("gram", "metric ton", "100"), "0.0001"); 
        $this->assertEquals(calc("gram", "ounce", "100"), "3.527396198068672"); 
        $this->assertEquals(calc("gram", "pound", "100"), "0.22046226218487758"); 
    }

    public function testMilligram() {
        $this->assertEquals(calc("milligram", "milligram", "100"), "100"); 
        $this->assertEquals(calc("milligram", "milligram", "-100"), "-100"); 
        $this->assertEquals(calc("milligram", "gram", "100"), "0.1"); 
    }

    public function testKilogram() {
        $this->assertEquals(calc("kilogram", "kilogram", "100"), "100");
        $this->assertEquals(calc("kilogram", "kilogram", "-100"), "-100"); 
        $this->assertEquals(calc("kilogram", "gram", "100"), "100000"); 
    }

    public function testMetricTon() {
        $this->assertEquals(calc("metric ton", "metric ton", "100"), "100"); 
        $this->assertEquals(calc("metric ton", "metric ton", "-100"), "-100"); 
        $this->assertEquals(calc("metric ton", "gram", "100"), "100000000"); 
    }

    public function testOunce() {
        $this->assertEquals(calc("ounce", "ounce", "100"), "100"); 
        $this->assertEquals(calc("ounce", "ounce", "-100"), "-100"); 
        $this->assertEquals(calc("ounce", "gram", "100"), "2834.95231"); 
    }

    public function testPound() {
        $this->assertEquals(calc("pound", "pound", "100"), "100"); 
        $this->assertEquals(calc("pound", "pound", "-100"), "-100"); 
        $this->assertEquals(calc("pound", "gram", "100"), "45359.237"); 
    }

    public function testCelcius() {
        $this->assertEquals(calc("celcius", "celcius", "100"), "100"); 
        $this->assertEquals(calc("celcius", "celcius", "-100"), "-100"); 
        $this->assertEquals(calc("celcius", "fahrenheit", "100"), "212"); 
        $this->assertEquals(calc("celcius", "rankine", "100"), "671.67"); 
        $this->assertEquals(calc("celcius", "kelvin", "100"), "373.15"); 
        $this->assertEquals(calc("celcius", "celcius", "-274"), $this->inputValueTooLowMsg); 
    }

    public function testKelvin() {  
        $this->assertEquals(calc("kelvin", "kelvin", "100"), "100"); 
        $this->assertEquals(calc("kelvin", "kelvin", "-100"), $this->inputValueTooLowMsg); 
        $this->assertEquals(calc("kelvin", "celcius", "-100"), $this->inputValueTooLowMsg); 
        $this->assertEquals(calc("kelvin", "celcius", "100"), "-173.15"); 
        $this->assertEquals(calc("kelvin", "fahrenheit", "100"), "-279.67"); 
        $this->assertEquals(calc("kelvin", "rankine", "100"), "180");  
    }

    public function testFahrenheit() {  
        $this->assertEquals(calc("fahrenheit", "fahrenheit", "100"), "100"); 
        $this->assertEquals(calc("fahrenheit", "fahrenheit", "-100"), "-100"); 
        $this->assertEquals(calc("fahrenheit", "fahrenheit", "-460"), $this->inputValueTooLowMsg); 
        $this->assertEquals(calc("fahrenheit", "celcius", "100"), "37.77777777777778"); 
        $this->assertEquals(calc("fahrenheit", "kelvin", "100"), "310.9277777777778"); 
        $this->assertEquals(calc("fahrenheit", "rankine", "100"), "559.67"); 
    }

    public function testRankine() {  
        $this->assertEquals(calc("rankine", "rankine", "100"), "100"); 
        $this->assertEquals(calc("rankine", "rankine", "-100"), $this->inputValueTooLowMsg); 
        $this->assertEquals(calc("rankine", "fahrenheit", "100"), "-359.67"); 
        $this->assertEquals(calc("rankine", "celcius", "100"), "-217.59444444444443"); 
        $this->assertEquals(calc("rankine", "kelvin", "100"), "55.55555555555556"); 
    }
}

?>