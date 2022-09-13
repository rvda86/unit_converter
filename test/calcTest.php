<?php

require_once "src/calc.php";
require_once "src/exceptions.php";

class calcTest extends PHPUnit\Framework\TestCase {

    public function testInvalidFloat() {
        $result = calc("meter", "meter", "ewqr");
        $this->assertEquals($result, "invalid input value");

        $result = calc("meter", "meter", "+");
        $this->assertEquals($result, "invalid input value");

        $result = calc("meter", "meter", "100!");
        $this->assertEquals($result, "invalid input value");

        $result = calc("meter", "meter", ".2");
        $this->assertNotEquals($result, "invalid input value");

        $result = calc("meter", "meter", "-");
        $this->assertNotEquals($result, "invalid input value");

        $result = calc("meter", "meter", "-.");
        $this->assertNotEquals($result, "invalid input value");
    }

    public function testIncompatibleUnits() {
        $result = calc("meter", "celcius", "100");
        $this->assertEquals($result, "incompatible units");

        $result = calc("celcius", "meter", "100");
        $this->assertEquals($result, "incompatible units");

        $result = calc("fahrenheit", "inch", "100");
        $this->assertEquals($result, "incompatible units");

        $result = calc("fahrenheit", "square inch", "100");
        $this->assertEquals($result, "incompatible units");

        $result = calc("meter", "square inch", "100");
        $this->assertEquals($result, "incompatible units");
    }
    
    public function testMeter() {
        $result = calc("meter", "meter", "100");
        $this->assertEquals($result, "100"); 

        $result = calc("meter", "meter", "-100");
        $this->assertEquals($result, "-100"); 

        $result = calc("meter", "millimeter", "100");
        $this->assertEquals($result, "100000"); 

        $result = calc("meter", "centimeter", "100");
        $this->assertEquals($result, "10000"); 

        $result = calc("meter", "kilometer", "100");
        $this->assertEquals($result, "0.1"); 

        $result = calc("meter", "inch", "100");
        $this->assertEquals($result, "3937.0078740157483"); 

        $result = calc("meter", "foot", "100");
        $this->assertEquals($result, "328.0839895013123"); 

        $result = calc("meter", "yard", "100");
        $this->assertEquals($result, "109.36132983377078"); 

        $result = calc("meter", "mile", "100");
        $this->assertEquals($result, "0.0621371192237334"); 
    }

    public function testMillimeter() {
        $result = calc("millimeter", "millimeter", "100");
        $this->assertEquals($result, "100"); 

        $result = calc("millimeter", "millimeter", "-100");
        $this->assertEquals($result, "-100"); 

        $result = calc("millimeter", "meter", "100");
        $this->assertEquals($result, "0.1"); 
    }

    public function testCentimeter() {
        $result = calc("centimeter", "centimeter", "100");
        $this->assertEquals($result, "100"); 

        $result = calc("centimeter", "centimeter", "-100");
        $this->assertEquals($result, "-100"); 

        $result = calc("centimeter", "meter", "100");
        $this->assertEquals($result, "1"); 
    }

    public function testKilometer() {
        $result = calc("kilometer", "kilometer", "100");
        $this->assertEquals($result, "100"); 

        $result = calc("kilometer", "kilometer", "-100");
        $this->assertEquals($result, "-100"); 

        $result = calc("kilometer", "meter", "100");
        $this->assertEquals($result, "100000"); 
    }

    public function testInch() {
        $result = calc("inch", "inch", "100");
        $this->assertEquals($result, "100"); 

        $result = calc("inch", "inch", "-100");
        $this->assertEquals($result, "-100"); 

        $result = calc("inch", "meter", "100");
        $this->assertEquals($result, "2.54"); 
    }

    public function testYard() {
        $result = calc("yard", "yard", "100");
        $this->assertEquals($result, "100"); 

        $result = calc("yard", "yard", "-100");
        $this->assertEquals($result, "-100"); 

        $result = calc("yard", "meter", "100");
        $this->assertEquals($result, "91.44"); 
    }

    public function testFoot() {
        $result = calc("foot", "foot", "100");
        $this->assertEquals($result, "100"); 

        $result = calc("foot", "foot", "-100");
        $this->assertEquals($result, "-100"); 

        $result = calc("foot", "meter", "100");
        $this->assertEquals($result, "30.48"); 
    }

    public function testMile() {
        $result = calc("mile", "mile", "100");
        $this->assertEquals($result, "100"); 

        $result = calc("mile", "mile", "-100");
        $this->assertEquals($result, "-100"); 

        $result = calc("mile", "meter", "100");
        $this->assertEquals($result, "160934.4"); 
    }
    
    public function testSquareMeter() {
        $result = calc("square meter", "square meter", "100");
        $this->assertEquals($result, "100"); 

        $result = calc("square meter", "square meter", "-100");
        $this->assertEquals($result, "-100"); 

        $result = calc("square meter", "square millimeter", "100");
        $this->assertEquals($result, "100000000"); 

        $result = calc("square meter", "square centimeter", "100");
        $this->assertEquals($result, "1000000"); 

        $result = calc("square meter", "square kilometer", "100");
        $this->assertEquals($result, "0.0001"); 

        $result = calc("square meter", "square inch", "100");
        $this->assertEquals($result, "155000.31000062"); 

        $result = calc("square meter", "square foot", "100");
        $this->assertEquals($result, "1076.3910416709723"); 

        $result = calc("square meter", "square yard", "100");
        $this->assertEquals($result, "119.59900463010803"); 

        $result = calc("square meter", "square mile", "100");
        $this->assertEquals($result, "0.0000386102"); 
    }

    public function testSquareMillimeter() {
        $result = calc("square millimeter", "square millimeter", "100");
        $this->assertEquals($result, "100"); 

        $result = calc("square millimeter", "square millimeter", "-100");
        $this->assertEquals($result, "-100"); 

        $result = calc("square millimeter", "square meter", "100");
        $this->assertEquals($result, "0.0001"); 
    }

    public function testSquareCentimeter() {
        $result = calc("square centimeter", "square centimeter", "100");
        $this->assertEquals($result, "100"); 

        $result = calc("square centimeter", "square centimeter", "-100");
        $this->assertEquals($result, "-100"); 

        $result = calc("square centimeter", "square meter", "100");
        $this->assertEquals($result, "0.01"); 
    }

    public function testSquareKilometer() {
        $result = calc("square kilometer", "square kilometer", "100");
        $this->assertEquals($result, "100"); 

        $result = calc("square kilometer", "square kilometer", "-100");
        $this->assertEquals($result, "-100"); 

        $result = calc("square kilometer", "square meter", "100");
        $this->assertEquals($result, "100000000"); 
    }

    public function testSquareInch() {
        $result = calc("square inch", "square inch", "100");
        $this->assertEquals($result, "100"); 

        $result = calc("square inch", "square inch", "-100");
        $this->assertEquals($result, "-100"); 

        $result = calc("square inch", "square meter", "100");
        $this->assertEquals($result, "0.064516"); 
    }

    public function testSquareYard() {
        $result = calc("square yard", "square yard", "100");
        $this->assertEquals($result, "100"); 

        $result = calc("square yard", "square yard", "-100");
        $this->assertEquals($result, "-100"); 

        $result = calc("square yard", "square meter", "100");
        $this->assertEquals($result, "83.612736"); 
    }

    public function testSquareFoot() {
        $result = calc("square foot", "square foot", "100");
        $this->assertEquals($result, "100"); 

        $result = calc("square foot", "square foot", "-100");
        $this->assertEquals($result, "-100"); 

        $result = calc("square foot", "square meter", "100");
        $this->assertEquals($result, "9.290304"); 
    }

    public function testSquareMile() {
        $result = calc("square mile", "square mile", "100");
        $this->assertEquals($result, "100"); 

        $result = calc("square mile", "square mile", "-100");
        $this->assertEquals($result, "-100"); 

        $result = calc("square mile", "square meter", "100");
        $this->assertEquals($result, "258998811.0336"); 
    }

    public function testSquareHectare() {
        $result = calc("hectare", "hectare", "100");
        $this->assertEquals($result, "100"); 

        $result = calc("hectare", "hectare", "-100");
        $this->assertEquals($result, "-100"); 

        $result = calc("hectare", "square meter", "100");
        $this->assertEquals($result, "1000000"); 
    }

    public function testSquareAcre() {
        $result = calc("acre", "acre", "100");
        $this->assertEquals($result, "100"); 

        $result = calc("acre", "acre", "-100");
        $this->assertEquals($result, "-100"); 

        $result = calc("acre", "square meter", "100");
        $this->assertEquals($result, "404685.64224"); 
    }


    public function testCelcius() {

        $result = calc("celcius", "celcius", "100");
        $this->assertEquals($result, "100"); 

        $result = calc("celcius", "celcius", "-100");
        $this->assertEquals($result, "-100"); 

        $result = calc("celcius", "fahrenheit", "100");
        $this->assertEquals($result, "212"); 

        $result = calc("celcius", "rankine", "100");
        $this->assertEquals($result, "671.67"); 

        $result = calc("celcius", "kelvin", "100");
        $this->assertEquals($result, "373.15"); 

        $result = calc("celcius", "celcius", "-274");
        $this->assertEquals($result, "input value too low"); 

    }

    public function testKelvin() {  
        $result = calc("kelvin", "kelvin", "100");
        $this->assertEquals($result, "100"); 

        $result = calc("kelvin", "kelvin", "-100");
        $this->assertEquals($result, "input value too low"); 

        $result = calc("kelvin", "celcius", "-100");
        $this->assertEquals($result, "input value too low"); 

        $result = calc("kelvin", "celcius", "100");
        $this->assertEquals($result, "-173.15"); 

        $result = calc("kelvin", "fahrenheit", "100");
        $this->assertEquals($result, "-279.67"); 

        $result = calc("kelvin", "rankine", "100");
        $this->assertEquals($result, "180");  

    }

    public function testFahrenheit() {  
        $result = calc("fahrenheit", "fahrenheit", "100");
        $this->assertEquals($result, "100"); 

        $result = calc("fahrenheit", "fahrenheit", "-100");
        $this->assertEquals($result, "-100"); 

        $result = calc("fahrenheit", "fahrenheit", "-460");
        $this->assertEquals($result, "input value too low"); 

        $result = calc("fahrenheit", "celcius", "100");
        $this->assertEquals($result, "37.77777777777778"); 

        $result = calc("fahrenheit", "kelvin", "100");
        $this->assertEquals($result, "310.9277777777778"); 

        $result = calc("fahrenheit", "rankine", "100");
        $this->assertEquals($result, "559.67"); 
    }

    public function testRankine() {  
        $result = calc("rankine", "rankine", "100");
        $this->assertEquals($result, "100"); 

        $result = calc("rankine", "rankine", "-100");
        $this->assertEquals($result, "input value too low"); 

        $result = calc("rankine", "fahrenheit", "100");
        $this->assertEquals($result, "-359.67"); 

        $result = calc("rankine", "celcius", "100");
        $this->assertEquals($result, "-217.59444444444443"); 

        $result = calc("rankine", "kelvin", "100");
        $this->assertEquals($result, "55.55555555555556"); 

    }
}

?>