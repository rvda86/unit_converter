<?php

require_once "src/calc.php";

class calcTest extends PHPUnit\Framework\TestCase {

    public function testIncompatibleUnits() {
        $result = calc("meter", "celcius", "100");
        $this->assertEquals($result, 'incompatible units');

        $result = calc("celcius", "meter", "100");
        $this->assertEquals($result, 'incompatible units');

        $result = calc("fahrenheit", "inch", "100");
        $this->assertEquals($result, 'incompatible units');
    }
    
    public function testDistance() {
        $result = calc("meter", "meter", "1");
        $this->assertEquals($result, '1'); 

        $result = calc("meter", "meter", "2");
        $this->assertEquals($result, '2'); 
    }

    public function testTemperature() {

        $result = calc("celcius", "celcius", "100");
        $this->assertEquals($result, '100'); 

        $result = calc("celcius", "celcius", "-100");
        $this->assertEquals($result, '-100'); 

        $result = calc("kelvin", "kelvin", "100");
        $this->assertEquals($result, '100'); 

        $result = calc("rankine", "rankine", "100");
        $this->assertEquals($result, '100'); 

        $result = calc("fahrenheit", "fahrenheit", "100");
        $this->assertEquals($result, '100'); 

        $result = calc("celcius", "fahrenheit", "100");
        $this->assertEquals($result, '212'); 

        $result = calc("fahrenheit", "celcius", "100");
        $this->assertEquals($result, '37.77777777777778'); 
    }
}

?>