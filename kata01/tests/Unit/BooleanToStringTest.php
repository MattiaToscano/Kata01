<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../../kata.php';

class BooleanToStringTest extends TestCase
{
    private function doTest(bool $b, string $expected) {
        $this->assertSame($expected, booleanToString($b), "booleanToString(" . json_encode($b) . ") returned an incorrect value");
    }

    public function testSampleTests() {
        $this->doTest(true, "true");
        $this->doTest(false, "false");
    }
}