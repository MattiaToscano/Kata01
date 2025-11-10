<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../../kata.php';

class StringToNumberTest extends TestCase
{
    private function doTest(string $input, int $expected){
        $this->assertSame($expected, stringToNumber($input), "stringToNumber('$input') should return $expected");
    }

    public function testSampleTests(){
        $this->doTest("1234", 1234);
        $this->doTest("605", 605);
        $this->doTest("1405", 1405);
        $this->doTest("-7", -7);
    }
}