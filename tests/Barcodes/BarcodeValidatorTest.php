<?php

namespace HasselIT\Barcodes\Test;

use HasselIT\Barcodes\BarcodeValidator;

class BarcodeValidatorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test Init
     */
    public function testInit()
    {
        $client = new BarcodeValidator('12345123');
//        $this->assertInstanceOf('\HasselIT\Barcodes\BarcodeValidator', $client);
    }

    public function testCurlWrapper()
    {
    }
}
